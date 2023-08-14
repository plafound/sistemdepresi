<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_datatest extends CI_Model
{
   
    var $_table = 'datatest';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

	public function getPredict()
	{
		$this->db->select('hasil');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
	}
	public function getActual()
	{
		$this->db->select('hasil_bobot');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
	}
    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

	public function get_testing_search($search)
	{
		$this->db->select('*');
        $this->db->from('datatest');
		$this->db->where('jabatan','T');
        $this->db->like('nama', $search);
        $this->db->order_by('nama', 'ASC');
		

        return $this->db->get()->result();
	}

	public function login_user($user,$pass)
	{
		$query = $this->db->get_where($this->_table,array('user'=>$user));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($pass, $data_user->pass)) {
				$this->session->set_userdata('id',$data_user->id);
                $this->session->set_userdata('user',$user);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('jabatan',$data_user->jabatan);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}

	public function cek_login()
	{
		if(empty($this->session->userdata('is_login')))
        {
			redirect('c_login');
		}
	}

	public function cek_user($user)
	{
		return $this->db->get_where($this->_table, ["user" => $user]);
	}

    public function rules()
	{
		return [
			[
				'field' => 'nama', 
				'label' => 'Nama', 
				'rules' => 'required'
			],
			[
				'field' => 'user', 
				'label' => 'Username', 
				'rules' => 'required'
			],
			[
				'field' => 'pass', 
				'label' => 'Password', 
				'rules' => 'required'],
		];
	}

}
