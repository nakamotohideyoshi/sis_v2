<?php
class Classes_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_classes4($name){

		$this->db->select('*');
		$this->db->order_by("DISCIPLINE", "asc", "COURSENO", "ASC", "TERM", "ASC", "Year", "ASC");
		$this->db->from('cordat4');		
		$this->db->where('SOCSECNUM', $name);
		$query = $this->db->get();
		return $query->result_array();

	}



	public function get_classesp($name){

		$this->db->select('*');
		$this->db->from('cordat4p');
		$this->db->order_by("DISCIPLINE", "asc");
		$this->db->order_by("COURSENO", "asc");
		$this->db->order_by("TERM", "asc");
		$this->db->order_by("Year", "asc");
		$this->db->where('SOCSECNUM', $name);
		$query = $this->db->get();
		$result1 = $query->result_array();

		$this->db->select('*');		
		$this->db->from('cordat4');
		$this->db->order_by("DISCIPLINE", "asc");
		$this->db->order_by("COURSENO", "asc");
		$this->db->order_by("TERM", "asc");
		$this->db->order_by("Year", "asc");
		
		$this->db->where('SOCSECNUM', $name);
		$query = $this->db->get();
		$result2 = $query->result_array();
		return array_merge($result1, $result2);

	}
}
