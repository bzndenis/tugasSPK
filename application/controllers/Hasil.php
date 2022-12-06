<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hasil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->model('hasil_model');
    }

    public function index()
    {
        $data['hasil'] = $this->hasil_model->get_all()->result();
        $this->load->view('hasil/data', $data);
    }
}


/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */