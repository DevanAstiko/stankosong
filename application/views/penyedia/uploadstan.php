

<!-- Page Content -->
<div class="container">


    <div class="col-md-3">
        <img src="<?php echo base_url(); ?>public/images/page2_img1.jpg"/>
        <p class="lead">Account Name</p>
        <div class="list-group">
            <a href="#" class="list-group-item">Event 1</a>
            <a href="#" class="list-group-item">Event 2</a>
            <a href="#" class="list-group-item">Event 3</a>
        </div>
    </div>

    <div class="col-md-9">

        <h1 style="text-align: center"><span class="txt_darkgrey">UNGGAH </span><span class="txt_orange">STAN KAMU</span></h1>


        <div class="row">
            <div class="col-md-6">
               <?php echo form_open_multipart('Akunpenyedia/do_upload'); ?>


<form class="form-horizontal"  id="edit_profile_form_validation" method="post" enctype="multipart/form-data">
    <div class="form-group">


        <img id="gambar" style="margin-top: 10%" src="<?php echo base_url(); ?>public/images/uploading.png" class="img-responsive" alt="Responsive image">

        <br>

        <input type="file" class="btn btn-info"  name="userfile" title="Pilih file poster" id="posterFile"  style="color: #000; background-color: #fff;">
        <input type="file" class="btn btn-info"  name="userfile" title="Pilih file poster" id="posterFile"  style="color: #000; background-color: #fff;">
        <button class="btn btn-green" type="submit" name="masuk" style="margin-top: 2%">Tambah Foto</button>
        <p class="help-block">File harus berekstensi .jpg .jpeg .png dan berukuran minimal 320x150 pixel dan maksimal 2 Mb</p>

            
    </div>

</form> 

            </div>

            <div class="col-md-6 contact_right" >
                <form class="form-horizontal" action="#" style="margin-top: 10%">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NAMA STAN" maxlength="40" />
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="TANGGAL ACARA" maxlength="40" />
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Jenis Stan</option>
                            <option>Bazar</option>
                            <option>Ruko</option>
                            <option>Stan Mall</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Kategori Stan</option>
                            <option>Semua Kategori</option>
                            <option>Stan Makanan</option>
                            <option>Stan Busana</option>
                            <option>Stan Otomotif</option>
                            <option>Stan Mainan</option>


                        </select>
                    </div>

                    <div class="form-group">
                        <textarea  class="form-control" style="height: 130px;" placeholder="DESKRIPSI SINGKAT STAN MU"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" style="height: 130px;" placeholder="FASILITAS YANG DI DAPAT"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" style="height: 130px;" placeholder="POTENSIAL PENGUNJUNG"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="HARGA STAN" maxlength="40" />
                    </div>
                    <button type="submit" class="btn btn-orange pull-left" style="margin-left: 40%">UPLOAD STAN </button>
                </form>

            </div>
        </div>

    </div>

</div>










