<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_user extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            redirect('home_user');
        }
        $this->load->view('login_user');
    }

    public function cek()
    {
        $this->load->model('user_model');
        $username   = $this->input->post('username', TRUE);
        $password   = md5($this->input->post('password', TRUE));
        $query      = $this->user_model->validasi($username, $password);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $session_data = array(
                'id_user' => $result['id_user'],
                'username' => $username,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect('home_user');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert bg-danger text-center" role="alert">Username dan Password salah</div>');
            redirect('login_user');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_user');
    }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
