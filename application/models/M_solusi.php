<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_solusi extends CI_Model
{
   
    var $_table = 'solusi';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRingan()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Depresi Ringan');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSedang()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Depresi Sedang');
        $query = $this->db->get();
        return $query->result();
    }
    public function getBerat()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Depresi Berat');
        $query = $this->db->get();
        return $query->result();
    }
    public function getA2()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Keadaan ekonomi harian');
        $query = $this->db->get();
        return $query->result();
    }
    public function getA3()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Hubungan dengan Dosen Pembimbing');
        $query = $this->db->get();
        return $query->result();
    }
    public function getA4()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Kemampuan analisis kasus');
        $query = $this->db->get();
        return $query->result();
    }
    public function getA5()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Tingkat kepercayaan diri');
        $query = $this->db->get();
        return $query->result();
    }
    public function getA6()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('problem', 'Persiapan terhadap pengujian');
        $query = $this->db->get();
        return $query->result();
    }

}