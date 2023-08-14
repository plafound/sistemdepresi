<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_datatrain extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_datatrain");
        if($this->session->userdata('role') != 'A'){
            redirect('login');
        }
    }
    public function index()
    {
        $data['datatrain'] = $this->m_datatrain->getAll();
		$data['content'] = 'datatrain/v_datatrain';
		$this->load->view('template',$data);
    }
    public function form_tambah()
	{
		$data['content'] = 'datatrain/v_tambah';
		$this->load->view('template',$data);
	}

    public function tambah()
	{
		$data['nama'] = $this->input->post('nama');
		$data['semester'] = $this->input->post('semester');
		$data['a1'] = $this->input->post('a1');
		$data['a2'] = $this->input->post('a2');
        $data['a3'] = $this->input->post('a3');
        $data['a4'] = $this->input->post('a4');
        $data['a5'] = $this->input->post('a5');
        $data['a6'] = $this->input->post('a6');
        $data['hasil'] = $this->input->post('hasil');
		$this->m_datatrain->tambah($data);
		redirect('datatrain');
	}

}