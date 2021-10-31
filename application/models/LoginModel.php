<?php 
class LoginModel extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

    public function validate(){

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$this->input->post('email'));
		//$this->db->where('status','active');

		$query = $this->db->get();
		$row = $query->row();
		if(isset($row->pword) && password_verify($this->input->post('pword'),$row->pword)) 
		{
			$data = array(
					'user_id'   => $row->userid,
					'username'  => $row->username,
                    'name'      => $row->fname,
					'level'  	=> $row->usertype,   
					'validated' => true
					);
			$this->session->set_userdata($data);
			$return= true;
		}
		else{
			$return= false;
		}
		return $return;
	}   


}
?>
