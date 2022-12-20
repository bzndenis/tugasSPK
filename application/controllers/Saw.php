<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saw extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('saw_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['min_harga'] = $this->saw_model->min_harga();
        $data['max_harga'] = $this->saw_model->max_harga();
        $data['max_ram'] = $this->saw_model->max_ram();
        $data['max_memori'] = $this->saw_model->max_memori();
        $data['min_memori'] = $this->saw_model->min_memori();
        $data['max_processor'] = $this->saw_model->max_processor();
        $data['max_kamera'] = $this->saw_model->max_kamera();
        $data['min_kamera'] = $this->saw_model->min_kamera();
        $data['tabel'] = $this->saw_model->get_tabell();
        $data['bobot_saw'] = $this->saw_model->get_bobot();

        $this->load->view('saw/saw', $data);
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
            $this->saw_model->set_data();
            redirect('saw/data');
        }
        // $this->load->view('saw/footer');
    }

    public function data()
    {
        $data['tabel'] = $this->saw_model->get_tabell();
        $data['bobot'] = $this->saw_model->get_bobot();

        // $this->load->view('saw/header');
        $this->load->view('saw/data', $data);
        // $this->load->view('saw/footer');
    }

    public function saw_hasil()
    {
        $data['tabel'] = $this->saw_model->get_tabell();
        $data['bobot'] = $this->saw_model->get_bobot();
        $data['hasil_saw'] = $this->saw_model->get_all()->result();

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
            $data['data_item'] = $this->saw_model->get_data_id($id);
            $this->load->view('saw/update', $data);
        } else {
            $this->saw_model->update_data($id);
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
            $data['data_bobot'] = $this->saw_model->get_bobot();
            $this->load->view('saw/update_bobot', $data);
        } else {
            $this->saw_model->update_data_bobot();
            redirect('saw/data');
        }
    }

    public function delete($id)
    {
        $this->saw_model->delete_data($id);
        redirect('saw/data');
    }

    
    
}
