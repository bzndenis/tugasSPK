<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topsis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('Auth/utama');
        }

        $this->load->model('topsis_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['tabel'] = $this->topsis_model->get_tabel_topsis();

        $this->load->view('topsis/topsis', $data);
    }    

    public function create()
    {
        // $this->load->view('saw/header');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('ram', 'ram', 'required');
        $this->form_validation->set_rules('memori', 'memori', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('kamera', 'kamera', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('saw/create');
        } else {
            $this->topsis_model->set_data();
            redirect('saw/data');
        }
        // $this->load->view('saw/footer');
    }

    public function data()
    {
        $data['tabel'] = $this->topsis_model->get_tabel_topsis();
        $data['nama_crit'] = $this->topsis_model->get_nama_crit();
        $data['nama_alt'] = $this->topsis_model->get_nama_alt();

        // $this->load->view('saw/header');
        $this->load->view('topsis/data', $data);
        // $this->load->view('saw/footer');
    }

    public function saw_hasil()
    {
        $data['tabel'] = $this->topsis_model->get_tabel_topsis();
        $data['bobot'] = $this->topsis_model->get_bobot();
        $data['hasil_saw'] = $this->topsis_model->get_all()->result();

        $this->load->view('saw/saw_hasil', $data);

    }
    
    public function update($id)
    {
        // $this->load->view('saw/header');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('ram', 'ram', 'required');
        $this->form_validation->set_rules('memori', 'memori', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('kamera', 'kamera', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['data_item'] = $this->topsis_model->get_data_id($id);
            $this->load->view('saw/update', $data);
        } else {
            $this->topsis_model->update_data($id);
            redirect('saw/data');
        }
    }

    public function update_bobot()
    {
        // $this->load->view('saw/header');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('C1', 'C1', 'required');
        $this->form_validation->set_rules('C2', 'C2', 'required');
        $this->form_validation->set_rules('C3', 'C3', 'required');
        $this->form_validation->set_rules('C4', 'C4', 'required');
        $this->form_validation->set_rules('C5', 'C5', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['data_bobot'] = $this->topsis_model->get_bobot();
            $this->load->view('saw/update_bobot', $data);
        } else {
            $this->topsis_model->update_data_bobot();
            redirect('saw/data');
        }
    }

    public function delete($id)
    {
        $this->topsis_model->delete_data($id);
        redirect('saw/data');
    }

    
    
}
