<?php

class Comments extends CI_Controller {

    public function create() {
        //$data['comments'] = $this->Comment_model->get_comments();
        $page = $this->input->post('page');

        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        } else {
            $this->Comment_model->create_comment();
            $this->session->set_flashdata('comment_posted', 'Your comment has been posted!');
            redirect($page);
        }
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
