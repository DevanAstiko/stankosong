<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bursteventcontroller extends CI_Controller {

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
        $jenis = $this->session->flashdata('jenisnya');
        $kategori = $this->session->flashdata('kategorinya');


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
        

        if ($jenis != 0 && $kategori != 0) {

            $this->sorted($jenis, $kategori);
        } elseif (isset($_POST['caristan'])) {
            $jeniss = $this->input->post('jenislist');
            $kategoris = $this->input->post('kategorilist');
            if ($jeniss != 0 && $kategoris != 0) {

                $this->sorted($jeniss, $kategoris);
            } elseif ($jeniss == 0 && $kategoris == 0) {

                $this->stanlaunch();
            }
        } elseif ($jenis == 0 && $kategori == 0) {

            $this->stanlaunch();
        }





        $this->load->view('header');
        $this->load->view('burstevent');
        $this->load->view('footer');
    }

    public function sorted($param, $param2) {
        $this->load->database();
        $this->load->model("stan_model");
        $queryhasil = $this->stan_model->getSortupallselect($param, $param2);

        $masukin = '';

        $i = 1;
        $in = 0;

        foreach ($queryhasil->result_array() as $row) {
            $new = date("d-m-Y", strtotime($row['tanggal_acara']));
            if ($param = 0 && $param2 = 0) {
                $this->stanlaunch();
            } else {
                $masukin = $masukin . ' <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="' . base_url() . 'Detail/munculkan/' . $row['id_stan'] . '"> <img src="' . base_url() . 'public/images/dashboard/' . $row['image_dashboard'] . '.jpg" alt=""> </a>
                            <div class="caption">
                                <h4 class="pull-right">Rp.' . $row['harga'] . '</h4>
                                <h4><a href="' . base_url() . '/Detail/munculkan/' . $row['id_stan'] . '">' . $row['nama_stan'] . '</a>
                                </h4>
                                <p> tangal acara: ' . $new . '</p>
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
                if ($in % 3 == 0) {
                    $masukin = $masukin . '<div class="clearfix"></div>';
                }
            }
        }
        $this->session->set_flashdata('stan', '');
        $this->session->set_flashdata('stan', $masukin);
    }

    public function stanlaunch() {
        $masukanstan = '';
        $in = 0;
        $queryloadstan = $this->stan_model->getStan();

        foreach ($queryloadstan->result_array() as $row) {
            $newnew = date("d-m-Y", strtotime($row['tanggal_acara']));
            $masukanstan = $masukanstan . ' <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="' . base_url() . 'Detail/munculkan/' . $row['id_stan'] . '"> <img src="' . base_url() . 'public/images/dashboard/' . $row['image_dashboard'] . '.jpg" alt=""> </a>
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
            if ($in % 3 == 0) {
                $masukanstan = $masukanstan . '<div class="clearfix"></div>';
            }
        }
        $this->session->set_flashdata('stan', $masukanstan);
    }

}
