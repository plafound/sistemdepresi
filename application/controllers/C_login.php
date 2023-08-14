<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('m_user');
    }

    public function index()
    {
		if($this->session->userdata('is_login')==TRUE){
			redirect('home');
		} else{
		$data['title'] = 'Login Sistem | Sistem Diagnosa';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
	}
    }

    public function proses(){
        $user = $this->input->post('user', TRUE);
        $pass = $this->input->post('pass', TRUE);

		if($this->m_user->login_user($user,$pass))
		{
			redirect('home');
		}else {
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('welcome'));
    }
}
