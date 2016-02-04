<div class="templatemo-service" id="templatemo-about">
    <div class="container">


        <form class="form-horizontal" method="post">

            <div>
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
            <div style="margin-bottom: 5%; margin-left: 45%">

                <button type="submit" name="caristan" value="caristan" class="btn btn-lg btn-orange" >CARI STAN</button>

            </div>
                </div>

        </form>



        <div id="templatemo-about">
            <div class="container">

                <div class="row">






                    <div class="row">

                        <?php
                        $stan = $this->session->flashdata('stan');


                        echo $stan;
                        ?>


                    </div>

                </div>

            </div>
        </div>


    </div>
</div>
