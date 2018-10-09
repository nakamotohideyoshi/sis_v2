<?php
class Admissionstatus_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function get_admissionstatus($name){

		$this->db->select('*');
		$this->db->order_by("Date", "asc");
		$this->db->from('admissionsstatusforstudent');		
		$this->db->where('SocialSecurityNumber', $name);		
		$query = $this->db->get();
		return $query->result_array();

	}


	public function get_webresponse($id){

		$this->db->select('*');		
		$this->db->from('admissionsstatusforstudent');		
		$this->db->where('id', $id);		
		$query = $this->db->get();
		return $query->result_array();

	}
	
}
