<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoController extends CI_Controller {
    
    var $name = 'Kapino_ctrl';
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        
    }
    
    public function index() {
        
        $this->load->model('KapinoUsers');
        $homeData['users'] = $this->KapinoUsers->getUsers();
        $this->load->view('landing_home.php', $homeData);
    }
    
    public function signup()
    {
        $this->load->view('signup.php');
        
        
    }
    
    public function addUsers() {
        
        $formData = array(
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'Address' => $this->input->post('address'),
            
        );
        $this->load->model('KapinoUsers');
        $this->KapinoUsers->insertData('users', $formData);
        $this->index();
        
    }
    
    
    
}

?>