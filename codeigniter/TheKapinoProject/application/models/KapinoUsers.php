<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoUsers extends CI_Model {
    private $sys;
    
    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database('KapinoUsers', TRUE);
    }
    
    function getUsers() {
        $query = $this->sys->query("SELECT CONCAT((firstName),(' '),(lastName)) as User FROM users");
        
        if($query->num_rows() > 0) {
				return $query->result(); // returns an array of results based on Query
			}
			
        else {
				return NULL;
			}
    } 
}

?>