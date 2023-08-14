<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model
{
   
    var $_table = 'user';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }
	public function getAdmin()
    {
        return $this->db->get_where($this->_table, ["role" => "A"])->result();
    }
	public function getUser()
    {
        return $this->db->get_where($this->_table, ["role" => "U"])->result();
    }

    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function ubah()
    {
        $post = $this->input->post();
        $this->db->set('nama', $post["nama"]);
        // $this->db->set('user', $post["user"]);
		if($post["pass"]!=''){
			$pass_hash = password_hash($this->input->post('pass'),PASSWORD_DEFAULT);
        	$this->db->set('pass' , $pass_hash);
		}
        $this->db->where('id', $post['id']);
        $this->db->update($this->_table);
    }

    public function hapus($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

	public function get_user_search($search)
	{
		$this->db->select('*');
        $this->db->from('user');
		$this->db->where('role','U');
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
				$this->session->set_userdata('role',$data_user->role);
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
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('user', $user);
        $query = $this->db->get();
        return $query->result();
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
