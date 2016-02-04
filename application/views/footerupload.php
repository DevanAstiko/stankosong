





<div class="templatemo-footer" >
     <div class="templatemo-tweets">
    <div class="container">
        <div class="row">
            <div class="text-center">
               
                    <div class="container">
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-1">
                                <img src="<?php echo base_url(); ?>public/images/quote.png" alt="icon" />
                            </div>
                            <div class="col-md-7 tweet_txt" >
                                <span> " Kemudahan Anda Tujuan Kami "</span>
                                <br/>
                                <span class="twitter_user">Stankosong.com</span>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
              

            </div>
        
        </div>
    </div>
    <div class="footer_bottom_content" style="margin-left: 35%">
                    Copyright © 2015 <a href="#">Stankosong.com</a> 
                    | Designed by Free License
                </div>
</div>

<script src="<?php echo base_url(); ?>public/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"  type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/js/stickUp.min.js"  type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/js/templatemo_script.js"  type="text/javascript"></script>
<!-- templatemo 395 urbanic -->


    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

 <?php  foreach($scripts_to_load as $script):?>

    <script type='text/javascript' src = '<?php echo base_url(); ?>public/js/<?php echo $script;?>'></script>

 <?php endforeach;?>




</body>
</html>