<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        if($this->session->userdata('role') != 'A'){
            redirect('login');
        }
    }
    public function index()
    {
        $data['admin'] = $this->m_user->getAll();
		$data['content'] = 'admin/v_admin';
		$this->load->view('template',$data);
    }
    public function form_tambah()
	{
		$data['content'] = 'admin/v_tambah';
		$this->load->view('template',$data);
	}

    public function tambah()
    {
        $user = $this->input->post('user');
        $cek_user = count($this->m_user->cek_user($user));
        if ($cek_user <= 0) {
            $data['nama'] = $this->input->post('nama');
            $data['user'] = $this->input->post('user');
            $data['pass'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $pass2 = $this->input->post('password2');
            $data['role'] = $this->input->post('role');
            if ($this->input->post('password') == $this->input->post('password2')) {
                $this->m_user->tambah($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('gagal', 'Password tidak sama!');
                redirect('c_admin/form_tambah');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Username sudah ada!');
            redirect('c_admin/form_tambah');
        }
    }
    public function form_ubah($id)
	{
		$data['admin'] = $this->m_user->getById($id);
		$data['content'] = 'admin/v_ubah';
		$this->load->view('template',$data);
	}
	public function ubah()
	{
        if($this->input->post('pass')==$this->input->post('password2')){
            $this->m_user->ubah();
            $this->session->set_flashdata('sukses','Data berhasil diubah!');
            redirect('c_admin/form_ubah/'. $this->input->post('id'));
        } else {
            $this->session->set_flashdata('gagal','Password tidak sama!');
            redirect('c_admin/form_ubah/'. $this->input->post('id'));
        }
	}
	public function hapus($id)
	{
		$this->m_user->hapus($id);
		redirect('admin');
	}
}
