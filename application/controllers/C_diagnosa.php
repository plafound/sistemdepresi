<?php
use Brick\Math\BigDecimal;

class C_diagnosa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_datatrain');
        $this->load->model('m_penghitungan');
        $this->load->model('m_datatest');
        $this->load->model('m_solusi');
        $this->load->library('form_validation');
        
    }

    public function index(){
        $data['content'] = 'diagnosa/v_diagnosa';
		$this->load->view('template_user',$data);
    }
    public function tambah()
	{
        $All = $this->m_penghitungan->getAll();
        $All = count($All);
        $HasilGangguanMood = $this->m_penghitungan->getHasilGangguanMood();
        $HasilGangguanMood = count($HasilGangguanMood);
        $HasilRingan = $this->m_penghitungan->getHasilRingan();
        $HasilRingan = count($HasilRingan);
        $HasilSedang = $this->m_penghitungan->getHasilSedang();
        $HasilSedang = count($HasilSedang);
        $HasilBerat = $this->m_penghitungan->getHasilBerat();
        $HasilBerat = count($HasilBerat);

        $prob_HasilGangguanMood = $HasilGangguanMood / $All;
        $prob_HasilRingan = $HasilRingan / $All;
        $prob_HasilSedang = $HasilSedang / $All;
        $prob_HasilBerat = $HasilBerat / $All;

		$data['nama'] = $this->input->post('nama');
        $data['univ'] = $this->input->post('univ');
		$data['semester'] = $this->input->post('semester');
		$data['a1'] = $this->input->post('a1');
        $data['a2'] = $this->input->post('a2');
        $data['a3'] = $this->input->post('a3');
        $data['a4'] = $this->input->post('a4');
        $data['a5'] = $this->input->post('a5');
        $data['a6'] = $this->input->post('a6');
        $data['b1'] = $this->input->post('b1');
        $data['b2'] = $this->input->post('b2');
        $data['b3'] = $this->input->post('b3');
        $data['b4'] = $this->input->post('b4');
        $data['b5'] = $this->input->post('b5');
        $data['b6'] = $this->input->post('b6');
        $data['b7'] = $this->input->post('b7');
        $data['b8'] = $this->input->post('b8');
        $data['b9'] = $this->input->post('b9');
        $data['b10'] = $this->input->post('b10');
        $data['b11'] = $this->input->post('b11');
        $data['b12'] = $this->input->post('b12');
        $data['b13'] = $this->input->post('b13');
        $data['b14'] = $this->input->post('b14');
        $data['b15'] = $this->input->post('b15');
        $data['b16'] = $this->input->post('b16');
        $data['b17'] = $this->input->post('b17');
        $data['b18'] = $this->input->post('b18');
        $data['b19'] = $this->input->post('b19');
        $data['b20'] = $this->input->post('b20');
        $data['b21'] = $this->input->post('b21');
        if ($data['a1']==''&&$data['a2']==''&&$data['a3']==''&&$data['a4']==''&&$data['a5']==''&&$data['a6']==''&&$data['b1']==''&&$data['b2']==''&&$data['b3']==''&&$data['b4']==''&&$data['b5']==''&&$data['b6']==''&&$data['b7']==''&&$data['b8']==''&&$data['b9']==''&&$data['b10']==''&&$data['b11']==''&&$data['b12']==''&&$data['b13']==''&&$data['b14']==''&&$data['b15']==''&&$data['b16']==''&&$data['b17']==''&&$data['b18']==''&&$data['b19']==''&&$data['b20']==''&&$data['b21']==''){
            $this->session->set_flashdata('gagal','Ada data yang belum terisi!');
            redirect('C_diagnosa');
        }
            if($data['a1']=="Bersama Orang Tua"){
                $HasilGangguanMoodA1Ortu = $this->m_penghitungan->getHasilGangguanMoodA1Ortu();
                $HasilGangguanMoodA1Ortu = count($HasilGangguanMoodA1Ortu);
                $HasilRinganA1Ortu = $this->m_penghitungan->getHasilRinganA1Ortu();
                $HasilRinganA1Ortu = count($HasilRinganA1Ortu);
                $HasilSedangA1Ortu = $this->m_penghitungan->getHasilSedangA1Ortu();
                $HasilSedangA1Ortu = count($HasilSedangA1Ortu);
                $HasilBeratA1Ortu = $this->m_penghitungan->getHasilBeratA1Ortu();
                $HasilBeratA1Ortu = count($HasilBeratA1Ortu);

                $prob_A1GangguanMood = $HasilGangguanMoodA1Ortu / $HasilGangguanMood;
                $prob_A1Ringan = $HasilRinganA1Ortu / $HasilRingan;
                $prob_A1Sedang = $HasilSedangA1Ortu / $HasilSedang;
                $prob_A1Berat = $HasilBeratA1Ortu / $HasilBerat;

            }
            else if ($data['a1']=="Kos"){
                $HasilGangguanMoodA1Kos = $this->m_penghitungan->getHasilGangguanMoodA1Kos();
                $HasilGangguanMoodA1Kos = count($HasilGangguanMoodA1Kos);
                $HasilRinganA1Kos = $this->m_penghitungan->getHasilRinganA1Kos();
                $HasilRinganA1Kos = count($HasilRinganA1Kos);
                $HasilSedangA1Kos = $this->m_penghitungan->getHasilSedangA1Kos();
                $HasilSedangA1Kos = count($HasilSedangA1Kos);
                $HasilBeratA1Kos = $this->m_penghitungan->getHasilBeratA1Kos();
                $HasilBeratA1Kos = count($HasilBeratA1Kos);

                $prob_A1GangguanMood = $HasilGangguanMoodA1Kos / $HasilGangguanMood;
                $prob_A1Ringan = $HasilRinganA1Kos / $HasilRingan;
                $prob_A1Sedang = $HasilSedangA1Kos / $HasilSedang;
                $prob_A1Berat = $HasilBeratA1Kos / $HasilBerat;
            }
            else if ($data['a1']=="Rumah Sendiri"){
                $HasilGangguanMoodA1Sendiri = $this->m_penghitungan->getHasilGangguanMoodA1Sendiri();
                $HasilGangguanMoodA1Sendiri = count($HasilGangguanMoodA1Sendiri);
                $HasilRinganA1Sendiri = $this->m_penghitungan->getHasilRinganA1Sendiri();
                $HasilRinganA1Sendiri = count($HasilRinganA1Sendiri);
                $HasilSedangA1Sendiri = $this->m_penghitungan->getHasilSedangA1Sendiri();
                $HasilSedangA1Sendiri = count($HasilSedangA1Sendiri);
                $HasilBeratA1Sendiri = $this->m_penghitungan->getHasilBeratA1Sendiri();
                $HasilBeratA1Sendiri = count($HasilBeratA1Sendiri);

                $prob_A1GangguanMood = $HasilGangguanMoodA1Sendiri / $HasilGangguanMood;
                $prob_A1Ringan = $HasilRinganA1Sendiri / $HasilRingan;
                $prob_A1Sedang = $HasilSedangA1Sendiri / $HasilSedang;
                $prob_A1Berat = $HasilBeratA1Sendiri / $HasilBerat;
            }

            if($data['a2']=="Sangat Buruk"){
                $HasilGangguanMoodA2SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA2SangatBuruk();
                $HasilGangguanMoodA2SangatBuruk = count($HasilGangguanMoodA2SangatBuruk);
                $HasilRinganA2SangatBuruk = $this->m_penghitungan->getHasilRinganA2SangatBuruk();
                $HasilRinganA2SangatBuruk = count($HasilRinganA2SangatBuruk);
                $HasilSedangA2SangatBuruk = $this->m_penghitungan->getHasilSedangA2SangatBuruk();
                $HasilSedangA2SangatBuruk = count($HasilSedangA2SangatBuruk);
                $HasilBeratA2SangatBuruk = $this->m_penghitungan->getHasilBeratA2SangatBuruk();
                $HasilBeratA2SangatBuruk = count($HasilBeratA2SangatBuruk);

                $prob_A2GangguanMood = $HasilGangguanMoodA2SangatBuruk / $HasilGangguanMood;
                $prob_A2Ringan = $HasilRinganA2SangatBuruk / $HasilRingan;
                $prob_A2Sedang = $HasilSedangA2SangatBuruk / $HasilSedang;
                $prob_A2Berat = $HasilBeratA2SangatBuruk / $HasilBerat;
                
                $solusiA2 = $this->m_solusi->getA2();
            }
            else if ($data['a2']=="Buruk"){
                $HasilGangguanMoodA2Buruk = $this->m_penghitungan->getHasilGangguanMoodA2Buruk();
                $HasilGangguanMoodA2Buruk = count($HasilGangguanMoodA2Buruk);
                $HasilRinganA2Buruk = $this->m_penghitungan->getHasilRinganA2Buruk();
                $HasilRinganA2Buruk = count($HasilRinganA2Buruk);
                $HasilSedangA2Buruk = $this->m_penghitungan->getHasilSedangA2Buruk();
                $HasilSedangA2Buruk = count($HasilSedangA2Buruk);
                $HasilBeratA2Buruk = $this->m_penghitungan->getHasilBeratA2Buruk();
                $HasilBeratA2Buruk = count($HasilBeratA2Buruk);

                $prob_A2GangguanMood = $HasilGangguanMoodA2Buruk / $HasilGangguanMood;
                $prob_A2Ringan = $HasilRinganA2Buruk / $HasilRingan;
                $prob_A2Sedang = $HasilSedangA2Buruk / $HasilSedang;
                $prob_A2Berat = $HasilBeratA2Buruk / $HasilBerat;

                $solusiA2 = $this->m_solusi->getA2();
            }
            else if ($data['a2']=="Cukup"){
                $HasilGangguanMoodA2Cukup = $this->m_penghitungan->getHasilGangguanMoodA2Cukup();
                $HasilGangguanMoodA2Cukup = count($HasilGangguanMoodA2Cukup);
                $HasilRinganA2Cukup = $this->m_penghitungan->getHasilRinganA2Cukup();
                $HasilRinganA2Cukup = count($HasilRinganA2Cukup);
                $HasilSedangA2Cukup = $this->m_penghitungan->getHasilSedangA2Cukup();
                $HasilSedangA2Cukup = count($HasilSedangA2Cukup);
                $HasilBeratA2Cukup = $this->m_penghitungan->getHasilBeratA2Cukup();
                $HasilBeratA2Cukup = count($HasilBeratA2Cukup);

                $prob_A2GangguanMood = $HasilGangguanMoodA2Cukup / $HasilGangguanMood;
                $prob_A2Ringan = $HasilRinganA2Cukup / $HasilRingan;
                $prob_A2Sedang = $HasilSedangA2Cukup / $HasilSedang;
                $prob_A2Berat = $HasilBeratA2Cukup / $HasilBerat;

                $solusiA2 = null;
            }
            else if ($data['a2']=="Baik"){
                $HasilGangguanMoodA2Baik = $this->m_penghitungan->getHasilGangguanMoodA2Baik();
                $HasilGangguanMoodA2Baik = count($HasilGangguanMoodA2Baik);
                $HasilRinganA2Baik = $this->m_penghitungan->getHasilRinganA2Baik();
                $HasilRinganA2Baik = count($HasilRinganA2Baik);
                $HasilSedangA2Baik = $this->m_penghitungan->getHasilSedangA2Baik();
                $HasilSedangA2Baik = count($HasilSedangA2Baik);
                $HasilBeratA2Baik = $this->m_penghitungan->getHasilBeratA2Baik();
                $HasilBeratA2Baik = count($HasilBeratA2Baik);

                $prob_A2GangguanMood = $HasilGangguanMoodA2Baik / $HasilGangguanMood;
                $prob_A2Ringan = $HasilRinganA2Baik / $HasilRingan;
                $prob_A2Sedang = $HasilSedangA2Baik / $HasilSedang;
                $prob_A2Berat = $HasilBeratA2Baik / $HasilBerat;

                $solusiA2 = null;
            }
            else if ($data['a2']=="Sangat Baik"){
                $HasilGangguanMoodA2SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA2SangatBaik();
                $HasilGangguanMoodA2SangatBaik = count($HasilGangguanMoodA2SangatBaik);
                $HasilRinganA2SangatBaik = $this->m_penghitungan->getHasilRinganA2SangatBaik();
                $HasilRinganA2SangatBaik = count($HasilRinganA2SangatBaik);
                $HasilSedangA2SangatBaik = $this->m_penghitungan->getHasilSedangA2SangatBaik();
                $HasilSedangA2SangatBaik = count($HasilSedangA2SangatBaik);
                $HasilBeratA2SangatBaik = $this->m_penghitungan->getHasilBeratA2SangatBaik();
                $HasilBeratA2SangatBaik = count($HasilBeratA2SangatBaik);

                $prob_A2GangguanMood = $HasilGangguanMoodA2SangatBaik / $HasilGangguanMood;
                $prob_A2Ringan = $HasilRinganA2SangatBaik / $HasilRingan;
                $prob_A2Sedang = $HasilSedangA2SangatBaik / $HasilSedang;
                $prob_A2Berat = $HasilBeratA2SangatBaik / $HasilBerat;

                $solusiA2 = null;
            }

            if($data['a3']=="Sangat Buruk"){
                $HasilGangguanMoodA3SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA3SangatBuruk();
                $HasilGangguanMoodA3SangatBuruk = count($HasilGangguanMoodA3SangatBuruk);
                $HasilRinganA3SangatBuruk = $this->m_penghitungan->getHasilRinganA3SangatBuruk();
                $HasilRinganA3SangatBuruk = count($HasilRinganA3SangatBuruk);
                $HasilSedangA3SangatBuruk = $this->m_penghitungan->getHasilSedangA3SangatBuruk();
                $HasilSedangA3SangatBuruk = count($HasilSedangA3SangatBuruk);
                $HasilBeratA3SangatBuruk = $this->m_penghitungan->getHasilBeratA3SangatBuruk();
                $HasilBeratA3SangatBuruk = count($HasilBeratA3SangatBuruk);

                $prob_A3GangguanMood = $HasilGangguanMoodA3SangatBuruk / $HasilGangguanMood;
                $prob_A3Ringan = $HasilRinganA3SangatBuruk / $HasilRingan;
                $prob_A3Sedang = $HasilSedangA3SangatBuruk / $HasilSedang;
                $prob_A3Berat = $HasilBeratA3SangatBuruk / $HasilBerat;

                $solusiA3 = $this->m_solusi->getA3();
            }
            else if ($data['a3']=="Buruk"){
                $HasilGangguanMoodA3Buruk = $this->m_penghitungan->getHasilGangguanMoodA3Buruk();
                $HasilGangguanMoodA3Buruk = count($HasilGangguanMoodA3Buruk);
                $HasilRinganA3Buruk = $this->m_penghitungan->getHasilRinganA3Buruk();
                $HasilRinganA3Buruk = count($HasilRinganA3Buruk);
                $HasilSedangA3Buruk = $this->m_penghitungan->getHasilSedangA3Buruk();
                $HasilSedangA3Buruk = count($HasilSedangA3Buruk);
                $HasilBeratA3Buruk = $this->m_penghitungan->getHasilBeratA3Buruk();
                $HasilBeratA3Buruk = count($HasilBeratA3Buruk);

                $prob_A3GangguanMood = $HasilGangguanMoodA3Buruk / $HasilGangguanMood;
                $prob_A3Ringan = $HasilRinganA3Buruk / $HasilRingan;
                $prob_A3Sedang = $HasilSedangA3Buruk / $HasilSedang;
                $prob_A3Berat = $HasilBeratA3Buruk / $HasilBerat;

                $solusiA3 = $this->m_solusi->getA3();
            }
            else if ($data['a3']=="Cukup"){
                $HasilGangguanMoodA3Cukup = $this->m_penghitungan->getHasilGangguanMoodA3Cukup();
                $HasilGangguanMoodA3Cukup = count($HasilGangguanMoodA3Cukup);
                $HasilRinganA3Cukup = $this->m_penghitungan->getHasilRinganA3Cukup();
                $HasilRinganA3Cukup = count($HasilRinganA3Cukup);
                $HasilSedangA3Cukup = $this->m_penghitungan->getHasilSedangA3Cukup();
                $HasilSedangA3Cukup = count($HasilSedangA3Cukup);
                $HasilBeratA3Cukup = $this->m_penghitungan->getHasilBeratA3Cukup();
                $HasilBeratA3Cukup = count($HasilBeratA3Cukup);

                $prob_A3GangguanMood = $HasilGangguanMoodA3Cukup / $HasilGangguanMood;
                $prob_A3Ringan = $HasilRinganA3Cukup / $HasilRingan;
                $prob_A3Sedang = $HasilSedangA3Cukup / $HasilSedang;
                $prob_A3Berat = $HasilBeratA3Cukup / $HasilBerat;

                $solusiA3 = null;
            }
            else if ($data['a3']=="Baik"){
                $HasilGangguanMoodA3Baik = $this->m_penghitungan->getHasilGangguanMoodA3Baik();
                $HasilGangguanMoodA3Baik = count($HasilGangguanMoodA3Baik);
                $HasilRinganA3Baik = $this->m_penghitungan->getHasilRinganA3Baik();
                $HasilRinganA3Baik = count($HasilRinganA3Baik);
                $HasilSedangA3Baik = $this->m_penghitungan->getHasilSedangA3Baik();
                $HasilSedangA3Baik = count($HasilSedangA3Baik);
                $HasilBeratA3Baik = $this->m_penghitungan->getHasilBeratA3Baik();
                $HasilBeratA3Baik = count($HasilBeratA3Baik);

                $prob_A3GangguanMood = $HasilGangguanMoodA3Baik / $HasilGangguanMood;
                $prob_A3Ringan = $HasilRinganA3Baik / $HasilRingan;
                $prob_A3Sedang = $HasilSedangA3Baik / $HasilSedang;
                $prob_A3Berat = $HasilBeratA3Baik / $HasilBerat;

                $solusiA3 = null;
            }
            else if ($data['a3']=="Sangat Baik"){
                $HasilGangguanMoodA3SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA3SangatBaik();
                $HasilGangguanMoodA3SangatBaik = count($HasilGangguanMoodA3SangatBaik);
                $HasilRinganA3SangatBaik = $this->m_penghitungan->getHasilRinganA3SangatBaik();
                $HasilRinganA3SangatBaik = count($HasilRinganA3SangatBaik);
                $HasilSedangA3SangatBaik = $this->m_penghitungan->getHasilSedangA3SangatBaik();
                $HasilSedangA3SangatBaik = count($HasilSedangA3SangatBaik);
                $HasilBeratA3SangatBaik = $this->m_penghitungan->getHasilBeratA3SangatBaik();
                $HasilBeratA3SangatBaik = count($HasilBeratA3SangatBaik);

                $prob_A3GangguanMood = $HasilGangguanMoodA3SangatBaik / $HasilGangguanMood;
                $prob_A3Ringan = $HasilRinganA3SangatBaik / $HasilRingan;
                $prob_A3Sedang = $HasilSedangA3SangatBaik / $HasilSedang;
                $prob_A3Berat = $HasilBeratA3SangatBaik / $HasilBerat;

                $solusiA3 = null;
            }

            if($data['a4']=="Sangat Buruk"){
                $HasilGangguanMoodA4SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA4SangatBuruk();
                $HasilGangguanMoodA4SangatBuruk = count($HasilGangguanMoodA4SangatBuruk);
                $HasilRinganA4SangatBuruk = $this->m_penghitungan->getHasilRinganA4SangatBuruk();
                $HasilRinganA4SangatBuruk = count($HasilRinganA4SangatBuruk);
                $HasilSedangA4SangatBuruk = $this->m_penghitungan->getHasilSedangA4SangatBuruk();
                $HasilSedangA4SangatBuruk = count($HasilSedangA4SangatBuruk);
                $HasilBeratA4SangatBuruk = $this->m_penghitungan->getHasilBeratA4SangatBuruk();
                $HasilBeratA4SangatBuruk = count($HasilBeratA4SangatBuruk);

                $prob_A4GangguanMood = $HasilGangguanMoodA4SangatBuruk / $HasilGangguanMood;
                $prob_A4Ringan = $HasilRinganA4SangatBuruk / $HasilRingan;
                $prob_A4Sedang = $HasilSedangA4SangatBuruk / $HasilSedang;
                $prob_A4Berat = $HasilBeratA4SangatBuruk / $HasilBerat;

                $solusiA4 = $this->m_solusi->getA4();
            }
            else if ($data['a4']=="Buruk"){
                $HasilGangguanMoodA4Buruk = $this->m_penghitungan->getHasilGangguanMoodA4Buruk();
                $HasilGangguanMoodA4Buruk = count($HasilGangguanMoodA4Buruk);
                $HasilRinganA4Buruk = $this->m_penghitungan->getHasilRinganA4Buruk();
                $HasilRinganA4Buruk = count($HasilRinganA4Buruk);
                $HasilSedangA4Buruk = $this->m_penghitungan->getHasilSedangA4Buruk();
                $HasilSedangA4Buruk = count($HasilSedangA4Buruk);
                $HasilBeratA4Buruk = $this->m_penghitungan->getHasilBeratA4Buruk();
                $HasilBeratA4Buruk = count($HasilBeratA4Buruk);

                $prob_A4GangguanMood = $HasilGangguanMoodA4Buruk / $HasilGangguanMood;
                $prob_A4Ringan = $HasilRinganA4Buruk / $HasilRingan;
                $prob_A4Sedang = $HasilSedangA4Buruk / $HasilSedang;
                $prob_A4Berat = $HasilBeratA4Buruk / $HasilBerat;

                $solusiA4 = $this->m_solusi->getA4();
            }
            else if ($data['a4']=="Cukup"){
                $HasilGangguanMoodA4Cukup = $this->m_penghitungan->getHasilGangguanMoodA4Cukup();
                $HasilGangguanMoodA4Cukup = count($HasilGangguanMoodA4Cukup);
                $HasilRinganA4Cukup = $this->m_penghitungan->getHasilRinganA4Cukup();
                $HasilRinganA4Cukup = count($HasilRinganA4Cukup);
                $HasilSedangA4Cukup = $this->m_penghitungan->getHasilSedangA4Cukup();
                $HasilSedangA4Cukup = count($HasilSedangA4Cukup);
                $HasilBeratA4Cukup = $this->m_penghitungan->getHasilBeratA4Cukup();
                $HasilBeratA4Cukup = count($HasilBeratA4Cukup);

                $prob_A4GangguanMood = $HasilGangguanMoodA4Cukup / $HasilGangguanMood;
                $prob_A4Ringan = $HasilRinganA4Cukup / $HasilRingan;
                $prob_A4Sedang = $HasilSedangA4Cukup / $HasilSedang;
                $prob_A4Berat = $HasilBeratA4Cukup / $HasilBerat;

                $solusiA4 = null;
            }
            else if ($data['a4']=="Baik"){
                $HasilGangguanMoodA4Baik = $this->m_penghitungan->getHasilGangguanMoodA4Baik();
                $HasilGangguanMoodA4Baik = count($HasilGangguanMoodA4Baik);
                $HasilRinganA4Baik = $this->m_penghitungan->getHasilRinganA4Baik();
                $HasilRinganA4Baik = count($HasilRinganA4Baik);
                $HasilSedangA4Baik = $this->m_penghitungan->getHasilSedangA4Baik();
                $HasilSedangA4Baik = count($HasilSedangA4Baik);
                $HasilBeratA4Baik = $this->m_penghitungan->getHasilBeratA4Baik();
                $HasilBeratA4Baik = count($HasilBeratA4Baik);

                $prob_A4GangguanMood = $HasilGangguanMoodA4Baik / $HasilGangguanMood;
                $prob_A4Ringan = $HasilRinganA4Baik / $HasilRingan;
                $prob_A4Sedang = $HasilSedangA4Baik / $HasilSedang;
                $prob_A4Berat = $HasilBeratA4Baik / $HasilBerat;

                $solusiA4 = null;
            }
            else if ($data['a4']=="Sangat Baik"){
                $HasilGangguanMoodA4SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA4SangatBaik();
                $HasilGangguanMoodA4SangatBaik = count($HasilGangguanMoodA4SangatBaik);
                $HasilRinganA4SangatBaik = $this->m_penghitungan->getHasilRinganA4SangatBaik();
                $HasilRinganA4SangatBaik = count($HasilRinganA4SangatBaik);
                $HasilSedangA4SangatBaik = $this->m_penghitungan->getHasilSedangA4SangatBaik();
                $HasilSedangA4SangatBaik = count($HasilSedangA4SangatBaik);
                $HasilBeratA4SangatBaik = $this->m_penghitungan->getHasilBeratA4SangatBaik();
                $HasilBeratA4SangatBaik = count($HasilBeratA4SangatBaik);

                $prob_A4GangguanMood = $HasilGangguanMoodA4SangatBaik / $HasilGangguanMood;
                $prob_A4Ringan = $HasilRinganA4SangatBaik / $HasilRingan;
                $prob_A4Sedang = $HasilSedangA4SangatBaik / $HasilSedang;
                $prob_A4Berat = $HasilBeratA4SangatBaik / $HasilBerat;

                $solusiA4 = null;
            }

            if($data['a5']=="Sangat Buruk"){
                $HasilGangguanMoodA5SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA5SangatBuruk();
                $HasilGangguanMoodA5SangatBuruk = count($HasilGangguanMoodA5SangatBuruk);
                $HasilRinganA5SangatBuruk = $this->m_penghitungan->getHasilRinganA5SangatBuruk();
                $HasilRinganA5SangatBuruk = count($HasilRinganA5SangatBuruk);
                $HasilSedangA5SangatBuruk = $this->m_penghitungan->getHasilSedangA5SangatBuruk();
                $HasilSedangA5SangatBuruk = count($HasilSedangA5SangatBuruk);
                $HasilBeratA5SangatBuruk = $this->m_penghitungan->getHasilBeratA5SangatBuruk();
                $HasilBeratA5SangatBuruk = count($HasilBeratA5SangatBuruk);

                $prob_A5GangguanMood = $HasilGangguanMoodA5SangatBuruk / $HasilGangguanMood;
                $prob_A5Ringan = $HasilRinganA5SangatBuruk / $HasilRingan;
                $prob_A5Sedang = $HasilSedangA5SangatBuruk / $HasilSedang;
                $prob_A5Berat = $HasilBeratA5SangatBuruk / $HasilBerat;

                $solusiA5 = $this->m_solusi->getA5();
            }
            else if ($data['a5']=="Buruk"){
                $HasilGangguanMoodA5Buruk = $this->m_penghitungan->getHasilGangguanMoodA5Buruk();
                $HasilGangguanMoodA5Buruk = count($HasilGangguanMoodA5Buruk);
                $HasilRinganA5Buruk = $this->m_penghitungan->getHasilRinganA5Buruk();
                $HasilRinganA5Buruk = count($HasilRinganA5Buruk);
                $HasilSedangA5Buruk = $this->m_penghitungan->getHasilSedangA5Buruk();
                $HasilSedangA5Buruk = count($HasilSedangA5Buruk);
                $HasilBeratA5Buruk = $this->m_penghitungan->getHasilBeratA5Buruk();
                $HasilBeratA5Buruk = count($HasilBeratA5Buruk);

                $prob_A5GangguanMood = $HasilGangguanMoodA5Buruk / $HasilGangguanMood;
                $prob_A5Ringan = $HasilRinganA5Buruk / $HasilRingan;
                $prob_A5Sedang = $HasilSedangA5Buruk / $HasilSedang;
                $prob_A5Berat = $HasilBeratA5Buruk / $HasilBerat;

                $solusiA5 = $this->m_solusi->getA5();
            }
            else if ($data['a5']=="Cukup"){
                $HasilGangguanMoodA5Cukup = $this->m_penghitungan->getHasilGangguanMoodA5Cukup();
                $HasilGangguanMoodA5Cukup = count($HasilGangguanMoodA5Cukup);
                $HasilRinganA5Cukup = $this->m_penghitungan->getHasilRinganA5Cukup();
                $HasilRinganA5Cukup = count($HasilRinganA5Cukup);
                $HasilSedangA5Cukup = $this->m_penghitungan->getHasilSedangA5Cukup();
                $HasilSedangA5Cukup = count($HasilSedangA5Cukup);
                $HasilBeratA5Cukup = $this->m_penghitungan->getHasilBeratA5Cukup();
                $HasilBeratA5Cukup = count($HasilBeratA5Cukup);

                $prob_A5GangguanMood = $HasilGangguanMoodA5Cukup / $HasilGangguanMood;
                $prob_A5Ringan = $HasilRinganA5Cukup / $HasilRingan;
                $prob_A5Sedang = $HasilSedangA5Cukup / $HasilSedang;
                $prob_A5Berat = $HasilBeratA5Cukup / $HasilBerat;

                $solusiA5 = null;
            }
            else if ($data['a5']=="Baik"){
                $HasilGangguanMoodA5Baik = $this->m_penghitungan->getHasilGangguanMoodA5Baik();
                $HasilGangguanMoodA5Baik = count($HasilGangguanMoodA5Baik);
                $HasilRinganA5Baik = $this->m_penghitungan->getHasilRinganA5Baik();
                $HasilRinganA5Baik = count($HasilRinganA5Baik);
                $HasilSedangA5Baik = $this->m_penghitungan->getHasilSedangA5Baik();
                $HasilSedangA5Baik = count($HasilSedangA5Baik);
                $HasilBeratA5Baik = $this->m_penghitungan->getHasilBeratA5Baik();
                $HasilBeratA5Baik = count($HasilBeratA5Baik);

                $prob_A5GangguanMood = $HasilGangguanMoodA5Baik / $HasilGangguanMood;
                $prob_A5Ringan = $HasilRinganA5Baik / $HasilRingan;
                $prob_A5Sedang = $HasilSedangA5Baik / $HasilSedang;
                $prob_A5Berat = $HasilBeratA5Baik / $HasilBerat;

                $solusiA5 = null;
            }
            else if ($data['a5']=="Sangat Baik"){
                $HasilGangguanMoodA5SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA5SangatBaik();
                $HasilGangguanMoodA5SangatBaik = count($HasilGangguanMoodA5SangatBaik);
                $HasilRinganA5SangatBaik = $this->m_penghitungan->getHasilRinganA5SangatBaik();
                $HasilRinganA5SangatBaik = count($HasilRinganA5SangatBaik);
                $HasilSedangA5SangatBaik = $this->m_penghitungan->getHasilSedangA5SangatBaik();
                $HasilSedangA5SangatBaik = count($HasilSedangA5SangatBaik);
                $HasilBeratA5SangatBaik = $this->m_penghitungan->getHasilBeratA5SangatBaik();
                $HasilBeratA5SangatBaik = count($HasilBeratA5SangatBaik);

                $prob_A5GangguanMood = $HasilGangguanMoodA5SangatBaik / $HasilGangguanMood;
                $prob_A5Ringan = $HasilRinganA5SangatBaik / $HasilRingan;
                $prob_A5Sedang = $HasilSedangA5SangatBaik / $HasilSedang;
                $prob_A5Berat = $HasilBeratA5SangatBaik / $HasilBerat;

                $solusiA5 = null;
            }

            if($data['a6']=="Sangat Buruk"){
                $HasilGangguanMoodA6SangatBuruk = $this->m_penghitungan->getHasilGangguanMoodA6SangatBuruk();
                $HasilGangguanMoodA6SangatBuruk = count($HasilGangguanMoodA6SangatBuruk);
                $HasilRinganA6SangatBuruk = $this->m_penghitungan->getHasilRinganA6SangatBuruk();
                $HasilRinganA6SangatBuruk = count($HasilRinganA6SangatBuruk);
                $HasilSedangA6SangatBuruk = $this->m_penghitungan->getHasilSedangA6SangatBuruk();
                $HasilSedangA6SangatBuruk = count($HasilSedangA6SangatBuruk);
                $HasilBeratA6SangatBuruk = $this->m_penghitungan->getHasilBeratA6SangatBuruk();
                $HasilBeratA6SangatBuruk = count($HasilBeratA6SangatBuruk);

                $prob_A6GangguanMood = $HasilGangguanMoodA6SangatBuruk / $HasilGangguanMood;
                $prob_A6Ringan = $HasilRinganA6SangatBuruk / $HasilRingan;
                $prob_A6Sedang = $HasilSedangA6SangatBuruk / $HasilSedang;
                $prob_A6Berat = $HasilBeratA6SangatBuruk / $HasilBerat;

                $solusiA6 = $this->m_solusi->getA6();
            }
            else if ($data['a6']=="Buruk"){
                $HasilGangguanMoodA6Buruk = $this->m_penghitungan->getHasilGangguanMoodA6Buruk();
                $HasilGangguanMoodA6Buruk = count($HasilGangguanMoodA6Buruk);
                $HasilRinganA6Buruk = $this->m_penghitungan->getHasilRinganA6Buruk();
                $HasilRinganA6Buruk = count($HasilRinganA6Buruk);
                $HasilSedangA6Buruk = $this->m_penghitungan->getHasilSedangA6Buruk();
                $HasilSedangA6Buruk = count($HasilSedangA6Buruk);
                $HasilBeratA6Buruk = $this->m_penghitungan->getHasilBeratA6Buruk();
                $HasilBeratA6Buruk = count($HasilBeratA6Buruk);

                $prob_A6GangguanMood = $HasilGangguanMoodA6Buruk / $HasilGangguanMood;
                $prob_A6Ringan = $HasilRinganA6Buruk / $HasilRingan;
                $prob_A6Sedang = $HasilSedangA6Buruk / $HasilSedang;
                $prob_A6Berat = $HasilBeratA6Buruk / $HasilBerat;
                
                $solusiA6 = $this->m_solusi->getA6();
            }
            else if ($data['a6']=="Cukup"){
                $HasilGangguanMoodA6Cukup = $this->m_penghitungan->getHasilGangguanMoodA6Cukup();
                $HasilGangguanMoodA6Cukup = count($HasilGangguanMoodA6Cukup);
                $HasilRinganA6Cukup = $this->m_penghitungan->getHasilRinganA6Cukup();
                $HasilRinganA6Cukup = count($HasilRinganA6Cukup);
                $HasilSedangA6Cukup = $this->m_penghitungan->getHasilSedangA6Cukup();
                $HasilSedangA6Cukup = count($HasilSedangA6Cukup);
                $HasilBeratA6Cukup = $this->m_penghitungan->getHasilBeratA6Cukup();
                $HasilBeratA6Cukup = count($HasilBeratA6Cukup);

                $prob_A6GangguanMood = $HasilGangguanMoodA6Cukup / $HasilGangguanMood;
                $prob_A6Ringan = $HasilRinganA6Cukup / $HasilRingan;
                $prob_A6Sedang = $HasilSedangA6Cukup / $HasilSedang;
                $prob_A6Berat = $HasilBeratA6Cukup / $HasilBerat;

                $solusiA6 = null;
            }
            else if ($data['a6']=="Baik"){
                $HasilGangguanMoodA6Baik = $this->m_penghitungan->getHasilGangguanMoodA6Baik();
                $HasilGangguanMoodA6Baik = count($HasilGangguanMoodA6Baik);
                $HasilRinganA6Baik = $this->m_penghitungan->getHasilRinganA6Baik();
                $HasilRinganA6Baik = count($HasilRinganA6Baik);
                $HasilSedangA6Baik = $this->m_penghitungan->getHasilSedangA6Baik();
                $HasilSedangA6Baik = count($HasilSedangA6Baik);
                $HasilBeratA6Baik = $this->m_penghitungan->getHasilBeratA6Baik();
                $HasilBeratA6Baik = count($HasilBeratA6Baik);

                $prob_A6GangguanMood = $HasilGangguanMoodA6Baik / $HasilGangguanMood;
                $prob_A6Ringan = $HasilRinganA6Baik / $HasilRingan;
                $prob_A6Sedang = $HasilSedangA6Baik / $HasilSedang;
                $prob_A6Berat = $HasilBeratA6Baik / $HasilBerat;

                $solusiA6 = null;
            }
            else if ($data['a6']=="Sangat Baik"){
                $HasilGangguanMoodA6SangatBaik = $this->m_penghitungan->getHasilGangguanMoodA6SangatBaik();
                $HasilGangguanMoodA6SangatBaik = count($HasilGangguanMoodA6SangatBaik);
                $HasilRinganA6SangatBaik = $this->m_penghitungan->getHasilRinganA6SangatBaik();
                $HasilRinganA6SangatBaik = count($HasilRinganA6SangatBaik);
                $HasilSedangA6SangatBaik = $this->m_penghitungan->getHasilSedangA6SangatBaik();
                $HasilSedangA6SangatBaik = count($HasilSedangA6SangatBaik);
                $HasilBeratA6SangatBaik = $this->m_penghitungan->getHasilBeratA6SangatBaik();
                $HasilBeratA6SangatBaik = count($HasilBeratA6SangatBaik);

                $prob_A6GangguanMood = $HasilGangguanMoodA6SangatBaik / $HasilGangguanMood;
                $prob_A6Ringan = $HasilRinganA6SangatBaik / $HasilRingan;
                $prob_A6Sedang = $HasilSedangA6SangatBaik / $HasilSedang;
                $prob_A6Berat = $HasilBeratA6SangatBaik / $HasilBerat;

                $solusiA6 = null;
            }

            if($data['b1']=="Saya tidak merasa sedih"){
                $bobot1 = 0;

                $HasilGangguanMoodB1_A = $this->m_penghitungan->getHasilGangguanMoodB1_A();
                $HasilGangguanMoodB1_A = count($HasilGangguanMoodB1_A);
                $HasilRinganB1_A = $this->m_penghitungan->getHasilRinganB1_A();
                $HasilRinganB1_A = count($HasilRinganB1_A);
                $HasilSedangB1_A = $this->m_penghitungan->getHasilSedangB1_A();
                $HasilSedangB1_A = count($HasilSedangB1_A);
                $HasilBeratB1_A = $this->m_penghitungan->getHasilBeratB1_A();
                $HasilBeratB1_A = count($HasilBeratB1_A);

                $prob_B1GangguanMood = $HasilGangguanMoodB1_A / $HasilGangguanMood;
                $prob_B1Ringan = $HasilRinganB1_A / $HasilRingan;
                $prob_B1Sedang = $HasilSedangB1_A / $HasilSedang;
                $prob_B1Berat = $HasilBeratB1_A / $HasilBerat;
            }
            else if($data['b1']=="Saya merasa sedih"){
                $bobot1 = 1;

                $HasilGangguanMoodB1_B = $this->m_penghitungan->getHasilGangguanMoodB1_B();
                $HasilGangguanMoodB1_B = count($HasilGangguanMoodB1_B);
                $HasilRinganB1_B = $this->m_penghitungan->getHasilRinganB1_B();
                $HasilRinganB1_B = count($HasilRinganB1_B);
                $HasilSedangB1_B = $this->m_penghitungan->getHasilSedangB1_B();
                $HasilSedangB1_B = count($HasilSedangB1_B);
                $HasilBeratB1_B = $this->m_penghitungan->getHasilBeratB1_B();
                $HasilBeratB1_B = count($HasilBeratB1_B);

                $prob_B1GangguanMood = $HasilGangguanMoodB1_B / $HasilGangguanMood;
                $prob_B1Ringan = $HasilRinganB1_B / $HasilRingan;
                $prob_B1Sedang = $HasilSedangB1_B / $HasilSedang;
                $prob_B1Berat = $HasilBeratB1_B / $HasilBerat;
            }
            else if($data['b1']=="Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu"){
                $bobot1 = 2;

                $HasilGangguanMoodB1_C = $this->m_penghitungan->getHasilGangguanMoodB1_C();
                $HasilGangguanMoodB1_C = count($HasilGangguanMoodB1_C);
                $HasilRinganB1_C = $this->m_penghitungan->getHasilRinganB1_C();
                $HasilRinganB1_C = count($HasilRinganB1_C);
                $HasilSedangB1_C = $this->m_penghitungan->getHasilSedangB1_C();
                $HasilSedangB1_C = count($HasilSedangB1_C);
                $HasilBeratB1_C = $this->m_penghitungan->getHasilBeratB1_C();
                $HasilBeratB1_C = count($HasilBeratB1_C);

                $prob_B1GangguanMood = $HasilGangguanMoodB1_C / $HasilGangguanMood;
                $prob_B1Ringan = $HasilRinganB1_C / $HasilRingan;
                $prob_B1Sedang = $HasilSedangB1_C / $HasilSedang;
                $prob_B1Berat = $HasilBeratB1_C / $HasilBerat;
            }
            else if($data['b1']=="Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya"){
                $bobot1 = 3;

                $HasilGangguanMoodB1_D = $this->m_penghitungan->getHasilGangguanMoodB1_D();
                $HasilGangguanMoodB1_D = count($HasilGangguanMoodB1_D);
                $HasilRinganB1_D = $this->m_penghitungan->getHasilRinganB1_D();
                $HasilRinganB1_D = count($HasilRinganB1_D);
                $HasilSedangB1_D = $this->m_penghitungan->getHasilSedangB1_D();
                $HasilSedangB1_D = count($HasilSedangB1_D);
                $HasilBeratB1_D = $this->m_penghitungan->getHasilBeratB1_D();
                $HasilBeratB1_D = count($HasilBeratB1_D);

                $prob_B1GangguanMood = $HasilGangguanMoodB1_D / $HasilGangguanMood;
                $prob_B1Ringan = $HasilRinganB1_D / $HasilRingan;
                $prob_B1Sedang = $HasilSedangB1_D / $HasilSedang;
                $prob_B1Berat = $HasilBeratB1_D / $HasilBerat;
            }

            if($data['b2']=="Saya tidak terlalu berkecil hati mengenai masa depan"){
                $bobot2 = 0;

                $HasilGangguanMoodB2_A = $this->m_penghitungan->getHasilGangguanMoodB2_A();
                $HasilGangguanMoodB2_A = count($HasilGangguanMoodB2_A);
                $HasilRinganB2_A = $this->m_penghitungan->getHasilRinganB2_A();
                $HasilRinganB2_A = count($HasilRinganB2_A);
                $HasilSedangB2_A = $this->m_penghitungan->getHasilSedangB2_A();
                $HasilSedangB2_A = count($HasilSedangB2_A);
                $HasilBeratB2_A = $this->m_penghitungan->getHasilBeratB2_A();
                $HasilBeratB2_A = count($HasilBeratB2_A);

                $prob_B2GangguanMood = $HasilGangguanMoodB2_A / $HasilGangguanMood;
                $prob_B2Ringan = $HasilRinganB2_A / $HasilRingan;
                $prob_B2Sedang = $HasilSedangB2_A / $HasilSedang;
                $prob_B2Berat = $HasilBeratB2_A / $HasilBerat;
            }
            else if($data['b2']=="Saya merasa kecil hati mengenai masa depan"){
                $bobot2 = 1;

                $HasilGangguanMoodB2_B = $this->m_penghitungan->getHasilGangguanMoodB2_B();
                $HasilGangguanMoodB2_B = count($HasilGangguanMoodB2_B);
                $HasilRinganB2_B = $this->m_penghitungan->getHasilRinganB2_B();
                $HasilRinganB2_B = count($HasilRinganB2_B);
                $HasilSedangB2_B = $this->m_penghitungan->getHasilSedangB2_B();
                $HasilSedangB2_B = count($HasilSedangB2_B);
                $HasilBeratB2_B = $this->m_penghitungan->getHasilBeratB2_B();
                $HasilBeratB2_B = count($HasilBeratB2_B);

                $prob_B2GangguanMood = $HasilGangguanMoodB2_B / $HasilGangguanMood;
                $prob_B2Ringan = $HasilRinganB2_B / $HasilRingan;
                $prob_B2Sedang = $HasilSedangB2_B / $HasilSedang;
                $prob_B2Berat = $HasilBeratB2_B / $HasilBerat;
            }
            else if($data['b2']=="Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan"){
                $bobot2 = 2;

                $HasilGangguanMoodB2_C = $this->m_penghitungan->getHasilGangguanMoodB2_C();
                $HasilGangguanMoodB2_C = count($HasilGangguanMoodB2_C);
                $HasilRinganB2_C = $this->m_penghitungan->getHasilRinganB2_C();
                $HasilRinganB2_C = count($HasilRinganB2_C);
                $HasilSedangB2_C = $this->m_penghitungan->getHasilSedangB2_C();
                $HasilSedangB2_C = count($HasilSedangB2_C);
                $HasilBeratB2_C = $this->m_penghitungan->getHasilBeratB2_C();
                $HasilBeratB2_C = count($HasilBeratB2_C);

                $prob_B2GangguanMood = $HasilGangguanMoodB2_C / $HasilGangguanMood;
                $prob_B2Ringan = $HasilRinganB2_C / $HasilRingan;
                $prob_B2Sedang = $HasilSedangB2_C / $HasilSedang;
                $prob_B2Berat = $HasilBeratB2_C / $HasilBerat;
            }
            else if($data['b2']=="Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik"){
                $bobot2 = 3;

                $HasilGangguanMoodB2_D = $this->m_penghitungan->getHasilGangguanMoodB2_D();
                $HasilGangguanMoodB2_D = count($HasilGangguanMoodB2_D);
                $HasilRinganB2_D = $this->m_penghitungan->getHasilRinganB2_D();
                $HasilRinganB2_D = count($HasilRinganB2_D);
                $HasilSedangB2_D = $this->m_penghitungan->getHasilSedangB2_D();
                $HasilSedangB2_D = count($HasilSedangB2_D);
                $HasilBeratB2_D = $this->m_penghitungan->getHasilBeratB2_D();
                $HasilBeratB2_D = count($HasilBeratB2_D);

                $prob_B2GangguanMood = $HasilGangguanMoodB2_D / $HasilGangguanMood;
                $prob_B2Ringan = $HasilRinganB2_D / $HasilRingan;
                $prob_B2Sedang = $HasilSedangB2_D / $HasilSedang;
                $prob_B2Berat = $HasilBeratB2_D / $HasilBerat;
            }

        
            if($data['b3']=="Saya tidak menganggap diri saya sebagai orang yang gagal"){
                $bobot3 = 0;

                $HasilGangguanMoodB3_A = $this->m_penghitungan->getHasilGangguanMoodB3_A();
                $HasilGangguanMoodB3_A = count($HasilGangguanMoodB3_A);
                $HasilRinganB3_A = $this->m_penghitungan->getHasilRinganB3_A();
                $HasilRinganB3_A = count($HasilRinganB3_A);
                $HasilSedangB3_A = $this->m_penghitungan->getHasilSedangB3_A();
                $HasilSedangB3_A = count($HasilSedangB3_A);
                $HasilBeratB3_A = $this->m_penghitungan->getHasilBeratB3_A();
                $HasilBeratB3_A = count($HasilBeratB3_A);

                $prob_B3GangguanMood = $HasilGangguanMoodB3_A / $HasilGangguanMood;
                $prob_B3Ringan = $HasilRinganB3_A / $HasilRingan;
                $prob_B3Sedang = $HasilSedangB3_A / $HasilSedang;
                $prob_B3Berat = $HasilBeratB3_A / $HasilBerat;
            }
            else if($data['b3']=="Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang"){
                $bobot3 = 1;

                $HasilGangguanMoodB3_B = $this->m_penghitungan->getHasilGangguanMoodB3_B();
                $HasilGangguanMoodB3_B = count($HasilGangguanMoodB3_B);
                $HasilRinganB3_B = $this->m_penghitungan->getHasilRinganB3_B();
                $HasilRinganB3_B = count($HasilRinganB3_B);
                $HasilSedangB3_B = $this->m_penghitungan->getHasilSedangB3_B();
                $HasilSedangB3_B = count($HasilSedangB3_B);
                $HasilBeratB3_B = $this->m_penghitungan->getHasilBeratB3_B();
                $HasilBeratB3_B = count($HasilBeratB3_B);

                $prob_B3GangguanMood = $HasilGangguanMoodB3_B / $HasilGangguanMood;
                $prob_B3Ringan = $HasilRinganB3_B / $HasilRingan;
                $prob_B3Sedang = $HasilSedangB3_B / $HasilSedang;
                $prob_B3Berat = $HasilBeratB3_B / $HasilBerat;
            }
            else if($data['b3']=="Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan"){
                $bobot3 = 2;

                $HasilGangguanMoodB3_C = $this->m_penghitungan->getHasilGangguanMoodB3_C();
                $HasilGangguanMoodB3_C = count($HasilGangguanMoodB3_C);
                $HasilRinganB3_C = $this->m_penghitungan->getHasilRinganB3_C();
                $HasilRinganB3_C = count($HasilRinganB3_C);
                $HasilSedangB3_C = $this->m_penghitungan->getHasilSedangB3_C();
                $HasilSedangB3_C = count($HasilSedangB3_C);
                $HasilBeratB3_C = $this->m_penghitungan->getHasilBeratB3_C();
                $HasilBeratB3_C = count($HasilBeratB3_C);

                $prob_B3GangguanMood = $HasilGangguanMoodB3_C / $HasilGangguanMood;
                $prob_B3Ringan = $HasilRinganB3_C / $HasilRingan;
                $prob_B3Sedang = $HasilSedangB3_C / $HasilSedang;
                $prob_B3Berat = $HasilBeratB3_C / $HasilBerat;
            }
            else if($data['b3']=="Saya merasa bahwa saya adalah orang yang gagal total"){
                $bobot3 = 3;

                $HasilGangguanMoodB3_D = $this->m_penghitungan->getHasilGangguanMoodB3_D();
                $HasilGangguanMoodB3_D = count($HasilGangguanMoodB3_D);
                $HasilRinganB3_D = $this->m_penghitungan->getHasilRinganB3_D();
                $HasilRinganB3_D = count($HasilRinganB3_D);
                $HasilSedangB3_D = $this->m_penghitungan->getHasilSedangB3_D();
                $HasilSedangB3_D = count($HasilSedangB3_D);
                $HasilBeratB3_D = $this->m_penghitungan->getHasilBeratB3_D();
                $HasilBeratB3_D = count($HasilBeratB3_D);

                $prob_B3GangguanMood = $HasilGangguanMoodB3_D / $HasilGangguanMood;
                $prob_B3Ringan = $HasilRinganB3_D / $HasilRingan;
                $prob_B3Sedang = $HasilSedangB3_D / $HasilSedang;
                $prob_B3Berat = $HasilBeratB3_D / $HasilBerat;
            }

            if($data['b4']=="Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya"){
                $bobot4 = 0;

                $HasilGangguanMoodB4_A = $this->m_penghitungan->getHasilGangguanMoodB4_A();
                $HasilGangguanMoodB4_A = count($HasilGangguanMoodB4_A);
                $HasilRinganB4_A = $this->m_penghitungan->getHasilRinganB4_A();
                $HasilRinganB4_A = count($HasilRinganB4_A);
                $HasilSedangB4_A = $this->m_penghitungan->getHasilSedangB4_A();
                $HasilSedangB4_A = count($HasilSedangB4_A);
                $HasilBeratB4_A = $this->m_penghitungan->getHasilBeratB4_A();
                $HasilBeratB4_A = count($HasilBeratB4_A);

                $prob_B4GangguanMood = $HasilGangguanMoodB4_A / $HasilGangguanMood;
                $prob_B4Ringan = $HasilRinganB4_A / $HasilRingan;
                $prob_B4Sedang = $HasilSedangB4_A / $HasilSedang;
                $prob_B4Berat = $HasilBeratB4_A / $HasilBerat;
            }
            else if($data['b4']=="Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu"){
                $bobot4 = 1;

                $HasilGangguanMoodB4_B = $this->m_penghitungan->getHasilGangguanMoodB4_B();
                $HasilGangguanMoodB4_B = count($HasilGangguanMoodB4_B);
                $HasilRinganB4_B = $this->m_penghitungan->getHasilRinganB4_B();
                $HasilRinganB4_B = count($HasilRinganB4_B);
                $HasilSedangB4_B = $this->m_penghitungan->getHasilSedangB4_B();
                $HasilSedangB4_B = count($HasilSedangB4_B);
                $HasilBeratB4_B = $this->m_penghitungan->getHasilBeratB4_B();
                $HasilBeratB4_B = count($HasilBeratB4_B);

                $prob_B4GangguanMood = $HasilGangguanMoodB4_B / $HasilGangguanMood;
                $prob_B4Ringan = $HasilRinganB4_B / $HasilRingan;
                $prob_B4Sedang = $HasilSedangB4_B / $HasilSedang;
                $prob_B4Berat = $HasilBeratB4_B / $HasilBerat;
            }
            else if($data['b4']=="Saya tidak memperoleh kepuasan sejati dari apapun lagi"){
                $bobot4 = 2;

                $HasilGangguanMoodB4_C = $this->m_penghitungan->getHasilGangguanMoodB4_C();
                $HasilGangguanMoodB4_C = count($HasilGangguanMoodB4_C);
                $HasilRinganB4_C = $this->m_penghitungan->getHasilRinganB4_C();
                $HasilRinganB4_C = count($HasilRinganB4_C);
                $HasilSedangB4_C = $this->m_penghitungan->getHasilSedangB4_C();
                $HasilSedangB4_C = count($HasilSedangB4_C);
                $HasilBeratB4_C = $this->m_penghitungan->getHasilBeratB4_C();
                $HasilBeratB4_C = count($HasilBeratB4_C);

                $prob_B4GangguanMood = $HasilGangguanMoodB4_C / $HasilGangguanMood;
                $prob_B4Ringan = $HasilRinganB4_C / $HasilRingan;
                $prob_B4Sedang = $HasilSedangB4_C / $HasilSedang;
                $prob_B4Berat = $HasilBeratB4_C / $HasilBerat;
            }
            else if($data['b4']=="Saya tidak puas atau bosan dengan segalanya"){
                $bobot4 = 3;

                $HasilGangguanMoodB4_D = $this->m_penghitungan->getHasilGangguanMoodB4_D();
                $HasilGangguanMoodB4_D = count($HasilGangguanMoodB4_D);
                $HasilRinganB4_D = $this->m_penghitungan->getHasilRinganB4_D();
                $HasilRinganB4_D = count($HasilRinganB4_D);
                $HasilSedangB4_D = $this->m_penghitungan->getHasilSedangB4_D();
                $HasilSedangB4_D = count($HasilSedangB4_D);
                $HasilBeratB4_D = $this->m_penghitungan->getHasilBeratB4_D();
                $HasilBeratB4_D = count($HasilBeratB4_D);

                $prob_B4GangguanMood = $HasilGangguanMoodB4_D / $HasilGangguanMood;
                $prob_B4Ringan = $HasilRinganB4_D / $HasilRingan;
                $prob_B4Sedang = $HasilSedangB4_D / $HasilSedang;
                $prob_B4Berat = $HasilBeratB4_D / $HasilBerat;
            }

            if($data['b5']=="Saya tidak terlalu merasa bersalah"){
                $bobot5 = 0;

                $HasilGangguanMoodB5_A = $this->m_penghitungan->getHasilGangguanMoodB5_A();
                $HasilGangguanMoodB5_A = count($HasilGangguanMoodB5_A);
                $HasilRinganB5_A = $this->m_penghitungan->getHasilRinganB5_A();
                $HasilRinganB5_A = count($HasilRinganB5_A);
                $HasilSedangB5_A = $this->m_penghitungan->getHasilSedangB5_A();
                $HasilSedangB5_A = count($HasilSedangB5_A);
                $HasilBeratB5_A = $this->m_penghitungan->getHasilBeratB5_A();
                $HasilBeratB5_A = count($HasilBeratB5_A);

                $prob_B5GangguanMood = $HasilGangguanMoodB5_A / $HasilGangguanMood;
                $prob_B5Ringan = $HasilRinganB5_A / $HasilRingan;
                $prob_B5Sedang = $HasilSedangB5_A / $HasilSedang;
                $prob_B5Berat = $HasilBeratB5_A / $HasilBerat;
            }
            else if($data['b5']=="Saya merasa bersalah di hampir seluruh waktu"){
                $bobot5 = 1;

                $HasilGangguanMoodB5_B = $this->m_penghitungan->getHasilGangguanMoodB5_B();
                $HasilGangguanMoodB5_B = count($HasilGangguanMoodB5_B);
                $HasilRinganB5_B = $this->m_penghitungan->getHasilRinganB5_B();
                $HasilRinganB5_B = count($HasilRinganB5_B);
                $HasilSedangB5_B = $this->m_penghitungan->getHasilSedangB5_B();
                $HasilSedangB5_B = count($HasilSedangB5_B);
                $HasilBeratB5_B = $this->m_penghitungan->getHasilBeratB5_B();
                $HasilBeratB5_B = count($HasilBeratB5_B);

                $prob_B5GangguanMood = $HasilGangguanMoodB5_B / $HasilGangguanMood;
                $prob_B5Ringan = $HasilRinganB5_B / $HasilRingan;
                $prob_B5Sedang = $HasilSedangB5_B / $HasilSedang;
                $prob_B5Berat = $HasilBeratB5_B / $HasilBerat;
            }
            else if($data['b5']=="Saya agak merasa bersalah di sebagian besar waktu"){
                $bobot5 = 2;

                $HasilGangguanMoodB5_C = $this->m_penghitungan->getHasilGangguanMoodB5_C();
                $HasilGangguanMoodB5_C = count($HasilGangguanMoodB5_C);
                $HasilRinganB5_C = $this->m_penghitungan->getHasilRinganB5_C();
                $HasilRinganB5_C = count($HasilRinganB5_C);
                $HasilSedangB5_C = $this->m_penghitungan->getHasilSedangB5_C();
                $HasilSedangB5_C = count($HasilSedangB5_C);
                $HasilBeratB5_C = $this->m_penghitungan->getHasilBeratB5_C();
                $HasilBeratB5_C = count($HasilBeratB5_C);

                $prob_B5GangguanMood = $HasilGangguanMoodB5_C / $HasilGangguanMood;
                $prob_B5Ringan = $HasilRinganB5_C / $HasilRingan;
                $prob_B5Sedang = $HasilSedangB5_C / $HasilSedang;
                $prob_B5Berat = $HasilBeratB5_C / $HasilBerat;
            }
            else if($data['b5']=="Saya merasa bersalah sepanjang waktu"){
                $bobot5 = 3;

                $HasilGangguanMoodB5_D = $this->m_penghitungan->getHasilGangguanMoodB5_D();
                $HasilGangguanMoodB5_D = count($HasilGangguanMoodB5_D);
                $HasilRinganB5_D = $this->m_penghitungan->getHasilRinganB5_D();
                $HasilRinganB5_D = count($HasilRinganB5_D);
                $HasilSedangB5_D = $this->m_penghitungan->getHasilSedangB5_D();
                $HasilSedangB5_D = count($HasilSedangB5_D);
                $HasilBeratB5_D = $this->m_penghitungan->getHasilBeratB5_D();
                $HasilBeratB5_D = count($HasilBeratB5_D);

                $prob_B5GangguanMood = $HasilGangguanMoodB5_D / $HasilGangguanMood;
                $prob_B5Ringan = $HasilRinganB5_D / $HasilRingan;
                $prob_B5Sedang = $HasilSedangB5_D / $HasilSedang;
                $prob_B5Berat = $HasilBeratB5_D / $HasilBerat;
            }


            if($data['b6']=="Saya tidak merasa seolah saya sedang dihukum"){
                $bobot6 = 0;

                $HasilGangguanMoodB6_A = $this->m_penghitungan->getHasilGangguanMoodB6_A();
                $HasilGangguanMoodB6_A = count($HasilGangguanMoodB6_A);
                $HasilRinganB6_A = $this->m_penghitungan->getHasilRinganB6_A();
                $HasilRinganB6_A = count($HasilRinganB6_A);
                $HasilSedangB6_A = $this->m_penghitungan->getHasilSedangB6_A();
                $HasilSedangB6_A = count($HasilSedangB6_A);
                $HasilBeratB6_A = $this->m_penghitungan->getHasilBeratB6_A();
                $HasilBeratB6_A = count($HasilBeratB6_A);

                $prob_B6GangguanMood = $HasilGangguanMoodB6_A / $HasilGangguanMood;
                $prob_B6Ringan = $HasilRinganB6_A / $HasilRingan;
                $prob_B6Sedang = $HasilSedangB6_A / $HasilSedang;
                $prob_B6Berat = $HasilBeratB6_A / $HasilBerat;
            }
            else if($data['b6']=="Saya merasa mungkin saya sedang dihukum"){
                $bobot6 = 1;

                $HasilGangguanMoodB6_B = $this->m_penghitungan->getHasilGangguanMoodB6_B();
                $HasilGangguanMoodB6_B = count($HasilGangguanMoodB6_B);
                $HasilRinganB6_B = $this->m_penghitungan->getHasilRinganB6_B();
                $HasilRinganB6_B = count($HasilRinganB6_B);
                $HasilSedangB6_B = $this->m_penghitungan->getHasilSedangB6_B();
                $HasilSedangB6_B = count($HasilSedangB6_B);
                $HasilBeratB6_B = $this->m_penghitungan->getHasilBeratB6_B();
                $HasilBeratB6_B = count($HasilBeratB6_B);

                $prob_B6GangguanMood = $HasilGangguanMoodB6_B / $HasilGangguanMood;
                $prob_B6Ringan = $HasilRinganB6_B / $HasilRingan;
                $prob_B6Sedang = $HasilSedangB6_B / $HasilSedang;
                $prob_B6Berat = $HasilBeratB6_B / $HasilBerat;
            }
            else if($data['b6']=="Saya pikir saya akan dihukum"){
                $bobot6 = 2;

                $HasilGangguanMoodB6_C = $this->m_penghitungan->getHasilGangguanMoodB6_C();
                $HasilGangguanMoodB6_C = count($HasilGangguanMoodB6_C);
                $HasilRinganB6_C = $this->m_penghitungan->getHasilRinganB6_C();
                $HasilRinganB6_C = count($HasilRinganB6_C);
                $HasilSedangB6_C = $this->m_penghitungan->getHasilSedangB6_C();
                $HasilSedangB6_C = count($HasilSedangB6_C);
                $HasilBeratB6_C = $this->m_penghitungan->getHasilBeratB6_C();
                $HasilBeratB6_C = count($HasilBeratB6_C);

                $prob_B6GangguanMood = $HasilGangguanMoodB6_C / $HasilGangguanMood;
                $prob_B6Ringan = $HasilRinganB6_C / $HasilRingan;
                $prob_B6Sedang = $HasilSedangB6_C / $HasilSedang;
                $prob_B6Berat = $HasilBeratB6_C / $HasilBerat;
            }
            else if($data['b6']=="Saya merasa bahwa saya sedang dihukum"){
                $bobot6 = 3;

                $HasilGangguanMoodB6_D = $this->m_penghitungan->getHasilGangguanMoodB6_D();
                $HasilGangguanMoodB6_D = count($HasilGangguanMoodB6_D);
                $HasilRinganB6_D = $this->m_penghitungan->getHasilRinganB6_D();
                $HasilRinganB6_D = count($HasilRinganB6_D);
                $HasilSedangB6_D = $this->m_penghitungan->getHasilSedangB6_D();
                $HasilSedangB6_D = count($HasilSedangB6_D);
                $HasilBeratB6_D = $this->m_penghitungan->getHasilBeratB6_D();
                $HasilBeratB6_D = count($HasilBeratB6_D);

                $prob_B6GangguanMood = $HasilGangguanMoodB6_D / $HasilGangguanMood;
                $prob_B6Ringan = $HasilRinganB6_D / $HasilRingan;
                $prob_B6Sedang = $HasilSedangB6_D / $HasilSedang;
                $prob_B6Berat = $HasilBeratB6_D / $HasilBerat;
            }

            if($data['b7']=="Saya tidak merasa kecewa terhadap diri saya sendiri"){
                $bobot7 = 0;

                $HasilGangguanMoodB7_A = $this->m_penghitungan->getHasilGangguanMoodB7_A();
                $HasilGangguanMoodB7_A = count($HasilGangguanMoodB7_A);
                $HasilRinganB7_A = $this->m_penghitungan->getHasilRinganB7_A();
                $HasilRinganB7_A = count($HasilRinganB7_A);
                $HasilSedangB7_A = $this->m_penghitungan->getHasilSedangB7_A();
                $HasilSedangB7_A = count($HasilSedangB7_A);
                $HasilBeratB7_A = $this->m_penghitungan->getHasilBeratB7_A();
                $HasilBeratB7_A = count($HasilBeratB7_A);

                $prob_B7GangguanMood = $HasilGangguanMoodB7_A / $HasilGangguanMood;
                $prob_B7Ringan = $HasilRinganB7_A / $HasilRingan;
                $prob_B7Sedang = $HasilSedangB7_A / $HasilSedang;
                $prob_B7Berat = $HasilBeratB7_A / $HasilBerat;
            }
            else if($data['b7']=="Saya kecewa dengan diri saya sendiri"){
                $bobot7 = 1;

                $HasilGangguanMoodB7_B = $this->m_penghitungan->getHasilGangguanMoodB7_B();
                $HasilGangguanMoodB7_B = count($HasilGangguanMoodB7_B);
                $HasilRinganB7_B = $this->m_penghitungan->getHasilRinganB7_B();
                $HasilRinganB7_B = count($HasilRinganB7_B);
                $HasilSedangB7_B = $this->m_penghitungan->getHasilSedangB7_B();
                $HasilSedangB7_B = count($HasilSedangB7_B);
                $HasilBeratB7_B = $this->m_penghitungan->getHasilBeratB7_B();
                $HasilBeratB7_B = count($HasilBeratB7_B);

                $prob_B7GangguanMood = $HasilGangguanMoodB7_B / $HasilGangguanMood;
                $prob_B7Ringan = $HasilRinganB7_B / $HasilRingan;
                $prob_B7Sedang = $HasilSedangB7_B / $HasilSedang;
                $prob_B7Berat = $HasilBeratB7_B / $HasilBerat;
            }
            else if($data['b7']=="Saya muak terhadap diri saya sendiri"){
                $bobot7 = 2;

                $HasilGangguanMoodB7_C = $this->m_penghitungan->getHasilGangguanMoodB7_C();
                $HasilGangguanMoodB7_C = count($HasilGangguanMoodB7_C);
                $HasilRinganB7_C = $this->m_penghitungan->getHasilRinganB7_C();
                $HasilRinganB7_C = count($HasilRinganB7_C);
                $HasilSedangB7_C = $this->m_penghitungan->getHasilSedangB7_C();
                $HasilSedangB7_C = count($HasilSedangB7_C);
                $HasilBeratB7_C = $this->m_penghitungan->getHasilBeratB7_C();
                $HasilBeratB7_C = count($HasilBeratB7_C);

                $prob_B7GangguanMood = $HasilGangguanMoodB7_C / $HasilGangguanMood;
                $prob_B7Ringan = $HasilRinganB7_C / $HasilRingan;
                $prob_B7Sedang = $HasilSedangB7_C / $HasilSedang;
                $prob_B7Berat = $HasilBeratB7_C / $HasilBerat;
            }
            else if($data['b7']=="Saya membenci diri saya sendiri"){
                $bobot7 = 3;

                $HasilGangguanMoodB7_D = $this->m_penghitungan->getHasilGangguanMoodB7_D();
                $HasilGangguanMoodB7_D = count($HasilGangguanMoodB7_D);
                $HasilRinganB7_D = $this->m_penghitungan->getHasilRinganB7_D();
                $HasilRinganB7_D = count($HasilRinganB7_D);
                $HasilSedangB7_D = $this->m_penghitungan->getHasilSedangB7_D();
                $HasilSedangB7_D = count($HasilSedangB7_D);
                $HasilBeratB7_D = $this->m_penghitungan->getHasilBeratB7_D();
                $HasilBeratB7_D = count($HasilBeratB7_D);

                $prob_B7GangguanMood = $HasilGangguanMoodB7_D / $HasilGangguanMood;
                $prob_B7Ringan = $HasilRinganB7_D / $HasilRingan;
                $prob_B7Sedang = $HasilSedangB7_D / $HasilSedang;
                $prob_B7Berat = $HasilBeratB7_D / $HasilBerat;
            }


            if($data['b8']=="Saya tidak merasa lebih buruk dari orang lain"){
                $bobot8 = 0;

                $HasilGangguanMoodB8_A = $this->m_penghitungan->getHasilGangguanMoodB8_A();
                $HasilGangguanMoodB8_A = count($HasilGangguanMoodB8_A);
                $HasilRinganB8_A = $this->m_penghitungan->getHasilRinganB8_A();
                $HasilRinganB8_A = count($HasilRinganB8_A);
                $HasilSedangB8_A = $this->m_penghitungan->getHasilSedangB8_A();
                $HasilSedangB8_A = count($HasilSedangB8_A);
                $HasilBeratB8_A = $this->m_penghitungan->getHasilBeratB8_A();
                $HasilBeratB8_A = count($HasilBeratB8_A);

                $prob_B8GangguanMood = $HasilGangguanMoodB8_A / $HasilGangguanMood;
                $prob_B8Ringan = $HasilRinganB8_A / $HasilRingan;
                $prob_B8Sedang = $HasilSedangB8_A / $HasilSedang;
                $prob_B8Berat = $HasilBeratB8_A / $HasilBerat;
            }
            else if($data['b8']=="Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya"){
                $bobot8 = 1;

                $HasilGangguanMoodB8_B = $this->m_penghitungan->getHasilGangguanMoodB8_B();
                $HasilGangguanMoodB8_B = count($HasilGangguanMoodB8_B);
                $HasilRinganB8_B = $this->m_penghitungan->getHasilRinganB8_B();
                $HasilRinganB8_B = count($HasilRinganB8_B);
                $HasilSedangB8_B = $this->m_penghitungan->getHasilSedangB8_B();
                $HasilSedangB8_B = count($HasilSedangB8_B);
                $HasilBeratB8_B = $this->m_penghitungan->getHasilBeratB8_B();
                $HasilBeratB8_B = count($HasilBeratB8_B);

                $prob_B8GangguanMood = $HasilGangguanMoodB8_B / $HasilGangguanMood;
                $prob_B8Ringan = $HasilRinganB8_B / $HasilRingan;
                $prob_B8Sedang = $HasilSedangB8_B / $HasilSedang;
                $prob_B8Berat = $HasilBeratB8_B / $HasilBerat;
            }
            else if($data['b8']=="Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya"){
                $bobot8 = 2;

                $HasilGangguanMoodB8_C = $this->m_penghitungan->getHasilGangguanMoodB8_C();
                $HasilGangguanMoodB8_C = count($HasilGangguanMoodB8_C);
                $HasilRinganB8_C = $this->m_penghitungan->getHasilRinganB8_C();
                $HasilRinganB8_C = count($HasilRinganB8_C);
                $HasilSedangB8_C = $this->m_penghitungan->getHasilSedangB8_C();
                $HasilSedangB8_C = count($HasilSedangB8_C);
                $HasilBeratB8_C = $this->m_penghitungan->getHasilBeratB8_C();
                $HasilBeratB8_C = count($HasilBeratB8_C);

                $prob_B8GangguanMood = $HasilGangguanMoodB8_C / $HasilGangguanMood;
                $prob_B8Ringan = $HasilRinganB8_C / $HasilRingan;
                $prob_B8Sedang = $HasilSedangB8_C / $HasilSedang;
                $prob_B8Berat = $HasilBeratB8_C / $HasilBerat;
            }
            else if($data['b8']=="Saya menyalahkan diri saya untuk semua hal buruk yang terjadi"){
                $bobot8 = 3;

                $HasilGangguanMoodB8_D = $this->m_penghitungan->getHasilGangguanMoodB8_D();
                $HasilGangguanMoodB8_D = count($HasilGangguanMoodB8_D);
                $HasilRinganB8_D = $this->m_penghitungan->getHasilRinganB8_D();
                $HasilRinganB8_D = count($HasilRinganB8_D);
                $HasilSedangB8_D = $this->m_penghitungan->getHasilSedangB8_D();
                $HasilSedangB8_D = count($HasilSedangB8_D);
                $HasilBeratB8_D = $this->m_penghitungan->getHasilBeratB8_D();
                $HasilBeratB8_D = count($HasilBeratB8_D);

                $prob_B8GangguanMood = $HasilGangguanMoodB8_D / $HasilGangguanMood;
                $prob_B8Ringan = $HasilRinganB8_D / $HasilRingan;
                $prob_B8Sedang = $HasilSedangB8_D / $HasilSedang;
                $prob_B8Berat = $HasilBeratB8_D / $HasilBerat;
            }


            if($data['b9']=="Saya tidak punya sedikitpun pikiran untuk bunuh diri"){
                $bobot9 = 0;

                $HasilGangguanMoodB9_A = $this->m_penghitungan->getHasilGangguanMoodB9_A();
                $HasilGangguanMoodB9_A = count($HasilGangguanMoodB9_A);
                $HasilRinganB9_A = $this->m_penghitungan->getHasilRinganB9_A();
                $HasilRinganB9_A = count($HasilRinganB9_A);
                $HasilSedangB9_A = $this->m_penghitungan->getHasilSedangB9_A();
                $HasilSedangB9_A = count($HasilSedangB9_A);
                $HasilBeratB9_A = $this->m_penghitungan->getHasilBeratB9_A();
                $HasilBeratB9_A = count($HasilBeratB9_A);

                $prob_B9GangguanMood = $HasilGangguanMoodB9_A / $HasilGangguanMood;
                $prob_B9Ringan = $HasilRinganB9_A / $HasilRingan;
                $prob_B9Sedang = $HasilSedangB9_A / $HasilSedang;
                $prob_B9Berat = $HasilBeratB9_A / $HasilBerat;
            }
            else if($data['b9']=="Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya"){
                $bobot9 = 1;

                $HasilGangguanMoodB9_B = $this->m_penghitungan->getHasilGangguanMoodB9_B();
                $HasilGangguanMoodB9_B = count($HasilGangguanMoodB9_B);
                $HasilRinganB9_B = $this->m_penghitungan->getHasilRinganB9_B();
                $HasilRinganB9_B = count($HasilRinganB9_B);
                $HasilSedangB9_B = $this->m_penghitungan->getHasilSedangB9_B();
                $HasilSedangB9_B = count($HasilSedangB9_B);
                $HasilBeratB9_B = $this->m_penghitungan->getHasilBeratB9_B();
                $HasilBeratB9_B = count($HasilBeratB9_B);

                $prob_B9GangguanMood = $HasilGangguanMoodB9_B / $HasilGangguanMood;
                $prob_B9Ringan = $HasilRinganB9_B / $HasilRingan;
                $prob_B9Sedang = $HasilSedangB9_B / $HasilSedang;
                $prob_B9Berat = $HasilBeratB9_B / $HasilBerat;
            }
            else if($data['b9']=="Saya ingin bunuh diri"){
                $bobot9 = 2;

                $HasilGangguanMoodB9_C = $this->m_penghitungan->getHasilGangguanMoodB9_C();
                $HasilGangguanMoodB9_C = count($HasilGangguanMoodB9_C);
                $HasilRinganB9_C = $this->m_penghitungan->getHasilRinganB9_C();
                $HasilRinganB9_C = count($HasilRinganB9_C);
                $HasilSedangB9_C = $this->m_penghitungan->getHasilSedangB9_C();
                $HasilSedangB9_C = count($HasilSedangB9_C);
                $HasilBeratB9_C = $this->m_penghitungan->getHasilBeratB9_C();
                $HasilBeratB9_C = count($HasilBeratB9_C);

                $prob_B9GangguanMood = $HasilGangguanMoodB9_C / $HasilGangguanMood;
                $prob_B9Ringan = $HasilRinganB9_C / $HasilRingan;
                $prob_B9Sedang = $HasilSedangB9_C / $HasilSedang;
                $prob_B9Berat = $HasilBeratB9_C / $HasilBerat;
            }
            else if($data['b9']=="Saya akan bunuh diri jika saja ada kesempatan"){
                $bobot9 = 3;

                $HasilGangguanMoodB9_D = $this->m_penghitungan->getHasilGangguanMoodB9_D();
                $HasilGangguanMoodB9_D = count($HasilGangguanMoodB9_D);
                $HasilRinganB9_D = $this->m_penghitungan->getHasilRinganB9_D();
                $HasilRinganB9_D = count($HasilRinganB9_D);
                $HasilSedangB9_D = $this->m_penghitungan->getHasilSedangB9_D();
                $HasilSedangB9_D = count($HasilSedangB9_D);
                $HasilBeratB9_D = $this->m_penghitungan->getHasilBeratB9_D();
                $HasilBeratB9_D = count($HasilBeratB9_D);

                $prob_B9GangguanMood = $HasilGangguanMoodB9_D / $HasilGangguanMood;
                $prob_B9Ringan = $HasilRinganB9_D / $HasilRingan;
                $prob_B9Sedang = $HasilSedangB9_D / $HasilSedang;
                $prob_B9Berat = $HasilBeratB9_D / $HasilBerat;
            }


            if($data['b10']=="Saya tidak lebih banyak menangis dibandingkan biasanya"){
                $bobot10 = 0;

                $HasilGangguanMoodB10_A = $this->m_penghitungan->getHasilGangguanMoodB10_A();
                $HasilGangguanMoodB10_A = count($HasilGangguanMoodB10_A);
                $HasilRinganB10_A = $this->m_penghitungan->getHasilRinganB10_A();
                $HasilRinganB10_A = count($HasilRinganB10_A);
                $HasilSedangB10_A = $this->m_penghitungan->getHasilSedangB10_A();
                $HasilSedangB10_A = count($HasilSedangB10_A);
                $HasilBeratB10_A = $this->m_penghitungan->getHasilBeratB10_A();
                $HasilBeratB10_A = count($HasilBeratB10_A);

                $prob_B10GangguanMood = $HasilGangguanMoodB10_A / $HasilGangguanMood;
                $prob_B10Ringan = $HasilRinganB10_A / $HasilRingan;
                $prob_B10Sedang = $HasilSedangB10_A / $HasilSedang;
                $prob_B10Berat = $HasilBeratB10_A / $HasilBerat;
            }
            else if($data['b10']=="Sekarang saya lebih banyak menangis daripada sebelumya"){
                $bobot10 = 1;

                $HasilGangguanMoodB10_B = $this->m_penghitungan->getHasilGangguanMoodB10_B();
                $HasilGangguanMoodB10_B = count($HasilGangguanMoodB10_B);
                $HasilRinganB10_B = $this->m_penghitungan->getHasilRinganB10_B();
                $HasilRinganB10_B = count($HasilRinganB10_B);
                $HasilSedangB10_B = $this->m_penghitungan->getHasilSedangB10_B();
                $HasilSedangB10_B = count($HasilSedangB10_B);
                $HasilBeratB10_B = $this->m_penghitungan->getHasilBeratB10_B();
                $HasilBeratB10_B = count($HasilBeratB10_B);

                $prob_B10GangguanMood = $HasilGangguanMoodB10_B / $HasilGangguanMood;
                $prob_B10Ringan = $HasilRinganB10_B / $HasilRingan;
                $prob_B10Sedang = $HasilSedangB10_B / $HasilSedang;
                $prob_B10Berat = $HasilBeratB10_B / $HasilBerat;
            }
            else if($data['b10']=="Sekarang saya menangis sepanjang waktu"){
                $bobot10 = 2;

                $HasilGangguanMoodB10_C = $this->m_penghitungan->getHasilGangguanMoodB10_C();
                $HasilGangguanMoodB10_C = count($HasilGangguanMoodB10_C);
                $HasilRinganB10_C = $this->m_penghitungan->getHasilRinganB10_C();
                $HasilRinganB10_C = count($HasilRinganB10_C);
                $HasilSedangB10_C = $this->m_penghitungan->getHasilSedangB10_C();
                $HasilSedangB10_C = count($HasilSedangB10_C);
                $HasilBeratB10_C = $this->m_penghitungan->getHasilBeratB10_C();
                $HasilBeratB10_C = count($HasilBeratB10_C);

                $prob_B10GangguanMood = $HasilGangguanMoodB10_C / $HasilGangguanMood;
                $prob_B10Ringan = $HasilRinganB10_C / $HasilRingan;
                $prob_B10Sedang = $HasilSedangB10_C / $HasilSedang;
                $prob_B10Berat = $HasilBeratB10_C / $HasilBerat;
            }
            else if($data['b10']=="Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya"){
                $bobot10 = 3;

                $HasilGangguanMoodB10_D = $this->m_penghitungan->getHasilGangguanMoodB10_D();
                $HasilGangguanMoodB10_D = count($HasilGangguanMoodB10_D);
                $HasilRinganB10_D = $this->m_penghitungan->getHasilRinganB10_D();
                $HasilRinganB10_D = count($HasilRinganB10_D);
                $HasilSedangB10_D = $this->m_penghitungan->getHasilSedangB10_D();
                $HasilSedangB10_D = count($HasilSedangB10_D);
                $HasilBeratB10_D = $this->m_penghitungan->getHasilBeratB10_D();
                $HasilBeratB10_D = count($HasilBeratB10_D);

                $prob_B10GangguanMood = $HasilGangguanMoodB10_D / $HasilGangguanMood;
                $prob_B10Ringan = $HasilRinganB10_D / $HasilRingan;
                $prob_B10Sedang = $HasilSedangB10_D / $HasilSedang;
                $prob_B10Berat = $HasilBeratB10_D / $HasilBerat;
            }


            if($data['b11']=="Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya"){
                $bobot11 = 0;

                $HasilGangguanMoodB11_A = $this->m_penghitungan->getHasilGangguanMoodB11_A();
                $HasilGangguanMoodB11_A = count($HasilGangguanMoodB11_A);
                $HasilRinganB11_A = $this->m_penghitungan->getHasilRinganB11_A();
                $HasilRinganB11_A = count($HasilRinganB11_A);
                $HasilSedangB11_A = $this->m_penghitungan->getHasilSedangB11_A();
                $HasilSedangB11_A = count($HasilSedangB11_A);
                $HasilBeratB11_A = $this->m_penghitungan->getHasilBeratB11_A();
                $HasilBeratB11_A = count($HasilBeratB11_A);

                $prob_B11GangguanMood = $HasilGangguanMoodB11_A / $HasilGangguanMood;
                $prob_B11Ringan = $HasilRinganB11_A / $HasilRingan;
                $prob_B11Sedang = $HasilSedangB11_A / $HasilSedang;
                $prob_B11Berat = $HasilBeratB11_A / $HasilBerat;
            }
            else if($data['b11']=="Kini saya sedikit lebih pemarah dari biasanya"){
                $bobot11 = 1;

                $HasilGangguanMoodB11_B = $this->m_penghitungan->getHasilGangguanMoodB11_B();
                $HasilGangguanMoodB11_B = count($HasilGangguanMoodB11_B);
                $HasilRinganB11_B = $this->m_penghitungan->getHasilRinganB11_B();
                $HasilRinganB11_B = count($HasilRinganB11_B);
                $HasilSedangB11_B = $this->m_penghitungan->getHasilSedangB11_B();
                $HasilSedangB11_B = count($HasilSedangB11_B);
                $HasilBeratB11_B = $this->m_penghitungan->getHasilBeratB11_B();
                $HasilBeratB11_B = count($HasilBeratB11_B);

                $prob_B11GangguanMood = $HasilGangguanMoodB11_B / $HasilGangguanMood;
                $prob_B11Ringan = $HasilRinganB11_B / $HasilRingan;
                $prob_B11Sedang = $HasilSedangB11_B / $HasilSedang;
                $prob_B11Berat = $HasilBeratB11_B / $HasilBerat;
            }
            else if($data['b11']=="Saya agak jengkel atau terganggu di sebagian besar waktu saya"){
                $bobot11 = 2;

                $HasilGangguanMoodB11_C = $this->m_penghitungan->getHasilGangguanMoodB11_C();
                $HasilGangguanMoodB11_C = count($HasilGangguanMoodB11_C);
                $HasilRinganB11_C = $this->m_penghitungan->getHasilRinganB11_C();
                $HasilRinganB11_C = count($HasilRinganB11_C);
                $HasilSedangB11_C = $this->m_penghitungan->getHasilSedangB11_C();
                $HasilSedangB11_C = count($HasilSedangB11_C);
                $HasilBeratB11_C = $this->m_penghitungan->getHasilBeratB11_C();
                $HasilBeratB11_C = count($HasilBeratB11_C);

                $prob_B11GangguanMood = $HasilGangguanMoodB11_C / $HasilGangguanMood;
                $prob_B11Ringan = $HasilRinganB11_C / $HasilRingan;
                $prob_B11Sedang = $HasilSedangB11_C / $HasilSedang;
                $prob_B11Berat = $HasilBeratB11_C / $HasilBerat;
            }
            else if($data['b11']=="Kini saya merasa jengkel sepanjang waktu"){
                $bobot11 = 3;

                $HasilGangguanMoodB11_D = $this->m_penghitungan->getHasilGangguanMoodB11_D();
                $HasilGangguanMoodB11_D = count($HasilGangguanMoodB11_D);
                $HasilRinganB11_D = $this->m_penghitungan->getHasilRinganB11_D();
                $HasilRinganB11_D = count($HasilRinganB11_D);
                $HasilSedangB11_D = $this->m_penghitungan->getHasilSedangB11_D();
                $HasilSedangB11_D = count($HasilSedangB11_D);
                $HasilBeratB11_D = $this->m_penghitungan->getHasilBeratB11_D();
                $HasilBeratB11_D = count($HasilBeratB11_D);

                $prob_B11GangguanMood = $HasilGangguanMoodB11_D / $HasilGangguanMood;
                $prob_B11Ringan = $HasilRinganB11_D / $HasilRingan;
                $prob_B11Sedang = $HasilSedangB11_D / $HasilSedang;
                $prob_B11Berat = $HasilBeratB11_D / $HasilBerat;
            }


            if($data['b12']=="Saya tidak kehilangan minat saya terhadap orang lain"){
                $bobot12 = 0;

                $HasilGangguanMoodB12_A = $this->m_penghitungan->getHasilGangguanMoodB12_A();
                $HasilGangguanMoodB12_A = count($HasilGangguanMoodB12_A);
                $HasilRinganB12_A = $this->m_penghitungan->getHasilRinganB12_A();
                $HasilRinganB12_A = count($HasilRinganB12_A);
                $HasilSedangB12_A = $this->m_penghitungan->getHasilSedangB12_A();
                $HasilSedangB12_A = count($HasilSedangB12_A);
                $HasilBeratB12_A = $this->m_penghitungan->getHasilBeratB12_A();
                $HasilBeratB12_A = count($HasilBeratB12_A);

                $prob_B12GangguanMood = $HasilGangguanMoodB12_A / $HasilGangguanMood;
                $prob_B12Ringan = $HasilRinganB12_A / $HasilRingan;
                $prob_B12Sedang = $HasilSedangB12_A / $HasilSedang;
                $prob_B12Berat = $HasilBeratB12_A / $HasilBerat;
            }
            else if($data['b12']=="Saya agak kurang berminat terhadap orang lain dibandingkan biasanya"){
                $bobot12 = 1;

                $HasilGangguanMoodB12_B = $this->m_penghitungan->getHasilGangguanMoodB12_B();
                $HasilGangguanMoodB12_B = count($HasilGangguanMoodB12_B);
                $HasilRinganB12_B = $this->m_penghitungan->getHasilRinganB12_B();
                $HasilRinganB12_B = count($HasilRinganB12_B);
                $HasilSedangB12_B = $this->m_penghitungan->getHasilSedangB12_B();
                $HasilSedangB12_B = count($HasilSedangB12_B);
                $HasilBeratB12_B = $this->m_penghitungan->getHasilBeratB12_B();
                $HasilBeratB12_B = count($HasilBeratB12_B);

                $prob_B12GangguanMood = $HasilGangguanMoodB12_B / $HasilGangguanMood;
                $prob_B12Ringan = $HasilRinganB12_B / $HasilRingan;
                $prob_B12Sedang = $HasilSedangB12_B / $HasilSedang;
                $prob_B12Berat = $HasilBeratB12_B / $HasilBerat;
            }
            else if($data['b12']=="Saya kehilangan hampir seluruh minat saya pada orang lain"){
                $bobot12 = 2;

                $HasilGangguanMoodB12_C = $this->m_penghitungan->getHasilGangguanMoodB12_C();
                $HasilGangguanMoodB12_C = count($HasilGangguanMoodB12_C);
                $HasilRinganB12_C = $this->m_penghitungan->getHasilRinganB12_C();
                $HasilRinganB12_C = count($HasilRinganB12_C);
                $HasilSedangB12_C = $this->m_penghitungan->getHasilSedangB12_C();
                $HasilSedangB12_C = count($HasilSedangB12_C);
                $HasilBeratB12_C = $this->m_penghitungan->getHasilBeratB12_C();
                $HasilBeratB12_C = count($HasilBeratB12_C);

                $prob_B12GangguanMood = $HasilGangguanMoodB12_C / $HasilGangguanMood;
                $prob_B12Ringan = $HasilRinganB12_C / $HasilRingan;
                $prob_B12Sedang = $HasilSedangB12_C / $HasilSedang;
                $prob_B12Berat = $HasilBeratB12_C / $HasilBerat;
            }
            else if($data['b12']=="Saya telah kehilangan seluruh minat saya pada orang lain"){
                $bobot12 = 3;

                $HasilGangguanMoodB12_D = $this->m_penghitungan->getHasilGangguanMoodB12_D();
                $HasilGangguanMoodB12_D = count($HasilGangguanMoodB12_D);
                $HasilRinganB12_D = $this->m_penghitungan->getHasilRinganB12_D();
                $HasilRinganB12_D = count($HasilRinganB12_D);
                $HasilSedangB12_D = $this->m_penghitungan->getHasilSedangB12_D();
                $HasilSedangB12_D = count($HasilSedangB12_D);
                $HasilBeratB12_D = $this->m_penghitungan->getHasilBeratB12_D();
                $HasilBeratB12_D = count($HasilBeratB12_D);

                $prob_B12GangguanMood = $HasilGangguanMoodB12_D / $HasilGangguanMood;
                $prob_B12Ringan = $HasilRinganB12_D / $HasilRingan;
                $prob_B12Sedang = $HasilSedangB12_D / $HasilSedang;
                $prob_B12Berat = $HasilBeratB12_D / $HasilBerat;
            }


            if($data['b13']=="Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan"){
                $bobot13 = 0;

                $HasilGangguanMoodB13_A = $this->m_penghitungan->getHasilGangguanMoodB13_A();
                $HasilGangguanMoodB13_A = count($HasilGangguanMoodB13_A);
                $HasilRinganB13_A = $this->m_penghitungan->getHasilRinganB13_A();
                $HasilRinganB13_A = count($HasilRinganB13_A);
                $HasilSedangB13_A = $this->m_penghitungan->getHasilSedangB13_A();
                $HasilSedangB13_A = count($HasilSedangB13_A);
                $HasilBeratB13_A = $this->m_penghitungan->getHasilBeratB13_A();
                $HasilBeratB13_A = count($HasilBeratB13_A);

                $prob_B13GangguanMood = $HasilGangguanMoodB13_A / $HasilGangguanMood;
                $prob_B13Ringan = $HasilRinganB13_A / $HasilRingan;
                $prob_B13Sedang = $HasilSedangB13_A / $HasilSedang;
                $prob_B13Berat = $HasilBeratB13_A / $HasilBerat;
            }
            else if($data['b13']=="Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan"){
                $bobot13 = 1;

                $HasilGangguanMoodB13_B = $this->m_penghitungan->getHasilGangguanMoodB13_B();
                $HasilGangguanMoodB13_B = count($HasilGangguanMoodB13_B);
                $HasilRinganB13_B = $this->m_penghitungan->getHasilRinganB13_B();
                $HasilRinganB13_B = count($HasilRinganB13_B);
                $HasilSedangB13_B = $this->m_penghitungan->getHasilSedangB13_B();
                $HasilSedangB13_B = count($HasilSedangB13_B);
                $HasilBeratB13_B = $this->m_penghitungan->getHasilBeratB13_B();
                $HasilBeratB13_B = count($HasilBeratB13_B);

                $prob_B13GangguanMood = $HasilGangguanMoodB13_B / $HasilGangguanMood;
                $prob_B13Ringan = $HasilRinganB13_B / $HasilRingan;
                $prob_B13Sedang = $HasilSedangB13_B / $HasilSedang;
                $prob_B13Berat = $HasilBeratB13_B / $HasilBerat;
            }
            else if($data['b13']=="Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya"){
                $bobot13 = 2;

                $HasilGangguanMoodB13_C = $this->m_penghitungan->getHasilGangguanMoodB13_C();
                $HasilGangguanMoodB13_C = count($HasilGangguanMoodB13_C);
                $HasilRinganB13_C = $this->m_penghitungan->getHasilRinganB13_C();
                $HasilRinganB13_C = count($HasilRinganB13_C);
                $HasilSedangB13_C = $this->m_penghitungan->getHasilSedangB13_C();
                $HasilSedangB13_C = count($HasilSedangB13_C);
                $HasilBeratB13_C = $this->m_penghitungan->getHasilBeratB13_C();
                $HasilBeratB13_C = count($HasilBeratB13_C);

                $prob_B13GangguanMood = $HasilGangguanMoodB13_C / $HasilGangguanMood;
                $prob_B13Ringan = $HasilRinganB13_C / $HasilRingan;
                $prob_B13Sedang = $HasilSedangB13_C / $HasilSedang;
                $prob_B13Berat = $HasilBeratB13_C / $HasilBerat;
            }
            else if($data['b13']=="Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi"){
                $bobot13 = 3;

                $HasilGangguanMoodB13_D = $this->m_penghitungan->getHasilGangguanMoodB13_D();
                $HasilGangguanMoodB13_D = count($HasilGangguanMoodB13_D);
                $HasilRinganB13_D = $this->m_penghitungan->getHasilRinganB13_D();
                $HasilRinganB13_D = count($HasilRinganB13_D);
                $HasilSedangB13_D = $this->m_penghitungan->getHasilSedangB13_D();
                $HasilSedangB13_D = count($HasilSedangB13_D);
                $HasilBeratB13_D = $this->m_penghitungan->getHasilBeratB13_D();
                $HasilBeratB13_D = count($HasilBeratB13_D);

                $prob_B13GangguanMood = $HasilGangguanMoodB13_D / $HasilGangguanMood;
                $prob_B13Ringan = $HasilRinganB13_D / $HasilRingan;
                $prob_B13Sedang = $HasilSedangB13_D / $HasilSedang;
                $prob_B13Berat = $HasilBeratB13_D / $HasilBerat;
            }


            if($data['b14']=="Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya"){
                $bobot14 = 0;

                $HasilGangguanMoodB14_A = $this->m_penghitungan->getHasilGangguanMoodB14_A();
                $HasilGangguanMoodB14_A = count($HasilGangguanMoodB14_A);
                $HasilRinganB14_A = $this->m_penghitungan->getHasilRinganB14_A();
                $HasilRinganB14_A = count($HasilRinganB14_A);
                $HasilSedangB14_A = $this->m_penghitungan->getHasilSedangB14_A();
                $HasilSedangB14_A = count($HasilSedangB14_A);
                $HasilBeratB14_A = $this->m_penghitungan->getHasilBeratB14_A();
                $HasilBeratB14_A = count($HasilBeratB14_A);

                $prob_B14GangguanMood = $HasilGangguanMoodB14_A / $HasilGangguanMood;
                $prob_B14Ringan = $HasilRinganB14_A / $HasilRingan;
                $prob_B14Sedang = $HasilSedangB14_A / $HasilSedang;
                $prob_B14Berat = $HasilBeratB14_A / $HasilBerat;
            }
            else if($data['b14']=="Saya khawatir saya tampak tua dan tidak menarik"){
                $bobot14 = 1;

                $HasilGangguanMoodB14_B = $this->m_penghitungan->getHasilGangguanMoodB14_B();
                $HasilGangguanMoodB14_B = count($HasilGangguanMoodB14_B);
                $HasilRinganB14_B = $this->m_penghitungan->getHasilRinganB14_B();
                $HasilRinganB14_B = count($HasilRinganB14_B);
                $HasilSedangB14_B = $this->m_penghitungan->getHasilSedangB14_B();
                $HasilSedangB14_B = count($HasilSedangB14_B);
                $HasilBeratB14_B = $this->m_penghitungan->getHasilBeratB14_B();
                $HasilBeratB14_B = count($HasilBeratB14_B);

                $prob_B14GangguanMood = $HasilGangguanMoodB14_B / $HasilGangguanMood;
                $prob_B14Ringan = $HasilRinganB14_B / $HasilRingan;
                $prob_B14Sedang = $HasilSedangB14_B / $HasilSedang;
                $prob_B14Berat = $HasilBeratB14_B / $HasilBerat;
            }
            else if($data['b14']=="Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik"){
                $bobot14 = 2;

                $HasilGangguanMoodB14_C = $this->m_penghitungan->getHasilGangguanMoodB14_C();
                $HasilGangguanMoodB14_C = count($HasilGangguanMoodB14_C);
                $HasilRinganB14_C = $this->m_penghitungan->getHasilRinganB14_C();
                $HasilRinganB14_C = count($HasilRinganB14_C);
                $HasilSedangB14_C = $this->m_penghitungan->getHasilSedangB14_C();
                $HasilSedangB14_C = count($HasilSedangB14_C);
                $HasilBeratB14_C = $this->m_penghitungan->getHasilBeratB14_C();
                $HasilBeratB14_C = count($HasilBeratB14_C);

                $prob_B14GangguanMood = $HasilGangguanMoodB14_C / $HasilGangguanMood;
                $prob_B14Ringan = $HasilRinganB14_C / $HasilRingan;
                $prob_B14Sedang = $HasilSedangB14_C / $HasilSedang;
                $prob_B14Berat = $HasilBeratB14_C / $HasilBerat;
            }
            else if($data['b14']=="Saya yakin bahwa saya tampak jelek"){
                $bobot14 = 3;

                $HasilGangguanMoodB14_D = $this->m_penghitungan->getHasilGangguanMoodB14_D();
                $HasilGangguanMoodB14_D = count($HasilGangguanMoodB14_D);
                $HasilRinganB14_D = $this->m_penghitungan->getHasilRinganB14_D();
                $HasilRinganB14_D = count($HasilRinganB14_D);
                $HasilSedangB14_D = $this->m_penghitungan->getHasilSedangB14_D();
                $HasilSedangB14_D = count($HasilSedangB14_D);
                $HasilBeratB14_D = $this->m_penghitungan->getHasilBeratB14_D();
                $HasilBeratB14_D = count($HasilBeratB14_D);

                $prob_B14GangguanMood = $HasilGangguanMoodB14_D / $HasilGangguanMood;
                $prob_B14Ringan = $HasilRinganB14_D / $HasilRingan;
                $prob_B14Sedang = $HasilSedangB14_D / $HasilSedang;
                $prob_B14Berat = $HasilBeratB14_D / $HasilBerat;
            }


            if($data['b15']=="Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya"){
                $bobot15 = 0;

                $HasilGangguanMoodB15_A = $this->m_penghitungan->getHasilGangguanMoodB15_A();
                $HasilGangguanMoodB15_A = count($HasilGangguanMoodB15_A);
                $HasilRinganB15_A = $this->m_penghitungan->getHasilRinganB15_A();
                $HasilRinganB15_A = count($HasilRinganB15_A);
                $HasilSedangB15_A = $this->m_penghitungan->getHasilSedangB15_A();
                $HasilSedangB15_A = count($HasilSedangB15_A);
                $HasilBeratB15_A = $this->m_penghitungan->getHasilBeratB15_A();
                $HasilBeratB15_A = count($HasilBeratB15_A);

                $prob_B15GangguanMood = $HasilGangguanMoodB15_A / $HasilGangguanMood;
                $prob_B15Ringan = $HasilRinganB15_A / $HasilRingan;
                $prob_B15Sedang = $HasilSedangB15_A / $HasilSedang;
                $prob_B15Berat = $HasilBeratB15_A / $HasilBerat;
            }
            else if($data['b15']=="Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu"){
                $bobot15 = 1;

                $HasilGangguanMoodB15_B = $this->m_penghitungan->getHasilGangguanMoodB15_B();
                $HasilGangguanMoodB15_B = count($HasilGangguanMoodB15_B);
                $HasilRinganB15_B = $this->m_penghitungan->getHasilRinganB15_B();
                $HasilRinganB15_B = count($HasilRinganB15_B);
                $HasilSedangB15_B = $this->m_penghitungan->getHasilSedangB15_B();
                $HasilSedangB15_B = count($HasilSedangB15_B);
                $HasilBeratB15_B = $this->m_penghitungan->getHasilBeratB15_B();
                $HasilBeratB15_B = count($HasilBeratB15_B);

                $prob_B15GangguanMood = $HasilGangguanMoodB15_B / $HasilGangguanMood;
                $prob_B15Ringan = $HasilRinganB15_B / $HasilRingan;
                $prob_B15Sedang = $HasilSedangB15_B / $HasilSedang;
                $prob_B15Berat = $HasilBeratB15_B / $HasilBerat;
            }
            else if($data['b15']=="Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu"){
                $bobot15 = 2;

                $HasilGangguanMoodB15_C = $this->m_penghitungan->getHasilGangguanMoodB15_C();
                $HasilGangguanMoodB15_C = count($HasilGangguanMoodB15_C);
                $HasilRinganB15_C = $this->m_penghitungan->getHasilRinganB15_C();
                $HasilRinganB15_C = count($HasilRinganB15_C);
                $HasilSedangB15_C = $this->m_penghitungan->getHasilSedangB15_C();
                $HasilSedangB15_C = count($HasilSedangB15_C);
                $HasilBeratB15_C = $this->m_penghitungan->getHasilBeratB15_C();
                $HasilBeratB15_C = count($HasilBeratB15_C);

                $prob_B15GangguanMood = $HasilGangguanMoodB15_C / $HasilGangguanMood;
                $prob_B15Ringan = $HasilRinganB15_C / $HasilRingan;
                $prob_B15Sedang = $HasilSedangB15_C / $HasilSedang;
                $prob_B15Berat = $HasilBeratB15_C / $HasilBerat;
            }
            else if($data['b15']=="Saya tidak mampu untuk mengerjakan apa pun lagi"){
                $bobot15 = 3;

                $HasilGangguanMoodB15_D = $this->m_penghitungan->getHasilGangguanMoodB15_D();
                $HasilGangguanMoodB15_D = count($HasilGangguanMoodB15_D);
                $HasilRinganB15_D = $this->m_penghitungan->getHasilRinganB15_D();
                $HasilRinganB15_D = count($HasilRinganB15_D);
                $HasilSedangB15_D = $this->m_penghitungan->getHasilSedangB15_D();
                $HasilSedangB15_D = count($HasilSedangB15_D);
                $HasilBeratB15_D = $this->m_penghitungan->getHasilBeratB15_D();
                $HasilBeratB15_D = count($HasilBeratB15_D);

                $prob_B15GangguanMood = $HasilGangguanMoodB15_D / $HasilGangguanMood;
                $prob_B15Ringan = $HasilRinganB15_D / $HasilRingan;
                $prob_B15Sedang = $HasilSedangB15_D / $HasilSedang;
                $prob_B15Berat = $HasilBeratB15_D / $HasilBerat;
            }


            if($data['b16']=="Saya dapat tidur seperti biasa"){
                $bobot16 = 0;

                $HasilGangguanMoodB16_A = $this->m_penghitungan->getHasilGangguanMoodB16_A();
                $HasilGangguanMoodB16_A = count($HasilGangguanMoodB16_A);
                $HasilRinganB16_A = $this->m_penghitungan->getHasilRinganB16_A();
                $HasilRinganB16_A = count($HasilRinganB16_A);
                $HasilSedangB16_A = $this->m_penghitungan->getHasilSedangB16_A();
                $HasilSedangB16_A = count($HasilSedangB16_A);
                $HasilBeratB16_A = $this->m_penghitungan->getHasilBeratB16_A();
                $HasilBeratB16_A = count($HasilBeratB16_A);

                $prob_B16GangguanMood = $HasilGangguanMoodB16_A / $HasilGangguanMood;
                $prob_B16Ringan = $HasilRinganB16_A / $HasilRingan;
                $prob_B16Sedang = $HasilSedangB16_A / $HasilSedang;
                $prob_B16Berat = $HasilBeratB16_A / $HasilBerat;
            }
            else if($data['b16']=="Tidur saya tidak sebanyak biasanya"){
                $bobot16 = 1;

                $HasilGangguanMoodB16_B = $this->m_penghitungan->getHasilGangguanMoodB16_B();
                $HasilGangguanMoodB16_B = count($HasilGangguanMoodB16_B);
                $HasilRinganB16_B = $this->m_penghitungan->getHasilRinganB16_B();
                $HasilRinganB16_B = count($HasilRinganB16_B);
                $HasilSedangB16_B = $this->m_penghitungan->getHasilSedangB16_B();
                $HasilSedangB16_B = count($HasilSedangB16_B);
                $HasilBeratB16_B = $this->m_penghitungan->getHasilBeratB16_B();
                $HasilBeratB16_B = count($HasilBeratB16_B);

                $prob_B16GangguanMood = $HasilGangguanMoodB16_B / $HasilGangguanMood;
                $prob_B16Ringan = $HasilRinganB16_B / $HasilRingan;
                $prob_B16Sedang = $HasilSedangB16_B / $HasilSedang;
                $prob_B16Berat = $HasilBeratB16_B / $HasilBerat;
            }
            else if($data['b16']=="Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali"){
                $bobot16 = 2;

                $HasilGangguanMoodB16_C = $this->m_penghitungan->getHasilGangguanMoodB16_C();
                $HasilGangguanMoodB16_C = count($HasilGangguanMoodB16_C);
                $HasilRinganB16_C = $this->m_penghitungan->getHasilRinganB16_C();
                $HasilRinganB16_C = count($HasilRinganB16_C);
                $HasilSedangB16_C = $this->m_penghitungan->getHasilSedangB16_C();
                $HasilSedangB16_C = count($HasilSedangB16_C);
                $HasilBeratB16_C = $this->m_penghitungan->getHasilBeratB16_C();
                $HasilBeratB16_C = count($HasilBeratB16_C);

                $prob_B16GangguanMood = $HasilGangguanMoodB16_C / $HasilGangguanMood;
                $prob_B16Ringan = $HasilRinganB16_C / $HasilRingan;
                $prob_B16Sedang = $HasilSedangB16_C / $HasilSedang;
                $prob_B16Berat = $HasilBeratB16_C / $HasilBerat;
            }
            else if($data['b16']=="Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali"){
                $bobot16 = 3;

                $HasilGangguanMoodB16_D = $this->m_penghitungan->getHasilGangguanMoodB16_D();
                $HasilGangguanMoodB16_D = count($HasilGangguanMoodB16_D);
                $HasilRinganB16_D = $this->m_penghitungan->getHasilRinganB16_D();
                $HasilRinganB16_D = count($HasilRinganB16_D);
                $HasilSedangB16_D = $this->m_penghitungan->getHasilSedangB16_D();
                $HasilSedangB16_D = count($HasilSedangB16_D);
                $HasilBeratB16_D = $this->m_penghitungan->getHasilBeratB16_D();
                $HasilBeratB16_D = count($HasilBeratB16_D);

                $prob_B16GangguanMood = $HasilGangguanMoodB16_D / $HasilGangguanMood;
                $prob_B16Ringan = $HasilRinganB16_D / $HasilRingan;
                $prob_B16Sedang = $HasilSedangB16_D / $HasilSedang;
                $prob_B16Berat = $HasilBeratB16_D / $HasilBerat;
            }


            if($data['b17']=="Saya merasa tidak lelah seperti biasanya"){
                $bobot17 = 0;

                $HasilGangguanMoodB17_A = $this->m_penghitungan->getHasilGangguanMoodB17_A();
                $HasilGangguanMoodB17_A = count($HasilGangguanMoodB17_A);
                $HasilRinganB17_A = $this->m_penghitungan->getHasilRinganB17_A();
                $HasilRinganB17_A = count($HasilRinganB17_A);
                $HasilSedangB17_A = $this->m_penghitungan->getHasilSedangB17_A();
                $HasilSedangB17_A = count($HasilSedangB17_A);
                $HasilBeratB17_A = $this->m_penghitungan->getHasilBeratB17_A();
                $HasilBeratB17_A = count($HasilBeratB17_A);

                $prob_B17GangguanMood = $HasilGangguanMoodB17_A / $HasilGangguanMood;
                $prob_B17Ringan = $HasilRinganB17_A / $HasilRingan;
                $prob_B17Sedang = $HasilSedangB17_A / $HasilSedang;
                $prob_B17Berat = $HasilBeratB17_A / $HasilBerat;
            }
            else if($data['b17']=="Saya merasa lebih mudah lelah dari biasanya"){
                $bobot17 = 1;

                $HasilGangguanMoodB17_B = $this->m_penghitungan->getHasilGangguanMoodB17_B();
                $HasilGangguanMoodB17_B = count($HasilGangguanMoodB17_B);
                $HasilRinganB17_B = $this->m_penghitungan->getHasilRinganB17_B();
                $HasilRinganB17_B = count($HasilRinganB17_B);
                $HasilSedangB17_B = $this->m_penghitungan->getHasilSedangB17_B();
                $HasilSedangB17_B = count($HasilSedangB17_B);
                $HasilBeratB17_B = $this->m_penghitungan->getHasilBeratB17_B();
                $HasilBeratB17_B = count($HasilBeratB17_B);

                $prob_B17GangguanMood = $HasilGangguanMoodB17_B / $HasilGangguanMood;
                $prob_B17Ringan = $HasilRinganB17_B / $HasilRingan;
                $prob_B17Sedang = $HasilSedangB17_B / $HasilSedang;
                $prob_B17Berat = $HasilBeratB17_B / $HasilBerat;
            }
            else if($data['b17']=="Saya merasa setelah melakukan apa saja"){
                $bobot17 = 2;

                $HasilGangguanMoodB17_C = $this->m_penghitungan->getHasilGangguanMoodB17_C();
                $HasilGangguanMoodB17_C = count($HasilGangguanMoodB17_C);
                $HasilRinganB17_C = $this->m_penghitungan->getHasilRinganB17_C();
                $HasilRinganB17_C = count($HasilRinganB17_C);
                $HasilSedangB17_C = $this->m_penghitungan->getHasilSedangB17_C();
                $HasilSedangB17_C = count($HasilSedangB17_C);
                $HasilBeratB17_C = $this->m_penghitungan->getHasilBeratB17_C();
                $HasilBeratB17_C = count($HasilBeratB17_C);

                $prob_B17GangguanMood = $HasilGangguanMoodB17_C / $HasilGangguanMood;
                $prob_B17Ringan = $HasilRinganB17_C / $HasilRingan;
                $prob_B17Sedang = $HasilSedangB17_C / $HasilSedang;
                $prob_B17Berat = $HasilBeratB17_C / $HasilBerat;
            }
            else if($data['b17']=="Saya terlalu untuk melakukan apapun"){
                $bobot17 = 3;

                $HasilGangguanMoodB17_D = $this->m_penghitungan->getHasilGangguanMoodB17_D();
                $HasilGangguanMoodB17_D = count($HasilGangguanMoodB17_D);
                $HasilRinganB17_D = $this->m_penghitungan->getHasilRinganB17_D();
                $HasilRinganB17_D = count($HasilRinganB17_D);
                $HasilSedangB17_D = $this->m_penghitungan->getHasilSedangB17_D();
                $HasilSedangB17_D = count($HasilSedangB17_D);
                $HasilBeratB17_D = $this->m_penghitungan->getHasilBeratB17_D();
                $HasilBeratB17_D = count($HasilBeratB17_D);

                $prob_B17GangguanMood = $HasilGangguanMoodB17_D / $HasilGangguanMood;
                $prob_B17Ringan = $HasilRinganB17_D / $HasilRingan;
                $prob_B17Sedang = $HasilSedangB17_D / $HasilSedang;
                $prob_B17Berat = $HasilBeratB17_D / $HasilBerat;
            }


            if($data['b18']=="Nafsu makan saya tidak lebih buruk dari biasanya"){
                $bobot18 = 0;

                $HasilGangguanMoodB18_A = $this->m_penghitungan->getHasilGangguanMoodB18_A();
                $HasilGangguanMoodB18_A = count($HasilGangguanMoodB18_A);
                $HasilRinganB18_A = $this->m_penghitungan->getHasilRinganB18_A();
                $HasilRinganB18_A = count($HasilRinganB18_A);
                $HasilSedangB18_A = $this->m_penghitungan->getHasilSedangB18_A();
                $HasilSedangB18_A = count($HasilSedangB18_A);
                $HasilBeratB18_A = $this->m_penghitungan->getHasilBeratB18_A();
                $HasilBeratB18_A = count($HasilBeratB18_A);

                $prob_B18GangguanMood = $HasilGangguanMoodB18_A / $HasilGangguanMood;
                $prob_B18Ringan = $HasilRinganB18_A / $HasilRingan;
                $prob_B18Sedang = $HasilSedangB18_A / $HasilSedang;
                $prob_B18Berat = $HasilBeratB18_A / $HasilBerat;
            }
            else if($data['b18']=="Nafsu makan saya tidak sebaik biasanya"){
                $bobot18 = 1;

                $HasilGangguanMoodB18_B = $this->m_penghitungan->getHasilGangguanMoodB18_B();
                $HasilGangguanMoodB18_B = count($HasilGangguanMoodB18_B);
                $HasilRinganB18_B = $this->m_penghitungan->getHasilRinganB18_B();
                $HasilRinganB18_B = count($HasilRinganB18_B);
                $HasilSedangB18_B = $this->m_penghitungan->getHasilSedangB18_B();
                $HasilSedangB18_B = count($HasilSedangB18_B);
                $HasilBeratB18_B = $this->m_penghitungan->getHasilBeratB18_B();
                $HasilBeratB18_B = count($HasilBeratB18_B);

                $prob_B18GangguanMood = $HasilGangguanMoodB18_B / $HasilGangguanMood;
                $prob_B18Ringan = $HasilRinganB18_B / $HasilRingan;
                $prob_B18Sedang = $HasilSedangB18_B / $HasilSedang;
                $prob_B18Berat = $HasilBeratB18_B / $HasilBerat;
            }
            else if($data['b18']=="Nafsu makan saya kini jauh lebih buruk"){
                $bobot18 = 2;

                $HasilGangguanMoodB18_C = $this->m_penghitungan->getHasilGangguanMoodB18_C();
                $HasilGangguanMoodB18_C = count($HasilGangguanMoodB18_C);
                $HasilRinganB18_C = $this->m_penghitungan->getHasilRinganB18_C();
                $HasilRinganB18_C = count($HasilRinganB18_C);
                $HasilSedangB18_C = $this->m_penghitungan->getHasilSedangB18_C();
                $HasilSedangB18_C = count($HasilSedangB18_C);
                $HasilBeratB18_C = $this->m_penghitungan->getHasilBeratB18_C();
                $HasilBeratB18_C = count($HasilBeratB18_C);

                $prob_B18GangguanMood = $HasilGangguanMoodB18_C / $HasilGangguanMood;
                $prob_B18Ringan = $HasilRinganB18_C / $HasilRingan;
                $prob_B18Sedang = $HasilSedangB18_C / $HasilSedang;
                $prob_B18Berat = $HasilBeratB18_C / $HasilBerat;
            }
            else if($data['b18']=="Saya tak memiliki nafsu makan lagi"){
                $bobot18 = 3;

                $HasilGangguanMoodB18_D = $this->m_penghitungan->getHasilGangguanMoodB18_D();
                $HasilGangguanMoodB18_D = count($HasilGangguanMoodB18_D);
                $HasilRinganB18_D = $this->m_penghitungan->getHasilRinganB18_D();
                $HasilRinganB18_D = count($HasilRinganB18_D);
                $HasilSedangB18_D = $this->m_penghitungan->getHasilSedangB18_D();
                $HasilSedangB18_D = count($HasilSedangB18_D);
                $HasilBeratB18_D = $this->m_penghitungan->getHasilBeratB18_D();
                $HasilBeratB18_D = count($HasilBeratB18_D);

                $prob_B18GangguanMood = $HasilGangguanMoodB18_D / $HasilGangguanMood;
                $prob_B18Ringan = $HasilRinganB18_D / $HasilRingan;
                $prob_B18Sedang = $HasilSedangB18_D / $HasilSedang;
                $prob_B18Berat = $HasilBeratB18_D / $HasilBerat;
            }


            if($data['b19']=="Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini"){
                $bobot19 = 0;

                $HasilGangguanMoodB19_A = $this->m_penghitungan->getHasilGangguanMoodB19_A();
                $HasilGangguanMoodB19_A = count($HasilGangguanMoodB19_A);
                $HasilRinganB19_A = $this->m_penghitungan->getHasilRinganB19_A();
                $HasilRinganB19_A = count($HasilRinganB19_A);
                $HasilSedangB19_A = $this->m_penghitungan->getHasilSedangB19_A();
                $HasilSedangB19_A = count($HasilSedangB19_A);
                $HasilBeratB19_A = $this->m_penghitungan->getHasilBeratB19_A();
                $HasilBeratB19_A = count($HasilBeratB19_A);

                $prob_B19GangguanMood = $HasilGangguanMoodB19_A / $HasilGangguanMood;
                $prob_B19Ringan = $HasilRinganB19_A / $HasilRingan;
                $prob_B19Sedang = $HasilSedangB19_A / $HasilSedang;
                $prob_B19Berat = $HasilBeratB19_A / $HasilBerat;
            }
            else if($data['b19']=="Berat badan saya turun lebih dari dua kilogram"){
                $bobot19 = 1;

                $HasilGangguanMoodB19_B = $this->m_penghitungan->getHasilGangguanMoodB19_B();
                $HasilGangguanMoodB19_B = count($HasilGangguanMoodB19_B);
                $HasilRinganB19_B = $this->m_penghitungan->getHasilRinganB19_B();
                $HasilRinganB19_B = count($HasilRinganB19_B);
                $HasilSedangB19_B = $this->m_penghitungan->getHasilSedangB19_B();
                $HasilSedangB19_B = count($HasilSedangB19_B);
                $HasilBeratB19_B = $this->m_penghitungan->getHasilBeratB19_B();
                $HasilBeratB19_B = count($HasilBeratB19_B);

                $prob_B19GangguanMood = $HasilGangguanMoodB19_B / $HasilGangguanMood;
                $prob_B19Ringan = $HasilRinganB19_B / $HasilRingan;
                $prob_B19Sedang = $HasilSedangB19_B / $HasilSedang;
                $prob_B19Berat = $HasilBeratB19_B / $HasilBerat;
            }
            else if($data['b19']=="Berat badan saya turun lebih dari lima kilogram"){
                $bobot19 = 2;

                $HasilGangguanMoodB19_C = $this->m_penghitungan->getHasilGangguanMoodB19_C();
                $HasilGangguanMoodB19_C = count($HasilGangguanMoodB19_C);
                $HasilRinganB19_C = $this->m_penghitungan->getHasilRinganB19_C();
                $HasilRinganB19_C = count($HasilRinganB19_C);
                $HasilSedangB19_C = $this->m_penghitungan->getHasilSedangB19_C();
                $HasilSedangB19_C = count($HasilSedangB19_C);
                $HasilBeratB19_C = $this->m_penghitungan->getHasilBeratB19_C();
                $HasilBeratB19_C = count($HasilBeratB19_C);

                $prob_B19GangguanMood = $HasilGangguanMoodB19_C / $HasilGangguanMood;
                $prob_B19Ringan = $HasilRinganB19_C / $HasilRingan;
                $prob_B19Sedang = $HasilSedangB19_C / $HasilSedang;
                $prob_B19Berat = $HasilBeratB19_C / $HasilBerat;
            }
            else if($data['b19']=="Berat badan saya turun lebih dari tujuh kilogram"){
                $bobot19 = 3;

                $HasilGangguanMoodB19_D = $this->m_penghitungan->getHasilGangguanMoodB19_D();
                $HasilGangguanMoodB19_D = count($HasilGangguanMoodB19_D);
                $HasilRinganB19_D = $this->m_penghitungan->getHasilRinganB19_D();
                $HasilRinganB19_D = count($HasilRinganB19_D);
                $HasilSedangB19_D = $this->m_penghitungan->getHasilSedangB19_D();
                $HasilSedangB19_D = count($HasilSedangB19_D);
                $HasilBeratB19_D = $this->m_penghitungan->getHasilBeratB19_D();
                $HasilBeratB19_D = count($HasilBeratB19_D);

                $prob_B19GangguanMood = $HasilGangguanMoodB19_D / $HasilGangguanMood;
                $prob_B19Ringan = $HasilRinganB19_D / $HasilRingan;
                $prob_B19Sedang = $HasilSedangB19_D / $HasilSedang;
                $prob_B19Berat = $HasilBeratB19_D / $HasilBerat;
            }
        

            if($data['b20']=="Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya"){
                $bobot20 = 0;

                $HasilGangguanMoodB20_A = $this->m_penghitungan->getHasilGangguanMoodB20_A();
                $HasilGangguanMoodB20_A = count($HasilGangguanMoodB20_A);
                $HasilRinganB20_A = $this->m_penghitungan->getHasilRinganB20_A();
                $HasilRinganB20_A = count($HasilRinganB20_A);
                $HasilSedangB20_A = $this->m_penghitungan->getHasilSedangB20_A();
                $HasilSedangB20_A = count($HasilSedangB20_A);
                $HasilBeratB20_A = $this->m_penghitungan->getHasilBeratB20_A();
                $HasilBeratB20_A = count($HasilBeratB20_A);

                $prob_B20GangguanMood = $HasilGangguanMoodB20_A / $HasilGangguanMood;
                $prob_B20Ringan = $HasilRinganB20_A / $HasilRingan;
                $prob_B20Sedang = $HasilSedangB20_A / $HasilSedang;
                $prob_B20Berat = $HasilBeratB20_A / $HasilBerat;
            }
            else if($data['b20']=="Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit"){
                $bobot20 = 1;

                $HasilGangguanMoodB20_B = $this->m_penghitungan->getHasilGangguanMoodB20_B();
                $HasilGangguanMoodB20_B = count($HasilGangguanMoodB20_B);
                $HasilRinganB20_B = $this->m_penghitungan->getHasilRinganB20_B();
                $HasilRinganB20_B = count($HasilRinganB20_B);
                $HasilSedangB20_B = $this->m_penghitungan->getHasilSedangB20_B();
                $HasilSedangB20_B = count($HasilSedangB20_B);
                $HasilBeratB20_B = $this->m_penghitungan->getHasilBeratB20_B();
                $HasilBeratB20_B = count($HasilBeratB20_B);

                $prob_B20GangguanMood = $HasilGangguanMoodB20_B / $HasilGangguanMood;
                $prob_B20Ringan = $HasilRinganB20_B / $HasilRingan;
                $prob_B20Sedang = $HasilSedangB20_B / $HasilSedang;
                $prob_B20Berat = $HasilBeratB20_B / $HasilBerat;
            }
            else if($data['b20']=="Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya"){
                $bobot20 = 2;

                $HasilGangguanMoodB20_C = $this->m_penghitungan->getHasilGangguanMoodB20_C();
                $HasilGangguanMoodB20_C = count($HasilGangguanMoodB20_C);
                $HasilRinganB20_C = $this->m_penghitungan->getHasilRinganB20_C();
                $HasilRinganB20_C = count($HasilRinganB20_C);
                $HasilSedangB20_C = $this->m_penghitungan->getHasilSedangB20_C();
                $HasilSedangB20_C = count($HasilSedangB20_C);
                $HasilBeratB20_C = $this->m_penghitungan->getHasilBeratB20_C();
                $HasilBeratB20_C = count($HasilBeratB20_C);

                $prob_B20GangguanMood = $HasilGangguanMoodB20_C / $HasilGangguanMood;
                $prob_B20Ringan = $HasilRinganB20_C / $HasilRingan;
                $prob_B20Sedang = $HasilSedangB20_C / $HasilSedang;
                $prob_B20Berat = $HasilBeratB20_C / $HasilBerat;
            }
            else if($data['b20']=="Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya"){
                $bobot20 = 3;

                $HasilGangguanMoodB20_D = $this->m_penghitungan->getHasilGangguanMoodB20_D();
                $HasilGangguanMoodB20_D = count($HasilGangguanMoodB20_D);
                $HasilRinganB20_D = $this->m_penghitungan->getHasilRinganB20_D();
                $HasilRinganB20_D = count($HasilRinganB20_D);
                $HasilSedangB20_D = $this->m_penghitungan->getHasilSedangB20_D();
                $HasilSedangB20_D = count($HasilSedangB20_D);
                $HasilBeratB20_D = $this->m_penghitungan->getHasilBeratB20_D();
                $HasilBeratB20_D = count($HasilBeratB20_D);

                $prob_B20GangguanMood = $HasilGangguanMoodB20_D / $HasilGangguanMood;
                $prob_B20Ringan = $HasilRinganB20_D / $HasilRingan;
                $prob_B20Sedang = $HasilSedangB20_D / $HasilSedang;
                $prob_B20Berat = $HasilBeratB20_D / $HasilBerat;
            }

            if($data['b21']=="Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis"){
                $bobot21 = 0;

                $HasilGangguanMoodB21_A = $this->m_penghitungan->getHasilGangguanMoodB21_A();
                $HasilGangguanMoodB21_A = count($HasilGangguanMoodB21_A);
                $HasilRinganB21_A = $this->m_penghitungan->getHasilRinganB21_A();
                $HasilRinganB21_A = count($HasilRinganB21_A);
                $HasilSedangB21_A = $this->m_penghitungan->getHasilSedangB21_A();
                $HasilSedangB21_A = count($HasilSedangB21_A);
                $HasilBeratB21_A = $this->m_penghitungan->getHasilBeratB21_A();
                $HasilBeratB21_A = count($HasilBeratB21_A);

                $prob_B21GangguanMood = $HasilGangguanMoodB21_A / $HasilGangguanMood;
                $prob_B21Ringan = $HasilRinganB21_A / $HasilRingan;
                $prob_B21Sedang = $HasilSedangB21_A / $HasilSedang;
                $prob_B21Berat = $HasilBeratB21_A / $HasilBerat;
            }
            else if($data['b21']=="Saya kurang berminat di bidang ini dibandingkan biasanya"){
                $bobot21 = 1;

                $HasilGangguanMoodB21_B = $this->m_penghitungan->getHasilGangguanMoodB21_B();
                $HasilGangguanMoodB21_B = count($HasilGangguanMoodB21_B);
                $HasilRinganB21_B = $this->m_penghitungan->getHasilRinganB21_B();
                $HasilRinganB21_B = count($HasilRinganB21_B);
                $HasilSedangB21_B = $this->m_penghitungan->getHasilSedangB21_B();
                $HasilSedangB21_B = count($HasilSedangB21_B);
                $HasilBeratB21_B = $this->m_penghitungan->getHasilBeratB21_B();
                $HasilBeratB21_B = count($HasilBeratB21_B);

                $prob_B21GangguanMood = $HasilGangguanMoodB21_B / $HasilGangguanMood;
                $prob_B21Ringan = $HasilRinganB21_B / $HasilRingan;
                $prob_B21Sedang = $HasilSedangB21_B / $HasilSedang;
                $prob_B21Berat = $HasilBeratB21_B / $HasilBerat;
            }
            else if($data['b21']=="Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis"){
                $bobot21 = 2;

                $HasilGangguanMoodB21_C = $this->m_penghitungan->getHasilGangguanMoodB21_C();
                $HasilGangguanMoodB21_C = count($HasilGangguanMoodB21_C);
                $HasilRinganB21_C = $this->m_penghitungan->getHasilRinganB21_C();
                $HasilRinganB21_C = count($HasilRinganB21_C);
                $HasilSedangB21_C = $this->m_penghitungan->getHasilSedangB21_C();
                $HasilSedangB21_C = count($HasilSedangB21_C);
                $HasilBeratB21_C = $this->m_penghitungan->getHasilBeratB21_C();
                $HasilBeratB21_C = count($HasilBeratB21_C);

                $prob_B21GangguanMood = $HasilGangguanMoodB21_C / $HasilGangguanMood;
                $prob_B21Ringan = $HasilRinganB21_C / $HasilRingan;
                $prob_B21Sedang = $HasilSedangB21_C / $HasilSedang;
                $prob_B21Berat = $HasilBeratB21_C / $HasilBerat;
            }
            else if($data['b21']=="Saya telah kehilangan minat terhadap itu sama sekali"){
                $bobot21 = 3;

                $HasilGangguanMoodB21_D = $this->m_penghitungan->getHasilGangguanMoodB21_D();
                $HasilGangguanMoodB21_D = count($HasilGangguanMoodB21_D);
                $HasilRinganB21_D = $this->m_penghitungan->getHasilRinganB21_D();
                $HasilRinganB21_D = count($HasilRinganB21_D);
                $HasilSedangB21_D = $this->m_penghitungan->getHasilSedangB21_D();
                $HasilSedangB21_D = count($HasilSedangB21_D);
                $HasilBeratB21_D = $this->m_penghitungan->getHasilBeratB21_D();
                $HasilBeratB21_D = count($HasilBeratB21_D);

                $prob_B21GangguanMood = $HasilGangguanMoodB21_D / $HasilGangguanMood;
                $prob_B21Ringan = $HasilRinganB21_D / $HasilRingan;
                $prob_B21Sedang = $HasilSedangB21_D / $HasilSedang;
                $prob_B21Berat = $HasilBeratB21_D / $HasilBerat;
            }

        $data['bobot'] = ($bobot1+$bobot2+$bobot3+$bobot4+$bobot5+$bobot6+$bobot7+$bobot8+$bobot9+$bobot10+$bobot11+$bobot12+$bobot13+$bobot14+$bobot15+$bobot16+$bobot17+$bobot18+$bobot19+$bobot20+$bobot21);
        if($data['bobot'] < 17){
            $data['hasil_bobot'] = "Gangguan Mood";
        }
        else if($data['bobot'] < 21){
            $data['hasil_bobot'] = "Ringan";
        }
        else if($data['bobot'] < 31){
            $data['hasil_bobot'] = "Sedang";
        }
        else {
            $data['hasil_bobot'] = "Berat";
        }

        //Penghitungan Naive Bayes
        $prob_GangguanMood = ($prob_HasilGangguanMood*$prob_A1GangguanMood*$prob_A2GangguanMood*$prob_A3GangguanMood*$prob_A4GangguanMood*$prob_A5GangguanMood*$prob_A6GangguanMood*$prob_B1GangguanMood*$prob_B2GangguanMood*$prob_B3GangguanMood*$prob_B4GangguanMood*$prob_B5GangguanMood*$prob_B6GangguanMood*$prob_B7GangguanMood*$prob_B8GangguanMood*$prob_B9GangguanMood*$prob_B10GangguanMood*$prob_B11GangguanMood*$prob_B12GangguanMood*$prob_B13GangguanMood*$prob_B14GangguanMood*$prob_B15GangguanMood*$prob_B16GangguanMood*$prob_B17GangguanMood*$prob_B18GangguanMood*$prob_B19GangguanMood*$prob_B20GangguanMood*$prob_B21GangguanMood);
        $prob_Ringan = ($prob_HasilRingan*$prob_A1Ringan*$prob_A2Ringan*$prob_A3Ringan*$prob_A4Ringan*$prob_A5Ringan*$prob_A6Ringan*$prob_B1Ringan*$prob_B2Ringan*$prob_B3Ringan*$prob_B4Ringan*$prob_B5Ringan*$prob_B6Ringan*$prob_B7Ringan*$prob_B8Ringan*$prob_B9Ringan*$prob_B10Ringan*$prob_B11Ringan*$prob_B12Ringan*$prob_B13Ringan*$prob_B14Ringan*$prob_B15Ringan*$prob_B16Ringan*$prob_B17Ringan*$prob_B18Ringan*$prob_B19Ringan*$prob_B20Ringan*$prob_B21Ringan);
        $prob_Sedang = ($prob_HasilSedang*$prob_A1Sedang*$prob_A2Sedang*$prob_A3Sedang*$prob_A4Sedang*$prob_A5Sedang*$prob_A6Sedang*$prob_B1Sedang*$prob_B2Sedang*$prob_B3Sedang*$prob_B4Sedang*$prob_B5Sedang*$prob_B6Sedang*$prob_B7Sedang*$prob_B8Sedang*$prob_B9Sedang*$prob_B10Sedang*$prob_B11Sedang*$prob_B12Sedang*$prob_B13Sedang*$prob_B14Sedang*$prob_B15Sedang*$prob_B16Sedang*$prob_B17Sedang*$prob_B18Sedang*$prob_B19Sedang*$prob_B20Sedang*$prob_B21Sedang);
        $prob_Berat = ($prob_HasilBerat*$prob_A1Berat*$prob_A2Berat*$prob_A3Berat*$prob_A4Berat*$prob_A5Berat*$prob_A6Berat*$prob_B1Berat*$prob_B2Berat*$prob_B3Berat*$prob_B4Berat*$prob_B5Berat*$prob_B6Berat*$prob_B7Berat*$prob_B8Berat*$prob_B9Berat*$prob_B10Berat*$prob_B11Berat*$prob_B12Berat*$prob_B13Berat*$prob_B14Berat*$prob_B15Berat*$prob_B16Berat*$prob_B17Berat*$prob_B18Berat*$prob_B19Berat*$prob_B20Berat*$prob_B21Berat);

        // $prob_GangguanMood = $prob_GangguanMood*1000000000000000000*100000;
        // $prob_Ringan = $prob_Ringan*1000000000000000000*100000;
        // $prob_Sedang = $prob_Sedang*1000000000000000000*100000;
        // $prob_Berat = $prob_Berat*1000000000000000000*100000;


        $prob_all = $prob_GangguanMood+$prob_Ringan+$prob_Sedang+$prob_Berat;


        $hasil= max($prob_GangguanMood, $prob_Ringan, $prob_Sedang,$prob_Berat);
        if ($hasil==$prob_GangguanMood){
            $data['hasil'] = "Gangguan Mood";
        }
        else if ($hasil==$prob_Ringan){
            $data['hasil'] = "Ringan";
        }
        else if ($hasil==$prob_Sedang){
            $data['hasil'] = "Sedang";
        }
        else if ($hasil==$prob_Berat){
            $data['hasil'] = "Berat";
        }
		$this->m_datatest->tambah($data);

        $data['prob_GangguanMood']= $prob_GangguanMood;
        $data['prob_Ringan']= $prob_Ringan;
        $data['prob_Sedang']= $prob_Sedang;
        $data['prob_Berat']= $prob_Berat;
        
        $prob_GangguanMood_percent = ($prob_GangguanMood/$prob_all)*100;
        $prob_Ringan_percent = ($prob_Ringan/$prob_all)*100;
        $prob_Sedang_percent = ($prob_Sedang/$prob_all)*100;
        $prob_Berat_percent = ($prob_Berat/$prob_all)*100;


        $data['prob_GangguanMood_percent'] = number_format($prob_GangguanMood_percent,2,',','');
        $data['prob_Ringan_percent'] = number_format($prob_Ringan_percent,2,',','');
        $data['prob_Sedang_percent'] = number_format($prob_Sedang_percent,2,',','');
        $data['prob_Berat_percent'] = number_format($prob_Berat_percent,2,',','');




        if($data['hasil'] == "Gangguan Mood"){
            $solusi = null;
            $data['solusi'] = $solusi;
        }
        else if($data['hasil'] == "Ringan"){
            $solusi = $this->m_solusi->getRingan();
            $data['solusi'] = $solusi;
        }
        else if($data['hasil'] == "Sedang"){
            $solusi = $this->m_solusi->getSedang();
            $data['solusi'] = $solusi;
        }
        else if($data['hasil'] == "Berat"){
            $solusi = $this->m_solusi->getBerat();
            $data['solusi'] = $solusi;
        }
        $data['solusiA2'] = $solusiA2;
        $data['solusiA3'] = $solusiA3;
        $data['solusiA4'] = $solusiA4;
        $data['solusiA5'] = $solusiA5;
        $data['solusiA6'] = $solusiA6;
        

        $data['content'] = 'diagnosa/v_hasil';
		$this->load->view('template_user',$data);
		// redirect('c_diagnosa');



    }
}