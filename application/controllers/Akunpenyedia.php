<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akunpenyedia extends CI_Controller {

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
    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->load->view('headerakunp');
        $this->load->view('penyedia/home');
        $data4 = array(
            'scripts_to_load' => array('bootstrap.file-input.js', 'upload.js')
        );
        $this->load->view('footerupload', $data4);
        
    }

    public function do_upload() {

        $namaimg = "MainanJadulSurabaya.jpg";
        $nama = "alvaroba";
        $config = array(
            'upload_path' => "./public/images/source",
            'allowed_types' => "jpg|jpeg|gif|png|jpg-large",
            'overwrite' => TRUE,
            'max_size' => "2548",
            'max_height' => "2524",
            'max_width' => "2524",
            'file_name' => $namaimg,
        );




        $this->load->library('upload');

        $this->upload->initialize($config);

        $image = $this->upload->data();

        if (!$this->upload->do_upload()) {

            redirect(base_url("Akunpenyedia"));
        } else {

            $this->do_crop();
        }
    }

    public function do_crop() {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/source/MainanJadulSurabaya.jpg',
            'new_image' => 'public/images/detail/MainanJadulSurabaya.jpg',
            'maintain_ratio' => TRUE,
            'width' => 500,
            'height' => 500,
        );
        
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->do_cropdetail();
    }

    public function do_cropdetail() {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/source/MainanJadulSurabaya.jpg',
            'new_image' => 'public/images/dashboard/MainanJadulSurabaya.jpg',
            'create_thumb' => TRUE,
            'maintain_ratio' => TRUE,
            'width' => 320,
            'height' => 150,
        );
        
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        redirect(base_url("Akunpenyedia"));
    }

}
