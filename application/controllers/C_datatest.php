<?php
use App\Models\Pertanyaan;
defined('BASEPATH') OR exit('No direct script access allowed');

class C_datatest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_datatest");
        $this->load->model('m_datatrain');
        $this->load->model("m_penghitungan");
        if($this->session->userdata('role') != 'A'){
            redirect('login');
        }
    }
    public function index()
    {
        $data['datatest'] = $this->m_datatest->getAll();
		$data['content'] = 'datatest/v_datatest';
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

    public function penghitungan($id)
    {
        $All = $this->m_penghitungan->getAll();
        $All = count($All);
        $HasilGangguanMood = $this->m_penghitungan->getHasilGangguanMood();
        $HasilGangguanMood = count($HasilGangguanMood);
            $HasilGangguanMoodA1Ortu = $this->m_penghitungan->getHasilGangguanMoodA1Ortu();
            $HasilGangguanMoodA1Ortu = count($HasilGangguanMoodA1Ortu);
            $HasilGangguanMoodA1Kos = $this->m_penghitungan->getHasilGangguanMoodA1Kos();
            $HasilGangguanMoodA1Kos = count($HasilGangguanMoodA1Kos);
            $HasilGangguanMoodA1Sendiri = $this->m_penghitungan->getHasilGangguanMoodA1Sendiri();
            $HasilGangguanMoodA1Sendiri = count($HasilGangguanMoodA1Sendiri);
            $HasilGangguanMoodA2SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA2SangatBuruk();
            $HasilGangguanMoodA2SangatBuruk = count($HasilGangguanMoodA2SangatBuruk);
            $HasilGangguanMoodA2Buruk = $this->m_penghitungan->getHasilGangguanMoodA2Buruk();
            $HasilGangguanMoodA2Buruk = count($HasilGangguanMoodA2Buruk);
            $HasilGangguanMoodA2Cukup = $this->m_penghitungan->getHasilGangguanMoodA2Cukup();
            $HasilGangguanMoodA2Cukup = count($HasilGangguanMoodA2Cukup);
            $HasilGangguanMoodA2Baik = $this->m_penghitungan->getHasilGangguanMoodA2Baik();
            $HasilGangguanMoodA2Baik = count($HasilGangguanMoodA2Baik);
            $HasilGangguanMoodA2SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA2SangatBaik();
            $HasilGangguanMoodA2SangatBaik = count($HasilGangguanMoodA2SangatBaik);
            $HasilGangguanMoodA3SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA3SangatBuruk();
            $HasilGangguanMoodA3SangatBuruk = count($HasilGangguanMoodA3SangatBuruk);
            $HasilGangguanMoodA3Buruk = $this->m_penghitungan->getHasilGangguanMoodA3Buruk();
            $HasilGangguanMoodA3Buruk = count($HasilGangguanMoodA3Buruk);
            $HasilGangguanMoodA3Cukup = $this->m_penghitungan->getHasilGangguanMoodA3Cukup();
            $HasilGangguanMoodA3Cukup = count($HasilGangguanMoodA3Cukup);
            $HasilGangguanMoodA3Baik = $this->m_penghitungan->getHasilGangguanMoodA3Baik();
            $HasilGangguanMoodA3Baik = count($HasilGangguanMoodA3Baik);
            $HasilGangguanMoodA3SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA3SangatBaik();
            $HasilGangguanMoodA3SangatBaik = count($HasilGangguanMoodA3SangatBaik);
            $HasilGangguanMoodA4SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA4SangatBuruk();
            $HasilGangguanMoodA4SangatBuruk = count($HasilGangguanMoodA4SangatBuruk);
            $HasilGangguanMoodA4Buruk = $this->m_penghitungan->getHasilGangguanMoodA4Buruk();
            $HasilGangguanMoodA4Buruk = count($HasilGangguanMoodA4Buruk);
            $HasilGangguanMoodA4Cukup = $this->m_penghitungan->getHasilGangguanMoodA4Cukup();
            $HasilGangguanMoodA4Cukup = count($HasilGangguanMoodA4Cukup);
            $HasilGangguanMoodA4Baik = $this->m_penghitungan->getHasilGangguanMoodA4Baik();
            $HasilGangguanMoodA4Baik = count($HasilGangguanMoodA4Baik);
            $HasilGangguanMoodA4SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA4SangatBaik();
            $HasilGangguanMoodA4SangatBaik = count($HasilGangguanMoodA4SangatBaik);
            $HasilGangguanMoodA5SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA5SangatBuruk();
            $HasilGangguanMoodA5SangatBuruk = count($HasilGangguanMoodA5SangatBuruk);
            $HasilGangguanMoodA5Buruk = $this->m_penghitungan->getHasilGangguanMoodA5Buruk();
            $HasilGangguanMoodA5Buruk = count($HasilGangguanMoodA5Buruk);
            $HasilGangguanMoodA5Cukup = $this->m_penghitungan->getHasilGangguanMoodA5Cukup();
            $HasilGangguanMoodA5Cukup = count($HasilGangguanMoodA5Cukup);
            $HasilGangguanMoodA5Baik = $this->m_penghitungan->getHasilGangguanMoodA5Baik();
            $HasilGangguanMoodA5Baik = count($HasilGangguanMoodA5Baik);
            $HasilGangguanMoodA5SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA5SangatBaik();
            $HasilGangguanMoodA5SangatBaik = count($HasilGangguanMoodA5SangatBaik);
            $HasilGangguanMoodA6SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA6SangatBuruk();
            $HasilGangguanMoodA6SangatBuruk = count($HasilGangguanMoodA6SangatBuruk);
            $HasilGangguanMoodA6Buruk = $this->m_penghitungan->getHasilGangguanMoodA6Buruk();
            $HasilGangguanMoodA6Buruk = count($HasilGangguanMoodA6Buruk);
            $HasilGangguanMoodA6Cukup = $this->m_penghitungan->getHasilGangguanMoodA6Cukup();
            $HasilGangguanMoodA6Cukup = count($HasilGangguanMoodA6Cukup);
            $HasilGangguanMoodA6Baik = $this->m_penghitungan->getHasilGangguanMoodA6Baik();
            $HasilGangguanMoodA6Baik = count($HasilGangguanMoodA6Baik);
            $HasilGangguanMoodA6SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA6SangatBaik();
            $HasilGangguanMoodA6SangatBaik = count($HasilGangguanMoodA6SangatBaik);
            $HasilGangguanMoodB1_A = $this->m_penghitungan->getHasilGangguanMoodB1_A();
            $HasilGangguanMoodB1_A = count($HasilGangguanMoodB1_A);
            $HasilGangguanMoodB1_B = $this->m_penghitungan->getHasilGangguanMoodB1_B();
            $HasilGangguanMoodB1_B = count($HasilGangguanMoodB1_B);
            $HasilGangguanMoodB1_C = $this->m_penghitungan->getHasilGangguanMoodB1_C();
            $HasilGangguanMoodB1_C = count($HasilGangguanMoodB1_C);
            $HasilGangguanMoodB1_D = $this->m_penghitungan->getHasilGangguanMoodB1_D();
            $HasilGangguanMoodB1_D = count($HasilGangguanMoodB1_D);
            $HasilGangguanMoodB2_A = $this->m_penghitungan->getHasilGangguanMoodB2_A();
            $HasilGangguanMoodB2_A = count($HasilGangguanMoodB2_A);
            $HasilGangguanMoodB2_B = $this->m_penghitungan->getHasilGangguanMoodB2_B();
            $HasilGangguanMoodB2_B = count($HasilGangguanMoodB2_B);
            $HasilGangguanMoodB2_C = $this->m_penghitungan->getHasilGangguanMoodB2_C();
            $HasilGangguanMoodB2_C = count($HasilGangguanMoodB2_C);
            $HasilGangguanMoodB2_D = $this->m_penghitungan->getHasilGangguanMoodB2_D();
            $HasilGangguanMoodB2_D = count($HasilGangguanMoodB2_D);
            $HasilGangguanMoodB3_A = $this->m_penghitungan->getHasilGangguanMoodB3_A();
            $HasilGangguanMoodB3_A = count($HasilGangguanMoodB3_A);
            $HasilGangguanMoodB3_B = $this->m_penghitungan->getHasilGangguanMoodB3_B();
            $HasilGangguanMoodB3_B = count($HasilGangguanMoodB3_B);
            $HasilGangguanMoodB3_C = $this->m_penghitungan->getHasilGangguanMoodB3_C();
            $HasilGangguanMoodB3_C = count($HasilGangguanMoodB3_C);
            $HasilGangguanMoodB3_D = $this->m_penghitungan->getHasilGangguanMoodB3_D();
            $HasilGangguanMoodB3_D = count($HasilGangguanMoodB3_D);
            $HasilGangguanMoodB4_A = $this->m_penghitungan->getHasilGangguanMoodB4_A();
            $HasilGangguanMoodB4_A = count($HasilGangguanMoodB4_A);
            $HasilGangguanMoodB4_B = $this->m_penghitungan->getHasilGangguanMoodB4_B();
            $HasilGangguanMoodB4_B = count($HasilGangguanMoodB4_B);
            $HasilGangguanMoodB4_C = $this->m_penghitungan->getHasilGangguanMoodB4_C();
            $HasilGangguanMoodB4_C = count($HasilGangguanMoodB4_C);
            $HasilGangguanMoodB4_D = $this->m_penghitungan->getHasilGangguanMoodB4_D();
            $HasilGangguanMoodB4_D = count($HasilGangguanMoodB4_D);
            $HasilGangguanMoodB5_A = $this->m_penghitungan->getHasilGangguanMoodB5_A();
            $HasilGangguanMoodB5_A = count($HasilGangguanMoodB5_A);
            $HasilGangguanMoodB5_B = $this->m_penghitungan->getHasilGangguanMoodB5_B();
            $HasilGangguanMoodB5_B = count($HasilGangguanMoodB5_B);
            $HasilGangguanMoodB5_C = $this->m_penghitungan->getHasilGangguanMoodB5_C();
            $HasilGangguanMoodB5_C = count($HasilGangguanMoodB5_C);
            $HasilGangguanMoodB5_D = $this->m_penghitungan->getHasilGangguanMoodB5_D();
            $HasilGangguanMoodB5_D = count($HasilGangguanMoodB5_D);
            $HasilGangguanMoodB6_A = $this->m_penghitungan->getHasilGangguanMoodB6_A();
            $HasilGangguanMoodB6_A = count($HasilGangguanMoodB6_A);
            $HasilGangguanMoodB6_B = $this->m_penghitungan->getHasilGangguanMoodB6_B();
            $HasilGangguanMoodB6_B = count($HasilGangguanMoodB6_B);
            $HasilGangguanMoodB6_C = $this->m_penghitungan->getHasilGangguanMoodB6_C();
            $HasilGangguanMoodB6_C = count($HasilGangguanMoodB6_C);
            $HasilGangguanMoodB6_D = $this->m_penghitungan->getHasilGangguanMoodB6_D();
            $HasilGangguanMoodB6_D = count($HasilGangguanMoodB6_D);
            $HasilGangguanMoodB7_A = $this->m_penghitungan->getHasilGangguanMoodB7_A();
            $HasilGangguanMoodB7_A = count($HasilGangguanMoodB7_A);
            $HasilGangguanMoodB7_B = $this->m_penghitungan->getHasilGangguanMoodB7_B();
            $HasilGangguanMoodB7_B = count($HasilGangguanMoodB7_B);
            $HasilGangguanMoodB7_C = $this->m_penghitungan->getHasilGangguanMoodB7_C();
            $HasilGangguanMoodB7_C = count($HasilGangguanMoodB7_C);
            $HasilGangguanMoodB7_D = $this->m_penghitungan->getHasilGangguanMoodB7_D();
            $HasilGangguanMoodB7_D = count($HasilGangguanMoodB7_D);
            $HasilGangguanMoodB8_A = $this->m_penghitungan->getHasilGangguanMoodB8_A();
            $HasilGangguanMoodB8_A = count($HasilGangguanMoodB8_A);
            $HasilGangguanMoodB8_B = $this->m_penghitungan->getHasilGangguanMoodB8_B();
            $HasilGangguanMoodB8_B = count($HasilGangguanMoodB8_B);
            $HasilGangguanMoodB8_C = $this->m_penghitungan->getHasilGangguanMoodB8_C();
            $HasilGangguanMoodB8_C = count($HasilGangguanMoodB8_C);
            $HasilGangguanMoodB8_D = $this->m_penghitungan->getHasilGangguanMoodB8_D();
            $HasilGangguanMoodB8_D = count($HasilGangguanMoodB8_D);
            $HasilGangguanMoodB9_A = $this->m_penghitungan->getHasilGangguanMoodB9_A();
            $HasilGangguanMoodB9_A = count($HasilGangguanMoodB9_A);
            $HasilGangguanMoodB9_B = $this->m_penghitungan->getHasilGangguanMoodB9_B();
            $HasilGangguanMoodB9_B = count($HasilGangguanMoodB9_B);
            $HasilGangguanMoodB9_C = $this->m_penghitungan->getHasilGangguanMoodB9_C();
            $HasilGangguanMoodB9_C = count($HasilGangguanMoodB9_C);
            $HasilGangguanMoodB9_D = $this->m_penghitungan->getHasilGangguanMoodB9_D();
            $HasilGangguanMoodB9_D = count($HasilGangguanMoodB9_D);
            $HasilGangguanMoodB10_A = $this->m_penghitungan->getHasilGangguanMoodB10_A();
            $HasilGangguanMoodB10_A = count($HasilGangguanMoodB10_A);
            $HasilGangguanMoodB10_B = $this->m_penghitungan->getHasilGangguanMoodB10_B();
            $HasilGangguanMoodB10_B = count($HasilGangguanMoodB10_B);
            $HasilGangguanMoodB10_C = $this->m_penghitungan->getHasilGangguanMoodB10_C();
            $HasilGangguanMoodB10_C = count($HasilGangguanMoodB10_C);
            $HasilGangguanMoodB10_D = $this->m_penghitungan->getHasilGangguanMoodB10_D();
            $HasilGangguanMoodB10_D = count($HasilGangguanMoodB10_D);
            $HasilGangguanMoodB11_A = $this->m_penghitungan->getHasilGangguanMoodB11_A();
            $HasilGangguanMoodB11_A = count($HasilGangguanMoodB11_A);
            $HasilGangguanMoodB11_B = $this->m_penghitungan->getHasilGangguanMoodB11_B();
            $HasilGangguanMoodB11_B = count($HasilGangguanMoodB11_B);
            $HasilGangguanMoodB11_C = $this->m_penghitungan->getHasilGangguanMoodB11_C();
            $HasilGangguanMoodB11_C = count($HasilGangguanMoodB11_C);
            $HasilGangguanMoodB11_D = $this->m_penghitungan->getHasilGangguanMoodB11_D();
            $HasilGangguanMoodB11_D = count($HasilGangguanMoodB11_D);
            $HasilGangguanMoodB12_A = $this->m_penghitungan->getHasilGangguanMoodB12_A();
            $HasilGangguanMoodB12_A = count($HasilGangguanMoodB12_A);
            $HasilGangguanMoodB12_B = $this->m_penghitungan->getHasilGangguanMoodB12_B();
            $HasilGangguanMoodB12_B = count($HasilGangguanMoodB12_B);
            $HasilGangguanMoodB12_C = $this->m_penghitungan->getHasilGangguanMoodB12_C();
            $HasilGangguanMoodB12_C = count($HasilGangguanMoodB12_C);
            $HasilGangguanMoodB12_D = $this->m_penghitungan->getHasilGangguanMoodB12_D();
            $HasilGangguanMoodB12_D = count($HasilGangguanMoodB12_D);
            $HasilGangguanMoodB13_A = $this->m_penghitungan->getHasilGangguanMoodB13_A();
            $HasilGangguanMoodB13_A = count($HasilGangguanMoodB13_A);
            $HasilGangguanMoodB13_B = $this->m_penghitungan->getHasilGangguanMoodB13_B();
            $HasilGangguanMoodB13_B = count($HasilGangguanMoodB13_B);
            $HasilGangguanMoodB13_C = $this->m_penghitungan->getHasilGangguanMoodB13_C();
            $HasilGangguanMoodB13_C = count($HasilGangguanMoodB13_C);
            $HasilGangguanMoodB13_D = $this->m_penghitungan->getHasilGangguanMoodB13_D();
            $HasilGangguanMoodB13_D = count($HasilGangguanMoodB13_D);
            $HasilGangguanMoodB14_A = $this->m_penghitungan->getHasilGangguanMoodB14_A();
            $HasilGangguanMoodB14_A = count($HasilGangguanMoodB14_A);
            $HasilGangguanMoodB14_B = $this->m_penghitungan->getHasilGangguanMoodB14_B();
            $HasilGangguanMoodB14_B = count($HasilGangguanMoodB14_B);
            $HasilGangguanMoodB14_C = $this->m_penghitungan->getHasilGangguanMoodB14_C();
            $HasilGangguanMoodB14_C = count($HasilGangguanMoodB14_C);
            $HasilGangguanMoodB14_D = $this->m_penghitungan->getHasilGangguanMoodB14_D();
            $HasilGangguanMoodB14_D = count($HasilGangguanMoodB14_D);
            $HasilGangguanMoodB15_A = $this->m_penghitungan->getHasilGangguanMoodB15_A();
            $HasilGangguanMoodB15_A = count($HasilGangguanMoodB15_A);
            $HasilGangguanMoodB15_B = $this->m_penghitungan->getHasilGangguanMoodB15_B();
            $HasilGangguanMoodB15_B = count($HasilGangguanMoodB15_B);
            $HasilGangguanMoodB15_C = $this->m_penghitungan->getHasilGangguanMoodB15_C();
            $HasilGangguanMoodB15_C = count($HasilGangguanMoodB15_C);
            $HasilGangguanMoodB15_D = $this->m_penghitungan->getHasilGangguanMoodB15_D();
            $HasilGangguanMoodB15_D = count($HasilGangguanMoodB15_D);
            $HasilGangguanMoodB16_A = $this->m_penghitungan->getHasilGangguanMoodB16_A();
            $HasilGangguanMoodB16_A = count($HasilGangguanMoodB16_A);
            $HasilGangguanMoodB16_B = $this->m_penghitungan->getHasilGangguanMoodB16_B();
            $HasilGangguanMoodB16_B = count($HasilGangguanMoodB16_B);
            $HasilGangguanMoodB16_C = $this->m_penghitungan->getHasilGangguanMoodB16_C();
            $HasilGangguanMoodB16_C = count($HasilGangguanMoodB16_C);
            $HasilGangguanMoodB16_D = $this->m_penghitungan->getHasilGangguanMoodB16_D();
            $HasilGangguanMoodB16_D = count($HasilGangguanMoodB16_D);
            $HasilGangguanMoodB17_A = $this->m_penghitungan->getHasilGangguanMoodB17_A();
            $HasilGangguanMoodB17_A = count($HasilGangguanMoodB17_A);
            $HasilGangguanMoodB17_B = $this->m_penghitungan->getHasilGangguanMoodB17_B();
            $HasilGangguanMoodB17_B = count($HasilGangguanMoodB17_B);
            $HasilGangguanMoodB17_C = $this->m_penghitungan->getHasilGangguanMoodB17_C();
            $HasilGangguanMoodB17_C = count($HasilGangguanMoodB17_C);
            $HasilGangguanMoodB17_D = $this->m_penghitungan->getHasilGangguanMoodB17_D();
            $HasilGangguanMoodB17_D = count($HasilGangguanMoodB17_D);
            $HasilGangguanMoodB18_A = $this->m_penghitungan->getHasilGangguanMoodB18_A();
            $HasilGangguanMoodB18_A = count($HasilGangguanMoodB18_A);
            $HasilGangguanMoodB18_B = $this->m_penghitungan->getHasilGangguanMoodB18_B();
            $HasilGangguanMoodB18_B = count($HasilGangguanMoodB18_B);
            $HasilGangguanMoodB18_C = $this->m_penghitungan->getHasilGangguanMoodB18_C();
            $HasilGangguanMoodB18_C = count($HasilGangguanMoodB18_C);
            $HasilGangguanMoodB18_D = $this->m_penghitungan->getHasilGangguanMoodB18_D();
            $HasilGangguanMoodB18_D = count($HasilGangguanMoodB18_D);
            $HasilGangguanMoodB19_A = $this->m_penghitungan->getHasilGangguanMoodB19_A();
            $HasilGangguanMoodB19_A = count($HasilGangguanMoodB19_A);
            $HasilGangguanMoodB19_B = $this->m_penghitungan->getHasilGangguanMoodB19_B();
            $HasilGangguanMoodB19_B = count($HasilGangguanMoodB19_B);
            $HasilGangguanMoodB19_C = $this->m_penghitungan->getHasilGangguanMoodB19_C();
            $HasilGangguanMoodB19_C = count($HasilGangguanMoodB19_C);
            $HasilGangguanMoodB19_D = $this->m_penghitungan->getHasilGangguanMoodB19_D();
            $HasilGangguanMoodB19_D = count($HasilGangguanMoodB19_D);
            $HasilGangguanMoodB20_A = $this->m_penghitungan->getHasilGangguanMoodB20_A();
            $HasilGangguanMoodB20_A = count($HasilGangguanMoodB20_A);
            $HasilGangguanMoodB20_B = $this->m_penghitungan->getHasilGangguanMoodB20_B();
            $HasilGangguanMoodB20_B = count($HasilGangguanMoodB20_B);
            $HasilGangguanMoodB20_C = $this->m_penghitungan->getHasilGangguanMoodB20_C();
            $HasilGangguanMoodB20_C = count($HasilGangguanMoodB20_C);
            $HasilGangguanMoodB20_D = $this->m_penghitungan->getHasilGangguanMoodB20_D();
            $HasilGangguanMoodB20_D = count($HasilGangguanMoodB20_D);
            $HasilGangguanMoodB21_A = $this->m_penghitungan->getHasilGangguanMoodB21_A();
            $HasilGangguanMoodB21_A = count($HasilGangguanMoodB21_A);
            $HasilGangguanMoodB21_B = $this->m_penghitungan->getHasilGangguanMoodB21_B();
            $HasilGangguanMoodB21_B = count($HasilGangguanMoodB21_B);
            $HasilGangguanMoodB21_C = $this->m_penghitungan->getHasilGangguanMoodB21_C();
            $HasilGangguanMoodB21_C = count($HasilGangguanMoodB21_C);
            $HasilGangguanMoodB21_D = $this->m_penghitungan->getHasilGangguanMoodB21_D();
            $HasilGangguanMoodB21_D = count($HasilGangguanMoodB21_D);

        
        $HasilRingan = $this->m_penghitungan->getHasilRingan();
        $HasilRingan = count($HasilRingan);
            $HasilRinganA1Ortu = $this->m_penghitungan->getHasilRinganA1Ortu();
            $HasilRinganA1Ortu = count($HasilRinganA1Ortu);
            $HasilRinganA1Kos = $this->m_penghitungan->getHasilRinganA1Kos();
            $HasilRinganA1Kos = count($HasilRinganA1Kos);
            $HasilRinganA1Sendiri = $this->m_penghitungan->getHasilRinganA1Sendiri();
            $HasilRinganA1Sendiri = count($HasilRinganA1Sendiri);
            $HasilRinganA2SangatBuruk = $this->m_penghitungan->getHasilRinganA2SangatBuruk();
            $HasilRinganA2SangatBuruk = count($HasilRinganA2SangatBuruk);
            $HasilRinganA2Buruk = $this->m_penghitungan->getHasilRinganA2Buruk();
            $HasilRinganA2Buruk = count($HasilRinganA2Buruk);
            $HasilRinganA2Cukup = $this->m_penghitungan->getHasilRinganA2Cukup();
            $HasilRinganA2Cukup = count($HasilRinganA2Cukup);
            $HasilRinganA2Baik = $this->m_penghitungan->getHasilRinganA2Baik();
            $HasilRinganA2Baik = count($HasilRinganA2Baik);
            $HasilRinganA2SangatBaik = $this->m_penghitungan->getHasilRinganA2SangatBaik();
            $HasilRinganA2SangatBaik = count($HasilRinganA2SangatBaik);
            $HasilRinganA3SangatBuruk = $this->m_penghitungan->getHasilRinganA3SangatBuruk();
            $HasilRinganA3SangatBuruk = count($HasilRinganA3SangatBuruk);
            $HasilRinganA3Buruk = $this->m_penghitungan->getHasilRinganA3Buruk();
            $HasilRinganA3Buruk = count($HasilRinganA3Buruk);
            $HasilRinganA3Cukup = $this->m_penghitungan->getHasilRinganA3Cukup();
            $HasilRinganA3Cukup = count($HasilRinganA3Cukup);
            $HasilRinganA3Baik = $this->m_penghitungan->getHasilRinganA3Baik();
            $HasilRinganA3Baik = count($HasilRinganA3Baik);
            $HasilRinganA3SangatBaik = $this->m_penghitungan->getHasilRinganA3SangatBaik();
            $HasilRinganA3SangatBaik = count($HasilRinganA3SangatBaik);
            $HasilRinganA4SangatBuruk = $this->m_penghitungan->getHasilRinganA4SangatBuruk();
            $HasilRinganA4SangatBuruk = count($HasilRinganA4SangatBuruk);
            $HasilRinganA4Buruk = $this->m_penghitungan->getHasilRinganA4Buruk();
            $HasilRinganA4Buruk = count($HasilRinganA4Buruk);
            $HasilRinganA4Cukup = $this->m_penghitungan->getHasilRinganA4Cukup();
            $HasilRinganA4Cukup = count($HasilRinganA4Cukup);
            $HasilRinganA4Baik = $this->m_penghitungan->getHasilRinganA4Baik();
            $HasilRinganA4Baik = count($HasilRinganA4Baik);
            $HasilRinganA4SangatBaik = $this->m_penghitungan->getHasilRinganA4SangatBaik();
            $HasilRinganA4SangatBaik = count($HasilRinganA4SangatBaik);
            $HasilRinganA5SangatBuruk = $this->m_penghitungan->getHasilRinganA5SangatBuruk();
            $HasilRinganA5SangatBuruk = count($HasilRinganA5SangatBuruk);
            $HasilRinganA5Buruk = $this->m_penghitungan->getHasilRinganA5Buruk();
            $HasilRinganA5Buruk = count($HasilRinganA5Buruk);
            $HasilRinganA5Cukup = $this->m_penghitungan->getHasilRinganA5Cukup();
            $HasilRinganA5Cukup = count($HasilRinganA5Cukup);
            $HasilRinganA5Baik = $this->m_penghitungan->getHasilRinganA5Baik();
            $HasilRinganA5Baik = count($HasilRinganA5Baik);
            $HasilRinganA5SangatBaik = $this->m_penghitungan->getHasilRinganA5SangatBaik();
            $HasilRinganA5SangatBaik = count($HasilRinganA5SangatBaik);
            $HasilRinganA6SangatBuruk = $this->m_penghitungan->getHasilRinganA6SangatBuruk();
            $HasilRinganA6SangatBuruk = count($HasilRinganA6SangatBuruk);
            $HasilRinganA6Buruk = $this->m_penghitungan->getHasilRinganA6Buruk();
            $HasilRinganA6Buruk = count($HasilRinganA6Buruk);
            $HasilRinganA6Cukup = $this->m_penghitungan->getHasilRinganA6Cukup();
            $HasilRinganA6Cukup = count($HasilRinganA6Cukup);
            $HasilRinganA6Baik = $this->m_penghitungan->getHasilRinganA6Baik();
            $HasilRinganA6Baik = count($HasilRinganA6Baik);
            $HasilRinganA6SangatBaik = $this->m_penghitungan->getHasilRinganA6SangatBaik();
            $HasilRinganA6SangatBaik = count($HasilRinganA6SangatBaik);
            $HasilRinganB1_A = $this->m_penghitungan->getHasilRinganB1_A();
            $HasilRinganB1_A = count($HasilRinganB1_A);
            $HasilRinganB1_B = $this->m_penghitungan->getHasilRinganB1_B();
            $HasilRinganB1_B = count($HasilRinganB1_B);
            $HasilRinganB1_C = $this->m_penghitungan->getHasilRinganB1_C();
            $HasilRinganB1_C = count($HasilRinganB1_C);
            $HasilRinganB1_D = $this->m_penghitungan->getHasilRinganB1_D();
            $HasilRinganB1_D = count($HasilRinganB1_D);
            $HasilRinganB2_A = $this->m_penghitungan->getHasilRinganB2_A();
            $HasilRinganB2_A = count($HasilRinganB2_A);
            $HasilRinganB2_B = $this->m_penghitungan->getHasilRinganB2_B();
            $HasilRinganB2_B = count($HasilRinganB2_B);
            $HasilRinganB2_C = $this->m_penghitungan->getHasilRinganB2_C();
            $HasilRinganB2_C = count($HasilRinganB2_C);
            $HasilRinganB2_D = $this->m_penghitungan->getHasilRinganB2_D();
            $HasilRinganB2_D = count($HasilRinganB2_D);
            $HasilRinganB3_A = $this->m_penghitungan->getHasilRinganB3_A();
            $HasilRinganB3_A = count($HasilRinganB3_A);
            $HasilRinganB3_B = $this->m_penghitungan->getHasilRinganB3_B();
            $HasilRinganB3_B = count($HasilRinganB3_B);
            $HasilRinganB3_C = $this->m_penghitungan->getHasilRinganB3_C();
            $HasilRinganB3_C = count($HasilRinganB3_C);
            $HasilRinganB3_D = $this->m_penghitungan->getHasilRinganB3_D();
            $HasilRinganB3_D = count($HasilRinganB3_D);
            $HasilRinganB4_A = $this->m_penghitungan->getHasilRinganB4_A();
            $HasilRinganB4_A = count($HasilRinganB4_A);
            $HasilRinganB4_B = $this->m_penghitungan->getHasilRinganB4_B();
            $HasilRinganB4_B = count($HasilRinganB4_B);
            $HasilRinganB4_C = $this->m_penghitungan->getHasilRinganB4_C();
            $HasilRinganB4_C = count($HasilRinganB4_C);
            $HasilRinganB4_D = $this->m_penghitungan->getHasilRinganB4_D();
            $HasilRinganB4_D = count($HasilRinganB4_D);
            $HasilRinganB5_A = $this->m_penghitungan->getHasilRinganB5_A();
            $HasilRinganB5_A = count($HasilRinganB5_A);
            $HasilRinganB5_B = $this->m_penghitungan->getHasilRinganB5_B();
            $HasilRinganB5_B = count($HasilRinganB5_B);
            $HasilRinganB5_C = $this->m_penghitungan->getHasilRinganB5_C();
            $HasilRinganB5_C = count($HasilRinganB5_C);
            $HasilRinganB5_D = $this->m_penghitungan->getHasilRinganB5_D();
            $HasilRinganB5_D = count($HasilRinganB5_D);
            $HasilRinganB6_A = $this->m_penghitungan->getHasilRinganB6_A();
            $HasilRinganB6_A = count($HasilRinganB6_A);
            $HasilRinganB6_B = $this->m_penghitungan->getHasilRinganB6_B();
            $HasilRinganB6_B = count($HasilRinganB6_B);
            $HasilRinganB6_C = $this->m_penghitungan->getHasilRinganB6_C();
            $HasilRinganB6_C = count($HasilRinganB6_C);
            $HasilRinganB6_D = $this->m_penghitungan->getHasilRinganB6_D();
            $HasilRinganB6_D = count($HasilRinganB6_D);
            $HasilRinganB7_A = $this->m_penghitungan->getHasilRinganB7_A();
            $HasilRinganB7_A = count($HasilRinganB7_A);
            $HasilRinganB7_B = $this->m_penghitungan->getHasilRinganB7_B();
            $HasilRinganB7_B = count($HasilRinganB7_B);
            $HasilRinganB7_C = $this->m_penghitungan->getHasilRinganB7_C();
            $HasilRinganB7_C = count($HasilRinganB7_C);
            $HasilRinganB7_D = $this->m_penghitungan->getHasilRinganB7_D();
            $HasilRinganB7_D = count($HasilRinganB7_D);
            $HasilRinganB8_A = $this->m_penghitungan->getHasilRinganB8_A();
            $HasilRinganB8_A = count($HasilRinganB8_A);
            $HasilRinganB8_B = $this->m_penghitungan->getHasilRinganB8_B();
            $HasilRinganB8_B = count($HasilRinganB8_B);
            $HasilRinganB8_C = $this->m_penghitungan->getHasilRinganB8_C();
            $HasilRinganB8_C = count($HasilRinganB8_C);
            $HasilRinganB8_D = $this->m_penghitungan->getHasilRinganB8_D();
            $HasilRinganB8_D = count($HasilRinganB8_D);
            $HasilRinganB9_A = $this->m_penghitungan->getHasilRinganB9_A();
            $HasilRinganB9_A = count($HasilRinganB9_A);
            $HasilRinganB9_B = $this->m_penghitungan->getHasilRinganB9_B();
            $HasilRinganB9_B = count($HasilRinganB9_B);
            $HasilRinganB9_C = $this->m_penghitungan->getHasilRinganB9_C();
            $HasilRinganB9_C = count($HasilRinganB9_C);
            $HasilRinganB9_D = $this->m_penghitungan->getHasilRinganB9_D();
            $HasilRinganB9_D = count($HasilRinganB9_D);
            $HasilRinganB10_A = $this->m_penghitungan->getHasilRinganB10_A();
            $HasilRinganB10_A = count($HasilRinganB10_A);
            $HasilRinganB10_B = $this->m_penghitungan->getHasilRinganB10_B();
            $HasilRinganB10_B = count($HasilRinganB10_B);
            $HasilRinganB10_C = $this->m_penghitungan->getHasilRinganB10_C();
            $HasilRinganB10_C = count($HasilRinganB10_C);
            $HasilRinganB10_D = $this->m_penghitungan->getHasilRinganB10_D();
            $HasilRinganB10_D = count($HasilRinganB10_D);
            $HasilRinganB11_A = $this->m_penghitungan->getHasilRinganB11_A();
            $HasilRinganB11_A = count($HasilRinganB11_A);
            $HasilRinganB11_B = $this->m_penghitungan->getHasilRinganB11_B();
            $HasilRinganB11_B = count($HasilRinganB11_B);
            $HasilRinganB11_C = $this->m_penghitungan->getHasilRinganB11_C();
            $HasilRinganB11_C = count($HasilRinganB11_C);
            $HasilRinganB11_D = $this->m_penghitungan->getHasilRinganB11_D();
            $HasilRinganB11_D = count($HasilRinganB11_D);
            $HasilRinganB12_A = $this->m_penghitungan->getHasilRinganB12_A();
            $HasilRinganB12_A = count($HasilRinganB12_A);
            $HasilRinganB12_B = $this->m_penghitungan->getHasilRinganB12_B();
            $HasilRinganB12_B = count($HasilRinganB12_B);
            $HasilRinganB12_C = $this->m_penghitungan->getHasilRinganB12_C();
            $HasilRinganB12_C = count($HasilRinganB12_C);
            $HasilRinganB12_D = $this->m_penghitungan->getHasilRinganB12_D();
            $HasilRinganB12_D = count($HasilRinganB12_D);
            $HasilRinganB13_A = $this->m_penghitungan->getHasilRinganB13_A();
            $HasilRinganB13_A = count($HasilRinganB13_A);
            $HasilRinganB13_B = $this->m_penghitungan->getHasilRinganB13_B();
            $HasilRinganB13_B = count($HasilRinganB13_B);
            $HasilRinganB13_C = $this->m_penghitungan->getHasilRinganB13_C();
            $HasilRinganB13_C = count($HasilRinganB13_C);
            $HasilRinganB13_D = $this->m_penghitungan->getHasilRinganB13_D();
            $HasilRinganB13_D = count($HasilRinganB13_D);
            $HasilRinganB14_A = $this->m_penghitungan->getHasilRinganB14_A();
            $HasilRinganB14_A = count($HasilRinganB14_A);
            $HasilRinganB14_B = $this->m_penghitungan->getHasilRinganB14_B();
            $HasilRinganB14_B = count($HasilRinganB14_B);
            $HasilRinganB14_C = $this->m_penghitungan->getHasilRinganB14_C();
            $HasilRinganB14_C = count($HasilRinganB14_C);
            $HasilRinganB14_D = $this->m_penghitungan->getHasilRinganB14_D();
            $HasilRinganB14_D = count($HasilRinganB14_D);
            $HasilRinganB15_A = $this->m_penghitungan->getHasilRinganB15_A();
            $HasilRinganB15_A = count($HasilRinganB15_A);
            $HasilRinganB15_B = $this->m_penghitungan->getHasilRinganB15_B();
            $HasilRinganB15_B = count($HasilRinganB15_B);
            $HasilRinganB15_C = $this->m_penghitungan->getHasilRinganB15_C();
            $HasilRinganB15_C = count($HasilRinganB15_C);
            $HasilRinganB15_D = $this->m_penghitungan->getHasilRinganB15_D();
            $HasilRinganB15_D = count($HasilRinganB15_D);
            $HasilRinganB16_A = $this->m_penghitungan->getHasilRinganB16_A();
            $HasilRinganB16_A = count($HasilRinganB16_A);
            $HasilRinganB16_B = $this->m_penghitungan->getHasilRinganB16_B();
            $HasilRinganB16_B = count($HasilRinganB16_B);
            $HasilRinganB16_C = $this->m_penghitungan->getHasilRinganB16_C();
            $HasilRinganB16_C = count($HasilRinganB16_C);
            $HasilRinganB16_D = $this->m_penghitungan->getHasilRinganB16_D();
            $HasilRinganB16_D = count($HasilRinganB16_D);
            $HasilRinganB17_A = $this->m_penghitungan->getHasilRinganB17_A();
            $HasilRinganB17_A = count($HasilRinganB17_A);
            $HasilRinganB17_B = $this->m_penghitungan->getHasilRinganB17_B();
            $HasilRinganB17_B = count($HasilRinganB17_B);
            $HasilRinganB17_C = $this->m_penghitungan->getHasilRinganB17_C();
            $HasilRinganB17_C = count($HasilRinganB17_C);
            $HasilRinganB17_D = $this->m_penghitungan->getHasilRinganB17_D();
            $HasilRinganB17_D = count($HasilRinganB17_D);
            $HasilRinganB18_A = $this->m_penghitungan->getHasilRinganB18_A();
            $HasilRinganB18_A = count($HasilRinganB18_A);
            $HasilRinganB18_B = $this->m_penghitungan->getHasilRinganB18_B();
            $HasilRinganB18_B = count($HasilRinganB18_B);
            $HasilRinganB18_C = $this->m_penghitungan->getHasilRinganB18_C();
            $HasilRinganB18_C = count($HasilRinganB18_C);
            $HasilRinganB18_D = $this->m_penghitungan->getHasilRinganB18_D();
            $HasilRinganB18_D = count($HasilRinganB18_D);
            $HasilRinganB19_A = $this->m_penghitungan->getHasilRinganB19_A();
            $HasilRinganB19_A = count($HasilRinganB19_A);
            $HasilRinganB19_B = $this->m_penghitungan->getHasilRinganB19_B();
            $HasilRinganB19_B = count($HasilRinganB19_B);
            $HasilRinganB19_C = $this->m_penghitungan->getHasilRinganB19_C();
            $HasilRinganB19_C = count($HasilRinganB19_C);
            $HasilRinganB19_D = $this->m_penghitungan->getHasilRinganB19_D();
            $HasilRinganB19_D = count($HasilRinganB19_D);
            $HasilRinganB20_A = $this->m_penghitungan->getHasilRinganB20_A();
            $HasilRinganB20_A = count($HasilRinganB20_A);
            $HasilRinganB20_B = $this->m_penghitungan->getHasilRinganB20_B();
            $HasilRinganB20_B = count($HasilRinganB20_B);
            $HasilRinganB20_C = $this->m_penghitungan->getHasilRinganB20_C();
            $HasilRinganB20_C = count($HasilRinganB20_C);
            $HasilRinganB20_D = $this->m_penghitungan->getHasilRinganB20_D();
            $HasilRinganB20_D = count($HasilRinganB20_D);
            $HasilRinganB21_A = $this->m_penghitungan->getHasilRinganB21_A();
            $HasilRinganB21_A = count($HasilRinganB21_A);
            $HasilRinganB21_B = $this->m_penghitungan->getHasilRinganB21_B();
            $HasilRinganB21_B = count($HasilRinganB21_B);
            $HasilRinganB21_C = $this->m_penghitungan->getHasilRinganB21_C();
            $HasilRinganB21_C = count($HasilRinganB21_C);
            $HasilRinganB21_D = $this->m_penghitungan->getHasilRinganB21_D();
            $HasilRinganB21_D = count($HasilRinganB21_D);

        $HasilSedang = $this->m_penghitungan->getHasilSedang();
        $HasilSedang = count($HasilSedang);
            $HasilSedangA1Ortu = $this->m_penghitungan->getHasilSedangA1Ortu();
            $HasilSedangA1Ortu = count($HasilSedangA1Ortu);
            $HasilSedangA1Kos = $this->m_penghitungan->getHasilSedangA1Kos();
            $HasilSedangA1Kos = count($HasilSedangA1Kos);
            $HasilSedangA1Sendiri = $this->m_penghitungan->getHasilSedangA1Sendiri();
            $HasilSedangA1Sendiri = count($HasilSedangA1Sendiri);
            $HasilSedangA2SangatBuruk = $this->m_penghitungan->getHasilSedangA2SangatBuruk();
            $HasilSedangA2SangatBuruk = count($HasilSedangA2SangatBuruk);
            $HasilSedangA2Buruk = $this->m_penghitungan->getHasilSedangA2Buruk();
            $HasilSedangA2Buruk = count($HasilSedangA2Buruk);
            $HasilSedangA2Cukup = $this->m_penghitungan->getHasilSedangA2Cukup();
            $HasilSedangA2Cukup = count($HasilSedangA2Cukup);
            $HasilSedangA2Baik = $this->m_penghitungan->getHasilSedangA2Baik();
            $HasilSedangA2Baik = count($HasilSedangA2Baik);
            $HasilSedangA2SangatBaik = $this->m_penghitungan->getHasilSedangA2SangatBaik();
            $HasilSedangA2SangatBaik = count($HasilSedangA2SangatBaik);
            $HasilSedangA3SangatBuruk = $this->m_penghitungan->getHasilSedangA3SangatBuruk();
            $HasilSedangA3SangatBuruk = count($HasilSedangA3SangatBuruk);
            $HasilSedangA3Buruk = $this->m_penghitungan->getHasilSedangA3Buruk();
            $HasilSedangA3Buruk = count($HasilSedangA3Buruk);
            $HasilSedangA3Cukup = $this->m_penghitungan->getHasilSedangA3Cukup();
            $HasilSedangA3Cukup = count($HasilSedangA3Cukup);
            $HasilSedangA3Baik = $this->m_penghitungan->getHasilSedangA3Baik();
            $HasilSedangA3Baik = count($HasilSedangA3Baik);
            $HasilSedangA3SangatBaik = $this->m_penghitungan->getHasilSedangA3SangatBaik();
            $HasilSedangA3SangatBaik = count($HasilSedangA3SangatBaik);
            $HasilSedangA4SangatBuruk = $this->m_penghitungan->getHasilSedangA4SangatBuruk();
            $HasilSedangA4SangatBuruk = count($HasilSedangA4SangatBuruk);
            $HasilSedangA4Buruk = $this->m_penghitungan->getHasilSedangA4Buruk();
            $HasilSedangA4Buruk = count($HasilSedangA4Buruk);
            $HasilSedangA4Cukup = $this->m_penghitungan->getHasilSedangA4Cukup();
            $HasilSedangA4Cukup = count($HasilSedangA4Cukup);
            $HasilSedangA4Baik = $this->m_penghitungan->getHasilSedangA4Baik();
            $HasilSedangA4Baik = count($HasilSedangA4Baik);
            $HasilSedangA4SangatBaik = $this->m_penghitungan->getHasilSedangA4SangatBaik();
            $HasilSedangA4SangatBaik = count($HasilSedangA4SangatBaik);
            $HasilSedangA5SangatBuruk = $this->m_penghitungan->getHasilSedangA5SangatBuruk();
            $HasilSedangA5SangatBuruk = count($HasilSedangA5SangatBuruk);
            $HasilSedangA5Buruk = $this->m_penghitungan->getHasilSedangA5Buruk();
            $HasilSedangA5Buruk = count($HasilSedangA5Buruk);
            $HasilSedangA5Cukup = $this->m_penghitungan->getHasilSedangA5Cukup();
            $HasilSedangA5Cukup = count($HasilSedangA5Cukup);
            $HasilSedangA5Baik = $this->m_penghitungan->getHasilSedangA5Baik();
            $HasilSedangA5Baik = count($HasilSedangA5Baik);
            $HasilSedangA5SangatBaik = $this->m_penghitungan->getHasilSedangA5SangatBaik();
            $HasilSedangA5SangatBaik = count($HasilSedangA5SangatBaik);
            $HasilSedangA6SangatBuruk = $this->m_penghitungan->getHasilSedangA6SangatBuruk();
            $HasilSedangA6SangatBuruk = count($HasilSedangA6SangatBuruk);
            $HasilSedangA6Buruk = $this->m_penghitungan->getHasilSedangA6Buruk();
            $HasilSedangA6Buruk = count($HasilSedangA6Buruk);
            $HasilSedangA6Cukup = $this->m_penghitungan->getHasilSedangA6Cukup();
            $HasilSedangA6Cukup = count($HasilSedangA6Cukup);
            $HasilSedangA6Baik = $this->m_penghitungan->getHasilSedangA6Baik();
            $HasilSedangA6Baik = count($HasilSedangA6Baik);
            $HasilSedangA6SangatBaik = $this->m_penghitungan->getHasilSedangA6SangatBaik();
            $HasilSedangA6SangatBaik = count($HasilSedangA6SangatBaik);
            $HasilSedangB1_A = $this->m_penghitungan->getHasilSedangB1_A();
            $HasilSedangB1_A = count($HasilSedangB1_A);
            $HasilSedangB1_B = $this->m_penghitungan->getHasilSedangB1_B();
            $HasilSedangB1_B = count($HasilSedangB1_B);
            $HasilSedangB1_C = $this->m_penghitungan->getHasilSedangB1_C();
            $HasilSedangB1_C = count($HasilSedangB1_C);
            $HasilSedangB1_D = $this->m_penghitungan->getHasilSedangB1_D();
            $HasilSedangB1_D = count($HasilSedangB1_D);
            $HasilSedangB2_A = $this->m_penghitungan->getHasilSedangB2_A();
            $HasilSedangB2_A = count($HasilSedangB2_A);
            $HasilSedangB2_B = $this->m_penghitungan->getHasilSedangB2_B();
            $HasilSedangB2_B = count($HasilSedangB2_B);
            $HasilSedangB2_C = $this->m_penghitungan->getHasilSedangB2_C();
            $HasilSedangB2_C = count($HasilSedangB2_C);
            $HasilSedangB2_D = $this->m_penghitungan->getHasilSedangB2_D();
            $HasilSedangB2_D = count($HasilSedangB2_D);
            $HasilSedangB3_A = $this->m_penghitungan->getHasilSedangB3_A();
            $HasilSedangB3_A = count($HasilSedangB3_A);
            $HasilSedangB3_B = $this->m_penghitungan->getHasilSedangB3_B();
            $HasilSedangB3_B = count($HasilSedangB3_B);
            $HasilSedangB3_C = $this->m_penghitungan->getHasilSedangB3_C();
            $HasilSedangB3_C = count($HasilSedangB3_C);
            $HasilSedangB3_D = $this->m_penghitungan->getHasilSedangB3_D();
            $HasilSedangB3_D = count($HasilSedangB3_D);
            $HasilSedangB4_A = $this->m_penghitungan->getHasilSedangB4_A();
            $HasilSedangB4_A = count($HasilSedangB4_A);
            $HasilSedangB4_B = $this->m_penghitungan->getHasilSedangB4_B();
            $HasilSedangB4_B = count($HasilSedangB4_B);
            $HasilSedangB4_C = $this->m_penghitungan->getHasilSedangB4_C();
            $HasilSedangB4_C = count($HasilSedangB4_C);
            $HasilSedangB4_D = $this->m_penghitungan->getHasilSedangB4_D();
            $HasilSedangB4_D = count($HasilSedangB4_D);
            $HasilSedangB5_A = $this->m_penghitungan->getHasilSedangB5_A();
            $HasilSedangB5_A = count($HasilSedangB5_A);
            $HasilSedangB5_B = $this->m_penghitungan->getHasilSedangB5_B();
            $HasilSedangB5_B = count($HasilSedangB5_B);
            $HasilSedangB5_C = $this->m_penghitungan->getHasilSedangB5_C();
            $HasilSedangB5_C = count($HasilSedangB5_C);
            $HasilSedangB5_D = $this->m_penghitungan->getHasilSedangB5_D();
            $HasilSedangB5_D = count($HasilSedangB5_D);
            $HasilSedangB6_A = $this->m_penghitungan->getHasilSedangB6_A();
            $HasilSedangB6_A = count($HasilSedangB6_A);
            $HasilSedangB6_B = $this->m_penghitungan->getHasilSedangB6_B();
            $HasilSedangB6_B = count($HasilSedangB6_B);
            $HasilSedangB6_C = $this->m_penghitungan->getHasilSedangB6_C();
            $HasilSedangB6_C = count($HasilSedangB6_C);
            $HasilSedangB6_D = $this->m_penghitungan->getHasilSedangB6_D();
            $HasilSedangB6_D = count($HasilSedangB6_D);
            $HasilSedangB7_A = $this->m_penghitungan->getHasilSedangB7_A();
            $HasilSedangB7_A = count($HasilSedangB7_A);
            $HasilSedangB7_B = $this->m_penghitungan->getHasilSedangB7_B();
            $HasilSedangB7_B = count($HasilSedangB7_B);
            $HasilSedangB7_C = $this->m_penghitungan->getHasilSedangB7_C();
            $HasilSedangB7_C = count($HasilSedangB7_C);
            $HasilSedangB7_D = $this->m_penghitungan->getHasilSedangB7_D();
            $HasilSedangB7_D = count($HasilSedangB7_D);
            $HasilSedangB8_A = $this->m_penghitungan->getHasilSedangB8_A();
            $HasilSedangB8_A = count($HasilSedangB8_A);
            $HasilSedangB8_B = $this->m_penghitungan->getHasilSedangB8_B();
            $HasilSedangB8_B = count($HasilSedangB8_B);
            $HasilSedangB8_C = $this->m_penghitungan->getHasilSedangB8_C();
            $HasilSedangB8_C = count($HasilSedangB8_C);
            $HasilSedangB8_D = $this->m_penghitungan->getHasilSedangB8_D();
            $HasilSedangB8_D = count($HasilSedangB8_D);
            $HasilSedangB9_A = $this->m_penghitungan->getHasilSedangB9_A();
            $HasilSedangB9_A = count($HasilSedangB9_A);
            $HasilSedangB9_B = $this->m_penghitungan->getHasilSedangB9_B();
            $HasilSedangB9_B = count($HasilSedangB9_B);
            $HasilSedangB9_C = $this->m_penghitungan->getHasilSedangB9_C();
            $HasilSedangB9_C = count($HasilSedangB9_C);
            $HasilSedangB9_D = $this->m_penghitungan->getHasilSedangB9_D();
            $HasilSedangB9_D = count($HasilSedangB9_D);
            $HasilSedangB10_A = $this->m_penghitungan->getHasilSedangB10_A();
            $HasilSedangB10_A = count($HasilSedangB10_A);
            $HasilSedangB10_B = $this->m_penghitungan->getHasilSedangB10_B();
            $HasilSedangB10_B = count($HasilSedangB10_B);
            $HasilSedangB10_C = $this->m_penghitungan->getHasilSedangB10_C();
            $HasilSedangB10_C = count($HasilSedangB10_C);
            $HasilSedangB10_D = $this->m_penghitungan->getHasilSedangB10_D();
            $HasilSedangB10_D = count($HasilSedangB10_D);
            $HasilSedangB11_A = $this->m_penghitungan->getHasilSedangB11_A();
            $HasilSedangB11_A = count($HasilSedangB11_A);
            $HasilSedangB11_B = $this->m_penghitungan->getHasilSedangB11_B();
            $HasilSedangB11_B = count($HasilSedangB11_B);
            $HasilSedangB11_C = $this->m_penghitungan->getHasilSedangB11_C();
            $HasilSedangB11_C = count($HasilSedangB11_C);
            $HasilSedangB11_D = $this->m_penghitungan->getHasilSedangB11_D();
            $HasilSedangB11_D = count($HasilSedangB11_D);
            $HasilSedangB12_A = $this->m_penghitungan->getHasilSedangB12_A();
            $HasilSedangB12_A = count($HasilSedangB12_A);
            $HasilSedangB12_B = $this->m_penghitungan->getHasilSedangB12_B();
            $HasilSedangB12_B = count($HasilSedangB12_B);
            $HasilSedangB12_C = $this->m_penghitungan->getHasilSedangB12_C();
            $HasilSedangB12_C = count($HasilSedangB12_C);
            $HasilSedangB12_D = $this->m_penghitungan->getHasilSedangB12_D();
            $HasilSedangB12_D = count($HasilSedangB12_D);
            $HasilSedangB13_A = $this->m_penghitungan->getHasilSedangB13_A();
            $HasilSedangB13_A = count($HasilSedangB13_A);
            $HasilSedangB13_B = $this->m_penghitungan->getHasilSedangB13_B();
            $HasilSedangB13_B = count($HasilSedangB13_B);
            $HasilSedangB13_C = $this->m_penghitungan->getHasilSedangB13_C();
            $HasilSedangB13_C = count($HasilSedangB13_C);
            $HasilSedangB13_D = $this->m_penghitungan->getHasilSedangB13_D();
            $HasilSedangB13_D = count($HasilSedangB13_D);
            $HasilSedangB14_A = $this->m_penghitungan->getHasilSedangB14_A();
            $HasilSedangB14_A = count($HasilSedangB14_A);
            $HasilSedangB14_B = $this->m_penghitungan->getHasilSedangB14_B();
            $HasilSedangB14_B = count($HasilSedangB14_B);
            $HasilSedangB14_C = $this->m_penghitungan->getHasilSedangB14_C();
            $HasilSedangB14_C = count($HasilSedangB14_C);
            $HasilSedangB14_D = $this->m_penghitungan->getHasilSedangB14_D();
            $HasilSedangB14_D = count($HasilSedangB14_D);
            $HasilSedangB15_A = $this->m_penghitungan->getHasilSedangB15_A();
            $HasilSedangB15_A = count($HasilSedangB15_A);
            $HasilSedangB15_B = $this->m_penghitungan->getHasilSedangB15_B();
            $HasilSedangB15_B = count($HasilSedangB15_B);
            $HasilSedangB15_C = $this->m_penghitungan->getHasilSedangB15_C();
            $HasilSedangB15_C = count($HasilSedangB15_C);
            $HasilSedangB15_D = $this->m_penghitungan->getHasilSedangB15_D();
            $HasilSedangB15_D = count($HasilSedangB15_D);
            $HasilSedangB16_A = $this->m_penghitungan->getHasilSedangB16_A();
            $HasilSedangB16_A = count($HasilSedangB16_A);
            $HasilSedangB16_B = $this->m_penghitungan->getHasilSedangB16_B();
            $HasilSedangB16_B = count($HasilSedangB16_B);
            $HasilSedangB16_C = $this->m_penghitungan->getHasilSedangB16_C();
            $HasilSedangB16_C = count($HasilSedangB16_C);
            $HasilSedangB16_D = $this->m_penghitungan->getHasilSedangB16_D();
            $HasilSedangB16_D = count($HasilSedangB16_D);
            $HasilSedangB17_A = $this->m_penghitungan->getHasilSedangB17_A();
            $HasilSedangB17_A = count($HasilSedangB17_A);
            $HasilSedangB17_B = $this->m_penghitungan->getHasilSedangB17_B();
            $HasilSedangB17_B = count($HasilSedangB17_B);
            $HasilSedangB17_C = $this->m_penghitungan->getHasilSedangB17_C();
            $HasilSedangB17_C = count($HasilSedangB17_C);
            $HasilSedangB17_D = $this->m_penghitungan->getHasilSedangB17_D();
            $HasilSedangB17_D = count($HasilSedangB17_D);
            $HasilSedangB18_A = $this->m_penghitungan->getHasilSedangB18_A();
            $HasilSedangB18_A = count($HasilSedangB18_A);
            $HasilSedangB18_B = $this->m_penghitungan->getHasilSedangB18_B();
            $HasilSedangB18_B = count($HasilSedangB18_B);
            $HasilSedangB18_C = $this->m_penghitungan->getHasilSedangB18_C();
            $HasilSedangB18_C = count($HasilSedangB18_C);
            $HasilSedangB18_D = $this->m_penghitungan->getHasilSedangB18_D();
            $HasilSedangB18_D = count($HasilSedangB18_D);
            $HasilSedangB19_A = $this->m_penghitungan->getHasilSedangB19_A();
            $HasilSedangB19_A = count($HasilSedangB19_A);
            $HasilSedangB19_B = $this->m_penghitungan->getHasilSedangB19_B();
            $HasilSedangB19_B = count($HasilSedangB19_B);
            $HasilSedangB19_C = $this->m_penghitungan->getHasilSedangB19_C();
            $HasilSedangB19_C = count($HasilSedangB19_C);
            $HasilSedangB19_D = $this->m_penghitungan->getHasilSedangB19_D();
            $HasilSedangB19_D = count($HasilSedangB19_D);
            $HasilSedangB20_A = $this->m_penghitungan->getHasilSedangB20_A();
            $HasilSedangB20_A = count($HasilSedangB20_A);
            $HasilSedangB20_B = $this->m_penghitungan->getHasilSedangB20_B();
            $HasilSedangB20_B = count($HasilSedangB20_B);
            $HasilSedangB20_C = $this->m_penghitungan->getHasilSedangB20_C();
            $HasilSedangB20_C = count($HasilSedangB20_C);
            $HasilSedangB20_D = $this->m_penghitungan->getHasilSedangB20_D();
            $HasilSedangB20_D = count($HasilSedangB20_D);
            $HasilSedangB21_A = $this->m_penghitungan->getHasilSedangB21_A();
            $HasilSedangB21_A = count($HasilSedangB21_A);
            $HasilSedangB21_B = $this->m_penghitungan->getHasilSedangB21_B();
            $HasilSedangB21_B = count($HasilSedangB21_B);
            $HasilSedangB21_C = $this->m_penghitungan->getHasilSedangB21_C();
            $HasilSedangB21_C = count($HasilSedangB21_C);
            $HasilSedangB21_D = $this->m_penghitungan->getHasilSedangB21_D();
            $HasilSedangB21_D = count($HasilSedangB21_D);

        $HasilBerat = $this->m_penghitungan->getHasilBerat();
        $HasilBerat = count($HasilBerat);
            $HasilBeratA1Ortu = $this->m_penghitungan->getHasilBeratA1Ortu();
            $HasilBeratA1Ortu = count($HasilBeratA1Ortu);
            $HasilBeratA1Kos = $this->m_penghitungan->getHasilBeratA1Kos();
            $HasilBeratA1Kos = count($HasilBeratA1Kos);
            $HasilBeratA1Sendiri = $this->m_penghitungan->getHasilBeratA1Sendiri();
            $HasilBeratA1Sendiri = count($HasilBeratA1Sendiri);
            $HasilBeratA2SangatBuruk = $this->m_penghitungan->getHasilBeratA2SangatBuruk();
            $HasilBeratA2SangatBuruk = count($HasilBeratA2SangatBuruk);
            $HasilBeratA2Buruk = $this->m_penghitungan->getHasilBeratA2Buruk();
            $HasilBeratA2Buruk = count($HasilBeratA2Buruk);
            $HasilBeratA2Cukup = $this->m_penghitungan->getHasilBeratA2Cukup();
            $HasilBeratA2Cukup = count($HasilBeratA2Cukup);
            $HasilBeratA2Baik = $this->m_penghitungan->getHasilBeratA2Baik();
            $HasilBeratA2Baik = count($HasilBeratA2Baik);
            $HasilBeratA2SangatBaik = $this->m_penghitungan->getHasilBeratA2SangatBaik();
            $HasilBeratA2SangatBaik = count($HasilBeratA2SangatBaik);
            $HasilBeratA3SangatBuruk = $this->m_penghitungan->getHasilBeratA3SangatBuruk();
            $HasilBeratA3SangatBuruk = count($HasilBeratA3SangatBuruk);
            $HasilBeratA3Buruk = $this->m_penghitungan->getHasilBeratA3Buruk();
            $HasilBeratA3Buruk = count($HasilBeratA3Buruk);
            $HasilBeratA3Cukup = $this->m_penghitungan->getHasilBeratA3Cukup();
            $HasilBeratA3Cukup = count($HasilBeratA3Cukup);
            $HasilBeratA3Baik = $this->m_penghitungan->getHasilBeratA3Baik();
            $HasilBeratA3Baik = count($HasilBeratA3Baik);
            $HasilBeratA3SangatBaik = $this->m_penghitungan->getHasilBeratA3SangatBaik();
            $HasilBeratA3SangatBaik = count($HasilBeratA3SangatBaik);
            $HasilBeratA4SangatBuruk = $this->m_penghitungan->getHasilBeratA4SangatBuruk();
            $HasilBeratA4SangatBuruk = count($HasilBeratA4SangatBuruk);
            $HasilBeratA4Buruk = $this->m_penghitungan->getHasilBeratA4Buruk();
            $HasilBeratA4Buruk = count($HasilBeratA4Buruk);
            $HasilBeratA4Cukup = $this->m_penghitungan->getHasilBeratA4Cukup();
            $HasilBeratA4Cukup = count($HasilBeratA4Cukup);
            $HasilBeratA4Baik = $this->m_penghitungan->getHasilBeratA4Baik();
            $HasilBeratA4Baik = count($HasilBeratA4Baik);
            $HasilBeratA4SangatBaik = $this->m_penghitungan->getHasilBeratA4SangatBaik();
            $HasilBeratA4SangatBaik = count($HasilBeratA4SangatBaik);
            $HasilBeratA5SangatBuruk = $this->m_penghitungan->getHasilBeratA5SangatBuruk();
            $HasilBeratA5SangatBuruk = count($HasilBeratA5SangatBuruk);
            $HasilBeratA5Buruk = $this->m_penghitungan->getHasilBeratA5Buruk();
            $HasilBeratA5Buruk = count($HasilBeratA5Buruk);
            $HasilBeratA5Cukup = $this->m_penghitungan->getHasilBeratA5Cukup();
            $HasilBeratA5Cukup = count($HasilBeratA5Cukup);
            $HasilBeratA5Baik = $this->m_penghitungan->getHasilBeratA5Baik();
            $HasilBeratA5Baik = count($HasilBeratA5Baik);
            $HasilBeratA5SangatBaik = $this->m_penghitungan->getHasilBeratA5SangatBaik();
            $HasilBeratA5SangatBaik = count($HasilBeratA5SangatBaik);
            $HasilBeratA6SangatBuruk = $this->m_penghitungan->getHasilBeratA6SangatBuruk();
            $HasilBeratA6SangatBuruk = count($HasilBeratA6SangatBuruk);
            $HasilBeratA6Buruk = $this->m_penghitungan->getHasilBeratA6Buruk();
            $HasilBeratA6Buruk = count($HasilBeratA6Buruk);
            $HasilBeratA6Cukup = $this->m_penghitungan->getHasilBeratA6Cukup();
            $HasilBeratA6Cukup = count($HasilBeratA6Cukup);
            $HasilBeratA6Baik = $this->m_penghitungan->getHasilBeratA6Baik();
            $HasilBeratA6Baik = count($HasilBeratA6Baik);
            $HasilBeratA6SangatBaik = $this->m_penghitungan->getHasilBeratA6SangatBaik();
            $HasilBeratA6SangatBaik = count($HasilBeratA6SangatBaik);
            $HasilBeratB1_A = $this->m_penghitungan->getHasilBeratB1_A();
            $HasilBeratB1_A = count($HasilBeratB1_A);
            $HasilBeratB1_B = $this->m_penghitungan->getHasilBeratB1_B();
            $HasilBeratB1_B = count($HasilBeratB1_B);
            $HasilBeratB1_C = $this->m_penghitungan->getHasilBeratB1_C();
            $HasilBeratB1_C = count($HasilBeratB1_C);
            $HasilBeratB1_D = $this->m_penghitungan->getHasilBeratB1_D();
            $HasilBeratB1_D = count($HasilBeratB1_D);
            $HasilBeratB2_A = $this->m_penghitungan->getHasilBeratB2_A();
            $HasilBeratB2_A = count($HasilBeratB2_A);
            $HasilBeratB2_B = $this->m_penghitungan->getHasilBeratB2_B();
            $HasilBeratB2_B = count($HasilBeratB2_B);
            $HasilBeratB2_C = $this->m_penghitungan->getHasilBeratB2_C();
            $HasilBeratB2_C = count($HasilBeratB2_C);
            $HasilBeratB2_D = $this->m_penghitungan->getHasilBeratB2_D();
            $HasilBeratB2_D = count($HasilBeratB2_D);
            $HasilBeratB3_A = $this->m_penghitungan->getHasilBeratB3_A();
            $HasilBeratB3_A = count($HasilBeratB3_A);
            $HasilBeratB3_B = $this->m_penghitungan->getHasilBeratB3_B();
            $HasilBeratB3_B = count($HasilBeratB3_B);
            $HasilBeratB3_C = $this->m_penghitungan->getHasilBeratB3_C();
            $HasilBeratB3_C = count($HasilBeratB3_C);
            $HasilBeratB3_D = $this->m_penghitungan->getHasilBeratB3_D();
            $HasilBeratB3_D = count($HasilBeratB3_D);
            $HasilBeratB4_A = $this->m_penghitungan->getHasilBeratB4_A();
            $HasilBeratB4_A = count($HasilBeratB4_A);
            $HasilBeratB4_B = $this->m_penghitungan->getHasilBeratB4_B();
            $HasilBeratB4_B = count($HasilBeratB4_B);
            $HasilBeratB4_C = $this->m_penghitungan->getHasilBeratB4_C();
            $HasilBeratB4_C = count($HasilBeratB4_C);
            $HasilBeratB4_D = $this->m_penghitungan->getHasilBeratB4_D();
            $HasilBeratB4_D = count($HasilBeratB4_D);
            $HasilBeratB5_A = $this->m_penghitungan->getHasilBeratB5_A();
            $HasilBeratB5_A = count($HasilBeratB5_A);
            $HasilBeratB5_B = $this->m_penghitungan->getHasilBeratB5_B();
            $HasilBeratB5_B = count($HasilBeratB5_B);
            $HasilBeratB5_C = $this->m_penghitungan->getHasilBeratB5_C();
            $HasilBeratB5_C = count($HasilBeratB5_C);
            $HasilBeratB5_D = $this->m_penghitungan->getHasilBeratB5_D();
            $HasilBeratB5_D = count($HasilBeratB5_D);
            $HasilBeratB6_A = $this->m_penghitungan->getHasilBeratB6_A();
            $HasilBeratB6_A = count($HasilBeratB6_A);
            $HasilBeratB6_B = $this->m_penghitungan->getHasilBeratB6_B();
            $HasilBeratB6_B = count($HasilBeratB6_B);
            $HasilBeratB6_C = $this->m_penghitungan->getHasilBeratB6_C();
            $HasilBeratB6_C = count($HasilBeratB6_C);
            $HasilBeratB6_D = $this->m_penghitungan->getHasilBeratB6_D();
            $HasilBeratB6_D = count($HasilBeratB6_D);
            $HasilBeratB7_A = $this->m_penghitungan->getHasilBeratB7_A();
            $HasilBeratB7_A = count($HasilBeratB7_A);
            $HasilBeratB7_B = $this->m_penghitungan->getHasilBeratB7_B();
            $HasilBeratB7_B = count($HasilBeratB7_B);
            $HasilBeratB7_C = $this->m_penghitungan->getHasilBeratB7_C();
            $HasilBeratB7_C = count($HasilBeratB7_C);
            $HasilBeratB7_D = $this->m_penghitungan->getHasilBeratB7_D();
            $HasilBeratB7_D = count($HasilBeratB7_D);
            $HasilBeratB8_A = $this->m_penghitungan->getHasilBeratB8_A();
            $HasilBeratB8_A = count($HasilBeratB8_A);
            $HasilBeratB8_B = $this->m_penghitungan->getHasilBeratB8_B();
            $HasilBeratB8_B = count($HasilBeratB8_B);
            $HasilBeratB8_C = $this->m_penghitungan->getHasilBeratB8_C();
            $HasilBeratB8_C = count($HasilBeratB8_C);
            $HasilBeratB8_D = $this->m_penghitungan->getHasilBeratB8_D();
            $HasilBeratB8_D = count($HasilBeratB8_D);
            $HasilBeratB9_A = $this->m_penghitungan->getHasilBeratB9_A();
            $HasilBeratB9_A = count($HasilBeratB9_A);
            $HasilBeratB9_B = $this->m_penghitungan->getHasilBeratB9_B();
            $HasilBeratB9_B = count($HasilBeratB9_B);
            $HasilBeratB9_C = $this->m_penghitungan->getHasilBeratB9_C();
            $HasilBeratB9_C = count($HasilBeratB9_C);
            $HasilBeratB9_D = $this->m_penghitungan->getHasilBeratB9_D();
            $HasilBeratB9_D = count($HasilBeratB9_D);
            $HasilBeratB10_A = $this->m_penghitungan->getHasilBeratB10_A();
            $HasilBeratB10_A = count($HasilBeratB10_A);
            $HasilBeratB10_B = $this->m_penghitungan->getHasilBeratB10_B();
            $HasilBeratB10_B = count($HasilBeratB10_B);
            $HasilBeratB10_C = $this->m_penghitungan->getHasilBeratB10_C();
            $HasilBeratB10_C = count($HasilBeratB10_C);
            $HasilBeratB10_D = $this->m_penghitungan->getHasilBeratB10_D();
            $HasilBeratB10_D = count($HasilBeratB10_D);
            $HasilBeratB11_A = $this->m_penghitungan->getHasilBeratB11_A();
            $HasilBeratB11_A = count($HasilBeratB11_A);
            $HasilBeratB11_B = $this->m_penghitungan->getHasilBeratB11_B();
            $HasilBeratB11_B = count($HasilBeratB11_B);
            $HasilBeratB11_C = $this->m_penghitungan->getHasilBeratB11_C();
            $HasilBeratB11_C = count($HasilBeratB11_C);
            $HasilBeratB11_D = $this->m_penghitungan->getHasilBeratB11_D();
            $HasilBeratB11_D = count($HasilBeratB11_D);
            $HasilBeratB12_A = $this->m_penghitungan->getHasilBeratB12_A();
            $HasilBeratB12_A = count($HasilBeratB12_A);
            $HasilBeratB12_B = $this->m_penghitungan->getHasilBeratB12_B();
            $HasilBeratB12_B = count($HasilBeratB12_B);
            $HasilBeratB12_C = $this->m_penghitungan->getHasilBeratB12_C();
            $HasilBeratB12_C = count($HasilBeratB12_C);
            $HasilBeratB12_D = $this->m_penghitungan->getHasilBeratB12_D();
            $HasilBeratB12_D = count($HasilBeratB12_D);
            $HasilBeratB13_A = $this->m_penghitungan->getHasilBeratB13_A();
            $HasilBeratB13_A = count($HasilBeratB13_A);
            $HasilBeratB13_B = $this->m_penghitungan->getHasilBeratB13_B();
            $HasilBeratB13_B = count($HasilBeratB13_B);
            $HasilBeratB13_C = $this->m_penghitungan->getHasilBeratB13_C();
            $HasilBeratB13_C = count($HasilBeratB13_C);
            $HasilBeratB13_D = $this->m_penghitungan->getHasilBeratB13_D();
            $HasilBeratB13_D = count($HasilBeratB13_D);
            $HasilBeratB14_A = $this->m_penghitungan->getHasilBeratB14_A();
            $HasilBeratB14_A = count($HasilBeratB14_A);
            $HasilBeratB14_B = $this->m_penghitungan->getHasilBeratB14_B();
            $HasilBeratB14_B = count($HasilBeratB14_B);
            $HasilBeratB14_C = $this->m_penghitungan->getHasilBeratB14_C();
            $HasilBeratB14_C = count($HasilBeratB14_C);
            $HasilBeratB14_D = $this->m_penghitungan->getHasilBeratB14_D();
            $HasilBeratB14_D = count($HasilBeratB14_D);
            $HasilBeratB15_A = $this->m_penghitungan->getHasilBeratB15_A();
            $HasilBeratB15_A = count($HasilBeratB15_A);
            $HasilBeratB15_B = $this->m_penghitungan->getHasilBeratB15_B();
            $HasilBeratB15_B = count($HasilBeratB15_B);
            $HasilBeratB15_C = $this->m_penghitungan->getHasilBeratB15_C();
            $HasilBeratB15_C = count($HasilBeratB15_C);
            $HasilBeratB15_D = $this->m_penghitungan->getHasilBeratB15_D();
            $HasilBeratB15_D = count($HasilBeratB15_D);
            $HasilBeratB16_A = $this->m_penghitungan->getHasilBeratB16_A();
            $HasilBeratB16_A = count($HasilBeratB16_A);
            $HasilBeratB16_B = $this->m_penghitungan->getHasilBeratB16_B();
            $HasilBeratB16_B = count($HasilBeratB16_B);
            $HasilBeratB16_C = $this->m_penghitungan->getHasilBeratB16_C();
            $HasilBeratB16_C = count($HasilBeratB16_C);
            $HasilBeratB16_D = $this->m_penghitungan->getHasilBeratB16_D();
            $HasilBeratB16_D = count($HasilBeratB16_D);
            $HasilBeratB17_A = $this->m_penghitungan->getHasilBeratB17_A();
            $HasilBeratB17_A = count($HasilBeratB17_A);
            $HasilBeratB17_B = $this->m_penghitungan->getHasilBeratB17_B();
            $HasilBeratB17_B = count($HasilBeratB17_B);
            $HasilBeratB17_C = $this->m_penghitungan->getHasilBeratB17_C();
            $HasilBeratB17_C = count($HasilBeratB17_C);
            $HasilBeratB17_D = $this->m_penghitungan->getHasilBeratB17_D();
            $HasilBeratB17_D = count($HasilBeratB17_D);
            $HasilBeratB18_A = $this->m_penghitungan->getHasilBeratB18_A();
            $HasilBeratB18_A = count($HasilBeratB18_A);
            $HasilBeratB18_B = $this->m_penghitungan->getHasilBeratB18_B();
            $HasilBeratB18_B = count($HasilBeratB18_B);
            $HasilBeratB18_C = $this->m_penghitungan->getHasilBeratB18_C();
            $HasilBeratB18_C = count($HasilBeratB18_C);
            $HasilBeratB18_D = $this->m_penghitungan->getHasilBeratB18_D();
            $HasilBeratB18_D = count($HasilBeratB18_D);
            $HasilBeratB19_A = $this->m_penghitungan->getHasilBeratB19_A();
            $HasilBeratB19_A = count($HasilBeratB19_A);
            $HasilBeratB19_B = $this->m_penghitungan->getHasilBeratB19_B();
            $HasilBeratB19_B = count($HasilBeratB19_B);
            $HasilBeratB19_C = $this->m_penghitungan->getHasilBeratB19_C();
            $HasilBeratB19_C = count($HasilBeratB19_C);
            $HasilBeratB19_D = $this->m_penghitungan->getHasilBeratB19_D();
            $HasilBeratB19_D = count($HasilBeratB19_D);
            $HasilBeratB20_A = $this->m_penghitungan->getHasilBeratB20_A();
            $HasilBeratB20_A = count($HasilBeratB20_A);
            $HasilBeratB20_B = $this->m_penghitungan->getHasilBeratB20_B();
            $HasilBeratB20_B = count($HasilBeratB20_B);
            $HasilBeratB20_C = $this->m_penghitungan->getHasilBeratB20_C();
            $HasilBeratB20_C = count($HasilBeratB20_C);
            $HasilBeratB20_D = $this->m_penghitungan->getHasilBeratB20_D();
            $HasilBeratB20_D = count($HasilBeratB20_D);
            $HasilBeratB21_A = $this->m_penghitungan->getHasilBeratB21_A();
            $HasilBeratB21_A = count($HasilBeratB21_A);
            $HasilBeratB21_B = $this->m_penghitungan->getHasilBeratB21_B();
            $HasilBeratB21_B = count($HasilBeratB21_B);
            $HasilBeratB21_C = $this->m_penghitungan->getHasilBeratB21_C();
            $HasilBeratB21_C = count($HasilBeratB21_C);
            $HasilBeratB21_D = $this->m_penghitungan->getHasilBeratB21_D();
            $HasilBeratB21_D = count($HasilBeratB21_D);

            if($this->session->userdata('id') == $id || $this->session->userdata('role')=='A' ){
                $data['user'] = $this->m_datatest->getById($id);
                $data['All'] = $All;
                $data['HasilGangguanMood'] = $HasilGangguanMood;
                $data['HasilRingan'] = $HasilRingan;
                $data['HasilSedang'] = $HasilSedang;
                $data['HasilBerat'] = $HasilBerat;
                $data['P_HasilGangguanMood'] = $HasilGangguanMood/$All;
                $data['P_HasilRingan'] = $HasilRingan/$All;
                $data['P_HasilSedang'] = $HasilSedang/$All;
                $data['P_HasilBerat'] = $HasilBerat/$All;

                if ($data['user']['a1']=="Bersama Orang Tua"){
                    $data['A1GangguanMood'] = $HasilGangguanMoodA1Ortu;
                    $data['A1Ringan'] = $HasilRinganA1Ortu;
                    $data['A1Sedang'] = $HasilSedangA1Ortu;
                    $data['A1Berat'] = $HasilBeratA1Ortu;
                    $data['P_A1GangguanMood'] = $HasilGangguanMoodA1Ortu/$HasilGangguanMood;
                    $data['P_A1Ringan'] = $HasilRinganA1Ortu/$HasilRingan;
                    $data['P_A1Sedang'] = $HasilSedangA1Ortu/$HasilSedang;
                    $data['P_A1Berat'] = $HasilBeratA1Ortu/$HasilBerat;
                }
                else if ($data['user']['a1']=="Kos"){
                    $data['A1GangguanMood'] = $HasilGangguanMoodA1Kos;
                    $data['A1Ringan'] = $HasilRinganA1Kos;
                    $data['A1Sedang'] = $HasilSedangA1Kos;
                    $data['A1Berat'] = $HasilBeratA1Kos;
                    $data['P_A1GangguanMood'] = $HasilGangguanMoodA1Kos/$HasilGangguanMood;
                    $data['P_A1Ringan'] = $HasilRinganA1Kos/$HasilRingan;
                    $data['P_A1Sedang'] = $HasilSedangA1Kos/$HasilSedang;
                    $data['P_A1Berat'] = $HasilBeratA1Kos/$HasilBerat;
                }
                else if ($data['user']['a1']=="Rumah Sendiri"){
                    $data['A1GangguanMood'] = $HasilGangguanMoodA1Sendiri;
                    $data['A1Ringan'] = $HasilRinganA1Sendiri;
                    $data['A1Sedang'] = $HasilSedangA1Sendiri;
                    $data['A1Berat'] = $HasilBeratA1Sendiri;
                    $data['P_A1GangguanMood'] = $HasilGangguanMoodA1Sendiri/$HasilGangguanMood;
                    $data['P_A1Ringan'] = $HasilRinganA1Sendiri/$HasilRingan;
                    $data['P_A1Sedang'] = $HasilSedangA1Sendiri/$HasilSedang;
                    $data['P_A1Berat'] = $HasilBeratA1Sendiri/$HasilBerat;
                }
                
                if ($data['user']['a2']=="Sangat Buruk"){
                    $data['A2GangguanMood'] = $HasilGangguanMoodA2SangatBuruk;
                    $data['A2Ringan'] = $HasilRinganA2SangatBuruk;
                    $data['A2Sedang'] = $HasilSedangA2SangatBuruk;
                    $data['A2Berat'] = $HasilBeratA2SangatBuruk;
                    $data['P_A2GangguanMood'] = $HasilGangguanMoodA2SangatBuruk/$HasilGangguanMood;
                    $data['P_A2Ringan'] = $HasilRinganA2SangatBuruk/$HasilRingan;
                    $data['P_A2Sedang'] = $HasilSedangA2SangatBuruk/$HasilSedang;
                    $data['P_A2Berat'] = $HasilBeratA2SangatBuruk/$HasilBerat;
                }
                else if ($data['user']['a2']=="Buruk"){
                    $data['A2GangguanMood'] = $HasilGangguanMoodA2Buruk;
                    $data['A2Ringan'] = $HasilRinganA2Buruk;
                    $data['A2Sedang'] = $HasilSedangA2Buruk;
                    $data['A2Berat'] = $HasilBeratA2Buruk;
                    $data['P_A2GangguanMood'] = $HasilGangguanMoodA2Buruk/$HasilGangguanMood;
                    $data['P_A2Ringan'] = $HasilRinganA2Buruk/$HasilRingan;
                    $data['P_A2Sedang'] = $HasilSedangA2Buruk/$HasilSedang;
                    $data['P_A2Berat'] = $HasilBeratA2Buruk/$HasilBerat;
                }
                else if ($data['user']['a2']=="Cukup"){
                    $data['A2GangguanMood'] = $HasilGangguanMoodA2Cukup;
                    $data['A2Ringan'] = $HasilRinganA2Cukup;
                    $data['A2Sedang'] = $HasilSedangA2Cukup;
                    $data['A2Berat'] = $HasilBeratA2Cukup;
                    $data['P_A2GangguanMood'] = $HasilGangguanMoodA2Cukup/$HasilGangguanMood;
                    $data['P_A2Ringan'] = $HasilRinganA2Cukup/$HasilRingan;
                    $data['P_A2Sedang'] = $HasilSedangA2Cukup/$HasilSedang;
                    $data['P_A2Berat'] = $HasilBeratA2Cukup/$HasilBerat;
                }
                else if ($data['user']['a2']=="Baik"){
                    $data['A2GangguanMood'] = $HasilGangguanMoodA2Baik;
                    $data['A2Ringan'] = $HasilRinganA2Baik;
                    $data['A2Sedang'] = $HasilSedangA2Baik;
                    $data['A2Berat'] = $HasilBeratA2Baik;
                    $data['P_A2GangguanMood'] = $HasilGangguanMoodA2Baik/$HasilGangguanMood;
                    $data['P_A2Ringan'] = $HasilRinganA2Baik/$HasilRingan;
                    $data['P_A2Sedang'] = $HasilSedangA2Baik/$HasilSedang;
                    $data['P_A2Berat'] = $HasilBeratA2Baik/$HasilBerat;
                }
                else if ($data['user']['a2']=="Sangat Baik"){
                    $data['A2GangguanMood'] = $HasilGangguanMoodA2SangatBaik;
                    $data['A2Ringan'] = $HasilRinganA2SangatBaik;
                    $data['A2Sedang'] = $HasilSedangA2SangatBaik;
                    $data['A2Berat'] = $HasilBeratA2SangatBaik;
                    $data['P_A2GangguanMood'] = $HasilGangguanMoodA2SangatBaik/$HasilGangguanMood;
                    $data['P_A2Ringan'] = $HasilRinganA2SangatBaik/$HasilRingan;
                    $data['P_A2Sedang'] = $HasilSedangA2SangatBaik/$HasilSedang;
                    $data['P_A2Berat'] = $HasilBeratA2SangatBaik/$HasilBerat;
                }

                if ($data['user']['a3']=="Sangat Buruk"){
                    $data['A3GangguanMood'] = $HasilGangguanMoodA3SangatBuruk;
                    $data['A3Ringan'] = $HasilRinganA3SangatBuruk;
                    $data['A3Sedang'] = $HasilSedangA3SangatBuruk;
                    $data['A3Berat'] = $HasilBeratA3SangatBuruk;
                    $data['P_A3GangguanMood'] = $HasilGangguanMoodA3SangatBuruk/$HasilGangguanMood;
                    $data['P_A3Ringan'] = $HasilRinganA3SangatBuruk/$HasilRingan;
                    $data['P_A3Sedang'] = $HasilSedangA3SangatBuruk/$HasilSedang;
                    $data['P_A3Berat'] = $HasilBeratA3SangatBuruk/$HasilBerat;
                }
                else if ($data['user']['a3']=="Buruk"){
                    $data['A3GangguanMood'] = $HasilGangguanMoodA3Buruk;
                    $data['A3Ringan'] = $HasilRinganA3Buruk;
                    $data['A3Sedang'] = $HasilSedangA3Buruk;
                    $data['A3Berat'] = $HasilBeratA3Buruk;
                    $data['P_A3GangguanMood'] = $HasilGangguanMoodA3Buruk/$HasilGangguanMood;
                    $data['P_A3Ringan'] = $HasilRinganA3Buruk/$HasilRingan;
                    $data['P_A3Sedang'] = $HasilSedangA3Buruk/$HasilSedang;
                    $data['P_A3Berat'] = $HasilBeratA3Buruk/$HasilBerat;
                }
                else if ($data['user']['a3']=="Cukup"){
                    $data['A3GangguanMood'] = $HasilGangguanMoodA3Cukup;
                    $data['A3Ringan'] = $HasilRinganA3Cukup;
                    $data['A3Sedang'] = $HasilSedangA3Cukup;
                    $data['A3Berat'] = $HasilBeratA3Cukup;
                    $data['P_A3GangguanMood'] = $HasilGangguanMoodA3Cukup/$HasilGangguanMood;
                    $data['P_A3Ringan'] = $HasilRinganA3Cukup/$HasilRingan;
                    $data['P_A3Sedang'] = $HasilSedangA3Cukup/$HasilSedang;
                    $data['P_A3Berat'] = $HasilBeratA3Cukup/$HasilBerat;
                }
                else if ($data['user']['a3']=="Baik"){
                    $data['A3GangguanMood'] = $HasilGangguanMoodA3Baik;
                    $data['A3Ringan'] = $HasilRinganA3Baik;
                    $data['A3Sedang'] = $HasilSedangA3Baik;
                    $data['A3Berat'] = $HasilBeratA3Baik;
                    $data['P_A3GangguanMood'] = $HasilGangguanMoodA3Baik/$HasilGangguanMood;
                    $data['P_A3Ringan'] = $HasilRinganA3Baik/$HasilRingan;
                    $data['P_A3Sedang'] = $HasilSedangA3Baik/$HasilSedang;
                    $data['P_A3Berat'] = $HasilBeratA3Baik/$HasilBerat;
                }
                else if ($data['user']['a3']=="Sangat Baik"){
                    $data['A3GangguanMood'] = $HasilGangguanMoodA3SangatBaik;
                    $data['A3Ringan'] = $HasilRinganA3SangatBaik;
                    $data['A3Sedang'] = $HasilSedangA3SangatBaik;
                    $data['A3Berat'] = $HasilBeratA3SangatBaik;
                    $data['P_A3GangguanMood'] = $HasilGangguanMoodA3SangatBaik/$HasilGangguanMood;
                    $data['P_A3Ringan'] = $HasilRinganA3SangatBaik/$HasilRingan;
                    $data['P_A3Sedang'] = $HasilSedangA3SangatBaik/$HasilSedang;
                    $data['P_A3Berat'] = $HasilBeratA3SangatBaik/$HasilBerat;
                }

                if ($data['user']['a4']=="Sangat Buruk"){
                    $data['A4GangguanMood'] = $HasilGangguanMoodA4SangatBuruk;
                    $data['A4Ringan'] = $HasilRinganA4SangatBuruk;
                    $data['A4Sedang'] = $HasilSedangA4SangatBuruk;
                    $data['A4Berat'] = $HasilBeratA4SangatBuruk;
                    $data['P_A4GangguanMood'] = $HasilGangguanMoodA4SangatBuruk/$HasilGangguanMood;
                    $data['P_A4Ringan'] = $HasilRinganA4SangatBuruk/$HasilRingan;
                    $data['P_A4Sedang'] = $HasilSedangA4SangatBuruk/$HasilSedang;
                    $data['P_A4Berat'] = $HasilBeratA4SangatBuruk/$HasilBerat;
                }
                else if ($data['user']['a4']=="Buruk"){
                    $data['A4GangguanMood'] = $HasilGangguanMoodA4Buruk;
                    $data['A4Ringan'] = $HasilRinganA4Buruk;
                    $data['A4Sedang'] = $HasilSedangA4Buruk;
                    $data['A4Berat'] = $HasilBeratA4Buruk;
                    $data['P_A4GangguanMood'] = $HasilGangguanMoodA4Buruk/$HasilGangguanMood;
                    $data['P_A4Ringan'] = $HasilRinganA4Buruk/$HasilRingan;
                    $data['P_A4Sedang'] = $HasilSedangA4Buruk/$HasilSedang;
                    $data['P_A4Berat'] = $HasilBeratA4Buruk/$HasilBerat;
                }
                else if ($data['user']['a4']=="Cukup"){
                    $data['A4GangguanMood'] = $HasilGangguanMoodA4Cukup;
                    $data['A4Ringan'] = $HasilRinganA4Cukup;
                    $data['A4Sedang'] = $HasilSedangA4Cukup;
                    $data['A4Berat'] = $HasilBeratA4Cukup;
                    $data['P_A4GangguanMood'] = $HasilGangguanMoodA4Cukup/$HasilGangguanMood;
                    $data['P_A4Ringan'] = $HasilRinganA4Cukup/$HasilRingan;
                    $data['P_A4Sedang'] = $HasilSedangA4Cukup/$HasilSedang;
                    $data['P_A4Berat'] = $HasilBeratA4Cukup/$HasilBerat;
                }
                else if ($data['user']['a4']=="Baik"){
                    $data['A4GangguanMood'] = $HasilGangguanMoodA4Baik;
                    $data['A4Ringan'] = $HasilRinganA4Baik;
                    $data['A4Sedang'] = $HasilSedangA4Baik;
                    $data['A4Berat'] = $HasilBeratA4Baik;
                    $data['P_A4GangguanMood'] = $HasilGangguanMoodA4Baik/$HasilGangguanMood;
                    $data['P_A4Ringan'] = $HasilRinganA4Baik/$HasilRingan;
                    $data['P_A4Sedang'] = $HasilSedangA4Baik/$HasilSedang;
                    $data['P_A4Berat'] = $HasilBeratA4Baik/$HasilBerat;
                }
                else if ($data['user']['a4']=="Sangat Baik"){
                    $data['A4GangguanMood'] = $HasilGangguanMoodA4SangatBaik;
                    $data['A4Ringan'] = $HasilRinganA4SangatBaik;
                    $data['A4Sedang'] = $HasilSedangA4SangatBaik;
                    $data['A4Berat'] = $HasilBeratA4SangatBaik;
                    $data['P_A4GangguanMood'] = $HasilGangguanMoodA4SangatBaik/$HasilGangguanMood;
                    $data['P_A4Ringan'] = $HasilRinganA4SangatBaik/$HasilRingan;
                    $data['P_A4Sedang'] = $HasilSedangA4SangatBaik/$HasilSedang;
                    $data['P_A4Berat'] = $HasilBeratA4SangatBaik/$HasilBerat;
                }
                if ($data['user']['a5']=="Sangat Buruk"){
                    $data['A5GangguanMood'] = $HasilGangguanMoodA5SangatBuruk;
                    $data['A5Ringan'] = $HasilRinganA5SangatBuruk;
                    $data['A5Sedang'] = $HasilSedangA5SangatBuruk;
                    $data['A5Berat'] = $HasilBeratA5SangatBuruk;
                    $data['P_A5GangguanMood'] = $HasilGangguanMoodA5SangatBuruk/$HasilGangguanMood;
                    $data['P_A5Ringan'] = $HasilRinganA5SangatBuruk/$HasilRingan;
                    $data['P_A5Sedang'] = $HasilSedangA5SangatBuruk/$HasilSedang;
                    $data['P_A5Berat'] = $HasilBeratA5SangatBuruk/$HasilBerat;
                }
                else if ($data['user']['a5']=="Buruk"){
                    $data['A5GangguanMood'] = $HasilGangguanMoodA5Buruk;
                    $data['A5Ringan'] = $HasilRinganA5Buruk;
                    $data['A5Sedang'] = $HasilSedangA5Buruk;
                    $data['A5Berat'] = $HasilBeratA5Buruk;
                    $data['P_A5GangguanMood'] = $HasilGangguanMoodA5Buruk/$HasilGangguanMood;
                    $data['P_A5Ringan'] = $HasilRinganA5Buruk/$HasilRingan;
                    $data['P_A5Sedang'] = $HasilSedangA5Buruk/$HasilSedang;
                    $data['P_A5Berat'] = $HasilBeratA5Buruk/$HasilBerat;
                }
                else if ($data['user']['a5']=="Cukup"){
                    $data['A5GangguanMood'] = $HasilGangguanMoodA5Cukup;
                    $data['A5Ringan'] = $HasilRinganA5Cukup;
                    $data['A5Sedang'] = $HasilSedangA5Cukup;
                    $data['A5Berat'] = $HasilBeratA5Cukup;
                    $data['P_A5GangguanMood'] = $HasilGangguanMoodA5Cukup/$HasilGangguanMood;
                    $data['P_A5Ringan'] = $HasilRinganA5Cukup/$HasilRingan;
                    $data['P_A5Sedang'] = $HasilSedangA5Cukup/$HasilSedang;
                    $data['P_A5Berat'] = $HasilBeratA5Cukup/$HasilBerat;
                }
                else if ($data['user']['a5']=="Baik"){
                    $data['A5GangguanMood'] = $HasilGangguanMoodA5Baik;
                    $data['A5Ringan'] = $HasilRinganA5Baik;
                    $data['A5Sedang'] = $HasilSedangA5Baik;
                    $data['A5Berat'] = $HasilBeratA5Baik;
                    $data['P_A5GangguanMood'] = $HasilGangguanMoodA5Baik/$HasilGangguanMood;
                    $data['P_A5Ringan'] = $HasilRinganA5Baik/$HasilRingan;
                    $data['P_A5Sedang'] = $HasilSedangA5Baik/$HasilSedang;
                    $data['P_A5Berat'] = $HasilBeratA5Baik/$HasilBerat;
                }
                else if ($data['user']['a5']=="Sangat Baik"){
                    $data['A5GangguanMood'] = $HasilGangguanMoodA5SangatBaik;
                    $data['A5Ringan'] = $HasilRinganA5SangatBaik;
                    $data['A5Sedang'] = $HasilSedangA5SangatBaik;
                    $data['A5Berat'] = $HasilBeratA5SangatBaik;
                    $data['P_A5GangguanMood'] = $HasilGangguanMoodA5SangatBaik/$HasilGangguanMood;
                    $data['P_A5Ringan'] = $HasilRinganA5SangatBaik/$HasilRingan;
                    $data['P_A5Sedang'] = $HasilSedangA5SangatBaik/$HasilSedang;
                    $data['P_A5Berat'] = $HasilBeratA5SangatBaik/$HasilBerat;
                }

                if ($data['user']['a6']=="Sangat Buruk"){
                    $data['A6GangguanMood'] = $HasilGangguanMoodA6SangatBuruk;
                    $data['A6Ringan'] = $HasilRinganA6SangatBuruk;
                    $data['A6Sedang'] = $HasilSedangA6SangatBuruk;
                    $data['A6Berat'] = $HasilBeratA6SangatBuruk;
                    $data['P_A6GangguanMood'] = $HasilGangguanMoodA6SangatBuruk/$HasilGangguanMood;
                    $data['P_A6Ringan'] = $HasilRinganA6SangatBuruk/$HasilRingan;
                    $data['P_A6Sedang'] = $HasilSedangA6SangatBuruk/$HasilSedang;
                    $data['P_A6Berat'] = $HasilBeratA6SangatBuruk/$HasilBerat;
                }
                else if ($data['user']['a6']=="Buruk"){
                    $data['A6GangguanMood'] = $HasilGangguanMoodA6Buruk;
                    $data['A6Ringan'] = $HasilRinganA6Buruk;
                    $data['A6Sedang'] = $HasilSedangA6Buruk;
                    $data['A6Berat'] = $HasilBeratA6Buruk;
                    $data['P_A6GangguanMood'] = $HasilGangguanMoodA6Buruk/$HasilGangguanMood;
                    $data['P_A6Ringan'] = $HasilRinganA6Buruk/$HasilRingan;
                    $data['P_A6Sedang'] = $HasilSedangA6Buruk/$HasilSedang;
                    $data['P_A6Berat'] = $HasilBeratA6Buruk/$HasilBerat;
                }
                else if ($data['user']['a6']=="Cukup"){
                    $data['A6GangguanMood'] = $HasilGangguanMoodA6Cukup;
                    $data['A6Ringan'] = $HasilRinganA6Cukup;
                    $data['A6Sedang'] = $HasilSedangA6Cukup;
                    $data['A6Berat'] = $HasilBeratA6Cukup;
                    $data['P_A6GangguanMood'] = $HasilGangguanMoodA6Cukup/$HasilGangguanMood;
                    $data['P_A6Ringan'] = $HasilRinganA6Cukup/$HasilRingan;
                    $data['P_A6Sedang'] = $HasilSedangA6Cukup/$HasilSedang;
                    $data['P_A6Berat'] = $HasilBeratA6Cukup/$HasilBerat;
                }
                else if ($data['user']['a6']=="Baik"){
                    $data['A6GangguanMood'] = $HasilGangguanMoodA6Baik;
                    $data['A6Ringan'] = $HasilRinganA6Baik;
                    $data['A6Sedang'] = $HasilSedangA6Baik;
                    $data['A6Berat'] = $HasilBeratA6Baik;
                    $data['P_A6GangguanMood'] = $HasilGangguanMoodA6Baik/$HasilGangguanMood;
                    $data['P_A6Ringan'] = $HasilRinganA6Baik/$HasilRingan;
                    $data['P_A6Sedang'] = $HasilSedangA6Baik/$HasilSedang;
                    $data['P_A6Berat'] = $HasilBeratA6Baik/$HasilBerat;
                }
                else if ($data['user']['a6']=="Sangat Baik"){
                    $data['A6GangguanMood'] = $HasilGangguanMoodA6SangatBaik;
                    $data['A6Ringan'] = $HasilRinganA6SangatBaik;
                    $data['A6Sedang'] = $HasilSedangA6SangatBaik;
                    $data['A6Berat'] = $HasilBeratA6SangatBaik;
                    $data['P_A6GangguanMood'] = $HasilGangguanMoodA6SangatBaik/$HasilGangguanMood;
                    $data['P_A6Ringan'] = $HasilRinganA6SangatBaik/$HasilRingan;
                    $data['P_A6Sedang'] = $HasilSedangA6SangatBaik/$HasilSedang;
                    $data['P_A6Berat'] = $HasilBeratA6SangatBaik/$HasilBerat;
                }
                if ($data['user']['b1']=="Saya tidak merasa sedih"){
                    $data['B1GangguanMood'] = $HasilGangguanMoodB1_A;
                    $data['B1Ringan'] = $HasilRinganB1_A;
                    $data['B1Sedang'] = $HasilSedangB1_A;
                    $data['B1Berat'] = $HasilBeratB1_A;
                    $data['P_B1GangguanMood'] = $HasilGangguanMoodB1_A/$HasilGangguanMood;
                    $data['P_B1Ringan'] = $HasilRinganB1_A/$HasilRingan;
                    $data['P_B1Sedang'] = $HasilSedangB1_A/$HasilSedang;
                    $data['P_B1Berat'] = $HasilBeratB1_A/$HasilBerat;
                }
                else if ($data['user']['b1']=="Saya merasa sedih"){
                    $data['B1GangguanMood'] = $HasilGangguanMoodB1_B;
                    $data['B1Ringan'] = $HasilRinganB1_B;
                    $data['B1Sedang'] = $HasilSedangB1_B;
                    $data['B1Berat'] = $HasilBeratB1_B;
                    $data['P_B1GangguanMood'] = $HasilGangguanMoodB1_B/$HasilGangguanMood;
                    $data['P_B1Ringan'] = $HasilRinganB1_B/$HasilRingan;
                    $data['P_B1Sedang'] = $HasilSedangB1_B/$HasilSedang;
                    $data['P_B1Berat'] = $HasilBeratB1_B/$HasilBerat;
                }
                else if ($data['user']['b1']=="Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu"){
                    $data['B1GangguanMood'] = $HasilGangguanMoodB1_C;
                    $data['B1Ringan'] = $HasilRinganB1_C;
                    $data['B1Sedang'] = $HasilSedangB1_C;
                    $data['B1Berat'] = $HasilBeratB1_C;
                    $data['P_B1GangguanMood'] = $HasilGangguanMoodB1_C/$HasilGangguanMood;
                    $data['P_B1Ringan'] = $HasilRinganB1_C/$HasilRingan;
                    $data['P_B1Sedang'] = $HasilSedangB1_C/$HasilSedang;
                    $data['P_B1Berat'] = $HasilBeratB1_C/$HasilBerat;
                }
                else if ($data['user']['b1']=="Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya"){
                    $data['B1GangguanMood'] = $HasilGangguanMoodB1_D;
                    $data['B1Ringan'] = $HasilRinganB1_D;
                    $data['B1Sedang'] = $HasilSedangB1_D;
                    $data['B1Berat'] = $HasilBeratB1_D;
                    $data['P_B1GangguanMood'] = $HasilGangguanMoodB1_D/$HasilGangguanMood;
                    $data['P_B1Ringan'] = $HasilRinganB1_D/$HasilRingan;
                    $data['P_B1Sedang'] = $HasilSedangB1_D/$HasilSedang;
                    $data['P_B1Berat'] = $HasilBeratB1_D/$HasilBerat;
                }
                if ($data['user']['b2']=="Saya tidak terlalu berkecil hati mengenai masa depan"){
                    $data['B2GangguanMood'] = $HasilGangguanMoodB2_A;
                    $data['B2Ringan'] = $HasilRinganB2_A;
                    $data['B2Sedang'] = $HasilSedangB2_A;
                    $data['B2Berat'] = $HasilBeratB2_A;
                    $data['P_B2GangguanMood'] = $HasilGangguanMoodB2_A/$HasilGangguanMood;
                    $data['P_B2Ringan'] = $HasilRinganB2_A/$HasilRingan;
                    $data['P_B2Sedang'] = $HasilSedangB2_A/$HasilSedang;
                    $data['P_B2Berat'] = $HasilBeratB2_A/$HasilBerat;
                }
                else if ($data['user']['b2']=="Saya merasa kecil hati mengenai masa depan"){
                    $data['B2GangguanMood'] = $HasilGangguanMoodB2_B;
                    $data['B2Ringan'] = $HasilRinganB2_B;
                    $data['B2Sedang'] = $HasilSedangB2_B;
                    $data['B2Berat'] = $HasilBeratB2_B;
                    $data['P_B2GangguanMood'] = $HasilGangguanMoodB2_B/$HasilGangguanMood;
                    $data['P_B2Ringan'] = $HasilRinganB2_B/$HasilRingan;
                    $data['P_B2Sedang'] = $HasilSedangB2_B/$HasilSedang;
                    $data['P_B2Berat'] = $HasilBeratB2_B/$HasilBerat;
                }
                else if ($data['user']['b2']=="Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan"){
                    $data['B2GangguanMood'] = $HasilGangguanMoodB2_C;
                    $data['B2Ringan'] = $HasilRinganB2_C;
                    $data['B2Sedang'] = $HasilSedangB2_C;
                    $data['B2Berat'] = $HasilBeratB2_C;
                    $data['P_B2GangguanMood'] = $HasilGangguanMoodB2_C/$HasilGangguanMood;
                    $data['P_B2Ringan'] = $HasilRinganB2_C/$HasilRingan;
                    $data['P_B2Sedang'] = $HasilSedangB2_C/$HasilSedang;
                    $data['P_B2Berat'] = $HasilBeratB2_C/$HasilBerat;
                }
                else if ($data['user']['b2']=="Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik"){
                    $data['B2GangguanMood'] = $HasilGangguanMoodB2_D;
                    $data['B2Ringan'] = $HasilRinganB2_D;
                    $data['B2Sedang'] = $HasilSedangB2_D;
                    $data['B2Berat'] = $HasilBeratB2_D;
                    $data['P_B2GangguanMood'] = $HasilGangguanMoodB2_D/$HasilGangguanMood;
                    $data['P_B2Ringan'] = $HasilRinganB2_D/$HasilRingan;
                    $data['P_B2Sedang'] = $HasilSedangB2_D/$HasilSedang;
                    $data['P_B2Berat'] = $HasilBeratB2_D/$HasilBerat;
                }
                if ($data['user']['b3']=="Saya tidak menganggap diri saya sebagai orang yang gagal"){
                    $data['B3GangguanMood'] = $HasilGangguanMoodB3_A;
                    $data['B3Ringan'] = $HasilRinganB3_A;
                    $data['B3Sedang'] = $HasilSedangB3_A;
                    $data['B3Berat'] = $HasilBeratB3_A;
                    $data['P_B3GangguanMood'] = $HasilGangguanMoodB3_A/$HasilGangguanMood;
                    $data['P_B3Ringan'] = $HasilRinganB3_A/$HasilRingan;
                    $data['P_B3Sedang'] = $HasilSedangB3_A/$HasilSedang;
                    $data['P_B3Berat'] = $HasilBeratB3_A/$HasilBerat;
                }
                else if ($data['user']['b3']=="Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang"){
                    $data['B3GangguanMood'] = $HasilGangguanMoodB3_B;
                    $data['B3Ringan'] = $HasilRinganB3_B;
                    $data['B3Sedang'] = $HasilSedangB3_B;
                    $data['B3Berat'] = $HasilBeratB3_B;
                    $data['P_B3GangguanMood'] = $HasilGangguanMoodB3_B/$HasilGangguanMood;
                    $data['P_B3Ringan'] = $HasilRinganB3_B/$HasilRingan;
                    $data['P_B3Sedang'] = $HasilSedangB3_B/$HasilSedang;
                    $data['P_B3Berat'] = $HasilBeratB3_B/$HasilBerat;
                }
                else if ($data['user']['b3']=="Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan"){
                    $data['B3GangguanMood'] = $HasilGangguanMoodB3_C;
                    $data['B3Ringan'] = $HasilRinganB3_C;
                    $data['B3Sedang'] = $HasilSedangB3_C;
                    $data['B3Berat'] = $HasilBeratB3_C;
                    $data['P_B3GangguanMood'] = $HasilGangguanMoodB3_C/$HasilGangguanMood;
                    $data['P_B3Ringan'] = $HasilRinganB3_C/$HasilRingan;
                    $data['P_B3Sedang'] = $HasilSedangB3_C/$HasilSedang;
                    $data['P_B3Berat'] = $HasilBeratB3_C/$HasilBerat;
                }
                else if ($data['user']['b3']=="Saya merasa bahwa saya adalah orang yang gagal total"){
                    $data['B3GangguanMood'] = $HasilGangguanMoodB3_D;
                    $data['B3Ringan'] = $HasilRinganB3_D;
                    $data['B3Sedang'] = $HasilSedangB3_D;
                    $data['B3Berat'] = $HasilBeratB3_D;
                    $data['P_B3GangguanMood'] = $HasilGangguanMoodB3_D/$HasilGangguanMood;
                    $data['P_B3Ringan'] = $HasilRinganB3_D/$HasilRingan;
                    $data['P_B3Sedang'] = $HasilSedangB3_D/$HasilSedang;
                    $data['P_B3Berat'] = $HasilBeratB3_D/$HasilBerat;
                }
                if ($data['user']['b4']=="Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya"){
                    $data['B4GangguanMood'] = $HasilGangguanMoodB4_A;
                    $data['B4Ringan'] = $HasilRinganB4_A;
                    $data['B4Sedang'] = $HasilSedangB4_A;
                    $data['B4Berat'] = $HasilBeratB4_A;
                    $data['P_B4GangguanMood'] = $HasilGangguanMoodB4_A/$HasilGangguanMood;
                    $data['P_B4Ringan'] = $HasilRinganB4_A/$HasilRingan;
                    $data['P_B4Sedang'] = $HasilSedangB4_A/$HasilSedang;
                    $data['P_B4Berat'] = $HasilBeratB4_A/$HasilBerat;
                }
                else if ($data['user']['b4']=="Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu"){
                    $data['B4GangguanMood'] = $HasilGangguanMoodB4_B;
                    $data['B4Ringan'] = $HasilRinganB4_B;
                    $data['B4Sedang'] = $HasilSedangB4_B;
                    $data['B4Berat'] = $HasilBeratB4_B;
                    $data['P_B4GangguanMood'] = $HasilGangguanMoodB4_B/$HasilGangguanMood;
                    $data['P_B4Ringan'] = $HasilRinganB4_B/$HasilRingan;
                    $data['P_B4Sedang'] = $HasilSedangB4_B/$HasilSedang;
                    $data['P_B4Berat'] = $HasilBeratB4_B/$HasilBerat;
                }
                else if ($data['user']['b4']=="Saya tidak memperoleh kepuasan sejati dari apapun lagi"){
                    $data['B4GangguanMood'] = $HasilGangguanMoodB4_C;
                    $data['B4Ringan'] = $HasilRinganB4_C;
                    $data['B4Sedang'] = $HasilSedangB4_C;
                    $data['B4Berat'] = $HasilBeratB4_C;
                    $data['P_B4GangguanMood'] = $HasilGangguanMoodB4_C/$HasilGangguanMood;
                    $data['P_B4Ringan'] = $HasilRinganB4_C/$HasilRingan;
                    $data['P_B4Sedang'] = $HasilSedangB4_C/$HasilSedang;
                    $data['P_B4Berat'] = $HasilBeratB4_C/$HasilBerat;
                }
                else if ($data['user']['b4']=="Saya tidak puas atau bosan dengan segalanya"){
                    $data['B4GangguanMood'] = $HasilGangguanMoodB4_D;
                    $data['B4Ringan'] = $HasilRinganB4_D;
                    $data['B4Sedang'] = $HasilSedangB4_D;
                    $data['B4Berat'] = $HasilBeratB4_D;
                    $data['P_B4GangguanMood'] = $HasilGangguanMoodB4_D/$HasilGangguanMood;
                    $data['P_B4Ringan'] = $HasilRinganB4_D/$HasilRingan;
                    $data['P_B4Sedang'] = $HasilSedangB4_D/$HasilSedang;
                    $data['P_B4Berat'] = $HasilBeratB4_D/$HasilBerat;
                }
                if ($data['user']['b5']=="Saya tidak terlalu merasa bersalah"){
                    $data['B5GangguanMood'] = $HasilGangguanMoodB5_A;
                    $data['B5Ringan'] = $HasilRinganB5_A;
                    $data['B5Sedang'] = $HasilSedangB5_A;
                    $data['B5Berat'] = $HasilBeratB5_A;
                    $data['P_B5GangguanMood'] = $HasilGangguanMoodB5_A/$HasilGangguanMood;
                    $data['P_B5Ringan'] = $HasilRinganB5_A/$HasilRingan;
                    $data['P_B5Sedang'] = $HasilSedangB5_A/$HasilSedang;
                    $data['P_B5Berat'] = $HasilBeratB5_A/$HasilBerat;
                }
                else if ($data['user']['b5']=="Saya merasa bersalah di hampir seluruh waktu"){
                    $data['B5GangguanMood'] = $HasilGangguanMoodB5_B;
                    $data['B5Ringan'] = $HasilRinganB5_B;
                    $data['B5Sedang'] = $HasilSedangB5_B;
                    $data['B5Berat'] = $HasilBeratB5_B;
                    $data['P_B5GangguanMood'] = $HasilGangguanMoodB5_B/$HasilGangguanMood;
                    $data['P_B5Ringan'] = $HasilRinganB5_B/$HasilRingan;
                    $data['P_B5Sedang'] = $HasilSedangB5_B/$HasilSedang;
                    $data['P_B5Berat'] = $HasilBeratB5_B/$HasilBerat;
                }
                else if ($data['user']['b5']=="Saya agak merasa bersalah di sebagian besar waktu"){
                    $data['B5GangguanMood'] = $HasilGangguanMoodB5_C;
                    $data['B5Ringan'] = $HasilRinganB5_C;
                    $data['B5Sedang'] = $HasilSedangB5_C;
                    $data['B5Berat'] = $HasilBeratB5_C;
                    $data['P_B5GangguanMood'] = $HasilGangguanMoodB5_C/$HasilGangguanMood;
                    $data['P_B5Ringan'] = $HasilRinganB5_C/$HasilRingan;
                    $data['P_B5Sedang'] = $HasilSedangB5_C/$HasilSedang;
                    $data['P_B5Berat'] = $HasilBeratB5_C/$HasilBerat;
                }
                else if ($data['user']['b5']=="Saya merasa bersalah sepanjang waktu"){
                    $data['B5GangguanMood'] = $HasilGangguanMoodB5_D;
                    $data['B5Ringan'] = $HasilRinganB5_D;
                    $data['B5Sedang'] = $HasilSedangB5_D;
                    $data['B5Berat'] = $HasilBeratB5_D;
                    $data['P_B5GangguanMood'] = $HasilGangguanMoodB5_D/$HasilGangguanMood;
                    $data['P_B5Ringan'] = $HasilRinganB5_D/$HasilRingan;
                    $data['P_B5Sedang'] = $HasilSedangB5_D/$HasilSedang;
                    $data['P_B5Berat'] = $HasilBeratB5_D/$HasilBerat;
                }
                if ($data['user']['b6']=="Saya tidak merasa seolah saya sedang dihukum"){
                    $data['B6GangguanMood'] = $HasilGangguanMoodB6_A;
                    $data['B6Ringan'] = $HasilRinganB6_A;
                    $data['B6Sedang'] = $HasilSedangB6_A;
                    $data['B6Berat'] = $HasilBeratB6_A;
                    $data['P_B6GangguanMood'] = $HasilGangguanMoodB6_A/$HasilGangguanMood;
                    $data['P_B6Ringan'] = $HasilRinganB6_A/$HasilRingan;
                    $data['P_B6Sedang'] = $HasilSedangB6_A/$HasilSedang;
                    $data['P_B6Berat'] = $HasilBeratB6_A/$HasilBerat;
                }
                else if ($data['user']['b6']=="Saya merasa mungkin saya sedang dihukum"){
                    $data['B6GangguanMood'] = $HasilGangguanMoodB6_B;
                    $data['B6Ringan'] = $HasilRinganB6_B;
                    $data['B6Sedang'] = $HasilSedangB6_B;
                    $data['B6Berat'] = $HasilBeratB6_B;
                    $data['P_B6GangguanMood'] = $HasilGangguanMoodB6_B/$HasilGangguanMood;
                    $data['P_B6Ringan'] = $HasilRinganB6_B/$HasilRingan;
                    $data['P_B6Sedang'] = $HasilSedangB6_B/$HasilSedang;
                    $data['P_B6Berat'] = $HasilBeratB6_B/$HasilBerat;
                }
                else if ($data['user']['b6']=="Saya pikir saya akan dihukum"){
                    $data['B6GangguanMood'] = $HasilGangguanMoodB6_C;
                    $data['B6Ringan'] = $HasilRinganB6_C;
                    $data['B6Sedang'] = $HasilSedangB6_C;
                    $data['B6Berat'] = $HasilBeratB6_C;
                    $data['P_B6GangguanMood'] = $HasilGangguanMoodB6_C/$HasilGangguanMood;
                    $data['P_B6Ringan'] = $HasilRinganB6_C/$HasilRingan;
                    $data['P_B6Sedang'] = $HasilSedangB6_C/$HasilSedang;
                    $data['P_B6Berat'] = $HasilBeratB6_C/$HasilBerat;
                }
                else if ($data['user']['b6']=="Saya merasa bahwa saya sedang dihukum"){
                    $data['B6GangguanMood'] = $HasilGangguanMoodB6_D;
                    $data['B6Ringan'] = $HasilRinganB6_D;
                    $data['B6Sedang'] = $HasilSedangB6_D;
                    $data['B6Berat'] = $HasilBeratB6_D;
                    $data['P_B6GangguanMood'] = $HasilGangguanMoodB6_D/$HasilGangguanMood;
                    $data['P_B6Ringan'] = $HasilRinganB6_D/$HasilRingan;
                    $data['P_B6Sedang'] = $HasilSedangB6_D/$HasilSedang;
                    $data['P_B6Berat'] = $HasilBeratB6_D/$HasilBerat;
                }
                if ($data['user']['b7']=="Saya tidak merasa kecewa terhadap diri saya sendiri"){
                    $data['B7GangguanMood'] = $HasilGangguanMoodB7_A;
                    $data['B7Ringan'] = $HasilRinganB7_A;
                    $data['B7Sedang'] = $HasilSedangB7_A;
                    $data['B7Berat'] = $HasilBeratB7_A;
                    $data['P_B7GangguanMood'] = $HasilGangguanMoodB7_A/$HasilGangguanMood;
                    $data['P_B7Ringan'] = $HasilRinganB7_A/$HasilRingan;
                    $data['P_B7Sedang'] = $HasilSedangB7_A/$HasilSedang;
                    $data['P_B7Berat'] = $HasilBeratB7_A/$HasilBerat;
                }
                else if ($data['user']['b7']=="Saya kecewa dengan diri saya sendiri"){
                    $data['B7GangguanMood'] = $HasilGangguanMoodB7_B;
                    $data['B7Ringan'] = $HasilRinganB7_B;
                    $data['B7Sedang'] = $HasilSedangB7_B;
                    $data['B7Berat'] = $HasilBeratB7_B;
                    $data['P_B7GangguanMood'] = $HasilGangguanMoodB7_B/$HasilGangguanMood;
                    $data['P_B7Ringan'] = $HasilRinganB7_B/$HasilRingan;
                    $data['P_B7Sedang'] = $HasilSedangB7_B/$HasilSedang;
                    $data['P_B7Berat'] = $HasilBeratB7_B/$HasilBerat;
                }
                else if ($data['user']['b7']=="Saya muak terhadap diri saya sendiri"){
                    $data['B7GangguanMood'] = $HasilGangguanMoodB7_C;
                    $data['B7Ringan'] = $HasilRinganB7_C;
                    $data['B7Sedang'] = $HasilSedangB7_C;
                    $data['B7Berat'] = $HasilBeratB7_C;
                    $data['P_B7GangguanMood'] = $HasilGangguanMoodB7_C/$HasilGangguanMood;
                    $data['P_B7Ringan'] = $HasilRinganB7_C/$HasilRingan;
                    $data['P_B7Sedang'] = $HasilSedangB7_C/$HasilSedang;
                    $data['P_B7Berat'] = $HasilBeratB7_C/$HasilBerat;
                }
                else if ($data['user']['b7']=="Saya membenci diri saya sendiri"){
                    $data['B7GangguanMood'] = $HasilGangguanMoodB7_D;
                    $data['B7Ringan'] = $HasilRinganB7_D;
                    $data['B7Sedang'] = $HasilSedangB7_D;
                    $data['B7Berat'] = $HasilBeratB7_D;
                    $data['P_B7GangguanMood'] = $HasilGangguanMoodB7_D/$HasilGangguanMood;
                    $data['P_B7Ringan'] = $HasilRinganB7_D/$HasilRingan;
                    $data['P_B7Sedang'] = $HasilSedangB7_D/$HasilSedang;
                    $data['P_B7Berat'] = $HasilBeratB7_D/$HasilBerat;
                }
                if ($data['user']['b8']=="Saya tidak merasa lebih buruk dari orang lain"){
                    $data['B8GangguanMood'] = $HasilGangguanMoodB8_A;
                    $data['B8Ringan'] = $HasilRinganB8_A;
                    $data['B8Sedang'] = $HasilSedangB8_A;
                    $data['B8Berat'] = $HasilBeratB8_A;
                    $data['P_B8GangguanMood'] = $HasilGangguanMoodB8_A/$HasilGangguanMood;
                    $data['P_B8Ringan'] = $HasilRinganB8_A/$HasilRingan;
                    $data['P_B8Sedang'] = $HasilSedangB8_A/$HasilSedang;
                    $data['P_B8Berat'] = $HasilBeratB8_A/$HasilBerat;
                }
                else if ($data['user']['b8']=="Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya"){
                    $data['B8GangguanMood'] = $HasilGangguanMoodB8_B;
                    $data['B8Ringan'] = $HasilRinganB8_B;
                    $data['B8Sedang'] = $HasilSedangB8_B;
                    $data['B8Berat'] = $HasilBeratB8_B;
                    $data['P_B8GangguanMood'] = $HasilGangguanMoodB8_B/$HasilGangguanMood;
                    $data['P_B8Ringan'] = $HasilRinganB8_B/$HasilRingan;
                    $data['P_B8Sedang'] = $HasilSedangB8_B/$HasilSedang;
                    $data['P_B8Berat'] = $HasilBeratB8_B/$HasilBerat;
                }
                else if ($data['user']['b8']=="Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya"){
                    $data['B8GangguanMood'] = $HasilGangguanMoodB8_C;
                    $data['B8Ringan'] = $HasilRinganB8_C;
                    $data['B8Sedang'] = $HasilSedangB8_C;
                    $data['B8Berat'] = $HasilBeratB8_C;
                    $data['P_B8GangguanMood'] = $HasilGangguanMoodB8_C/$HasilGangguanMood;
                    $data['P_B8Ringan'] = $HasilRinganB8_C/$HasilRingan;
                    $data['P_B8Sedang'] = $HasilSedangB8_C/$HasilSedang;
                    $data['P_B8Berat'] = $HasilBeratB8_C/$HasilBerat;
                }
                else if ($data['user']['b8']=="Saya menyalahkan diri saya untuk semua hal buruk yang terjadi"){
                    $data['B8GangguanMood'] = $HasilGangguanMoodB8_D;
                    $data['B8Ringan'] = $HasilRinganB8_D;
                    $data['B8Sedang'] = $HasilSedangB8_D;
                    $data['B8Berat'] = $HasilBeratB8_D;
                    $data['P_B8GangguanMood'] = $HasilGangguanMoodB8_D/$HasilGangguanMood;
                    $data['P_B8Ringan'] = $HasilRinganB8_D/$HasilRingan;
                    $data['P_B8Sedang'] = $HasilSedangB8_D/$HasilSedang;
                    $data['P_B8Berat'] = $HasilBeratB8_D/$HasilBerat;
                }
                if ($data['user']['b9']=="Saya tidak punya sedikitpun pikiran untuk bunuh diri"){
                    $data['B9GangguanMood'] = $HasilGangguanMoodB9_A;
                    $data['B9Ringan'] = $HasilRinganB9_A;
                    $data['B9Sedang'] = $HasilSedangB9_A;
                    $data['B9Berat'] = $HasilBeratB9_A;
                    $data['P_B9GangguanMood'] = $HasilGangguanMoodB9_A/$HasilGangguanMood;
                    $data['P_B9Ringan'] = $HasilRinganB9_A/$HasilRingan;
                    $data['P_B9Sedang'] = $HasilSedangB9_A/$HasilSedang;
                    $data['P_B9Berat'] = $HasilBeratB9_A/$HasilBerat;
                }
                else if ($data['user']['b9']=="Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya"){
                    $data['B9GangguanMood'] = $HasilGangguanMoodB9_B;
                    $data['B9Ringan'] = $HasilRinganB9_B;
                    $data['B9Sedang'] = $HasilSedangB9_B;
                    $data['B9Berat'] = $HasilBeratB9_B;
                    $data['P_B9GangguanMood'] = $HasilGangguanMoodB9_B/$HasilGangguanMood;
                    $data['P_B9Ringan'] = $HasilRinganB9_B/$HasilRingan;
                    $data['P_B9Sedang'] = $HasilSedangB9_B/$HasilSedang;
                    $data['P_B9Berat'] = $HasilBeratB9_B/$HasilBerat;
                }
                else if ($data['user']['b9']=="Saya ingin bunuh diri"){
                    $data['B9GangguanMood'] = $HasilGangguanMoodB9_C;
                    $data['B9Ringan'] = $HasilRinganB9_C;
                    $data['B9Sedang'] = $HasilSedangB9_C;
                    $data['B9Berat'] = $HasilBeratB9_C;
                    $data['P_B9GangguanMood'] = $HasilGangguanMoodB9_C/$HasilGangguanMood;
                    $data['P_B9Ringan'] = $HasilRinganB9_C/$HasilRingan;
                    $data['P_B9Sedang'] = $HasilSedangB9_C/$HasilSedang;
                    $data['P_B9Berat'] = $HasilBeratB9_C/$HasilBerat;
                }
                else if ($data['user']['b9']=="Saya akan bunuh diri jika saja ada kesempatan"){
                    $data['B9GangguanMood'] = $HasilGangguanMoodB9_D;
                    $data['B9Ringan'] = $HasilRinganB9_D;
                    $data['B9Sedang'] = $HasilSedangB9_D;
                    $data['B9Berat'] = $HasilBeratB9_D;
                    $data['P_B9GangguanMood'] = $HasilGangguanMoodB9_D/$HasilGangguanMood;
                    $data['P_B9Ringan'] = $HasilRinganB9_D/$HasilRingan;
                    $data['P_B9Sedang'] = $HasilSedangB9_D/$HasilSedang;
                    $data['P_B9Berat'] = $HasilBeratB9_D/$HasilBerat;
                }
                if ($data['user']['b10']=="Saya tidak lebih banyak menangis dibandingkan biasanya"){
                    $data['B10GangguanMood'] = $HasilGangguanMoodB10_A;
                    $data['B10Ringan'] = $HasilRinganB10_A;
                    $data['B10Sedang'] = $HasilSedangB10_A;
                    $data['B10Berat'] = $HasilBeratB10_A;
                    $data['P_B10GangguanMood'] = $HasilGangguanMoodB10_A/$HasilGangguanMood;
                    $data['P_B10Ringan'] = $HasilRinganB10_A/$HasilRingan;
                    $data['P_B10Sedang'] = $HasilSedangB10_A/$HasilSedang;
                    $data['P_B10Berat'] = $HasilBeratB10_A/$HasilBerat;
                }
                else if ($data['user']['b10']=="Sekarang saya lebih banyak menangis daripada sebelumya"){
                    $data['B10GangguanMood'] = $HasilGangguanMoodB10_B;
                    $data['B10Ringan'] = $HasilRinganB10_B;
                    $data['B10Sedang'] = $HasilSedangB10_B;
                    $data['B10Berat'] = $HasilBeratB10_B;
                    $data['P_B10GangguanMood'] = $HasilGangguanMoodB10_B/$HasilGangguanMood;
                    $data['P_B10Ringan'] = $HasilRinganB10_B/$HasilRingan;
                    $data['P_B10Sedang'] = $HasilSedangB10_B/$HasilSedang;
                    $data['P_B10Berat'] = $HasilBeratB10_B/$HasilBerat;
                }
                else if ($data['user']['b10']=="Sekarang saya menangis sepanjang waktu"){
                    $data['B10GangguanMood'] = $HasilGangguanMoodB10_C;
                    $data['B10Ringan'] = $HasilRinganB10_C;
                    $data['B10Sedang'] = $HasilSedangB10_C;
                    $data['B10Berat'] = $HasilBeratB10_C;
                    $data['P_B10GangguanMood'] = $HasilGangguanMoodB10_C/$HasilGangguanMood;
                    $data['P_B10Ringan'] = $HasilRinganB10_C/$HasilRingan;
                    $data['P_B10Sedang'] = $HasilSedangB10_C/$HasilSedang;
                    $data['P_B10Berat'] = $HasilBeratB10_C/$HasilBerat;
                }
                else if ($data['user']['b10']=="Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya"){
                    $data['B10GangguanMood'] = $HasilGangguanMoodB10_D;
                    $data['B10Ringan'] = $HasilRinganB10_D;
                    $data['B10Sedang'] = $HasilSedangB10_D;
                    $data['B10Berat'] = $HasilBeratB10_D;
                    $data['P_B10GangguanMood'] = $HasilGangguanMoodB10_D/$HasilGangguanMood;
                    $data['P_B10Ringan'] = $HasilRinganB10_D/$HasilRingan;
                    $data['P_B10Sedang'] = $HasilSedangB10_D/$HasilSedang;
                    $data['P_B10Berat'] = $HasilBeratB10_D/$HasilBerat;
                }
                if ($data['user']['b11']=="Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya"){
                    $data['B11GangguanMood'] = $HasilGangguanMoodB11_A;
                    $data['B11Ringan'] = $HasilRinganB11_A;
                    $data['B11Sedang'] = $HasilSedangB11_A;
                    $data['B11Berat'] = $HasilBeratB11_A;
                    $data['P_B11GangguanMood'] = $HasilGangguanMoodB11_A/$HasilGangguanMood;
                    $data['P_B11Ringan'] = $HasilRinganB11_A/$HasilRingan;
                    $data['P_B11Sedang'] = $HasilSedangB11_A/$HasilSedang;
                    $data['P_B11Berat'] = $HasilBeratB11_A/$HasilBerat;
                }
                else if ($data['user']['b11']=="Kini saya sedikit lebih pemarah dari biasanya"){
                    $data['B11GangguanMood'] = $HasilGangguanMoodB11_B;
                    $data['B11Ringan'] = $HasilRinganB11_B;
                    $data['B11Sedang'] = $HasilSedangB11_B;
                    $data['B11Berat'] = $HasilBeratB11_B;
                    $data['P_B11GangguanMood'] = $HasilGangguanMoodB11_B/$HasilGangguanMood;
                    $data['P_B11Ringan'] = $HasilRinganB11_B/$HasilRingan;
                    $data['P_B11Sedang'] = $HasilSedangB11_B/$HasilSedang;
                    $data['P_B11Berat'] = $HasilBeratB11_B/$HasilBerat;
                }
                else if ($data['user']['b11']=="Saya agak jengkel atau terganggu di sebagian besar waktu saya"){
                    $data['B11GangguanMood'] = $HasilGangguanMoodB11_C;
                    $data['B11Ringan'] = $HasilRinganB11_C;
                    $data['B11Sedang'] = $HasilSedangB11_C;
                    $data['B11Berat'] = $HasilBeratB11_C;
                    $data['P_B11GangguanMood'] = $HasilGangguanMoodB11_C/$HasilGangguanMood;
                    $data['P_B11Ringan'] = $HasilRinganB11_C/$HasilRingan;
                    $data['P_B11Sedang'] = $HasilSedangB11_C/$HasilSedang;
                    $data['P_B11Berat'] = $HasilBeratB11_C/$HasilBerat;
                }
                else if ($data['user']['b11']=="Kini saya merasa jengkel sepanjang waktu"){
                    $data['B11GangguanMood'] = $HasilGangguanMoodB11_D;
                    $data['B11Ringan'] = $HasilRinganB11_D;
                    $data['B11Sedang'] = $HasilSedangB11_D;
                    $data['B11Berat'] = $HasilBeratB11_D;
                    $data['P_B11GangguanMood'] = $HasilGangguanMoodB11_D/$HasilGangguanMood;
                    $data['P_B11Ringan'] = $HasilRinganB11_D/$HasilRingan;
                    $data['P_B11Sedang'] = $HasilSedangB11_D/$HasilSedang;
                    $data['P_B11Berat'] = $HasilBeratB11_D/$HasilBerat;
                }
                if ($data['user']['b12']=="Saya tidak kehilangan minat saya terhadap orang lain"){
                    $data['B12GangguanMood'] = $HasilGangguanMoodB12_A;
                    $data['B12Ringan'] = $HasilRinganB12_A;
                    $data['B12Sedang'] = $HasilSedangB12_A;
                    $data['B12Berat'] = $HasilBeratB12_A;
                    $data['P_B12GangguanMood'] = $HasilGangguanMoodB12_A/$HasilGangguanMood;
                    $data['P_B12Ringan'] = $HasilRinganB12_A/$HasilRingan;
                    $data['P_B12Sedang'] = $HasilSedangB12_A/$HasilSedang;
                    $data['P_B12Berat'] = $HasilBeratB12_A/$HasilBerat;
                }
                else if ($data['user']['b12']=="Saya agak kurang berminat terhadap orang lain dibandingkan biasanya"){
                    $data['B12GangguanMood'] = $HasilGangguanMoodB12_B;
                    $data['B12Ringan'] = $HasilRinganB12_B;
                    $data['B12Sedang'] = $HasilSedangB12_B;
                    $data['B12Berat'] = $HasilBeratB12_B;
                    $data['P_B12GangguanMood'] = $HasilGangguanMoodB12_B/$HasilGangguanMood;
                    $data['P_B12Ringan'] = $HasilRinganB12_B/$HasilRingan;
                    $data['P_B12Sedang'] = $HasilSedangB12_B/$HasilSedang;
                    $data['P_B12Berat'] = $HasilBeratB12_B/$HasilBerat;
                }
                else if ($data['user']['b12']=="Saya kehilangan hampir seluruh minat saya pada orang lain"){
                    $data['B12GangguanMood'] = $HasilGangguanMoodB12_C;
                    $data['B12Ringan'] = $HasilRinganB12_C;
                    $data['B12Sedang'] = $HasilSedangB12_C;
                    $data['B12Berat'] = $HasilBeratB12_C;
                    $data['P_B12GangguanMood'] = $HasilGangguanMoodB12_C/$HasilGangguanMood;
                    $data['P_B12Ringan'] = $HasilRinganB12_C/$HasilRingan;
                    $data['P_B12Sedang'] = $HasilSedangB12_C/$HasilSedang;
                    $data['P_B12Berat'] = $HasilBeratB12_C/$HasilBerat;
                }
                else if ($data['user']['b12']=="Saya telah kehilangan seluruh minat saya pada orang lain"){
                    $data['B12GangguanMood'] = $HasilGangguanMoodB12_D;
                    $data['B12Ringan'] = $HasilRinganB12_D;
                    $data['B12Sedang'] = $HasilSedangB12_D;
                    $data['B12Berat'] = $HasilBeratB12_D;
                    $data['P_B12GangguanMood'] = $HasilGangguanMoodB12_D/$HasilGangguanMood;
                    $data['P_B12Ringan'] = $HasilRinganB12_D/$HasilRingan;
                    $data['P_B12Sedang'] = $HasilSedangB12_D/$HasilSedang;
                    $data['P_B12Berat'] = $HasilBeratB12_D/$HasilBerat;
                }
                if ($data['user']['b13']=="Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan"){
                    $data['B13GangguanMood'] = $HasilGangguanMoodB13_A;
                    $data['B13Ringan'] = $HasilRinganB13_A;
                    $data['B13Sedang'] = $HasilSedangB13_A;
                    $data['B13Berat'] = $HasilBeratB13_A;
                    $data['P_B13GangguanMood'] = $HasilGangguanMoodB13_A/$HasilGangguanMood;
                    $data['P_B13Ringan'] = $HasilRinganB13_A/$HasilRingan;
                    $data['P_B13Sedang'] = $HasilSedangB13_A/$HasilSedang;
                    $data['P_B13Berat'] = $HasilBeratB13_A/$HasilBerat;
                }
                else if ($data['user']['b13']=="Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan"){
                    $data['B13GangguanMood'] = $HasilGangguanMoodB13_B;
                    $data['B13Ringan'] = $HasilRinganB13_B;
                    $data['B13Sedang'] = $HasilSedangB13_B;
                    $data['B13Berat'] = $HasilBeratB13_B;
                    $data['P_B13GangguanMood'] = $HasilGangguanMoodB13_B/$HasilGangguanMood;
                    $data['P_B13Ringan'] = $HasilRinganB13_B/$HasilRingan;
                    $data['P_B13Sedang'] = $HasilSedangB13_B/$HasilSedang;
                    $data['P_B13Berat'] = $HasilBeratB13_B/$HasilBerat;
                }
                else if ($data['user']['b13']=="Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya"){
                    $data['B13GangguanMood'] = $HasilGangguanMoodB13_C;
                    $data['B13Ringan'] = $HasilRinganB13_C;
                    $data['B13Sedang'] = $HasilSedangB13_C;
                    $data['B13Berat'] = $HasilBeratB13_C;
                    $data['P_B13GangguanMood'] = $HasilGangguanMoodB13_C/$HasilGangguanMood;
                    $data['P_B13Ringan'] = $HasilRinganB13_C/$HasilRingan;
                    $data['P_B13Sedang'] = $HasilSedangB13_C/$HasilSedang;
                    $data['P_B13Berat'] = $HasilBeratB13_C/$HasilBerat;
                }
                else if ($data['user']['b13']=="Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi"){
                    $data['B13GangguanMood'] = $HasilGangguanMoodB13_D;
                    $data['B13Ringan'] = $HasilRinganB13_D;
                    $data['B13Sedang'] = $HasilSedangB13_D;
                    $data['B13Berat'] = $HasilBeratB13_D;
                    $data['P_B13GangguanMood'] = $HasilGangguanMoodB13_D/$HasilGangguanMood;
                    $data['P_B13Ringan'] = $HasilRinganB13_D/$HasilRingan;
                    $data['P_B13Sedang'] = $HasilSedangB13_D/$HasilSedang;
                    $data['P_B13Berat'] = $HasilBeratB13_D/$HasilBerat;
                }
                if ($data['user']['b14']=="Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya"){
                    $data['B14GangguanMood'] = $HasilGangguanMoodB14_A;
                    $data['B14Ringan'] = $HasilRinganB14_A;
                    $data['B14Sedang'] = $HasilSedangB14_A;
                    $data['B14Berat'] = $HasilBeratB14_A;
                    $data['P_B14GangguanMood'] = $HasilGangguanMoodB14_A/$HasilGangguanMood;
                    $data['P_B14Ringan'] = $HasilRinganB14_A/$HasilRingan;
                    $data['P_B14Sedang'] = $HasilSedangB14_A/$HasilSedang;
                    $data['P_B14Berat'] = $HasilBeratB14_A/$HasilBerat;
                }
                else if ($data['user']['b14']=="Saya khawatir saya tampak tua dan tidak menarik"){
                    $data['B14GangguanMood'] = $HasilGangguanMoodB14_B;
                    $data['B14Ringan'] = $HasilRinganB14_B;
                    $data['B14Sedang'] = $HasilSedangB14_B;
                    $data['B14Berat'] = $HasilBeratB14_B;
                    $data['P_B14GangguanMood'] = $HasilGangguanMoodB14_B/$HasilGangguanMood;
                    $data['P_B14Ringan'] = $HasilRinganB14_B/$HasilRingan;
                    $data['P_B14Sedang'] = $HasilSedangB14_B/$HasilSedang;
                    $data['P_B14Berat'] = $HasilBeratB14_B/$HasilBerat;
                }
                else if ($data['user']['b14']=="Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik"){
                    $data['B14GangguanMood'] = $HasilGangguanMoodB14_C;
                    $data['B14Ringan'] = $HasilRinganB14_C;
                    $data['B14Sedang'] = $HasilSedangB14_C;
                    $data['B14Berat'] = $HasilBeratB14_C;
                    $data['P_B14GangguanMood'] = $HasilGangguanMoodB14_C/$HasilGangguanMood;
                    $data['P_B14Ringan'] = $HasilRinganB14_C/$HasilRingan;
                    $data['P_B14Sedang'] = $HasilSedangB14_C/$HasilSedang;
                    $data['P_B14Berat'] = $HasilBeratB14_C/$HasilBerat;
                }
                else if ($data['user']['b14']=="Saya yakin bahwa saya tampak jelek"){
                    $data['B14GangguanMood'] = $HasilGangguanMoodB14_D;
                    $data['B14Ringan'] = $HasilRinganB14_D;
                    $data['B14Sedang'] = $HasilSedangB14_D;
                    $data['B14Berat'] = $HasilBeratB14_D;
                    $data['P_B14GangguanMood'] = $HasilGangguanMoodB14_D/$HasilGangguanMood;
                    $data['P_B14Ringan'] = $HasilRinganB14_D/$HasilRingan;
                    $data['P_B14Sedang'] = $HasilSedangB14_D/$HasilSedang;
                    $data['P_B14Berat'] = $HasilBeratB14_D/$HasilBerat;
                }
                if ($data['user']['b15']=="Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya"){
                    $data['B15GangguanMood'] = $HasilGangguanMoodB15_A;
                    $data['B15Ringan'] = $HasilRinganB15_A;
                    $data['B15Sedang'] = $HasilSedangB15_A;
                    $data['B15Berat'] = $HasilBeratB15_A;
                    $data['P_B15GangguanMood'] = $HasilGangguanMoodB15_A/$HasilGangguanMood;
                    $data['P_B15Ringan'] = $HasilRinganB15_A/$HasilRingan;
                    $data['P_B15Sedang'] = $HasilSedangB15_A/$HasilSedang;
                    $data['P_B15Berat'] = $HasilBeratB15_A/$HasilBerat;
                }
                else if ($data['user']['b15']=="Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu"){
                    $data['B15GangguanMood'] = $HasilGangguanMoodB15_B;
                    $data['B15Ringan'] = $HasilRinganB15_B;
                    $data['B15Sedang'] = $HasilSedangB15_B;
                    $data['B15Berat'] = $HasilBeratB15_B;
                    $data['P_B15GangguanMood'] = $HasilGangguanMoodB15_B/$HasilGangguanMood;
                    $data['P_B15Ringan'] = $HasilRinganB15_B/$HasilRingan;
                    $data['P_B15Sedang'] = $HasilSedangB15_B/$HasilSedang;
                    $data['P_B15Berat'] = $HasilBeratB15_B/$HasilBerat;
                }
                else if ($data['user']['b15']=="Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu"){
                    $data['B15GangguanMood'] = $HasilGangguanMoodB15_C;
                    $data['B15Ringan'] = $HasilRinganB15_C;
                    $data['B15Sedang'] = $HasilSedangB15_C;
                    $data['B15Berat'] = $HasilBeratB15_C;
                    $data['P_B15GangguanMood'] = $HasilGangguanMoodB15_C/$HasilGangguanMood;
                    $data['P_B15Ringan'] = $HasilRinganB15_C/$HasilRingan;
                    $data['P_B15Sedang'] = $HasilSedangB15_C/$HasilSedang;
                    $data['P_B15Berat'] = $HasilBeratB15_C/$HasilBerat;
                }
                else if ($data['user']['b15']=="Saya tidak mampu untuk mengerjakan apa pun lagi"){
                    $data['B15GangguanMood'] = $HasilGangguanMoodB15_D;
                    $data['B15Ringan'] = $HasilRinganB15_D;
                    $data['B15Sedang'] = $HasilSedangB15_D;
                    $data['B15Berat'] = $HasilBeratB15_D;
                    $data['P_B15GangguanMood'] = $HasilGangguanMoodB15_D/$HasilGangguanMood;
                    $data['P_B15Ringan'] = $HasilRinganB15_D/$HasilRingan;
                    $data['P_B15Sedang'] = $HasilSedangB15_D/$HasilSedang;
                    $data['P_B15Berat'] = $HasilBeratB15_D/$HasilBerat;
                }
                if ($data['user']['b16']=="Saya dapat tidur seperti biasa"){
                    $data['B16GangguanMood'] = $HasilGangguanMoodB16_A;
                    $data['B16Ringan'] = $HasilRinganB16_A;
                    $data['B16Sedang'] = $HasilSedangB16_A;
                    $data['B16Berat'] = $HasilBeratB16_A;
                    $data['P_B16GangguanMood'] = $HasilGangguanMoodB16_A/$HasilGangguanMood;
                    $data['P_B16Ringan'] = $HasilRinganB16_A/$HasilRingan;
                    $data['P_B16Sedang'] = $HasilSedangB16_A/$HasilSedang;
                    $data['P_B16Berat'] = $HasilBeratB16_A/$HasilBerat;
                }
                else if ($data['user']['b16']=="Tidur saya tidak sebanyak biasanya"){
                    $data['B16GangguanMood'] = $HasilGangguanMoodB16_B;
                    $data['B16Ringan'] = $HasilRinganB16_B;
                    $data['B16Sedang'] = $HasilSedangB16_B;
                    $data['B16Berat'] = $HasilBeratB16_B;
                    $data['P_B16GangguanMood'] = $HasilGangguanMoodB16_B/$HasilGangguanMood;
                    $data['P_B16Ringan'] = $HasilRinganB16_B/$HasilRingan;
                    $data['P_B16Sedang'] = $HasilSedangB16_B/$HasilSedang;
                    $data['P_B16Berat'] = $HasilBeratB16_B/$HasilBerat;
                }
                else if ($data['user']['b16']=="Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali"){
                    $data['B16GangguanMood'] = $HasilGangguanMoodB16_C;
                    $data['B16Ringan'] = $HasilRinganB16_C;
                    $data['B16Sedang'] = $HasilSedangB16_C;
                    $data['B16Berat'] = $HasilBeratB16_C;
                    $data['P_B16GangguanMood'] = $HasilGangguanMoodB16_C/$HasilGangguanMood;
                    $data['P_B16Ringan'] = $HasilRinganB16_C/$HasilRingan;
                    $data['P_B16Sedang'] = $HasilSedangB16_C/$HasilSedang;
                    $data['P_B16Berat'] = $HasilBeratB16_C/$HasilBerat;
                }
                else if ($data['user']['b16']=="Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali"){
                    $data['B16GangguanMood'] = $HasilGangguanMoodB16_D;
                    $data['B16Ringan'] = $HasilRinganB16_D;
                    $data['B16Sedang'] = $HasilSedangB16_D;
                    $data['B16Berat'] = $HasilBeratB16_D;
                    $data['P_B16GangguanMood'] = $HasilGangguanMoodB16_D/$HasilGangguanMood;
                    $data['P_B16Ringan'] = $HasilRinganB16_D/$HasilRingan;
                    $data['P_B16Sedang'] = $HasilSedangB16_D/$HasilSedang;
                    $data['P_B16Berat'] = $HasilBeratB16_D/$HasilBerat;
                }
                if ($data['user']['b17']=="Saya merasa tidak lelah seperti biasanya"){
                    $data['B17GangguanMood'] = $HasilGangguanMoodB17_A;
                    $data['B17Ringan'] = $HasilRinganB17_A;
                    $data['B17Sedang'] = $HasilSedangB17_A;
                    $data['B17Berat'] = $HasilBeratB17_A;
                    $data['P_B17GangguanMood'] = $HasilGangguanMoodB17_A/$HasilGangguanMood;
                    $data['P_B17Ringan'] = $HasilRinganB17_A/$HasilRingan;
                    $data['P_B17Sedang'] = $HasilSedangB17_A/$HasilSedang;
                    $data['P_B17Berat'] = $HasilBeratB17_A/$HasilBerat;
                }
                else if ($data['user']['b17']=="Saya merasa lebih mudah lelah dari biasanya"){
                    $data['B17GangguanMood'] = $HasilGangguanMoodB17_B;
                    $data['B17Ringan'] = $HasilRinganB17_B;
                    $data['B17Sedang'] = $HasilSedangB17_B;
                    $data['B17Berat'] = $HasilBeratB17_B;
                    $data['P_B17GangguanMood'] = $HasilGangguanMoodB17_B/$HasilGangguanMood;
                    $data['P_B17Ringan'] = $HasilRinganB17_B/$HasilRingan;
                    $data['P_B17Sedang'] = $HasilSedangB17_B/$HasilSedang;
                    $data['P_B17Berat'] = $HasilBeratB17_B/$HasilBerat;
                }
                else if ($data['user']['b17']=="Saya merasa setelah melakukan apa saja"){
                    $data['B17GangguanMood'] = $HasilGangguanMoodB17_C;
                    $data['B17Ringan'] = $HasilRinganB17_C;
                    $data['B17Sedang'] = $HasilSedangB17_C;
                    $data['B17Berat'] = $HasilBeratB17_C;
                    $data['P_B17GangguanMood'] = $HasilGangguanMoodB17_C/$HasilGangguanMood;
                    $data['P_B17Ringan'] = $HasilRinganB17_C/$HasilRingan;
                    $data['P_B17Sedang'] = $HasilSedangB17_C/$HasilSedang;
                    $data['P_B17Berat'] = $HasilBeratB17_C/$HasilBerat;
                }
                else if ($data['user']['b17']=="Saya terlalu untuk melakukan apapun"){
                    $data['B17GangguanMood'] = $HasilGangguanMoodB17_D;
                    $data['B17Ringan'] = $HasilRinganB17_D;
                    $data['B17Sedang'] = $HasilSedangB17_D;
                    $data['B17Berat'] = $HasilBeratB17_D;
                    $data['P_B17GangguanMood'] = $HasilGangguanMoodB17_D/$HasilGangguanMood;
                    $data['P_B17Ringan'] = $HasilRinganB17_D/$HasilRingan;
                    $data['P_B17Sedang'] = $HasilSedangB17_D/$HasilSedang;
                    $data['P_B17Berat'] = $HasilBeratB17_D/$HasilBerat;
                }
                if ($data['user']['b18']=="Nafsu makan saya tidak lebih buruk dari biasanya"){
                    $data['B18GangguanMood'] = $HasilGangguanMoodB18_A;
                    $data['B18Ringan'] = $HasilRinganB18_A;
                    $data['B18Sedang'] = $HasilSedangB18_A;
                    $data['B18Berat'] = $HasilBeratB18_A;
                    $data['P_B18GangguanMood'] = $HasilGangguanMoodB18_A/$HasilGangguanMood;
                    $data['P_B18Ringan'] = $HasilRinganB18_A/$HasilRingan;
                    $data['P_B18Sedang'] = $HasilSedangB18_A/$HasilSedang;
                    $data['P_B18Berat'] = $HasilBeratB18_A/$HasilBerat;
                }
                else if ($data['user']['b18']=="Nafsu makan saya tidak sebaik biasanya"){
                    $data['B18GangguanMood'] = $HasilGangguanMoodB18_B;
                    $data['B18Ringan'] = $HasilRinganB18_B;
                    $data['B18Sedang'] = $HasilSedangB18_B;
                    $data['B18Berat'] = $HasilBeratB18_B;
                    $data['P_B18GangguanMood'] = $HasilGangguanMoodB18_B/$HasilGangguanMood;
                    $data['P_B18Ringan'] = $HasilRinganB18_B/$HasilRingan;
                    $data['P_B18Sedang'] = $HasilSedangB18_B/$HasilSedang;
                    $data['P_B18Berat'] = $HasilBeratB18_B/$HasilBerat;
                }
                else if ($data['user']['b18']=="Nafsu makan saya kini jauh lebih buruk"){
                    $data['B18GangguanMood'] = $HasilGangguanMoodB18_C;
                    $data['B18Ringan'] = $HasilRinganB18_C;
                    $data['B18Sedang'] = $HasilSedangB18_C;
                    $data['B18Berat'] = $HasilBeratB18_C;
                    $data['P_B18GangguanMood'] = $HasilGangguanMoodB18_C/$HasilGangguanMood;
                    $data['P_B18Ringan'] = $HasilRinganB18_C/$HasilRingan;
                    $data['P_B18Sedang'] = $HasilSedangB18_C/$HasilSedang;
                    $data['P_B18Berat'] = $HasilBeratB18_C/$HasilBerat;
                }
                else if ($data['user']['b18']=="Saya tak memiliki nafsu makan lagi"){
                    $data['B18GangguanMood'] = $HasilGangguanMoodB18_D;
                    $data['B18Ringan'] = $HasilRinganB18_D;
                    $data['B18Sedang'] = $HasilSedangB18_D;
                    $data['B18Berat'] = $HasilBeratB18_D;
                    $data['P_B18GangguanMood'] = $HasilGangguanMoodB18_D/$HasilGangguanMood;
                    $data['P_B18Ringan'] = $HasilRinganB18_D/$HasilRingan;
                    $data['P_B18Sedang'] = $HasilSedangB18_D/$HasilSedang;
                    $data['P_B18Berat'] = $HasilBeratB18_D/$HasilBerat;
                }
                if ($data['user']['b19']=="Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini"){
                    $data['B19GangguanMood'] = $HasilGangguanMoodB19_A;
                    $data['B19Ringan'] = $HasilRinganB19_A;
                    $data['B19Sedang'] = $HasilSedangB19_A;
                    $data['B19Berat'] = $HasilBeratB19_A;
                    $data['P_B19GangguanMood'] = $HasilGangguanMoodB19_A/$HasilGangguanMood;
                    $data['P_B19Ringan'] = $HasilRinganB19_A/$HasilRingan;
                    $data['P_B19Sedang'] = $HasilSedangB19_A/$HasilSedang;
                    $data['P_B19Berat'] = $HasilBeratB19_A/$HasilBerat;
                }
                else if ($data['user']['b19']=="Berat badan saya turun lebih dari dua kilogram"){
                    $data['B19GangguanMood'] = $HasilGangguanMoodB19_B;
                    $data['B19Ringan'] = $HasilRinganB19_B;
                    $data['B19Sedang'] = $HasilSedangB19_B;
                    $data['B19Berat'] = $HasilBeratB19_B;
                    $data['P_B19GangguanMood'] = $HasilGangguanMoodB19_B/$HasilGangguanMood;
                    $data['P_B19Ringan'] = $HasilRinganB19_B/$HasilRingan;
                    $data['P_B19Sedang'] = $HasilSedangB19_B/$HasilSedang;
                    $data['P_B19Berat'] = $HasilBeratB19_B/$HasilBerat;
                }
                else if ($data['user']['b19']=="Berat badan saya turun lebih dari lima kilogram"){
                    $data['B19GangguanMood'] = $HasilGangguanMoodB19_C;
                    $data['B19Ringan'] = $HasilRinganB19_C;
                    $data['B19Sedang'] = $HasilSedangB19_C;
                    $data['B19Berat'] = $HasilBeratB19_C;
                    $data['P_B19GangguanMood'] = $HasilGangguanMoodB19_C/$HasilGangguanMood;
                    $data['P_B19Ringan'] = $HasilRinganB19_C/$HasilRingan;
                    $data['P_B19Sedang'] = $HasilSedangB19_C/$HasilSedang;
                    $data['P_B19Berat'] = $HasilBeratB19_C/$HasilBerat;
                }
                else if ($data['user']['b19']=="Berat badan saya turun lebih dari tujuh kilogram"){
                    $data['B19GangguanMood'] = $HasilGangguanMoodB19_D;
                    $data['B19Ringan'] = $HasilRinganB19_D;
                    $data['B19Sedang'] = $HasilSedangB19_D;
                    $data['B19Berat'] = $HasilBeratB19_D;
                    $data['P_B19GangguanMood'] = $HasilGangguanMoodB19_D/$HasilGangguanMood;
                    $data['P_B19Ringan'] = $HasilRinganB19_D/$HasilRingan;
                    $data['P_B19Sedang'] = $HasilSedangB19_D/$HasilSedang;
                    $data['P_B19Berat'] = $HasilBeratB19_D/$HasilBerat;
                }
                if ($data['user']['b20']=="Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya"){
                    $data['B20GangguanMood'] = $HasilGangguanMoodB20_A;
                    $data['B20Ringan'] = $HasilRinganB20_A;
                    $data['B20Sedang'] = $HasilSedangB20_A;
                    $data['B20Berat'] = $HasilBeratB20_A;
                    $data['P_B20GangguanMood'] = $HasilGangguanMoodB20_A/$HasilGangguanMood;
                    $data['P_B20Ringan'] = $HasilRinganB20_A/$HasilRingan;
                    $data['P_B20Sedang'] = $HasilSedangB20_A/$HasilSedang;
                    $data['P_B20Berat'] = $HasilBeratB20_A/$HasilBerat;
                }
                else if ($data['user']['b20']=="Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit"){
                    $data['B20GangguanMood'] = $HasilGangguanMoodB20_B;
                    $data['B20Ringan'] = $HasilRinganB20_B;
                    $data['B20Sedang'] = $HasilSedangB20_B;
                    $data['B20Berat'] = $HasilBeratB20_B;
                    $data['P_B20GangguanMood'] = $HasilGangguanMoodB20_B/$HasilGangguanMood;
                    $data['P_B20Ringan'] = $HasilRinganB20_B/$HasilRingan;
                    $data['P_B20Sedang'] = $HasilSedangB20_B/$HasilSedang;
                    $data['P_B20Berat'] = $HasilBeratB20_B/$HasilBerat;
                }
                else if ($data['user']['b20']=="Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya"){
                    $data['B20GangguanMood'] = $HasilGangguanMoodB20_C;
                    $data['B20Ringan'] = $HasilRinganB20_C;
                    $data['B20Sedang'] = $HasilSedangB20_C;
                    $data['B20Berat'] = $HasilBeratB20_C;
                    $data['P_B20GangguanMood'] = $HasilGangguanMoodB20_C/$HasilGangguanMood;
                    $data['P_B20Ringan'] = $HasilRinganB20_C/$HasilRingan;
                    $data['P_B20Sedang'] = $HasilSedangB20_C/$HasilSedang;
                    $data['P_B20Berat'] = $HasilBeratB20_C/$HasilBerat;
                }
                else if ($data['user']['b20']=="Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya"){
                    $data['B20GangguanMood'] = $HasilGangguanMoodB20_D;
                    $data['B20Ringan'] = $HasilRinganB20_D;
                    $data['B20Sedang'] = $HasilSedangB20_D;
                    $data['B20Berat'] = $HasilBeratB20_D;
                    $data['P_B20GangguanMood'] = $HasilGangguanMoodB20_D/$HasilGangguanMood;
                    $data['P_B20Ringan'] = $HasilRinganB20_D/$HasilRingan;
                    $data['P_B20Sedang'] = $HasilSedangB20_D/$HasilSedang;
                    $data['P_B20Berat'] = $HasilBeratB20_D/$HasilBerat;
                }
                if ($data['user']['b21']=="Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis"){
                    $data['B21GangguanMood'] = $HasilGangguanMoodB21_A;
                    $data['B21Ringan'] = $HasilRinganB21_A;
                    $data['B21Sedang'] = $HasilSedangB21_A;
                    $data['B21Berat'] = $HasilBeratB21_A;
                    $data['P_B21GangguanMood'] = $HasilGangguanMoodB21_A/$HasilGangguanMood;
                    $data['P_B21Ringan'] = $HasilRinganB21_A/$HasilRingan;
                    $data['P_B21Sedang'] = $HasilSedangB21_A/$HasilSedang;
                    $data['P_B21Berat'] = $HasilBeratB21_A/$HasilBerat;
                }
                else if ($data['user']['b21']=="Saya kurang berminat di bidang ini dibandingkan biasanya"){
                    $data['B21GangguanMood'] = $HasilGangguanMoodB21_B;
                    $data['B21Ringan'] = $HasilRinganB21_B;
                    $data['B21Sedang'] = $HasilSedangB21_B;
                    $data['B21Berat'] = $HasilBeratB21_B;
                    $data['P_B21GangguanMood'] = $HasilGangguanMoodB21_B/$HasilGangguanMood;
                    $data['P_B21Ringan'] = $HasilRinganB21_B/$HasilRingan;
                    $data['P_B21Sedang'] = $HasilSedangB21_B/$HasilSedang;
                    $data['P_B21Berat'] = $HasilBeratB21_B/$HasilBerat;
                }
                else if ($data['user']['b21']=="Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis"){
                    $data['B21GangguanMood'] = $HasilGangguanMoodB21_C;
                    $data['B21Ringan'] = $HasilRinganB21_C;
                    $data['B21Sedang'] = $HasilSedangB21_C;
                    $data['B21Berat'] = $HasilBeratB21_C;
                    $data['P_B21GangguanMood'] = $HasilGangguanMoodB21_C/$HasilGangguanMood;
                    $data['P_B21Ringan'] = $HasilRinganB21_C/$HasilRingan;
                    $data['P_B21Sedang'] = $HasilSedangB21_C/$HasilSedang;
                    $data['P_B21Berat'] = $HasilBeratB21_C/$HasilBerat;
                }
                else if ($data['user']['b21']=="Saya telah kehilangan minat terhadap itu sama sekali"){
                    $data['B21GangguanMood'] = $HasilGangguanMoodB21_D;
                    $data['B21Ringan'] = $HasilRinganB21_D;
                    $data['B21Sedang'] = $HasilSedangB21_D;
                    $data['B21Berat'] = $HasilBeratB21_D;
                    $data['P_B21GangguanMood'] = $HasilGangguanMoodB21_D/$HasilGangguanMood;
                    $data['P_B21Ringan'] = $HasilRinganB21_D/$HasilRingan;
                    $data['P_B21Sedang'] = $HasilSedangB21_D/$HasilSedang;
                    $data['P_B21Berat'] = $HasilBeratB21_D/$HasilBerat;
                }


            $data['Hasil_GangguanMood'] = $data['P_A1GangguanMood']*$data['P_A2GangguanMood']*$data['P_A3GangguanMood']*$data['P_A4GangguanMood']*$data['P_A5GangguanMood']*$data['P_A6GangguanMood']*$data['P_B1GangguanMood']*$data['P_B2GangguanMood']*$data['P_B3GangguanMood']*$data['P_B4GangguanMood']*$data['P_B5GangguanMood']*$data['P_B6GangguanMood']*$data['P_B7GangguanMood']*$data['P_B8GangguanMood']*$data['P_B9GangguanMood']*$data['P_B10GangguanMood']*$data['P_B11GangguanMood']*$data['P_B12GangguanMood']*$data['P_B13GangguanMood']*$data['P_B14GangguanMood']*$data['P_B15GangguanMood']*$data['P_B16GangguanMood']*$data['P_B17GangguanMood']*$data['P_B18GangguanMood']*$data['P_B19GangguanMood']*$data['P_B20GangguanMood']*$data['P_B21GangguanMood'];
            $data['Hasil_Ringan'] = $data['P_A1Ringan']*$data['P_A2Ringan']*$data['P_A3Ringan']*$data['P_A4Ringan']*$data['P_A5Ringan']*$data['P_A6Ringan']*$data['P_B1Ringan']*$data['P_B2Ringan']*$data['P_B3Ringan']*$data['P_B4Ringan']*$data['P_B5Ringan']*$data['P_B6Ringan']*$data['P_B7Ringan']*$data['P_B8Ringan']*$data['P_B9Ringan']*$data['P_B10Ringan']*$data['P_B11Ringan']*$data['P_B12Ringan']*$data['P_B13Ringan']*$data['P_B14Ringan']*$data['P_B15Ringan']*$data['P_B16Ringan']*$data['P_B17Ringan']*$data['P_B18Ringan']*$data['P_B19Ringan']*$data['P_B20Ringan']*$data['P_B21Ringan'];
            $data['Hasil_Sedang'] = $data['P_A1Sedang']*$data['P_A2Sedang']*$data['P_A3Sedang']*$data['P_A4Sedang']*$data['P_A5Sedang']*$data['P_A6Sedang']*$data['P_B1Sedang']*$data['P_B2Sedang']*$data['P_B3Sedang']*$data['P_B4Sedang']*$data['P_B5Sedang']*$data['P_B6Sedang']*$data['P_B7Sedang']*$data['P_B8Sedang']*$data['P_B9Sedang']*$data['P_B10Sedang']*$data['P_B11Sedang']*$data['P_B12Sedang']*$data['P_B13Sedang']*$data['P_B14Sedang']*$data['P_B15Sedang']*$data['P_B16Sedang']*$data['P_B17Sedang']*$data['P_B18Sedang']*$data['P_B19Sedang']*$data['P_B20Sedang']*$data['P_B21Sedang'];
            $data['Hasil_Berat'] = $data['P_A1Berat']*$data['P_A2Berat']*$data['P_A3Berat']*$data['P_A4Berat']*$data['P_A5Berat']*$data['P_A6Berat']*$data['P_B1Berat']*$data['P_B2Berat']*$data['P_B3Berat']*$data['P_B4Berat']*$data['P_B5Berat']*$data['P_B6Berat']*$data['P_B7Berat']*$data['P_B8Berat']*$data['P_B9Berat']*$data['P_B10Berat']*$data['P_B11Berat']*$data['P_B12Berat']*$data['P_B13Berat']*$data['P_B14Berat']*$data['P_B15Berat']*$data['P_B16Berat']*$data['P_B17Berat']*$data['P_B18Berat']*$data['P_B19Berat']*$data['P_B20Berat']*$data['P_B21Berat'];
            
            $data['Hasil_Final'] = max($data['Hasil_GangguanMood'],$data['Hasil_Ringan'],$data['Hasil_Sedang'],$data['Hasil_Berat']);
            // var_dump($data['Hasil_Sedang']);
            if ($data['Hasil_Final'] == $data['Hasil_GangguanMood']){
                $data['hasil'] = "Gangguan Mood";
            }
            else if ($data['Hasil_Final'] == $data['Hasil_Ringan']){
                $data['hasil'] = "Ringan";
            }
            else if ($data['Hasil_Final'] == $data['Hasil_Sedang']){
                $data['hasil'] = "Sedang";
            }
            else if ($data['Hasil_Final'] == $data['Hasil_Berat']){
                $data['hasil'] = "Berat";
            }
            
            $data['pertanyaan'] = array(
                "Kesedihan",
                "Pesimisme",
                "Kegagalan Masa Lalu",
                "Hilangnya Kesenangan",
                "Perasaan Bersalah",
                "Perasaan Tentang Hukuman",
                "Kecewa terhadap diri sendiri",
                "Kritikan terhadap diri sendiri",
                "Keinginan untuk bunuh diri",
                "Menangis",
                "Sifat Mudah Marah",
                "Kehilangan Minat",
                "Keraguan",
                "Perasaan tidak berguna",
                "Level Konsentrasi",
                "Perubahan Pola Tidur",
                "Kelelahan atau keletihan",
                "Perubahan Nafsu Makan",
                "Kehilangan Energi",
                "Kecemasan",
                "Kehilangan minat terhadap hubungan dengan lawan jenis"
            );
            $data['content'] = 'datatest/v_penghitungan';
            $this->load->view('template',$data);
            } else {
                show_404();
        }
        // var_dump($data['hasil']);
    }
    public function hapus($id)
	{
		$this->m_datatest->hapus($id);
		redirect('datatest');
	}

    public function form_AddData()
    {
        $data['datatest'] = $this->m_datatest->getAll();
		$data['content'] = 'datatest/v_addData';
		$this->load->view('template',$data);
    }

    public function AddData()
    {
        $addData = $this->input->post('addData');
        $hapus= $this->input->post('hapus');
        $select= $this->input->post('data');
        // var_dump($data['select']);
 
        if(isset($addData)){
            for($i=0; $i<count($select); $i++){
                $testing = $this->m_datatest->getById($select[$i]);
                $data['nama'] = $testing['nama'];
                $data['semester'] = $testing['semester'];
                $data['a1'] = $testing['a1'];
                $data['a2'] = $testing['a2'];
                $data['a3'] = $testing['a3'];
                $data['a4'] = $testing['a4'];
                $data['a5'] = $testing['a5'];
                $data['a6'] = $testing['a6'];
                $data['b1'] = $testing['b1'];
                $data['b2'] = $testing['b2'];
                $data['b3'] = $testing['b3'];
                $data['b4'] = $testing['b4'];
                $data['b5'] = $testing['b5'];
                $data['b6'] = $testing['b6'];
                $data['b7'] = $testing['b7'];
                $data['b8'] = $testing['b8'];
                $data['b9'] = $testing['b9'];
                $data['b10'] = $testing['b10'];
                $data['b11'] = $testing['b11'];
                $data['b12'] = $testing['b12'];
                $data['b13'] = $testing['b13'];
                $data['b14'] = $testing['b14'];
                $data['b15'] = $testing['b15'];
                $data['b16'] = $testing['b16'];
                $data['b17'] = $testing['b17'];
                $data['b18'] = $testing['b18'];
                $data['b19'] = $testing['b19'];
                $data['b20'] = $testing['b20'];
                $data['b21'] = $testing['b21'];
                $data['hasil'] = $testing['hasil_bobot'];

                $this->m_datatrain->tambah($data);
                

            }
            $this->session->set_flashdata('sukses','Data berhasil diinputkan!');
            redirect('C_datatrain');
        }
        if(isset($hapus)){
            for($i=0; $i<count($select); $i++){
                $testing = $this->m_datatest->getById($select[$i]);
                $this->m_datatest->hapus($testing['id']);
                
            }
            $this->session->set_flashdata('sukses','Data berhasil dihapus!');
            redirect('C_datatest/form_addData');
        }

        


        // if(isset($data['addData'])) {
        // // Tombol Button 1 ditekan
        // if(isset($data['select'])) {
        //     // Proses item-item yang dipilih
        //     for ($i=0; $i<=count($data['select'];$i++))
        // }
        // }

        // if(isset($_POST['button2'])) {
        // // Tombol Button 2 ditekan
        // if(isset($_POST['item'])) {
        //     // Proses item-item yang dipilih
        //     foreach($_POST['item'] as $selected) {
        //     echo $selected . ' dipilih oleh Button 2<br>';
        //     }
        // }
        // }

        // for($i=0; $i<=count($_POST['hapus'])-1; $i++){
        //     //menghapus data sesuai urutan array
        //     mysqli_query($koneksi, 'delete from mahasiswa where idmahasiswa='.$_POST['hapus'][$i]);
        // }

    }
}