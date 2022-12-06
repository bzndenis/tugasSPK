<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hasil_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct()
        $this->load->model('hasil_model');
    }

    public function index()
    {
        $data['hasil'] = $this->hasil_model->get_all()->result();
        $this->load->view('hasil_user/data_user'$data);
    }
}


/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */