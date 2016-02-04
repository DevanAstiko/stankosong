<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

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
        if (isset($_POST['login'])) {

            $this->validasi();
        } else {

            $this->load->view('header');
            $this->load->view('signin/content');
            $this->load->view('footer');
        }
    }

    private function validasi() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == '' || $password == '') {
            redirect(base_url() . "Signin?errorl=blank");
        }
        $this->load->model('signakun');
        $login = false;
        $login = $this->signakun->getTrue($username, $password);
        $query = $this->signakun->getStatus($username, $password);
        $i = 1;
        foreach ($query->result_array() as $row) {
            $idakun = $idakun['ID_AKUN'];
            $status = $row['STATUS'];

            $i++;
        }
        if ($login == false) {

            redirect(base_url() . "Signin?errorl=invalid");
        } else {

            $this->session->set_userdata("SIGNIN", TRUE);

            $this->session->set_userdata("USERNAME", $username);


            $this->session->set_userdata("IDAKUN", $idakun);
            $this->session->set_userdata("STATUS", $status);


            if ($status == 1) {
                redirect(base_url() . "Akunpenyedia");
            }
            if ($status == 2) {
                redirect(base_url() . "Akunpencari");
            }
        }
    }

    public function logout() {

        $this->session->set_userdata('SIGNIN', FALSE);

        $this->session->sess_destroy();

        redirect(base_url());
    }

}
