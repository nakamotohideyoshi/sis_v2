<?php

Class Record_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set("UTC");
	}




	public function update_login_info($data) {

		$condition = "SOCSECNUM =" . "'" . $data['personal'][0]['SOCSECNUM']. "'";
		$this->db->select('*');
		$this->db->from('user_login_times');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->result_array();
			if ($query->num_rows() == 0) {
				$insert_data = array(
					'SOCSECNUM'=>$data['personal'][0]['SOCSECNUM'],
					'firstname'=>$data['personal'][0]['Firstname'],
					'middlename'=>$data['personal'][0]['Middlename'],
					'lastname'=>$data['personal'][0]['Lastname'],
					'LastLogonDate'=>date('Y-m-d'),
					'NumberofLogons'=>'1'
				);
				$this->db->insert('user_login_times', $insert_data);
					if ($this->db->affected_rows() > 0) {
						return true;
					}		
					else {
						return false;
					}
			}
			else if($query->num_rows() == 1){
				
				$this->db->set('LastLogonDate', date('Y-m-d'));
				$this->db->set('NumberofLogons', ((int)$result[0]['NumberofLogons']+1));
				$this->db->where('SOCSECNUM', $data['personal'][0]['SOCSECNUM']);
				$this->db->update('user_login_times');
					if ($this->db->affected_rows() > 0) {
						return true;
					}
					else {
						return false;
					}
				}

	}




}

?>