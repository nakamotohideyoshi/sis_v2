<?php
class Personal_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_personal_info($soc){
		

		$this->db->select('*');
		$this->db->from('cordat1');		
		$this->db->where('SOCSECNUM', $soc);
		$query = $this->db->get();
			if($query->result_array()){
				return $query->result_array();
			}
			else {
				$this->db->select('*');
			    $this->db->from('cordat1p');			
			     $this->db->where('SOCSECNUM', $soc);
			    $query = $this->db->get();
			    	return $query->result_array();
			}	
	}
}
