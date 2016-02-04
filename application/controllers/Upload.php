<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
    }

    public function index() {
        $this->load->model('gallery_model');
        if($this->input->post('upload')){
            $this->gallery_model->do_upload();
        }
        $data['images']= $this->gallery_model->get_image();
        
        $this->load->view('header');
        $this->load->view('upload_form');
        $this->load->view('footer');
}
}