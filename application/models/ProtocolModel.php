<?php
class ProtocolModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_protocol_list(){
		$this->db->select('*');
		$this->db->from('protocol_application');
		$this->db->where('creatorID', $_SESSION['user_id']);
		$this->db->order_by("protocolKey", "asc");

		$query = $this->db->get();
		// $rows = array();
        // while($r = mysqli_fetch_assoc($query)) {
        //     $data[] = $r;
        // }
        // return json_encode($data);
        
		return $query->result();
	}

	public function get_protocol($data){
		$this->db->select('*');
		$this->db->from('protocol_application');
		$this->db->where('protocolKey', $data);

		$query = $this->db->get();
		// $rows = array();
        // while($r = mysqli_fetch_assoc($query)) {
        //     $data[] = $r;
        // }
        // return json_encode($data);
        
		return $query->result();
	}

    public function add_protocol() {
		$data = array(
			'creatorID'      	=> $this->input->post('user-id-column'),
			'title'       		=> $this->input->post('title-column'),
			'proposedStartDate' => $this->input->post('start-date-column'),
			'proposedEndDate'   => $this->input->post('end-date-column'),
			'noOfParticipants'  => $this->input->post('participants-column'),
			'studySite'         => $this->input->post('study-site-column'),
			'sourceOfFunds'     => $this->input->post('source-of-funds-column'),
			'status'      		=> 1
		);
	
		return ($this->db->insert('protocol_application', $data))? $this->db->insert_id(): false;
    }

	public function add_protocol_study($protocolKey, $study_fields) {
		foreach($study_fields as $study) {
			$data = array(
				'protocolKey'      	=> $protocolKey,
				'studyFieldKey'     => $study
			);
			$this->db->insert('protocol_field', $data);
		}
    }
    
}
