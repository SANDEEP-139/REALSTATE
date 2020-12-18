<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
    function __construct() { 
        
    } 
    
    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('signup');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
        $this->db->update('signup', $userdata);
    }
   
    
    /* 
     * Insert image data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    
}
?>