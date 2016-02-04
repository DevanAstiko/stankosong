<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardcontroller extends CI_Controller {

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
        $this->load->database();
        $this->load->model("stan_model");
        $queryjenis = $this->stan_model->getJenisStan();
        $querykategori = $this->stan_model->getKategoriStan();
        $masukindums = '';
        $masukindum = '';
        $i = 1;
        $masukindums = $masukindums . ' <select name = "jenislist"; class="form-control">
                                <option value = "0">SEMUA JENIS STAN</option>
                                ';
        foreach ($queryjenis->result_array() as $row) {
            $masukindums = $masukindums . '
                                <option value = "' . $row['ID_JENIS'] . '">' . $row['JENIS'] . '</option>';
        }
        $masukindums = $masukindums . '</select>';


        $masukindum = $masukindum . ' <select name = "kategorilist"; class="form-control">
                                <option value = "0">SEMUA KATEGORI STAN</option>
                                ';
        foreach ($querykategori->result_array() as $row) {
            $masukindum = $masukindum . '
                                <option value = "' . $row['ID_KATEGORI'] . '">' . $row['KATEGORI'] . '</option>';
        }
        $masukindum = $masukindum . '</select>';
        $this->session->set_flashdata('search1', $masukindums);
        $this->session->set_flashdata('search2', $masukindum);

        if (isset($_POST['caristan'])) {
            $jenis = $this->input->post('jenislist');
            $this->session->set_flashdata('jenisnya', $jenis);
            $kategori = $this->input->post('kategorilist');
            $this->session->set_flashdata('kategorinya', $kategori);
            redirect(base_url().'Bursteventcontroller');

            
        } else {
           
            $this->stanlaunch();
            }





        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function stanlaunch() {
        $masukanstan = '';
        $in = 0;
        $queryloadstan = $this->stan_model->getStan();

        foreach ($queryloadstan->result_array() as $row) {
            $newnew = date("d-m-Y", strtotime($row['tanggal_acara']));
            $masukanstan = $masukanstan . ' <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="' . base_url() . 'Detail/munculkan/' . $row['id_stan'] . '"> <img src="' . base_url() . 'public/images/dashboard/'.$row['image_dashboard'].'.jpg" alt=""> </a>
                            <div class="caption">
                                <h4 class="pull-right">Rp.' . $row['harga'] . '</h4>
                                <h4><a href="' . base_url() . 'Detail/munculkan/' . $row['id_stan'] . '">' . $row['nama_stan'] . '</a>
                                </h4>
                                <p> tangal acara: ' . $newnew . '</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';
            $in++;
            if($in%3==0){
                $masukanstan = $masukanstan . '<div class="clearfix"></div>';
            }
            if($in==6){
                break;
            }
        }
        $this->session->set_flashdata('stan', $masukanstan);
    }

}
