<?php
class ProtocolModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_protocols(){
		$this->db->select('*');
		$this->db->from('protocol');
		$this->db->order_by("id", "asc");

		$query = $this->db->get();
		// $rows = array();
        // while($r = mysqli_fetch_assoc($query)) {
        //     $data[] = $r;
        // }
        // return json_encode($data);
        
		return $query->result();
	}

    
}
