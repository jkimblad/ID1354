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
}


?>

