<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('LoginModel');

	}

}

class Login extends Shared {

	private function check_isvalidated(){
		return ($this->session->userdata('validated'));
	}

	
	public function index($page='login')
	{
		$data['title']='Login';
		$data['update'] = true; 

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;


		if ($this->check_isvalidated()){
			redirect('home','refresh');
		}
		else { 
			$this->load->view($page,$data);
		}
	
	}

	public function login_user($page='login'){
		$result = $this->LoginModel->validate();
		if($result==false){
			$data['update'] = false;  
			
			if ($this->check_isvalidated()){
				redirect('home','refresh');
			}
			else { 
				$this->load->view($page,$data);
			}
		}
		else {

			redirect('home','refresh');
		}
	}
    
	public function logout($page='login'){
		$data = array('user_id','username','name','validated','level');
		$this->session->unset_userdata($data);
		
		$data['update'] = true; 
		$this->load->view($page,$data);
	}
	
}
