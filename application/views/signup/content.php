
<div class="row"style=" margin-left: 25%; margin-top: 5%; margin-bottom: 20%">
    
   
    <div class="col-md-8">
        <?php if ($this->input->get('act') == "success"): ?>
        <div class="alert alert-success" role="alert">
            Akun telah berhasil dibuat.
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "email"): ?>
        <div class="alert alert-danger" role="alert">
            Maaf email tersebut sudah digunakan
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "username"): ?>
        <div class="alert alert-danger" role="alert">
            Maaf username tersebut sudah digunakan
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "lenghtusername"): ?>
        <div class="alert alert-danger" role="alert">
            Minimal username yang harus Anda masukkan adalah 5 digit keatas
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "lengthpass"): ?>
        <div class="alert alert-danger" role="alert">
            Minimal password yang harus Anda masukkan adalah 5 digit keatas
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "pass"): ?>
        <div class="alert alert-danger" role="alert">
            Mohon ulangi password Anda dengan benar
        </div>
    <?php endif ?>
    <?php if ($this->input->get('error') == "blank"): ?>
        <div class="alert alert-danger" role="alert">
            Maaf Anda harus mengisi form registrasi ini dengan lengkap
        </div>
    <?php endif ?>
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne" style="padding-left: 30px; padding-right: 30px;">
                    <h2 class="panel-title" style="text-align:center">
                        DAFTAR AKUN STANKOSONG
                    </h2>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="padding-left: 30px; padding-right: 30px;">
                        <div class="row" style="">
                            <div class="col-sm-12" style="text-align: justify;">
                                <!-- <form> -->
                                <form action="" method="post" accept-charset="utf-8">										  
                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">Email / NIM </label> -->
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan username">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="exampleInputPassword1">Password</label> -->
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="exampleInputPassword1">Password</label> -->
                                        <input type="password" name="retype_password" class="form-control" id="exampleInputPassword1" placeholder=" Retype Password">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="exampleInputPassword1">Password</label> -->
                                        <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <select <select name="sebagai" class="form-control">
                                            <option value="0">Pilih Status Anda</option>                                            
                                            <option value="1">Pencari Stan</option>
                                            <option value="2">Penyedia Stan</option>

                                        </select> 
                                    </div>





                                    <button type="submit" name="buat" class="btn btn-default" style="margin-left:  45%">DAFTAR</button>
                                </form>							

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

