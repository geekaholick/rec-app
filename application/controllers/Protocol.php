<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shared extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProtocolModel');
    }
}

class Protocol extends Shared
{
    private function check_isvalidated(){
		return ($this->session->userdata('validated'));
	}
    
    public function index($page='protocol/list')
	{
        if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}
		

		$data['title']='Protocol';

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;


		$this->load->view('template/header', $data);
        // $this->load->view('template/header');
		$this->load->view($page);
		$this->load->view('template/footer');
        $this->load->view('protocol/scripts');
	}

    public function get_protocols()
    {
        $data['data'] = $this->ProtocolModel->get_protocols();
        echo json_encode($data);

    //     $age = array("responsive_id"=>"", "id"=>1, "title"=>"Project 1", "type"=>"Clinical Trial", "status"=>2);
    //     $test = array("data"=>array($age));
    //     echo json_encode($test);
    }
}
