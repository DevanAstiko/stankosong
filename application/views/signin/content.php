
<div class="row"style=" margin-left: 25%; margin-top: 5%; margin-bottom: 20%">
    <div class="col-md-8">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne" style="padding-left: 30px; padding-right: 30px;">
                    <h2 class="panel-title" style="text-align:center">
                        SIGN IN STANKOSONG
                    </h2>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="padding-left: 30px; padding-right: 30px;">
                        <div class="row" style="">
                            <div class="col-sm-12" style="text-align: justify;">
                                <!-- <form> -->

                                <?php if ($this->input->get('error') == "not-allow"): ?>

                                    <div class="alert alert-danger" role="alert">

                                        Maaf Anda harus login terlebih dahulu

                                    </div>

                                <?php endif ?>

                                <?php if ($this->input->get('errorl') == "blank"): ?>

                                    <div class="alert alert-danger" role="alert">

                                        Silahkan mengisi form login berikut dengan lengkap

                                    </div>

                                <?php endif ?>

                                <?php if ($this->input->get('errorl') == "invalid"): ?>

                                    <div class="alert alert-danger" role="alert">

                                        Maaf username atau password yang Anda inputkan salah

                                    </div>

                                <?php endif ?>


                                <form class="form-horizontal" method="post">

                                    <div class="form-group">

                                        <!-- <label for="exampleInputEmail1">Email / NIM </label> -->

                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan username">

                                    </div>

                                    <div class="form-group">

                                        <!-- <label for="exampleInputPassword1">Password</label> -->

                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                                    </div>

                                    <div class="form-group">



                                    </div>



                                    <button type="submit" name="login" value="login" class="btn btn-default" style="margin-left: 42.5%">SUBMIT</button>

                                </form>					

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
