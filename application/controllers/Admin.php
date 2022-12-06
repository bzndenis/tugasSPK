<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admin_model');
    }

    public function index()
    {
        $data['query'] = $this->admin_model->get_all()->result();
        $this->load->view('admin/data', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'is_unique[admin.username]',
            array('is_unique' => '%s sudah ada')
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/tambah');
        } else {
            $this->admin_model->insert();
            redirect('admin');
        }
    }

    public function ubah($id_admin = '')
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'callback_cek_username'
        );

        if ($this->form_validation->run() === FALSE) {
            $query = $this->admin_model->get_by_id($id_admin);
            $result = $query->row_array();
            $data['id_admin'] = $result['id_admin'];
            $data['username'] = $result['username'];
            $this->load->view('admin/ubah', $data);
        } else {
            $this->admin_model->update($id_admin);
            redirect('admin');
        }
    }

    public function cek_username($username)
    {
        $query = $this->admin_model->cek_username($username, $this->input->post('id'));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('cek_username', '{field} sudah ada');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus($id_admin = '')
    {
        $this->admin_model->delete($id_admin);
        redirect('admin');
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
            $this->load->view('admin/password');
        } else {
            $this->admin_model->update_password($this->session->userdata('id_admin'));
            $this->session->set_flashdata('sukses', '<div class="alert bg-success" role="alert">Password berhasil diubah</div>');
            redirect('admin/password');
        }
    }

    public function cek_password_lama($password)
    {
        $query = $this->admin_model->cek_password_lama($this->session->userdata('id_admin'), $password);
        if ($query->num_rows() == 0) {
            $this->form_validation->set_message('cek_password_lama', '{field} salah');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
