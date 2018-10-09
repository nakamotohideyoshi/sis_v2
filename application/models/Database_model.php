<?php

Class Database_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set("UTC");
	}

	public function soc_validation($email) {
		

		$condition = "emailaddress =" . "'" . $email ."'";
		$this->db->select('*');
		$this->db->from('cordat1');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() != 0) {
				return $query->result();
				
			}
			else {

				$condition = "emailaddress =" . "'" . $email . "'";
				$this->db->select('*');
				$this->db->from('cordat1p');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();
					if ($query->num_rows() != 0) {
						return $query->result();
					}
					else {
						return false;
					}
						
			}
	}




// Insert registration data in database
	public function registration_insert($data) {

	// Query to check whether username already exist or not
			$condition = "user_name =" . "'" . $data['user_name'] . "'";
			$this->db->select('*');
			$this->db->from('user_login');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
				if ($query->num_rows() == 0) {						   
						// Query to insert data in database
					$this->db->insert('user_login', $data);
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



// Read data using username and password
	public function login($data) {
		$condition = "emailaddress =" . "'" . $data['email'] . "'";
		$this->db->select('*');
		$this->db->from('cordat1');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() <= 0){
			$usernamefound = false;
			$this->db->select('*');
			$this->db->from('cordat1p');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if($query->num_rows() == 1) {
				$usernamefound = true;
			} else {
				$usernamefound = false;
			}
		} else {
			$usernamefound = true;
		}
		if($usernamefound == false){
			return false;
		} else {
			$condition = "emailaddress =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('cordat1n');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1){
				return true;
			}else{
				return false;
			}
		}
	}

// Read data from database to show data in admin page
	public function read_user_information($email) {
		$condition = "emailaddress =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('cordat1p');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
				return $query->result();
			}
			else{
				$condition = "emailaddress =" . "'" . $email . "'";
				$this->db->select('*');
				$this->db->from('cordat1');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();
					if ($query->num_rows() == 1) {
						return $query->result();
					} 
					else {
						$condition = "emailaddress =" . "'" . $email . "'";
						$this->db->select('*');
						$this->db->from('cordat1p');
						$this->db->where($condition);
						$this->db->limit(1);
						$query = $this->db->get();
							if ($query->num_rows() == 1) {
								return $query->result();
							}
							else{
								return false;
							}
					}
				}
	}



	public function confirm_encryptedstring($encryptedstring) {
		$condition = "encryptedstring =" . "'" . $encryptedstring . "'";
		$this->db->select('*');
		$this->db->from('user_password_change');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();

			}
			else{
				return false;
			}
	}




	public function soc_exist($soc, $updated) {

		$condition = "SOCSECNUM =" . "'" . $soc . "' AND "."passwordupdate =" . "'" . $updated . "'";
		$this->db->select('*');
		$this->db->from('user_password_change');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() != 0) {
				return true;
			}
			else
			{
				return false;
			}
	}





	public function get_encryptedstring($soc) {

		$condition = "SOCSECNUM =" . "'" . $soc . "'";
		$this->db->select('encryptedstring');
		$this->db->from('user_password_change');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() != 0) {
				return $query->result();
			}
			else
			{
				return false;
			}
	}


		

	public function update_password($data, $password) {

		$condition = "SOCSECNUM =" . "'" . $data[0]->SOCSECNUM . "'";
		$this->db->select('*');
		$this->db->from('cordat1n');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() != 0) {
				$this->db->set('LastUpdate', date('Y-m-d H-i-s'));
				$this->db->set('password', $password);
				$this->db->set('emailaddress', $data[0]->emailaddress);
				$this->db->where('SOCSECNUM', $data[0]->SOCSECNUM);
				$this->db->update('cordat1n');
					if ($this->db->affected_rows() > 0) {
						$this->db->set('passwordupdate', 1);
						$this->db->where('SOCSECNUM', $data[0]->SOCSECNUM);
						$this->db->update('user_password_change');

							if ($this->db->affected_rows() > 0) {
								return true;
							}
					}
					else {
						return false;
					}
			}
			else{
				$insert_data = array(
					'SOCSECNUM'=>$data[0]->SOCSECNUM,
					'password'=>$password,
					'emailaddress'=>$data[0]->emailaddress,
					'LastUpdate'=>date('Y-m-d H-i-s')						
				);  
					// Query to insert data in database
					$this->db->insert('cordat1n', $insert_data);
						if ($this->db->affected_rows() > 0) {
							$this->db->set('passwordupdate', 1);
							$this->db->where('SOCSECNUM', $data[0]->SOCSECNUM);
							$this->db->update('user_password_change');
								if ($this->db->affected_rows() > 0) {
									return true;
								}
						}				
						else {
							return false;
						}
			}
	}




	public function update_newpassword($soc, $email, $password) {
		

		$condition = "SOCSECNUM =" . "'" . $soc . "'";
		$this->db->select('*');
		$this->db->from('cordat1n');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() == 0) {

			
				$insert_data = array(
					'SOCSECNUM'=>$soc,
					'password'=>$password,
					'emailaddress'=>$email,
					'LastUpdate'=>date('Y-m-d H-i-s')						
				);  
					// Query to insert data in database
					$this->db->insert('cordat1n', $insert_data);
						if ($this->db->affected_rows() > 0) {

								return true;
								
						}				
						else {
							return false;
						}
			}
			else{
				return false;
			}
	}


	public function confirm_first($soc) {
		

		$condition = "SOCSECNUM =" . "'" . $soc . "'";
		$this->db->select('*');
		$this->db->from('cordat1n');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
			if ($query->num_rows() == 0) {

			
				return true;
			}
			else{
				return false;
			}
	}

}

?>