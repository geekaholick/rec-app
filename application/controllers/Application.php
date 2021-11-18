<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		//$this->load->model('Admin_Model');
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");


	}

}


class Application extends Shared {

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

	
	public function data_privacy_consent($page='forms/data_privacy_consent')
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

	public function capsule_proposal($page='forms/capsule_proposal')
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


	public function informed_consent_form($page='forms/informed_consent_form')
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


	public function protocol_package_checklist($page='forms/protocol_package_checklist')
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


	public function summary_of_protocols($page='forms/summary_of_protocols')
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



	public function checklist_consideration_for_genetic_research($page='forms/checklist_consideration_for_genetic_research')
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


	public function checklist_res_with_stud_emp_res($page='forms/checklist_res_with_stud_emp_res')
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
