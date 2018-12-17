<?php
class Users extends CI_Controller {

    public function register() {
        $data['title'] = 'Sign up';

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');

        } else {
            //Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->User_model->register($enc_password);

            $this->session->set_flashdata('user_registered', 'You are now registered!');

            redirect('users/register');
        }
    }

    public function check_username_exists($username) {
        $this->form_validation->set_message('check_username_exists', 'That username is already taken!');

        if($this->User_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }

}
