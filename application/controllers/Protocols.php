<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shared extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProtocolModel');
        $this->load->model('StudyFieldModel');
    }
}

class Protocols extends Shared
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

    public function create()
	{
        $page='protocol/create';

        if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}
		
		$data['title']='Create New Protocol';
        $data['study_types'] = $this->StudyFieldModel->study_field();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
        $this->load->view('protocol/scripts-forms');
	}

    public function edit($id)
	{
        $page='protocol/create_summary';

        if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}

        $data['title']='Protocol Summary';
		$data['protocol'] = $this->ProtocolModel->get_protocol($id);
        
        if($data['protocol'][0]->creatorID != $_SESSION['user_id']) {
            redirect('protocols','refresh');
        }

        $data['information'] = array(
            (object) [
                'title' => 'Project Details',
                'status'=> 'Done',
                'class' => 'badge badge-pill badge-light-success mr-1'
            ],
            (object) [
                'title' => 'Project Collaborators (Researcher, Advisers)',
                'status'=> 'No Collaborators',
                'class' => 'badge badge-pill badge-light-warning mr-1'
            ],
            (object) [
                'title' => 'Project Budget Plan',
                'status'=> 'None',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'Protocol Assessment (Project Leader)',
                'status'=> 'None',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'Capsule Proposal',
                'status'=> 'None',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'Ammendments',
                'status'=> 'None',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'Other Supporting Documents',
                'status'=> 'None',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
        );

        $data['forms'] = array(
            (object) [
                'title' => 'USC REC F-31 Capsule Proposal Template',
                'status'=> 'Empty',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'USC REC F-32 Research Protocol Application Form',
                'status'=> 'Partially Filled',
                'class' => 'badge badge-pill badge-light-warning mr-1'
            ],
            (object) [
                'title' => 'USC REC F-33 Detailed Budget Form',
                'status'=> 'Empty',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
            (object) [
                'title' => 'USC REC F-34 Data Privacy Consent Form',
                'status'=> 'Empty',
                'class' => 'badge badge-pill badge-light-danger mr-1'
            ],
        );
        

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
            echo "Page not found?";
        endif;

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
        $this->load->view('protocol/scripts-forms');
	}

    public function create_protocol()
	{
        if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}

        if(isset($_POST['create'])){
            $protocol_key = $this->ProtocolModel->add_protocol();
            
            if($protocol_key) {
                $this->ProtocolModel->add_protocol_study($protocol_key, $_POST['study-field-column']);

                redirect('protocol/edit/'.$protocol_key, 'refresh');
            } else {
                redirect('protocol/new','refresh');
            }
        }

		// $this->load->view('template/header', $data);
        // $this->load->view('template/header');
		// $this->load->view($page);
		// $this->load->view('template/footer');
        // $this->load->view('protocol/scripts');
	}

    public function get_protocol($id) {
        if (!$this->check_isvalidated()){
			redirect('login','refresh');
		}
		if($id === 8) {
            redirect('protocol','refresh');
        }

		// $data['title']='Protocol Summary';
        // // $data['study_types'] = $this->StudyFieldModel->study_field();
        // // $data['message'] = "Default";
        // $data['protocol'] = $this->ProtocolModel->get_protocol($data);

        // //check if a file exist
		// if ( ! file_exists(APPPATH.'/views/'.'protocol/create_summary'.'.php')):

        // 	// show_404();
        // endif;

        // $this->load->view('template/header', $data);
        // // $this->load->view('template/header');
		// $this->load->view('protocol/create_summary');
		// $this->load->view('template/footer');
        // $this->load->view('protocol/scripts');
    }

    public function get_protocol_list()
    {
        $data['data'] = $this->ProtocolModel->get_protocol_list();
        echo json_encode($data);
    }

}
