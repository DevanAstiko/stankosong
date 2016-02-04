
<div class="container">
    <div class="row">
      

        <div class="col-md-5">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
      <div class="carousel-inner" role="listbox">
        <div class="item active">
           <?php
                            $foto = $this->session->flashdata('foto');

                            echo $foto;
                            ?>
          <div class="container">
            <div class="carousel-caption">
             </div>
          </div>
        </div>
      </div>
       
            <div class="clearfix"></div>

        </div>
        </div>
        <div class="col-md-6 contact_right" >
            
            
            <h1 style="text-align: center"><span class="txt_darkgrey">DETAIL </span><span class="txt_orange">STAN</span></h1>
            <div class="container"style="margin-top: 5%">
                <div class="row">
                            <button type="submit" class="btn btn-orange" style="margin-left: 35%;margin-top: 1%">PESAN SEKARANG</button>
            

                        </div>
             
                
                <div class="row">

                    <?php
                            $standetail = $this->session->flashdata('detail');

                            echo $standetail;
                            ?>


                </div>
                
                
                
                
                
                 
                
                    
                    </div><!-- /.row -->
                </div>

        
        </div>
    </div>