<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('UserModel');

	}

}

class Profile extends Shared {

	
	public function index($page='profile')
	{
		$data['title']='Profile';

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

        if(isset($_SESSION['user_id'])){
            $userdata=$this->UserModel->get_profile($_SESSION['user_id']);
        }else{
            $userdata=$this->UserModel->get_profile(10);
        }
        
			
		//to be optimized later
		if(isset($userdata)){
				$data['userdetail']=$userdata;
		}else{
				redirect('user', 'refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}
    

	
}
