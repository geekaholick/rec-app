<?php
class ProtocolModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_protocols(){
		$this->db->select('*');
		$this->db->from('protocol_application');
		$this->db->order_by("protocolKey", "asc");

		$query = $this->db->get();
		// $rows = array();
        // while($r = mysqli_fetch_assoc($query)) {
        //     $data[] = $r;
        // }
        // return json_encode($data);
        
		return $query->result();
	}

    
}
