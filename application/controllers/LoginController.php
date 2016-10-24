<?php 

class LoginController extends CI_Controller{
    
    public function index() {
        $this->load->view('login');
    }
    
    public function checkLogin(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|callback_verifyUser');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login');
         }
        else{
             redirect('HomeController/index');
        }
    }
    
    public function verifyUser(){
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       
       $this->load->model('LoginModel');
       
       if($this->LoginModel->login($username,$password)){
           return TRUE;
       }
       else{
           $this->form_validation->set_message('verifyUser','Incorrect Username or password');
           return FALSE;
       }
        
    }
    
}
?>