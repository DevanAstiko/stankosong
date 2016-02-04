
<div>
    <!-- Carousel -->
    <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <div style="margin-bottom: 5%">
                            <h1>Cari Stan yang Anda Inginkan</h1>
                        </div>

                        <form class="form-horizontal" method="post">


                            <div class="col-lg-5" style="margin-bottom: 5%; margin-left: 5%  ">
                                <div class="form-group">
                                    <?php
                                    $a = $this->session->flashdata('search1');

                                    echo $a;
                                    ?>

                                </div>
                            </div>

                            <div class="col-lg-5" style="margin-bottom: 5%; margin-left: 5%">
                                <div class="form-group">
                                    <?php
                                    $b = $this->session->flashdata('search2');

                                    echo $b;
                                    ?>

                                </div>
                            </div>
                            <div >

                                <button type="submit" name="caristan" value="caristan" class="btn btn-lg btn-orange" >CARI STAN</button>

                            </div>

                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div><!-- /#templatemo-carousel -->
</div>


<div class="templatemo-service" id="templatemo-about">
    <div class="container">
        <div class="templatemo-slogan text-center">
            <span class="txt_darkgrey">Apa itu </span><span class="txt_orange">Stankosong.com ?</span>
            <p class="txt_slogan"><i>Stankosong adalah sebuah website platform untuk para UKM (Usaha Kebawah Menengah) untuk mencari Stan kosong di tempat tertentu</i></p>
            <object width="80%" height="450"><iframe width="70%" height="380" src="https://www.youtube.com/embed/3CFdw5bN6qM" frameborder="0" allowfullscreen></iframe></object>
        </div>



    </div>
</div>


<div class="templatemo-service" id="templatemo-about">
    <div class="container">

        <div class="templatemo-slogan text-center">
            <span class="txt_darkgrey">List Stan</span><span class="txt_orange">Unggulan</span>
        </div>
        <div id="templatemo-about">
            <div class="container">

                <div class="row">






                    <div class="row">

                        <?php
                        $stan = $this->session->flashdata('stan');


                        echo $stan;
                        ?>


                    </div>


                    <div style="margin-left: 40%">
                        <a class="btn btn-lg btn-orange" href="<?php echo base_url();?>Bursteventcontroller" role="button">CARI STAN SELENGKAPNYA</a>
                        
                    </div>
                </div>

            </div>
        </div>




    </div>



</div>
</div>
