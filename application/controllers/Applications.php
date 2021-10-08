<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		//$this->load->model('Admin_Model');

	}

}


class Applications extends Shared {

	public function index($page='applications')
	{
		$data['title']='My Applications';

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}

	public function application_details($page='application_details')
	{
		$data['title']='My Applications';

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}
}
