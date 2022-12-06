<?php
class Auth extends CI_Controller{
     public function __construct() {
        parent::__construct();
    $this->load->model('hasil_model');
     }

    public function index(){
        $this->load->view('Utama');
    }
    public function utama(){
        $this->load->view('login');
        
    }

    public function User(){
        $data['hasil'] = $this->hasil_model->get_all()->result();
        $this->load->view('hasil_user/data_user', $data);
        
    }

        public function loginuser(){
        $this->load->view('login_user');
        
    }
}
