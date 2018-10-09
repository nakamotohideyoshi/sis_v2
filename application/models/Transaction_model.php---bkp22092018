<?php
class Transaction_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_transaction($soc){

		$this->db->select('*');
		$this->db->order_by("PAPDAY", "asc");		
		$this->db->from('corstud5and8');		
		$this->db->where('socsecnum', $soc);
		$query = $this->db->get();	
		return $query->result_array();		

	}
}
