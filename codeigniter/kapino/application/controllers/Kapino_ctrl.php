<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kapino_ctrl extends CI_Controller {
    
    var $name = 'Kapino_ctrl';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        //$this->load->model('Kapino_model');

        //$data['serves'] = $this->Kapino_model->getTUsers()->result();
        $this->load->view('landing_home.html');
    }
    
    public function addTUsers_view() {
        //debug_to_console("Add TServes View has been executed!");
        $this->load->helper('form');
        $this->load->view('signup.html');
        //debug_to_xthyuioiuvctghgjkconsole("Add TServes has been executed!");
    }
    
    public function addTUsers() { 
        aszfghjgfdfghjkhfcdxzsfgchjbhvfcx;
        $this->load->model('Kapino_model');
        
         $data = array( 
            'firstname' => $this->input->post('firstname'), 
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'address' => $this->input->post('address')
         ); 
			
         $this->Kapino_model->insert($data); 
   
        //$data['serves'] = $this->Pizzeria_model->getTServes()->result();
        //$data['message'] = 'Data Inserted Successfully';
        //$data['records'] = $query_serves->result();
        
        //$this->load->helper('url');
        //$this->load->view('Pizzeria_view', $data); // or add?
        //} 
    }
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $pizzeria = $this->uri->segment('3'); 
         $query_serves = $this->db->get_where("serves",array("pizzeria"=>$pizzeria));
         $data['records'] = $query_serves->result(); 
         $data['old_pizzeria'] = $pizzeria; 
         $this->load->view('Pizzeria_edit',$data); 
      } 
  
      public function update_student(){ 
         $this->load->model('Pizzeria_model');
			
         $data = array( 
            'pizzeria' => $this->input->post('pizzeria'), 
            'pizza' => $this->input->post('pizza'),
            'price' => $this->input->post('price')
         );
			
         $old_pizzeria = $this->input->post('old_pizzeria'); 
         $this->Pizzeria_model->update($data,$old_pizzeria); 
			
         $query_serves = $this->db->get("serves"); 
         $data['records'] = $query_serves->result(); 
         $this->load->view('Pizzeria_view',$data); 
      } 
  
      public function delete_student() { 
         $this->load->model('Pizzeria_model'); 
         $pizzeria = $this->uri->segment('3'); 
         $this->Stud_Model->delete($pizzeria); 
   
         $query_serves = $this->db->get("serves"); 
         $data['records'] = $query_serves->result(); 
         $this->load->view('Pizzeria_view',$data); 
      } 
}

?>