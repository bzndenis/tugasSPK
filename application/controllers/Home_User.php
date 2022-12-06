<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_User extends CI_Controller
{
    public function index()
    {
        $this->load->view('home_user');
    }
}
