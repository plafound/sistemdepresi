<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pengujian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_datatest");
        if($this->session->userdata('role') != 'A'){
            redirect('login');
        }
    }
    public function index()
    {
        $all = $this->m_datatest->getAll();
        $data['countAll'] = count($all);
        $actual = $this->m_datatest->getActual();
        $predict = $this->m_datatest->getPredict();
        $data['GG'] = 0;
        $data['GR'] = 0;
        $data['GS'] = 0;
        $data['GB'] = 0;
        $data['RG'] = 0;
        $data['RR'] = 0;
        $data['RS'] = 0;
        $data['RB'] = 0;
        $data['SG'] = 0;
        $data['SR'] = 0;
        $data['SS'] = 0;
        $data['SB'] = 0;
        $data['BG'] = 0;
        $data['BR'] = 0;
        $data['BS'] = 0;
        $data['BB'] = 0;

        for ($i = 0; $i < $data['countAll']; $i++) {
            if ($actual[$i]->hasil_bobot == "Gangguan Mood") {
                if ($predict[$i]->hasil == "Gangguan Mood") {
                    $data['GG'] = $data['GG'] + 1;
                } else if ($predict[$i]->hasil == "Ringan") {
                    $data['GR'] = $data['GR'] + 1;
                } else if ($predict[$i]->hasil == "Sedang") {
                    $data['GS'] = $data['GS'] + 1;
                } else if ($predict[$i]->hasil == "Berat") {
                    $data['GB'] = $data['GB'] + 1;
                }
            } else if ($actual[$i]->hasil_bobot == "Ringan") {
                if ($predict[$i]->hasil == "Gangguan Mood") {
                    $data['RG'] = $data['RG'] + 1;
                } else if ($predict[$i]->hasil == "Ringan") {
                    $data['RR'] = $data['RR'] + 1;
                } else if ($predict[$i]->hasil == "Sedang") {
                    $data['RS'] = $data['RS'] + 1;
                } else if ($predict[$i]->hasil == "Berat") {
                    $data['RB'] = $data['RB'] + 1;
                }
            } else if ($actual[$i]->hasil_bobot == "Sedang") {
                if ($predict[$i]->hasil == "Gangguan Mood") {
                    $data['SG'] = $data['SG'] + 1;
                } else if ($predict[$i]->hasil == "Ringan") {
                    $data['SR'] = $data['SR'] + 1;
                } else if ($predict[$i]->hasil == "Sedang") {
                    $data['SS'] = $data['SS'] + 1;
                } else if ($predict[$i]->hasil == "Berat") {
                    $data['SB'] = $data['SB'] + 1;
                }
            } else if ($actual[$i]->hasil_bobot == "Berat") {
                if ($predict[$i]->hasil == "Gangguan Mood") {
                    $data['BG'] = $data['BG'] + 1;
                } else if ($predict[$i]->hasil == "Ringan") {
                    $data['BR'] = $data['BR'] + 1;
                } else if ($predict[$i]->hasil == "Sedang") {
                    $data['BS'] = $data['BS'] + 1;
                } else if ($predict[$i]->hasil == "Berat") {
                    $data['BB'] = $data['BB'] + 1;
                }
            }
        }
        if ($data['countAll']!=0){
            $data['accuracy'] = ($data['GG'] + $data['RR'] + $data['SS'] + $data['BB'])/$data['countAll'];
        } else if ($data['countAll']==0){
            $data['accuracy'] = 0;
        }

        $accuracy_percent = $data['accuracy'] * 100;
        $data['accuracy_percent'] = number_format($accuracy_percent,0);

        if ($data['GG']+($data['GR']+$data['GS']+$data['GB'])!=0){
            $data['precision_GM'] = $data['GG'] / ($data['GG']+$data['GR']+$data['GS']+$data['GB']);
        } else if($data['GG']+($data['GR']+$data['GS']+$data['GB'])==0){
            $data['precision_GM'] = 0;
        }

        if ($data['RR']+$data['RG']+$data['RS']+$data['RB']!=0){
            $data['precision_R'] = $data['RR'] / ($data['RR']+$data['RG']+$data['RS']+$data['RB']);
        } else if($data['RR']+$data['RG']+$data['RS']+$data['RB']==0) {
            $data['precision_R'] = 0;
        }

        if ($data['SS']+$data['SG']+$data['SR']+$data['SB']!=0){
            $data['precision_S'] = $data['SS'] / ($data['SS']+$data['SG']+$data['SR']+$data['SB']);
        } else if($data['SS']+$data['SG']+$data['SR']+$data['SB']==0) {
            $data['precision_S'] = 0;
        }
        
        if ($data['BB']+$data['BG']+$data['BR']+$data['BS']!=0){
            $data['precision_B'] = $data['BB'] / ($data['BB']+$data['BG']+$data['BR']+$data['BS']);
        } else if($data['BB']+$data['BG']+$data['BR']+$data['BS']==0) {
            $data['precision_B'] = 0;
        }


        $data['precision_All'] = ($data['precision_GM']+$data['precision_R']+$data['precision_S']+$data['precision_B'])/4;
        $precision_percent = $data['precision_All'] * 100;
        $data['precision_percent'] = number_format($precision_percent,0);

        if ($data['GG']+$data['RG']+$data['SG']+$data['BG']!=0){
            $data['recall_GM'] = $data['GG'] / ($data['GG']+$data['RG']+$data['SG']+$data['BG']);
        } else if($data['GG']+$data['RG']+$data['SG']+$data['BG']==0){
            $data['recall_GM'] = 0;
        }

        if ($data['RR']+$data['GR']+$data['SR']+$data['BR']!=0){
            $data['recall_R'] = $data['RR'] / ($data['RR']+$data['GR']+$data['SR']+$data['BR']);
        } else if($data['RR']+$data['GR']+$data['SR']+$data['BR']==0) {
            $data['recall_R'] = 0;
        }

        if ($data['SS']+$data['GS']+$data['RS']+$data['BS']!=0){
            $data['recall_S'] = $data['SS'] / ($data['SS']+$data['GS']+$data['RS']+$data['BS']);
        } else if($data['SS']+$data['GS']+$data['RS']+$data['BS']==0) {
            $data['recall_S'] = 0;
        }
        
        if ($data['BB']+$data['GB']+$data['RB']+$data['SB']!=0){
            $data['recall_B'] = $data['BB'] / ($data['BB']+$data['GB']+$data['RB']+$data['SB']);
        } else if($data['BB']+$data['GB']+$data['RB']+$data['SB']==0) {
            $data['recall_B'] = 0;
        }

        $data['recall_All'] = ($data['recall_GM']+$data['recall_R']+$data['recall_S']+$data['recall_B'])/4;
        $recall_percent = $data['recall_All'] * 100;
        $data['recall_percent'] = number_format($recall_percent,0);
        
        $data['content'] = 'pengujian';
        $this->load->view('template', $data);
    }


}