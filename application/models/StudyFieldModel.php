<?php
class StudyFieldModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function study_field(){
		$this->db->select('*');
		$this->db->from('study_field');
		$this->db->order_by("fieldKey", "asc");

		$query = $this->db->get();
        
		return $query->result();
	}

    
}
