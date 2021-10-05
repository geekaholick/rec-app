<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('UserModel');

	}

}

class Register extends Shared {

	
	public function index($page='register')
	{
		$data['title']='Register';

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

		if(isset($_POST['submitreg'])){
			redirect('home','refresh');
		}

		$this->load->view($page);
	
	}
    

	
}
