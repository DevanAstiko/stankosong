<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        if (isset($_POST['buat'])) {
            $this->validasi_buat();
        } else {
            $this->load->view('header');
            $this->load->view('signup/content');
            $this->load->view('footer');
        }
    }

    public function validasi_buat() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $status=$this->input->post('sebagai');
       
        $retype_password = $this->input->post('retype_password');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('retype_password', 'retype_password', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('email', $email);
            redirect(base_url() . "Signup?error=blank");
        }
        
         if (strlen($username) < 5) {
            $this->session->set_flashdata('email', $email);
            redirect(base_url() . "Signup?error=lengthusername");
        }
        
        if($status==0){
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('username', $username);
            redirect(base_url() . "Signup?error=anda");
        }
        
        if (strlen($password) < 5) {
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('username', $username);
            redirect(base_url() . "Signup?error=lengthpass");
        }
        if ($password != $retype_password) {
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('username', $username);
            redirect(base_url() . "Signup?error=pass");
        }

        $this->load->model('signup_model');
        if ($this->signup_model->cek_username($username) == false) {
            $this->session->set_flashdata('username', $username);
            $this->session->set_flashdata('email', $email);
            redirect(base_url() . "Signup?error=email");
        } else {
            $this->signup_model->create_member($username, $password,$email,$status);
            redirect(base_url() . "Signup?s=login");
        }
    }

}
