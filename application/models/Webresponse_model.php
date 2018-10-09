<?php
class Webresponse_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_response($itemname){

		$this->db->select('*');
		$this->db->from('webresponse');		
		$this->db->where('ItemName', $itemname);
		$query = $this->db->get();		
			return $query->result_array();		

	}
	

	public function get_admresponse($itemname){

		$this->db->select('*');		
		$this->db->from('admissionswebresponsefromstudent');		
		$this->db->where('ItemName', $itemname);
		$query = $this->db->get();		
			return $query->result_array();
		

	}

	
	public function get_selectresponse($itemname, $question){

		$this->db->select('*');		
		$this->db->from('webresponse');		
		$this->db->where('ItemName', $itemname);
		$this->db->where('Questions', $question);
		$query = $this->db->get();		
			return $query->result_array();
		

	}



	public function get_admselectresponse($itemname, $question){

		$this->db->select('*');		
		$this->db->from('admissionswebresponsefromstudent');		
		$this->db->where('ItemName', $itemname);
		$this->db->where('Questions', $question);
		$query = $this->db->get();		
			return $query->result_array();	

	}
}