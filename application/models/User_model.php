<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function validasi($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user');
    }

    public function get_all()
    {
        return $this->db->get('user');
    }

    public function insert()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        return $this->db->insert('user', $data);
    }

    public function update($id_user)
    {
        $data = array(
            'username' => $this->input->post('username')
        );
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }

    public function cek_username($usr1, $usr_tmp1)
    {
        $this->db->where('username', $usr1);
        $this->db->where('username <>', $usr_tmp1);
        return $this->db->get('user');
    }

    public function cek_password_lama($id_user, $password)
    {
        $this->db->where('id_user', $id_user);
        $this->db->where('password', md5($password));
        return $this->db->get('user');
    }

    public function get_by_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('user');
    }

    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('user');
    }

    public function update_password($id_user)
    {
        $data = array(
            'password' => md5($this->input->post('password_baru'))
        );
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
