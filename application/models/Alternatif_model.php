<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('alternatif');
    }

    public function insert()
    {
        $data = array(
            'nama_alternatif' => $this->input->post('nama_alternatif')
        );
        return $this->db->insert('alternatif', $data);
    }

    public function insert_opt_alternatif($id_alternatif, $id_kriteria)
    {
        $data = array(
            'id_alternatif' => $id_alternatif,
            'id_kriteria' => $id_kriteria,
            'id_subkriteria' => $this->input->post('kriteria' . $id_kriteria)
        );
        return $this->db->insert('opt_alternatif', $data);
    }

    public function cek_nama_alternatif($nama, $nama_tmp)
    {
        $this->db->where('nama_alternatif', $nama);
        $this->db->where('nama_alternatif <>', $nama_tmp);
        return $this->db->get('alternatif');
    }

    public function get_by_id($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->get('alternatif');
    }

    public function get_selected_opt($id_alternatif, $id_kriteria)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get('opt_alternatif');
    }

    public function update($id_alternatif)
    {
        $data = array(
            'nama_alternatif' => $this->input->post('nama_alternatif')
        );
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->update('alternatif', $data);
    }

    public function update_opt_alternatif($id_alternatif, $id_kriteria)
    {
        $data = array(
            'id_subkriteria' => $this->input->post('kriteria' . $id_kriteria)
        );
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->update('opt_alternatif', $data);
    }

    public function delete($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->delete('alternatif');
    }
}

/* End of file Alternatif_model.php */
/* Location: ./application/models/Alternatif_model.php */
