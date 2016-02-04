<?php



class uploadmodel extends CI_Model {



    public function __construct() {

        // Call the CI_Model constructor

        parent::__construct();

    }



        
   public function update_db_user_info($id, $imgdata) {
       $imgdata = file_get_contents($imgdata['full_path']);//get the content of the image using its path
       $data = array(
           
           'image' => $imgdata,
       );
       $this->db->where('id', $id);
       $this->db->update('userdetails', $data);
   } 
   
   
   }

