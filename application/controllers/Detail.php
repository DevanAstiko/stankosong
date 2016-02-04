<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
           
        $this->load->view('header');
        $this->load->view('detail/content');
        $this->load->view('footer');
        
    }

    
     public function munculkan($id) {
        
        
        
         $this->load->database();
        $this->load->model("stan_model");
        $querydetail = $this->stan_model->getStandetail($id);
        

        $masukindums = '';
        $masukinfoto = '';
        $i = 1;
       
        foreach ($querydetail->result_array() as $row) {
            
            
             $newDate = date("d-m-Y", strtotime($row['tanggal_acara']));
            
            
             $masukindums = $masukindums . ' <div class="col-md-6 contact_right" >
                <h3>TANGGAL ACARA</h3>
               <h5>'. $newDate .'</h5> 
                <h3>DESKRIPSI STAN</h3>
                <h5>'. $row['deskripsi'] .'</h5>
                <h3>POTENSIAL</h3>
                <h5>'. $row['potensial'] .'</h5>
                <h3>FASILITAS</h3>
                <h5>'. $row['fasilitas'] .'</h5>
                </div>';
             $masukinfoto = $masukinfoto. '<img class="first-slide" src="'. base_url().'public/images/detail/'.$row['image_detail'].'.jpg" alt="First slide">';
             
             
             
        }
        
        
        $this->session->set_flashdata('detail', $masukindums);
        $this->session->set_flashdata('foto', $masukinfoto);
        $this->load->view('header');
        $this->load->view('detail/content');
        $this->load->view('footer');
     }
    
    
    
    
    
    
    
    
}
