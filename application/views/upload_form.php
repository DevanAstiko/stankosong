<html>
<head>
<title>Upload Form</title>
</head>
<body>

    <?php
    if(isset($images)&& count($images)):
        foreach ($images as $image):
        ?>
    <div class="thumb">
        <a href="<?php echo $image['url'];?>">
            <img src="<?php echo $image['url'];?>"/>
            
        </a>
    </div>
    <?php endforeach; else : ?>
    <div id="blank_gallery">Please Upload an image </div>
    <?php endif;?>
    
    
    <div id ="upload">
        <?php 
        
        echo form_open_multipart('Upload');
        echo form_upload('userfile');
        echo form_submit('upload','Upload');
        echo form_close();
        ?>
        
        
        
        
    </div>

</body>
</html>