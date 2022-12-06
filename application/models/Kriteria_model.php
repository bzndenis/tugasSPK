<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('kriteria');
    }

    public function insert()
    {
        $data = array(
            'kode_kriteria' => $this->input->post('kode_kriteria'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'bobot' => $this->input->post('bobot'),
            'tipe' => $this->input->post('tipe')
        );
        return $this->db->insert('kriteria', $data);
    }

    public function update($id_kriteria)
    {
        $data = array(
            'kode_kriteria' => $this->input->post('kode_kriteria'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'bobot' => $this->input->post('bobot'),
            'tipe' => $this->input->post('tipe')
        );
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->update('kriteria', $data);
    }

    public function cek_kode_kriteria($kode, $kode_tmp)
    {
        $this->db->where('kode_kriteria', $kode);
        $this->db->where('kode_kriteria <>', $kode_tmp);
        return $this->db->get('kriteria');
    }

    public function get_by_id($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get('kriteria');
    }

    public function delete($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->delete('kriteria');
    }

    public function get_jumlah_bobot()
    {
        $this->db->select('SUM(bobot) AS total');
        return $this->db->get('kriteria');
    }
}

/* End of file Kriteria_model.php */
/* Location: ./application/models/Kriteria_model.php */
