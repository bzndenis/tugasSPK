<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('alternatif_model');
        $this->load->model('kriteria_model');
        $this->load->model('subkriteria_model');
    }

    public function index()
    {
        $data['query'] = $this->alternatif_model->get_all()->result();
        $this->load->view('alternatif/data', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_alternatif',
            'Nama Alternatif',
            'is_unique[alternatif.nama_alternatif]',
            array('is_unique' => '%s sudah ada')
        );

        if ($this->form_validation->run() === FALSE) {
            $query = $this->kriteria_model->get_all();
            $data['query'] = $query->result();
            foreach ($data['query'] as $row) {
                $query2 = $this->subkriteria_model->get_by_id_kriteria($row->id_kriteria);
                $data['sub'][$row->id_kriteria] = $query2->result();
            }
            $this->load->view('alternatif/tambah', $data);
        } else {
            $this->alternatif_model->insert();
            $id_alternatif = $this->db->insert_id();
            $query = $this->kriteria_model->get_all();
            foreach ($query->result() as $row) {
                $this->alternatif_model->insert_opt_alternatif($id_alternatif, $row->id_kriteria);
            }
            redirect('alternatif');
        }
    }

    public function ubah($id_alternatif = '')
    {
        $this->form_validation->set_rules(
            'nama_alternatif',
            'Nama Alternatif',
            'callback_cek_nama'
        );

        if ($this->form_validation->run() === FALSE) {
            $query_alt = $this->alternatif_model->get_by_id($id_alternatif);
            $result = $query_alt->row_array();
            $data['id_alternatif'] = $result['id_alternatif'];
            $data['nama_alternatif'] = $result['nama_alternatif'];
            $query = $this->kriteria_model->get_all();
            $data['query'] = $query->result();
            foreach ($data['query'] as $row) {
                $query2 = $this->subkriteria_model->get_by_id_kriteria($row->id_kriteria);
                $data['sub'][$row->id_kriteria] = $query2->result();
                $res = $this->alternatif_model->get_selected_opt($id_alternatif, $row->id_kriteria)->row_array();
                $data['alt'][$row->id_kriteria] = $res['id_subkriteria'];
            }
            $this->load->view('alternatif/ubah', $data);
        } else {
            $this->alternatif_model->update($id_alternatif);
            $query = $this->kriteria_model->get_all();
            foreach ($query->result() as $row) {
                $res = $this->alternatif_model->get_selected_opt($id_alternatif, $row->id_kriteria);
                if ($res->num_rows() > 0) {
                    $this->alternatif_model->update_opt_alternatif($id_alternatif, $row->id_kriteria);
                } else {
                    $this->alternatif_model->insert_opt_alternatif($id_alternatif, $row->id_kriteria);
                }
            }
            redirect('alternatif');
        }
    }

    public function cek_nama($nama)
    {
        $query = $this->alternatif_model->cek_nama_alternatif($nama, $this->input->post('id'));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('cek_nama', '{field} sudah ada');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus($id_alternatif = '')
    {
        $this->alternatif_model->delete($id_alternatif);
        redirect('alternatif');
    }

    public function lihat($id_alternatif = '')
    {
        $query_alt = $this->alternatif_model->get_by_id($id_alternatif);
        $result = $query_alt->row_array();
        $data['nama_alternatif'] = $result['nama_alternatif'];
        $query = $this->kriteria_model->get_all();
        $data['query'] = $query->result();
        foreach ($data['query'] as $row) {
            $data['sub'][$row->id_kriteria] = '';
            $res = $this->alternatif_model->get_selected_opt($id_alternatif, $row->id_kriteria);
            if ($res->num_rows() > 0) {
                $res_array = $res->row_array();
                $res2 = $this->subkriteria_model->get_by_id($res_array['id_subkriteria'])->row_array();
                $data['sub'][$row->id_kriteria] = $res2['nama_subkriteria'];
            }
        }
        $this->load->view('alternatif/lihat', $data);
    }
}


/* End of file Alternatif.php */
/* Location: ./application/controllers/Alternatif.php */
