<?php
class Awardsandcharges_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_awards($name){

		$this->db->select('*');
		$this->db->order_by("springdate", "asc");
		$this->db->from('studentscholarshipsreceived');		
		$this->db->where('socsecnum', $name);
		$query = $this->db->get();
		return $query->result_array();

	}


	public function get_awards1($name, $year){

		$this->db->select('*');
		$this->db->order_by("springdate", "asc");
		$this->db->from('studentscholarshipsreceived');		
		$this->db->where('socsecnum', $name);
		$this->db->where('Year', $year);
		$query = $this->db->get();
		return $query->result_array();

	}
		

	public function get_charges($name){

		$this->db->select('*');
		$this->db->order_by("springdate", "asc");
		$this->db->from('studentcostreceived');
		$this->db->where('socsecnum', $name);
		$query = $this->db->get();
		return $query->result_array();

	}


	public function get_charges1($name, $year){

		$this->db->select('*');
		$this->db->order_by("springdate", "asc");
		$this->db->from('studentcostreceived');
		$this->db->where('socsecnum', $name);
		$this->db->where('Year', $year);
		$query = $this->db->get();
		return $query->result_array();

	}


	public function get_financialaid($name, $year){

		$this->db->select('*');
		$this->db->order_by("date", "asc");
		$this->db->from('studentfinancialaidstatus');		
		$this->db->where('socsecnum', $name);
		$this->db->where('Year', $year);
		$query = $this->db->get();
		return $query->result_array();

	}



	public function get_webresponse($id){

		$this->db->select('*');		
		$this->db->from('studentfinancialaidstatus');		
		$this->db->where('id', $id);		
		$query = $this->db->get();
		return $query->result_array();

	}




	public function get_fmaxyear($name){

		$this->db->select_max('Year');		
		$this->db->from('studentfinancialaidstatus');
		$this->db->where('socsecnum', $name);		
		$query = $this->db->get();
		return $query->result_array();

	}




	public function get_minyear($name){

		$this->db->select_max('Year');		
		$this->db->from('studentscholarshipsreceived');
		$this->db->where('socsecnum', $name);		
		$query = $this->db->get();
		return $query->result_array();

	}




	public function get_yearlists($name){
		$this->db->distinct();
		$this->db->select('Year');
		$this->db->order_by("Year", "desc");
		$this->db->from('studentscholarshipsreceived');
		$this->db->where('socsecnum', $name);		
		$query = $this->db->get();
		return $query->result_array();

	}



	public function get_fyearlists($name){
		$this->db->distinct();
		$this->db->select('Year');
		$this->db->order_by("Year", "desc");
		$this->db->from('studentfinancialaidstatus');
		$this->db->where('socsecnum', $name);		
		$query = $this->db->get();
		return $query->result_array();

	}
}
