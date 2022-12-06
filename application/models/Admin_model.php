<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function validasi($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('admin');
    }

    public function get_all()
    {
        return $this->db->get('admin');
    }

    public function insert()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        return $this->db->insert('admin', $data);
    }

    public function update($id_admin)
    {
        $data = array(
            'username' => $this->input->post('username')
        );
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    public function cek_username($usr, $usr_tmp)
    {
        $this->db->where('username', $usr);
        $this->db->where('username <>', $usr_tmp);
        return $this->db->get('admin');
    }

    public function cek_password_lama($id_admin, $password)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->where('password', md5($password));
        return $this->db->get('admin');
    }

    public function get_by_id($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('admin');
    }

    public function delete($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->delete('admin');
    }

    public function update_password($id_admin)
    {
        $data = array(
            'password' => md5($this->input->post('password_baru'))
        );
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
