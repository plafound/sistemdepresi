<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
	private $cek;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_datatrain');
        if($this->session->userdata('role') != 'A'){
            redirect('login');
        }

	}
	public function index()
	{
		$this->load->view('home/v_home');
	}
	// public function cek()
    // {
    //     $data = $this->m_datatrain->getCoba();
	// 	$all = $this->m_datatrain->getAll();
	// 	for($i=0;$i < count($data);$i++){
	// 		echo $data[$i]->total . '/'. count($all) .'<br>';
	// 		$cek_hasil[] = $data[$i]->total / count($all); 
	// 	}
		
    //     var_dump($data);
    // }
}
