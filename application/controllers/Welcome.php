<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		//$this->load->model('Admin_Model');

	}

}


class Welcome extends Shared {
	private function check_isvalidated(){
		return ($this->session->userdata('validated'));
	}

	public function index($page='welcome_message')
	{
		if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}

		$data['title']='Home';

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}
}
