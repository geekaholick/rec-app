<?php 
class UserModel extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function checkUsername(){
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
		$query = $this->db->get();
		return ($this->db->affected_rows() == 1) ? true: false;
	}

	public function checkEmail(){
		$this->db->select('email');
		$this->db->from('user');
		$this->db->where('email',$this->input->post('email'));
		$query = $this->db->get();
        return ($this->db->affected_rows() == 1) ? true: false;
	}

    public function get_users(){
		$this->db->select('userid, username, fname, lname, email, usertype');
		$this->db->from('user');
		$this->db->where('active',1);
		$this->db->order_by("userid", "asc");

		$query = $this->db->get();
		
		
		return $query->result();
	}

	public function get_profile($userid){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('userid',$userid);
		$query = $this->db->get()->row();
		return $query;
	}


	public function add_user(){
		$retval=false;
		
		if(!$this->checkUsername( $this->input->post('username')) && !$this->checkEmail( $this->input->post('email'))){
			//data can also come directly from post form assuming table columns match or via binding
			$data =array(
			
				'username'      => $this->input->post('username'),
				'pword'       	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'fname'       	=> $this->input->post('fname'),
				'lname'       	=> $this->input->post('lname'),
				'email'       	=> $this->input->post('email'),
				'usertype'      => $this->input->post('usertype')
			);
	
			$this->db->insert('user', $data);
			($this->db->affected_rows() == 1) ? $retval=true: $retval=false;
		}
       
        return  $retval;
    }
	
	public function get_user_info(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('userid',$this->input->post('userid'));
		$query = $this->db->get()->row();
		return $query;
	}

	public function save($data){
		$this->db->update('user', $data, array('userid' => $this->input->post('userid')));
		return ($this->db->affected_rows() == 1) ? true: false;
	}

	public function delete($data){
		//active is set to 0 - deleted or you can physically delete it as well by creating a query
		$this->db->update('user', $data, array('userid' => $this->input->post('userid')));
		return ($this->db->affected_rows() == 1) ? true: false;
	}


}
?>
