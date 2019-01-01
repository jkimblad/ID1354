<?php

class User_model extends CI_Model {

    public function register($enc_password) {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password
        );
        
        return $this->db->insert('Users', $data);
    }

    public function login($username, $password) {
        //validate
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('Users');

        if($result->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function check_username_exists($username) {
        $query = $this->db->get_where('Users', array('username' => $username));
        if(empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}

?>
