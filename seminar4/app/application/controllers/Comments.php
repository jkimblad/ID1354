<?php

class Comments extends CI_Controller {

    public function create() {
        $comment = $this->input->post('comment');
        $page = $this->input->post('page');
        $username = $this->session->userdata('username');

        $this->Comment_model->create_comment($comment, $page, $username);

        $success = true;
        echo json_encode($success);
    }

    public function delete($id) {
        $page = $this->input->post('page');
        $this->Comment_model->delete_comment($id);
        redirect($page);
    }

    public function getComments() {
        $data["comments"] = $this->Comment_model->get_comments();
        //Check if we are logged in, so we know if we should add delete-button to comments
        if($this->session->userdata('logged_in')) {
            $data["logged_in"] = true;
            $data["username"] = $this->session->userdata('username');
        } else {
            $data["logged_in"] = false;
            $data["username"] = null;
        }
        echo json_encode($data);
    }

}
