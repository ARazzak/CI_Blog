<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
		 $this->load->model('Login_model');
    }

    //  public function insert()
    //  {
	// 	$this->Login_model->saveData();
		
    //     redirect('Home');
	//  }
	 
	 function login()
    {
        if($this->session->userdata("user_id"))//If already logged in
        {
            redirect(base_url());//redirect to the blog page
		}
		
		$data['error'] = 0;
		
        if($this->input->post())//data inputed for login
        {
            $username = $this->input->post('uname', TRUE);
            $password = $this->input->post('psw', TRUE);
            
			$user = $this->Login_model->login($username, $password);
			
			if(!$user){ 
				$data['error'] = 1;
			} else  {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('username', $user->username);
                redirect(base_url());
            }
        }

    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    


    
}    