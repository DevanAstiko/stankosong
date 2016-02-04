
<?php echo form_open_multipart('Akunpenyedia/do_upload');?>


<form class="form-horizontal"  id="edit_profile_form_validation" method="post" enctype="multipart/form-data">
    <div class="form-group"><label class="col-sm-2 control-label">Photo</label>
        <div class="col-sm-10">
            <input type="file" name="userfile" class="form-control">
            
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-white" type="submit">Cancel</button>
            <button class="btn btn-primary" type="submit" name="masuk">Save changes</button>
        </div>
    </div>
</form> 


