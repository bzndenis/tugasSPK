<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login_user');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['query'] = $this->user_model->get_all()->result();
        $this->load->view('user/data', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'is_unique[user.username]',
            array('is_unique' => '%s sudah ada')
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('user/tambah');
        } else {
            $this->user_model->insert();
            redirect('user');
        }
    }

    public function ubah($id_user = '')
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'callback_cek_username'
        );

        if ($this->form_validation->run() === FALSE) {
            $query = $this->user_model->get_by_id($id_user);
            $result = $query->row_array();
            $data['id_user'] = $result['id_user'];
            $data['username'] = $result['username'];
            $this->load->view('user/ubah', $data);
        } else {
            $this->user_model->update($id_user);
            redirect('user');
        }
    }

    public function cek_username($username)
    {
        $query = $this->user_model->cek_username($username, $this->input->post('id'));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('cek_username', '{field} sudah ada');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus($id_user = '')
    {
        $this->user_model->delete($id_user);
        redirect('user');
    }

    public function password()
    {
        $this->form_validation->set_rules(
            'password_baru',
            'Password Baru',
            'trim'
        );
        $this->form_validation->set_rules(
            'ulangi',
            'Password Baru',
            'trim|matches[password_baru]',
            array('matches' => '%s tidak sama')
        );
        $this->form_validation->set_rules(
            'password',
            'Password Lama',
            'callback_cek_password_lama'
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('user/password');
        } else {
            $this->user_model->update_password($this->session->userdata('id_user'));
            $this->session->set_flashdata('sukses', '<div class="alert bg-success" role="alert">Password berhasil diubah</div>');
            redirect('user/password');
        }
    }

    public function cek_password_lama($password)
    {
        $query = $this->user_model->cek_password_lama($this->session->userdata('id_user'), $password);
        if ($query->num_rows() == 0) {
            $this->form_validation->set_message('cek_password_lama', '{field} salah');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
