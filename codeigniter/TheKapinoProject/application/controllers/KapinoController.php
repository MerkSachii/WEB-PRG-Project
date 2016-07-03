<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoController extends CI_Controller {
    
    var $name = 'Kapino_ctrl';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->model('KapinoUsers');
        
        $homeData['users'] = $this->KapinoUsers->getUsers();
        $this->load->view('landing_home.php', $homeData);
    }
    
    public function regex()
    {
        
        
        $this->load->model();
            
    }
    
    
    
}

?>