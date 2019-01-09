<?php

class Comment_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_comments() {
        $query = $this->db->get('Comments');
        return $query->result_array();

    }

    public function create_comment() {
        $data = array(
            'commenter' => $this->session->userdata('username'),
            'comment' => $this->input->post('comment'),
            'recipe' => $this->input->post('page')
        );

        return $this->db->insert('Comments', $data);

    }

    public function delete_comment($id) {
        $comment_query = $this->db->query("SELECT * FROM Comments WHERE id = '$id'");
        if($comment_query->row(0)->commenter == $this->session->userdata('username')) {
            $this->db->query("DELETE FROM Comments WHERE id = '$id'");
            return true;
        } else {
            die('You cant delete comments written by others than yourself!');
        }

    }
}


?>

