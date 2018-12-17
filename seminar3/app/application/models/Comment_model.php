<?php

class Comment_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_comments($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('Comments');
            return $query->result_array();
        }

        $query = $this->db->get_where('Comments', array('slug' => $slug));

        return $query->row_array();

    }

    public function create_comment($page) {
        $data = array(
            'commenter' => $this->session->userdata('username'),
            'comment' => $comment,
            'page' => $page
        );

        return $this->db->insert('Comments', $data);

    }

    public function delete_comment($id) {

    }
}


?>

