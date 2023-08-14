<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_penghitungan extends CI_Model
{
   
    var $_table = 'datatraining';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getHasilGangguanMood()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('hasil', 'Gangguan Mood');
        $query = $this->db->get();
        return $query->result();
    }

            public function getHasilGangguanMoodA1Ortu()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a1', 'Bersama Orang Tua');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA1Kos()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a1', 'Kos');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA1Sendiri()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a1', 'Rumah Sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            #######################################################
            public function getHasilGangguanMoodA2SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a2', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA2Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a2', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA2Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a2', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA2Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a2', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA2SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a2', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilGangguanMoodA3SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a3', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA3Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a3', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA3Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a3', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA3Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a3', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA3SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a3', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilGangguanMoodA4SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a4', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA4Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a4', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA4Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a4', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA4Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a4', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA4SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a4', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilGangguanMoodA5SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a5', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA5Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a5', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA5Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a5', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA5Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a5', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA5SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a5', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilGangguanMoodA6SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a6', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA6Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a6', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA6Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a6', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA6Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a6', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodA6SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('a6', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB1_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b1', 'Saya tidak merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB1_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b1', 'Saya merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB1_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b1', 'Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB1_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b1', 'Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB2_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b2', 'Saya tidak terlalu berkecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB2_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b2', 'Saya merasa kecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB2_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b2', 'Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB2_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b2', 'Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB3_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b3', 'Saya tidak menganggap diri saya sebagai orang yang gagal');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB3_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b3', 'Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB3_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b3', 'Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB3_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b3', 'Saya merasa bahwa saya adalah orang yang gagal total');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB4_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b4', 'Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB4_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b4', 'Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB4_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b4', 'Saya tidak memperoleh kepuasan sejati dari apapun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB4_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b4', 'Saya tidak puas atau bosan dengan segalanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB5_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b5', 'Saya tidak terlalu merasa bersalah');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB5_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b5', 'Saya merasa bersalah di hampir seluruh waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB5_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b5', 'Saya agak merasa bersalah di sebagian besar waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB5_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b5', 'Saya merasa bersalah sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB6_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b6', 'Saya tidak merasa seolah saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB6_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b6', 'Saya merasa mungkin saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB6_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b6', 'Saya pikir saya akan dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB6_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b6', 'Saya merasa bahwa saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB7_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b7', 'Saya tidak merasa kecewa terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB7_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b7', 'Saya kecewa dengan diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB7_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b7', 'Saya muak terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB7_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b7', 'Saya membenci diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB8_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b8', 'Saya tidak merasa lebih buruk dari orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB8_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b8', 'Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB8_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b8', 'Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB8_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b8', 'Saya menyalahkan diri saya untuk semua hal buruk yang terjadi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB9_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b9', 'Saya tidak punya sedikitpun pikiran untuk bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB9_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b9', 'Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB9_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b9', 'Saya ingin bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB9_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b9', 'Saya akan bunuh diri jika saja ada kesempatan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB10_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b10', 'Saya tidak lebih banyak menangis dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB10_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b10', 'Sekarang saya lebih banyak menangis daripada sebelumya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB10_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b10', 'Sekarang saya menangis sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB10_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b10', 'Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB11_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b11', 'Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB11_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b11', 'Kini saya sedikit lebih pemarah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB11_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b11', 'Saya agak jengkel atau terganggu di sebagian besar waktu saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB11_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b11', 'Kini saya merasa jengkel sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB12_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b12', 'Saya tidak kehilangan minat saya terhadap orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB12_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b12', 'Saya agak kurang berminat terhadap orang lain dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB12_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b12', 'Saya kehilangan hampir seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB12_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b12', 'Saya telah kehilangan seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB13_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b13', 'Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB13_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b13', 'Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB13_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b13', 'Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB13_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b13', 'Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB14_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b14', 'Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB14_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b14', 'Saya khawatir saya tampak tua dan tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB14_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b14', 'Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB14_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b14', 'Saya yakin bahwa saya tampak jelek');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB15_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b15', 'Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB15_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b15', 'Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB15_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b15', 'Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB15_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b15', 'Saya tidak mampu untuk mengerjakan apa pun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB16_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b16', 'Saya dapat tidur seperti biasa');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB16_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b16', 'Tidur saya tidak sebanyak biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB16_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b16', 'Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB16_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b16', 'Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB17_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b17', 'Saya merasa tidak lelah seperti biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB17_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b17', 'Saya merasa lebih mudah lelah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB17_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b17', 'Saya merasa setelah melakukan apa saja');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB17_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b17', 'Saya terlalu untuk melakukan apapun');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB18_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b18', 'Nafsu makan saya tidak lebih buruk dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB18_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b18', 'Nafsu makan saya tidak sebaik biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB18_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b18', 'Nafsu makan saya kini jauh lebih buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB18_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b18', 'Saya tak memiliki nafsu makan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB19_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b19', 'Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB19_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b19', 'Berat badan saya turun lebih dari dua kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB19_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b19', 'Berat badan saya turun lebih dari lima kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB19_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b19', 'Berat badan saya turun lebih dari tujuh kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB20_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b20', 'Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB20_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b20', 'Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB20_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b20', 'Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB20_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b20', 'Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB21_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b21', 'Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB21_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b21', 'Saya kurang berminat di bidang ini dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB21_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b21', 'Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilGangguanMoodB21_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Gangguan Mood');
                $this->db->where('b21', 'Saya telah kehilangan minat terhadap itu sama sekali');
                $query = $this->db->get();
                return $query->result();
            }


    public function getHasilRingan()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('hasil', 'Ringan');
        $query = $this->db->get();
        return $query->result();
    }

            public function getHasilRinganA1Ortu()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a1', 'Bersama Orang Tua');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA1Kos()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a1', 'Kos');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA1Sendiri()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a1', 'Rumah Sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            #######################################################
            public function getHasilRinganA2SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a2', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA2Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a2', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA2Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a2', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA2Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a2', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA2SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a2', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilRinganA3SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a3', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA3Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a3', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA3Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a3', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA3Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a3', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA3SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a3', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilRinganA4SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a4', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA4Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a4', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA4Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a4', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA4Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a4', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA4SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a4', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilRinganA5SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a5', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA5Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a5', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA5Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a5', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA5Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a5', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA5SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a5', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilRinganA6SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a6', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA6Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a6', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA6Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a6', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA6Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a6', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganA6SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('a6', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB1_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b1', 'Saya tidak merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB1_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b1', 'Saya merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB1_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b1', 'Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB1_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b1', 'Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB2_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b2', 'Saya tidak terlalu berkecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB2_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b2', 'Saya merasa kecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB2_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b2', 'Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB2_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b2', 'Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB3_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b3', 'Saya tidak menganggap diri saya sebagai orang yang gagal');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB3_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b3', 'Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB3_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b3', 'Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB3_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b3', 'Saya merasa bahwa saya adalah orang yang gagal total');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB4_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b4', 'Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB4_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b4', 'Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB4_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b4', 'Saya tidak memperoleh kepuasan sejati dari apapun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB4_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b4', 'Saya tidak puas atau bosan dengan segalanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB5_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b5', 'Saya tidak terlalu merasa bersalah');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB5_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b5', 'Saya merasa bersalah di hampir seluruh waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB5_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b5', 'Saya agak merasa bersalah di sebagian besar waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB5_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b5', 'Saya merasa bersalah sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB6_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b6', 'Saya tidak merasa seolah saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB6_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b6', 'Saya merasa mungkin saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB6_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b6', 'Saya pikir saya akan dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB6_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b6', 'Saya merasa bahwa saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB7_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b7', 'Saya tidak merasa kecewa terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB7_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b7', 'Saya kecewa dengan diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB7_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b7', 'Saya muak terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB7_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b7', 'Saya membenci diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB8_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b8', 'Saya tidak merasa lebih buruk dari orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB8_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b8', 'Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB8_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b8', 'Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB8_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b8', 'Saya menyalahkan diri saya untuk semua hal buruk yang terjadi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB9_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b9', 'Saya tidak punya sedikitpun pikiran untuk bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB9_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b9', 'Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB9_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b9', 'Saya ingin bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB9_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b9', 'Saya akan bunuh diri jika saja ada kesempatan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB10_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b10', 'Saya tidak lebih banyak menangis dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB10_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b10', 'Sekarang saya lebih banyak menangis daripada sebelumya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB10_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b10', 'Sekarang saya menangis sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB10_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b10', 'Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB11_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b11', 'Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB11_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b11', 'Kini saya sedikit lebih pemarah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB11_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b11', 'Saya agak jengkel atau terganggu di sebagian besar waktu saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB11_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b11', 'Kini saya merasa jengkel sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB12_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b12', 'Saya tidak kehilangan minat saya terhadap orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB12_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b12', 'Saya agak kurang berminat terhadap orang lain dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB12_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b12', 'Saya kehilangan hampir seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB12_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b12', 'Saya telah kehilangan seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB13_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b13', 'Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB13_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b13', 'Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB13_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b13', 'Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB13_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b13', 'Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB14_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b14', 'Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB14_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b14', 'Saya khawatir saya tampak tua dan tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB14_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b14', 'Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB14_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b14', 'Saya yakin bahwa saya tampak jelek');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB15_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b15', 'Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB15_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b15', 'Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB15_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b15', 'Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB15_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b15', 'Saya tidak mampu untuk mengerjakan apa pun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB16_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b16', 'Saya dapat tidur seperti biasa');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB16_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b16', 'Tidur saya tidak sebanyak biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB16_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b16', 'Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB16_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b16', 'Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB17_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b17', 'Saya merasa tidak lelah seperti biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB17_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b17', 'Saya merasa lebih mudah lelah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB17_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b17', 'Saya merasa setelah melakukan apa saja');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB17_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b17', 'Saya terlalu untuk melakukan apapun');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB18_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b18', 'Nafsu makan saya tidak lebih buruk dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB18_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b18', 'Nafsu makan saya tidak sebaik biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB18_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b18', 'Nafsu makan saya kini jauh lebih buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB18_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b18', 'Saya tak memiliki nafsu makan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB19_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b19', 'Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB19_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b19', 'Berat badan saya turun lebih dari dua kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB19_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b19', 'Berat badan saya turun lebih dari lima kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB19_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b19', 'Berat badan saya turun lebih dari tujuh kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB20_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b20', 'Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB20_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b20', 'Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB20_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b20', 'Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB20_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b20', 'Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB21_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b21', 'Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB21_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b21', 'Saya kurang berminat di bidang ini dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB21_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b21', 'Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilRinganB21_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Ringan');
                $this->db->where('b21', 'Saya telah kehilangan minat terhadap itu sama sekali');
                $query = $this->db->get();
                return $query->result();
            }

    public function getHasilSedang()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('hasil', 'Sedang');
        $query = $this->db->get();
        return $query->result();
    }
            public function getHasilSedangA1Ortu()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a1', 'Bersama Orang Tua');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA1Kos()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a1', 'Kos');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA1Sendiri()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a1', 'Rumah Sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            #######################################################
            public function getHasilSedangA2SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a2', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA2Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a2', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA2Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a2', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA2Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a2', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA2SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a2', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilSedangA3SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a3', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA3Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a3', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA3Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a3', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA3Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a3', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA3SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a3', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilSedangA4SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a4', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA4Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a4', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA4Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a4', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA4Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a4', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA4SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a4', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilSedangA5SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a5', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA5Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a5', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA5Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a5', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA5Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a5', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA5SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a5', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilSedangA6SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a6', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA6Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a6', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA6Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a6', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA6Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a6', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangA6SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('a6', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB1_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b1', 'Saya tidak merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB1_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b1', 'Saya merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB1_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b1', 'Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB1_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b1', 'Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB2_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b2', 'Saya tidak terlalu berkecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB2_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b2', 'Saya merasa kecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB2_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b2', 'Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB2_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b2', 'Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB3_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b3', 'Saya tidak menganggap diri saya sebagai orang yang gagal');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB3_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b3', 'Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB3_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b3', 'Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB3_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b3', 'Saya merasa bahwa saya adalah orang yang gagal total');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB4_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b4', 'Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB4_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b4', 'Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB4_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b4', 'Saya tidak memperoleh kepuasan sejati dari apapun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB4_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b4', 'Saya tidak puas atau bosan dengan segalanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB5_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b5', 'Saya tidak terlalu merasa bersalah');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB5_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b5', 'Saya merasa bersalah di hampir seluruh waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB5_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b5', 'Saya agak merasa bersalah di sebagian besar waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB5_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b5', 'Saya merasa bersalah sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB6_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b6', 'Saya tidak merasa seolah saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB6_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b6', 'Saya merasa mungkin saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB6_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b6', 'Saya pikir saya akan dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB6_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b6', 'Saya merasa bahwa saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB7_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b7', 'Saya tidak merasa kecewa terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB7_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b7', 'Saya kecewa dengan diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB7_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b7', 'Saya muak terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB7_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b7', 'Saya membenci diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB8_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b8', 'Saya tidak merasa lebih buruk dari orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB8_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b8', 'Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB8_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b8', 'Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB8_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b8', 'Saya menyalahkan diri saya untuk semua hal buruk yang terjadi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB9_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b9', 'Saya tidak punya sedikitpun pikiran untuk bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB9_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b9', 'Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB9_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b9', 'Saya ingin bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB9_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b9', 'Saya akan bunuh diri jika saja ada kesempatan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB10_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b10', 'Saya tidak lebih banyak menangis dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB10_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b10', 'Sekarang saya lebih banyak menangis daripada sebelumya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB10_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b10', 'Sekarang saya menangis sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB10_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b10', 'Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB11_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b11', 'Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB11_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b11', 'Kini saya sedikit lebih pemarah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB11_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b11', 'Saya agak jengkel atau terganggu di sebagian besar waktu saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB11_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b11', 'Kini saya merasa jengkel sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB12_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b12', 'Saya tidak kehilangan minat saya terhadap orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB12_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b12', 'Saya agak kurang berminat terhadap orang lain dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB12_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b12', 'Saya kehilangan hampir seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB12_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b12', 'Saya telah kehilangan seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB13_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b13', 'Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB13_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b13', 'Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB13_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b13', 'Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB13_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b13', 'Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB14_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b14', 'Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB14_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b14', 'Saya khawatir saya tampak tua dan tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB14_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b14', 'Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB14_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b14', 'Saya yakin bahwa saya tampak jelek');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB15_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b15', 'Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB15_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b15', 'Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB15_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b15', 'Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB15_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b15', 'Saya tidak mampu untuk mengerjakan apa pun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB16_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b16', 'Saya dapat tidur seperti biasa');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB16_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b16', 'Tidur saya tidak sebanyak biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB16_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b16', 'Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB16_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b16', 'Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB17_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b17', 'Saya merasa tidak lelah seperti biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB17_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b17', 'Saya merasa lebih mudah lelah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB17_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b17', 'Saya merasa setelah melakukan apa saja');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB17_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b17', 'Saya terlalu untuk melakukan apapun');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB18_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b18', 'Nafsu makan saya tidak lebih buruk dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB18_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b18', 'Nafsu makan saya tidak sebaik biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB18_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b18', 'Nafsu makan saya kini jauh lebih buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB18_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b18', 'Saya tak memiliki nafsu makan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB19_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b19', 'Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB19_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b19', 'Berat badan saya turun lebih dari dua kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB19_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b19', 'Berat badan saya turun lebih dari lima kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB19_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b19', 'Berat badan saya turun lebih dari tujuh kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB20_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b20', 'Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB20_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b20', 'Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB20_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b20', 'Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB20_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b20', 'Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB21_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b21', 'Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB21_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b21', 'Saya kurang berminat di bidang ini dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB21_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b21', 'Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilSedangB21_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Sedang');
                $this->db->where('b21', 'Saya telah kehilangan minat terhadap itu sama sekali');
                $query = $this->db->get();
                return $query->result();
            }

    public function getHasilBerat()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('hasil', 'Berat');
        $query = $this->db->get();
        return $query->result();
    }
            public function getHasilBeratA1Ortu()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a1', 'Bersama Orang Tua');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA1Kos()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a1', 'Kos');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA1Sendiri()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a1', 'Rumah Sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            #######################################################
            public function getHasilBeratA2SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a2', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA2Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a2', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA2Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a2', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA2Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a2', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA2SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a2', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilBeratA3SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a3', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA3Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a3', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA3Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a3', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA3Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a3', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA3SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a3', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilBeratA4SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a4', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA4Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a4', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA4Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a4', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA4Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a4', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA4SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a4', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilBeratA5SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a5', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA5Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a5', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA5Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a5', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA5Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a5', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA5SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a5', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }
            #######################################################
            public function getHasilBeratA6SangatBuruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a6', 'Sangat Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA6Buruk()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a6', 'Buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA6Cukup()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a6', 'Cukup');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA6Baik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a6', 'Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratA6SangatBaik()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('a6', 'Sangat Baik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB1_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b1', 'Saya tidak merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB1_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b1', 'Saya merasa sedih');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB1_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b1', 'Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB1_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b1', 'Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB2_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b2', 'Saya tidak terlalu berkecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB2_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b2', 'Saya merasa kecil hati mengenai masa depan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB2_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b2', 'Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB2_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b2', 'Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB3_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b3', 'Saya tidak menganggap diri saya sebagai orang yang gagal');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB3_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b3', 'Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB3_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b3', 'Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB3_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b3', 'Saya merasa bahwa saya adalah orang yang gagal total');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB4_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b4', 'Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB4_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b4', 'Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB4_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b4', 'Saya tidak memperoleh kepuasan sejati dari apapun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB4_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b4', 'Saya tidak puas atau bosan dengan segalanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB5_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b5', 'Saya tidak terlalu merasa bersalah');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB5_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b5', 'Saya merasa bersalah di hampir seluruh waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB5_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b5', 'Saya agak merasa bersalah di sebagian besar waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB5_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b5', 'Saya merasa bersalah sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB6_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b6', 'Saya tidak merasa seolah saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB6_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b6', 'Saya merasa mungkin saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB6_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b6', 'Saya pikir saya akan dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB6_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b6', 'Saya merasa bahwa saya sedang dihukum');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB7_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b7', 'Saya tidak merasa kecewa terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB7_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b7', 'Saya kecewa dengan diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB7_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b7', 'Saya muak terhadap diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB7_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b7', 'Saya membenci diri saya sendiri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB8_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b8', 'Saya tidak merasa lebih buruk dari orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB8_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b8', 'Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB8_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b8', 'Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB8_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b8', 'Saya menyalahkan diri saya untuk semua hal buruk yang terjadi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB9_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b9', 'Saya tidak punya sedikitpun pikiran untuk bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB9_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b9', 'Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB9_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b9', 'Saya ingin bunuh diri');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB9_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b9', 'Saya akan bunuh diri jika saja ada kesempatan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB10_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b10', 'Saya tidak lebih banyak menangis dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB10_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b10', 'Sekarang saya lebih banyak menangis daripada sebelumya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB10_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b10', 'Sekarang saya menangis sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB10_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b10', 'Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB11_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b11', 'Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB11_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b11', 'Kini saya sedikit lebih pemarah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB11_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b11', 'Saya agak jengkel atau terganggu di sebagian besar waktu saya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB11_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b11', 'Kini saya merasa jengkel sepanjang waktu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB12_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b12', 'Saya tidak kehilangan minat saya terhadap orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB12_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b12', 'Saya agak kurang berminat terhadap orang lain dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB12_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b12', 'Saya kehilangan hampir seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB12_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b12', 'Saya telah kehilangan seluruh minat saya pada orang lain');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB13_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b13', 'Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB13_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b13', 'Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB13_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b13', 'Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB13_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b13', 'Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB14_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b14', 'Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB14_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b14', 'Saya khawatir saya tampak tua dan tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB14_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b14', 'Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB14_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b14', 'Saya yakin bahwa saya tampak jelek');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB15_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b15', 'Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB15_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b15', 'Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB15_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b15', 'Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB15_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b15', 'Saya tidak mampu untuk mengerjakan apa pun lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB16_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b16', 'Saya dapat tidur seperti biasa');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB16_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b16', 'Tidur saya tidak sebanyak biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB16_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b16', 'Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB16_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b16', 'Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB17_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b17', 'Saya merasa tidak lelah seperti biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB17_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b17', 'Saya merasa lebih mudah lelah dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB17_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b17', 'Saya merasa setelah melakukan apa saja');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB17_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b17', 'Saya terlalu untuk melakukan apapun');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB18_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b18', 'Nafsu makan saya tidak lebih buruk dari biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB18_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b18', 'Nafsu makan saya tidak sebaik biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB18_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b18', 'Nafsu makan saya kini jauh lebih buruk');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB18_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b18', 'Saya tak memiliki nafsu makan lagi');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB19_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b19', 'Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB19_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b19', 'Berat badan saya turun lebih dari dua kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB19_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b19', 'Berat badan saya turun lebih dari lima kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB19_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b19', 'Berat badan saya turun lebih dari tujuh kilogram');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB20_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b20', 'Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB20_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b20', 'Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB20_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b20', 'Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB20_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b20', 'Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB21_A()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b21', 'Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB21_B()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b21', 'Saya kurang berminat di bidang ini dibandingkan biasanya');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB21_C()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b21', 'Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis');
                $query = $this->db->get();
                return $query->result();
            }

            public function getHasilBeratB21_D()
            {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->where('hasil', 'Berat');
                $this->db->where('b21', 'Saya telah kehilangan minat terhadap itu sama sekali');
                $query = $this->db->get();
                return $query->result();
            }
}
