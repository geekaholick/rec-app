<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shared extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('UserModel');

	}

}

class User extends Shared {

	
	public function index($page='user')
	{
		$data['title']='Users';

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php')):
        	show_404();
        endif;

        $data['users']=$this->UserModel->get_users();

		$this->load->view('template/header', $data);
		$this->load->view($page);
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}
    public function create()
	{
        $data['title']='Users';


        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.'user.php')):
        	show_404();
        endif;

        if(isset($_POST['submitUser'])){
            $data['update'] = $this->UserModel->add_user();
        }

        $data['users']=$this->UserModel->get_users();

		$this->load->view('template/header', $data);
		$this->load->view('user');
		$this->load->view('template/footer');
		$this->load->view('template/scripts');

	}
    public function delete()
	{
		if(isset($_POST['userid'])){
			$this->UserModel->delete($this->input->post());
		  }
		  redirect('user', 'refresh');

	}
    public function update() 
	{
		$data['title']='Edit User';

        //check if a file exist
		if ( ! file_exists(APPPATH.'/views/'.'user.php')):
        	show_404();
        endif;
		
		if(isset($_POST['submitedit'])){
            $userdata=$this->UserModel->get_user_info();
			if(isset($userdata)){
				$data['userdetail']=$userdata;
			}else{
				redirect('user', 'refresh');
			}
			
        }elseif(isset($_POST['userid'])){
			//update allows us to note if changes are saved or not
			$data['update'] = $this->UserModel->save($this->input->post());
			$userdata=$this->UserModel->get_user_info();
			
			//to be optimized later
			if(isset($userdata)){
				$data['userdetail']=$userdata;
			}else{
				redirect('user', 'refresh');
			}
		}
		else{
			redirect('user', 'refresh');
		}
    
		$this->load->view('template/header', $data);
		$this->load->view('user_edit');
		$this->load->view('template/footer');
		$this->load->view('template/scripts');

	}

	
}
