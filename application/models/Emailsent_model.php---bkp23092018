<?php

Class Emailsent_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set("UTC");
	}




	public function store_emailsent() {
	
		$insert_data = array(
			'socsecnum'=>$this->session->userdata['logged_in']['soc'],
			'dateandtime'=>date('Y-m-d H-i-s'),
			'subject'=>$this->session->userdata['web_response']['ItemName'],
			'bodyofmessage'=>$this->session->userdata['web_response']['Questions'],
			'emailsentto'=>'financialaid@crc.edu'
		);
		
			$this->db->insert('EmailSent', $insert_data);
				if ($this->db->affected_rows() > 0) {
					return true;
				}	
				else {
					return false;
				}
	}
			

	public function store_emailsent1($amount) {	

		$insert_data = array(
			'socsecnum'=>$this->session->userdata['logged_in']['soc'],
			'dateandtime'=>date('Y-m-d H-i-s'),
			'subject'=>$this->session->userdata['web_response']['ItemName'],
			'bodyofmessage'=>$this->session->userdata['web_response']['Questions'].$amount,
			'emailsentto'=>'financialaid@crc.edu',
		);
	
			$this->db->insert('EmailSent', $insert_data);
				if ($this->db->affected_rows() > 0) {
					return true;
				}	
				else {
					return false;
				}
	}


	

	public function store_admemailsent() {
	
		$insert_data = array(
			'socsecnum'=>$this->session->userdata['logged_in']['soc'],
			'dateandtime'=>date('Y-m-d H-i-s'),
			'subject'=>$this->session->userdata['web_response']['ItemName'],
			'bodyofmessage'=>$this->session->userdata['web_response']['Questions'],
			'emailsentto'=>'admissions@crc.edu'
		);

		$this->db->insert('EmailSent', $insert_data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else {
				return false;
			}
	}
			

	

	public function store_admemailsent1($amount) {		
		$insert_data = array(
			'socsecnum'=>$this->session->userdata['logged_in']['soc'],
			'dateandtime'=>date('Y-m-d H-i-s'),
			'subject'=>$this->session->userdata['web_response']['ItemName'],
			'bodyofmessage'=>$this->session->userdata['web_response']['Questions'].". ".$amount,
			'emailsentto'=>'admissions@crc.edu'
		);
			// Query to insert data in database
		$this->db->insert('EmailSent', $insert_data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else {
				return false;
			}
	}
			


	

	public function store_passemailsent($soc, $email, $encryptedstring) {
		
		$condition = "SOCSECNUM =" . "'" . $soc . "'";
		$this->db->select('*');
		$this->db->from('user_password_change');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

			if ($query->num_rows() != 0) {
				

				//$this->db->set('encryptedstring', $encryptedstring);
				//$this->db->set('emailaddress', $email);
				//$this->db->set('passwordupdate', 0);
				//$this->db->where('SOCSECNUM', $soc);
				//$this->db->update('user_password_change');
				$this->db->where('SOCSECNUM', $soc);
      			 
					if ($this->db->delete('user_password_change')) {
						$insert_data = array(
							'SOCSECNUM'=>$soc,
							'emailaddress'=>$email,
							'encryptedstring'=>$encryptedstring,
							'passwordupdate'=>0
							);
						
						$this->db->insert('user_password_change', $insert_data);
							if ($this->db->affected_rows() > 0) {
								return true;
							}		
							else {
								return false;
							}
							}
							else {
								return false;
							}
			}

			else{
				$insert_data = array(
					'SOCSECNUM'=>$soc,
					'emailaddress'=>$email,
					'encryptedstring'=>$encryptedstring,
					'passwordupdate'=>0
					);
				
				$this->db->insert('user_password_change', $insert_data);
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