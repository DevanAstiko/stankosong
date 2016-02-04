<?php



class signakun extends CI_Model {



    public function __construct() {

        // Call the CI_Model constructor

        parent::__construct();

    }



    public function getTrue($username, $password) {

        $query = $this->db->query("SELECT USERNAME, PASSWORD "

                . "FROM akun WHERE USERNAME= '" . $username . "' AND PASSWORD= '" . $password . "'");





        if ($query->num_rows() > 0) {

                return TRUE;

        } else {

            return FALSE;

        }

    }
    
    
    public function getStatus($username, $password) {

        $query = $this->db->query("SELECT * FROM akun WHERE USERNAME= '" . $username . "' AND PASSWORD= '" . $password . "'");




 return $query;

    }
    


    

        }

