<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkriteria_model extends CI_Model
{
    public function get_all($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get('subkriteria');
    }

    public function insert($id_kriteria)
    {
        $data = array(
            'id_kriteria' => $id_kriteria,
            'nilai_sub' => $this->input->post('nilai_sub'),
            'nama_subkriteria' => $this->input->post('nama_subkriteria'),
            'bobot' => $this->input->post('bobot')
        );
        return $this->db->insert('subkriteria', $data);
    }

    public function update($id_subkriteria)
    {
        $data = array(
            'nilai_sub' => $this->input->post('nilai_sub'),
            'nama_subkriteria' => $this->input->post('nama_subkriteria'),
            'bobot' => $this->input->post('bobot')
        );
        $this->db->where('id_subkriteria', $id_subkriteria);
        return $this->db->update('subkriteria', $data);
    }

    public function get_by_id($id_subkriteria)
    {
        $this->db->where('id_subkriteria', $id_subkriteria);
        return $this->db->get('subkriteria');
    }

    public function delete($id_subkriteria)
    {
        $this->db->where('id_subkriteria', $id_subkriteria);
        return $this->db->delete('subkriteria');
    }

    public function get_by_id_kriteria($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get('subkriteria');
    }
}

/* End of file Subkriteria_model.php */
/* Location: ./application/models/Subkriteria_model.php */
