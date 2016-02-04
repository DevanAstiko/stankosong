<?php
class gallery_model extends CI_Model{
  
    var $gallery_path;
    var $gallery_path_url;
    
    
    public function __construct() {

        // Call the CI_Model constructor

        parent::__construct();
$this->gallery_path = realpath (APPPATH.'../public/images/');
$this->gallery_path_url = base_url().'public/images/';
    }
    
    
    function do_upload() {
        $config = array(
          'allowed_types'=> 'jpg|jpeg|gif|png',
          'upload_path' => $this->gallery_path
          
            
        );
        
        
        
        $this->load->library('upload',$config);
        $this->upload ->do_upload();
        $image_data = $this->upload->data();
        
        $config = array(
            'source_image' =>$image_data['full_path'],
            'new_image' => $this->gallery_path.'/detail',
            'maintain_ration' => true,
            'width' =>150,
            'height' => 100
            
            
        );
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
    }
    
    
    function get_image(){
        $files = scandir($this->gallery_path);
        $files = array_diff($files, array('.','..','thumbs'));
        $images = array();
        
        foreach ($files as $file){
            $images[]= array (
                'url' => $this->gallery_path_url.'detail/'. $file,
                'thumb_url'=>  $this->gallery_path_url.'detail/'. $file
                    );
        }
    }

}