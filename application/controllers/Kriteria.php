<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('kriteria_model');
    }

    public function index()
    {
        $data['query'] = $this->kriteria_model->get_all()->result();
        $this->load->view('kriteria/data', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'kode_kriteria',
            'Kode Kriteria',
            'is_unique[kriteria.kode_kriteria]',
            array('is_unique' => '%s sudah ada')
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('kriteria/tambah');
        } else {
            $this->kriteria_model->insert();
            redirect('kriteria');
        }
    }

    public function ubah($id_kriteria = '')
    {
        $this->form_validation->set_rules(
            'kode_kriteria',
            'Kode Kriteria',
            'callback_cek_kode'
        );

        if ($this->form_validation->run() === FALSE) {
            $query = $this->kriteria_model->get_by_id($id_kriteria);
            $result = $query->row_array();
            $data['id_kriteria'] = $result['id_kriteria'];
            $data['nama_kriteria'] = $result['nama_kriteria'];
            $data['kode_kriteria'] = $result['kode_kriteria'];
            $data['bobot'] = $result['bobot'];
            $data['tipe'] = $result['tipe'];
            $this->load->view('kriteria/ubah', $data);
        } else {
            $this->kriteria_model->update($id_kriteria);
            redirect('kriteria');
        }
    }

    public function cek_kode($kode)
    {
        $query = $this->kriteria_model->cek_kode_kriteria($kode, $this->input->post('id'));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('cek_kode', '{field} sudah ada');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus($id_kriteria = '')
    {
        $this->kriteria_model->delete($id_kriteria);
        redirect('kriteria');
    }
}


/* End of file Kriteria.php */
/* Location: ./application/controllers/Kriteria.php */
