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

    //public function login() {
        //$data['title'] = 'Sign in';

        //$this->load->view('templates/header');
        //$this->load->view('users/login', $data);
        //$this->load->view('templates/footer');

        //////login user
        ////$user_exists = $this->User_model->login($username, $password);

        ////if($user_exists) {
            //////login is valid
            //////create session
            ////$user_data = array(
                ////'username' => $username,
                ////'logged_in' => true
            ////);

            ////$this->session->set_userdata($user_data);
            //////$this->session->set_flashdata('user_loggedin', 'You are now logged in!');

            //////redirect('users/login');

            //////TODO Make to JSON first
            ////echo $user_data;
        ////} else {
            //////User didnt exist
            //////$this->session->set_flashdata('login_fail', 'Username and password combination doesnt exist!');

            //////redirect('users/login');
        ////}



    //}

    public function login() {
        $data['title'] = 'Sign in';

        $this->load->view('templates/header');
        $this->load->view('users/login', $data);
        $this->load->view('templates/footer');
    }

    //public function loginUser() {
        //$newdata = array(
            //'logged_in' => TRUE
        //);
        //$this->session->set_userdata($newdata);
        //echo json_encode(TRUE);
    //}

    public function loginUser() {

        //Save received data
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user_exists = $this->User_model->login($username, $password);

        if($user_exists) {
            //login is valid
            //create session
            $user_data = array(
                'logged_in' => TRUE,
                'username' => $username,
            );
            $this->session->set_userdata($user_data);

            echo json_encode($user_data);

        } else {
            $user_data = array(
                'username' => null,
                'logged_in' => FALSE
            );
            //$this->session->set_userdata($user_data);
            echo json_encode($user_data);
        }
    }

    public function logout() {
        //reset user session data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('user_loggedout', 'You are now logged out!');

        redirect('users/login');
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
