<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kapino_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getTUsers() {
        $query = $this->db->query('SELECT * FROM users;');
        return $query;
    }

    public function insert($data) { // change this into insert_users soon
        //$this->load->database('kapino', FALSE);
         if ($this->db->insert("users", $data)) { 
            return true; 
         } 
      } 

      public function delete($pizzeria) { 
          //$this->load->database('kapino', FALSE);
         if ($this->db->delete("serves", "pizzeria = ".$pizzeria)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_pizzeria) { 
         $this->db->set($data); 
         $this->db->where("kapino", $old_pizzeria); 
         $this->db->update("serves", $data); 
      } 
}

?>