<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hasil_model extends CI_Model
{

    public function get_all()
    {
        $this->db->order_by('nilai', 'desc');
        $this->db->join('alternatif', 'alternatif.id_alternatif=hasil.id_alternatif', 'left');
        return $this->db->get('hasil');
    }

    public function insert($data)
    {
        return $this->db->insert('hasil', $data);
    }

    public function get_by_id($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->get('hasil');
    }

    public function update($id_alternatif, $data)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->update('hasil', $data);
    }
}

/* End of file Hasil_model.php */
/* Location: ./application/models/Hasil_model.php */