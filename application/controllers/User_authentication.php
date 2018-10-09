<?php

//we need to start session in order to access it through CI

Class User_authentication extends CI_Controller {

        public function __construct() {
                parent::__construct();

                // Load form helper library
                $this->load->helper('form');
                $this->load->helper('url');
                date_default_timezone_set("UTC");

                // Load form validation library
                $this->load->library('form_validation');

                // Load session library
                $this->load->library('session');
                $this->load->helper("security");
                $this->load->helper('directory');
                $this->load->helper('download');

                // Load database
                $this->load->model('database_model');
                $this->load->model('personal_model');
                $this->load->model('classes_model');
                $this->load->model('transaction_model');
                $this->load->model('record_model');
                $this->load->model('awardsandcharges_model');
                $this->load->model('admissionstatus_model');
                $this->load->model('webresponse_model');
                $this->load->model('emailsent_model');
        }

// Show login page
        public function index() {
          $this->load->view('login_form');
        }


        // Show registration page
        public function user_registration_show() {
          $this->load->view('registration_form');
        }

        // Validate and store registration data in database
        public function new_user_registration() {

        // Check validation for user input in SignUp form
          $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
          $this->form_validation->set_rules('socsecnum', 'Socsecnum', 'trim|required|xss_clean');
          //$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
              $this->load->view('registration_form');
            } 
            else {
              $data = array(
                'user_name' => $this->input->post('username'),
                'SOCSECNUM' => $this->input->post('socsecnum'),
                //'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
              );
              $result = $this->database_model->soc_validation($data);
                if ($result == FALSE) {
                  $data['message_display1'] = 'This SOCSECNUM is not exist!';
                  $this->load->view('registration_form', $data);
                } 
                else{
                      $result = $this->database_model->registration_insert($data);
                      if ($result == TRUE) {
                        $data['message_display'] = 'Registration Successfully !';
                        $this->load->view('login_form', $data);
                      } else {
                        $data['message_display'] = 'Username already exist!';
                        $this->load->view('registration_form', $data);
                      }
                }
            }
        }

// Check for user login process
        public function user_login_process() {


            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in'])){
                    $username = ($this->session->userdata['logged_in']['username']);
                    $email = ($this->session->userdata['logged_in']['email']);
                    $soc = ($this->session->userdata['logged_in']['soc']);
                    $data['personal'] = $this->personal_model->get_personal_info($soc);
                    $this->load->view('personal', $data);                 
                }
                else{
                    $this->load->view('login_form');
                }
            } 
            else {
                   
              $data = array(
              'email' => $this->input->post('email'),
              'password' => $this->input->post('password')
              );
              $result = $this->database_model->login($data);
              if ($result == TRUE) {

                $email = $this->input->post('email');
                $result = $this->database_model->read_user_information($email);
                if ($result != false) {

                    $session_data = array(
                    'username' => $result[0]->SOCSECNUM,
                    'email' => $result[0]->emailaddress,
                    'soc' => $result[0]->SOCSECNUM,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $data['personal'] = $this->personal_model->get_personal_info($result[0]->SOCSECNUM);
                    $this->record_model->update_login_info($data);                  
                    //$this->load->view('personal', $data); 
                    if($this->database_model->confirm_first($result[0]->SOCSECNUM)){
                      $this->load->view('first_login_form');
                    }
                    else{
                      $this->load->view('personal', $data); 
                    }
                }
              } 
              else {
                $data = array(
                'message_display' => 'Invalid Email or Password'
                );
                $this->load->view('login_form', $data);
              }
          }
        }



        public function viewclasses() { 
              	if (isset($this->session->userdata['logged_in'])) {
            				$username = ($this->session->userdata['logged_in']['username']);
            				$email = ($this->session->userdata['logged_in']['email']);
            				$soc = ($this->session->userdata['logged_in']['soc']);
        				} 
                else {
        				    header("location: ".base_url());
        				}
             // 	$data['classes4'] = $this->classes_model->get_classes4($soc);
                $data['classesp'] = $this->classes_model->get_classesp($soc);
                $this->load->view('classes', $data); 
        }


        public function viewpersonalinfo() { 
        	if (isset($this->session->userdata['logged_in'])) {
        			$username = ($this->session->userdata['logged_in']['username']);
        			$email = ($this->session->userdata['logged_in']['email']);
        			$soc = ($this->session->userdata['logged_in']['soc']);
      		} 
          else {
              header("location: ".base_url());
      		}
          $data['personal'] = $this->personal_model->get_personal_info($soc);            	             	
          $this->load->view('personal', $data); 

        }




        public function viewtranscripts() { 
          $t_charges = 0;
          $t_payments = 0;
        	if (isset($this->session->userdata['logged_in'])) {
        			$username = ($this->session->userdata['logged_in']['username']);
        			$email = ($this->session->userdata['logged_in']['email']);
        			$soc = ($this->session->userdata['logged_in']['soc']);
        	} 
          else {
        			header("location: ".base_url());
        	}       

          $data['transactions'] = $this->transaction_model->get_transaction($soc);
          //$data['transactions'] = $this->transaction_model->get_transcript($soc);
          foreach ($data['transactions'] as $transaction) {
              $t_charges += (int)$transaction['Charges'];
              $t_payments += (int)$transaction['Payments'];
             # code...
          }
          $data['t_charges'] = $t_charges;
          $data['t_payments'] = $t_payments;
          if($t_charges + $t_payments <= 0)   	
           	  $this->load->view('transcripts', $data); 
          else {         

              $this->load->view('makepayment'); 
           }
        }

      



        public function viewtransactions() { 
            $t_charges = 0;
            $t_payments = 0;
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }          

            $data['transactions'] = $this->transaction_model->get_transaction($soc);
            foreach ($data['transactions'] as $transaction) {
                $t_charges += (int)$transaction['Charges'];
                $t_payments += (int)$transaction['Payments'];
               # code...
            }
            $data['t_charges'] = $t_charges;
            $data['t_payments'] = $t_payments; 
            $data['personal'] = $this->personal_model->get_personal_info($soc);     
            $this->load->view('transactions', $data); 
         
        }



// Logout from admin page
        public function logout_process() {

        // Removing session data
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            $this->load->view('login_form', $data);
        }




        public function forgot_form_show() {

            $this->load->view('confirm_email');
        }




        public function email_confirm() {

       
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('confirm_email');
            } 
            else {
                
                $data['email'] = $this->input->post('email');
                $result = $this->database_model->soc_validation($this->input->post('email'));
                
                

                if ($result == FALSE) {
                    $data['message_display1'] = 'Invalid Email Address!';
                    $this->load->view('confirm_email', $data);
                } 
                else{    
               // $data['soc'] = $result[0]->SOCSECNUM;                  
                    redirect ( base_url ('user/newpass/'.$result[0]->SOCSECNUM) );                    
                }
            }
        }




        public function login_form_show() {

            header("location: ".base_url());
        }



        public function viewawardsandcharges() {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
              $data['min_year'] = $this->awardsandcharges_model->get_minyear($soc);
              $data['year_lists'] = $this->awardsandcharges_model->get_yearlists($soc);
              $data['select_year'] = $data['min_year'][0]['Year'];               

              $data['awards'] = $this->awardsandcharges_model->get_awards1($soc, $data['min_year'][0]['Year']);
              $data['charges'] = $this->awardsandcharges_model->get_charges1($soc,  $data['min_year'][0]['Year']);                

              $this->load->view('awardsandcharges', $data);
        }




        public function viewawardsandcharges1( $year = NULL) {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
              
               $data['year_lists'] = $this->awardsandcharges_model->get_yearlists($soc);
               $data['select_year'] = $year;           

               $data['awards'] = $this->awardsandcharges_model->get_awards1($soc, $year);
               $data['charges'] = $this->awardsandcharges_model->get_charges1($soc, $year);

                $this->load->view('awardsandcharges', $data);
        }





        public function viewfinancialaid() {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
              $data['max_year'] = $this->awardsandcharges_model->get_fmaxyear($soc);
              $data['year_lists'] = $this->awardsandcharges_model->get_fyearlists($soc);
              $data['select_year'] = $data['max_year'][0]['Year'];
              $this->session->set_userdata('select_year', $data['select_year']);               

              $data['financialaids'] = $this->awardsandcharges_model->get_financialaid($soc, $data['max_year'][0]['Year']);
              $this->load->view('financialaid', $data);
        }

        public function viewfinancialaid2() {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
              $data['max_year'] = $this->awardsandcharges_model->get_fmaxyear($soc);
              $data['year_lists'] = $this->awardsandcharges_model->get_fyearlists($soc);
              $data['select_year'] = $data['max_year'][0]['Year'];
              $this->session->set_userdata('select_year', $data['select_year']);               

              $data['financialaids'] = $this->awardsandcharges_model->get_financialaid($soc, $data['max_year'][0]['Year']);
              $this->load->view('financialaid1', $data);
        }




        public function viewadmissionsatus() {

            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }         
            $data['admissionstatus'] = $this->admissionstatus_model->get_admissionstatus($soc);
            $this->load->view('admissionstatus', $data);
        }




        public function viewadmissionfix() {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }      
               
            $this->session->set_userdata('adm_id', $this->input->post('id'));
            $data['information'] = $this->admissionstatus_model->get_webresponse($this->input->post('id'));           

            $data['responses'] = $this->webresponse_model->get_admresponse($data['information'][0]['ItemName']);
            $this->load->view('admissionwebresponse', $data);
        }






        public function viewadmissionfix1($question = NULL) {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }

            $data['information'] = $this->admissionstatus_model->get_webresponse($this->session->userdata['adm_id']);
            $data['responses'] = $this->webresponse_model->get_admresponse($data['information'][0]['ItemName']);
               //str_replace("~~~", "/", $question);
            $data['session_data'] = $this->webresponse_model->get_admselectresponse($data['information'][0]['ItemName'], urldecode( str_replace("~~~", "/", $question)));
            $this->session->set_userdata('web_response', $data['session_data'][0]);
        
            $this->load->view('admissionwebresponse', $data);
        }

        


        public function viewfinancialaid1($year = NULL) {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }             
              $data['year_lists'] = $this->awardsandcharges_model->get_fyearlists($soc);
              $data['select_year'] = $year;
              $this->session->set_userdata('select_year', $year);              

              $data['financialaids'] = $this->awardsandcharges_model->get_financialaid($soc, $year);
              $this->load->view('financialaid', $data);
        }





        

        public function viewwebresponse($itemname = NULL) {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }         

            $this->session->set_userdata('id', $this->input->post('id'));
            $data['information'] = $this->awardsandcharges_model->get_webresponse($this->input->post('id'));
          
            $this->session->set_userdata('dollaramount', (float)substr($data['information'][0]['DollarAmount'], 1, strlen($data['information'][0]['DollarAmount'])-1));
            $data['responses'] = $this->webresponse_model->get_response($data['information'][0]['ItemName']);
                // $this->session->set_userdata('web_response', $data['responses'][0]);


            $this->load->view('webresponse', $data);
        }






        public function viewwebresponse1($question = NULL) {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
            $data['information'] = $this->awardsandcharges_model->get_webresponse($this->session->userdata['id']);
            $data['responses'] = $this->webresponse_model->get_response($data['information'][0]['ItemName']);
            $data['session_data'] = $this->webresponse_model->get_selectresponse($data['information'][0]['ItemName'], urldecode($question));
            $this->session->set_userdata('web_response', $data['session_data'][0]);

            $this->load->view('webresponse', $data);
        }







        public function viewdocs() {
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }
              $data['doc_files']  = directory_map('./studentdocs/', 1);
              $data['doc_everyonefiles']  = directory_map('./studentdocs/everyone', 1);              

              $this->load->view('docs', $data);
        }




        

        public function download($fileName = NULL) {   
            if ($fileName) {     
                $data = file_get_contents(base_url('/studentdocs/'.$fileName));             
                 //force download
                force_download( $fileName, $data );           
                 // Redirect to base url
                redirect ( base_url ('user/seven') );           
          
            }
         // redirect ( base_url ('user/seven') );
        }





        public function download1($fileName = NULL) {   
            if ($fileName) {           

              $data = file_get_contents(base_url('/studentdocs/everyone/'.$fileName));             
               //force download
              force_download( $fileName, $data );           
               // Redirect to base url
              redirect ( base_url ('user/seven') );           
            
            }
         // redirect ( base_url ('user/seven') );
        }







        public function send_mail() {     

            if($this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                $this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');

                    if ($this->form_validation->run() == FALSE) {
                        redirect ( base_url ('user/eleven/'.$this->session->userdata['web_response']['Questions']) );
                      
                    }
                    else{
                    if($this->session->userdata['web_response']['ShowLoanAmount'] == "Yes" && $this->session->userdata['web_response']['ItemName'] != "AR Challenge"){

                        if ((float)$this->input->post('max-dollar-amount') - (float)$this->input->post('amount') < 0.00){
                            redirect ( base_url ('user/eleven/'.$this->session->userdata['web_response']['Questions']) );
                        }
                      }
                    }

            }   

            $from_email = $this->session->userdata['logged_in']['email']; 
                    
               
               //Load email library 
               $this->load->library('email'); 
               $this->email->set_newline("\r\n");
               $data['personal'] = $this->personal_model->get_personal_info($this->session->userdata['logged_in']['soc']);

               $this->email->from('Crcsis@crc.Edu', $data['personal'][0]['Firstname']." ".$data['personal'][0]['Lastname']); 
               $this->email->to('financialaid@crc.edu,hirenkpatel.ce.1992@gmail.com, '.$data['personal'][0]['emailaddress']);
               //$this->email->to('nakamotoshi123@gmail.com, ljohnson@crc.edu ');

               
               $this->email->subject($data['personal'][0]['Firstname'].' '.$data['personal'][0]['Lastname']); 
               $email_message = "------------------------------------------------------------";
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= $this->session->userdata['select_year']." Web Response";
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= "To: Financial Aid, Crowley's Ridge College";
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= $this->session->userdata['web_response']['Questions'];
               $email_message .= "\r\n";
               $email_message .= "\r\n";
                   if($this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                    if($this->session->userdata['web_response']['ShowLoanAmount'] == "Yes"){
                          if ($this->session->userdata['web_response']['ItemName'] == "AR Challenge"){
                            $email_message .= " Amount $".number_format((float)$this->input->post('amount'),2);
                          }
                          else{
                            $email_message .= " Other Amount $".number_format((float)$this->input->post('amount'),2);
                          }
                      }
                      else{
                        $email_message .= " Amount $".number_format((float)$this->input->post('amount'),2);
                      }
                   }
                   else{
                    if($this->session->userdata['web_response']['ShowLoanAmount'] == "Yes"){
                        $email_message .= " Loan Amount $".number_format((float)$this->input->post('max-dollar-amount'),2);
                      }
                   }
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= $data['personal'][0]['Firstname']."  ".$data['personal'][0]['Middlename']."  ".$data['personal'][0]['Lastname'];
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= 'xxx-xx-'.substr($this->session->userdata['logged_in']['soc'], 7, 4);
               $email_message .= "\r\n";
               $email_message .= "\r\n";
               $email_message .= "Date: ".date('Y-m-d');

               $this->email->message($email_message); 
               $message = "";

              
             
         
               //Send mail 
                  if($this->email->send()) {
                      $this->session->set_flashdata("email_sent","Email sent successfully."); 

                        if($this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                            if($this->emailsent_model->store_emailsent1(" Other Amount $".number_format((float)$this->input->post('amount'),2))){

                                $message = "Email sent successfully.";
                                $sess_array = array(
                                'id' => ''
                                );
                                  $this->session->unset_userdata('web_response', $sess_array);
                                  redirect ( base_url ('user/six2') );
                            }
                        }
                        else {
                            if($this->emailsent_model->store_emailsent()){

                                $message = "Email sent successfully.";
                                 $sess_array = array(
                                'id' => ''
                                );
                                  $this->session->unset_userdata('web_response', $sess_array);
                                  redirect ( base_url ('user/six2') );
                            }
                        }         
                    }

                    else {
                        $this->session->set_flashdata("email_sent","Error in sending Email.");
                        $message = "Error in sending Email."; 
                    }
             
             redirect ( base_url ('user/eleven/'.$this->session->userdata['web_response']['Questions']) );
               //$this->load->view('transcripts'); 
          } 



      




          public function send_admmail() { 

            if(isset($this->session->userdata['web_response']['ExtraInputBoxNeeded']) && $this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                $this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');

                if ($this->form_validation->run() == FALSE) {
                    $data['information'] = $this->admissionstatus_model->get_webresponse($this->session->userdata['adm_id']);
                    $data['responses'] = $this->webresponse_model->get_admresponse($data['information'][0]['ItemName']);
                    //str_replace("~~~", "/", $question);
                    $data['session_data'] = $this->webresponse_model->get_admselectresponse($data['information'][0]['ItemName'], urldecode( str_replace("~~~", "/", $question)));
                    $this->session->set_userdata('web_response', $data['session_data'][0]);
                    $this->load->view('admissionwebresponse', $data);
                }    
            }     

             $from_email = $this->session->userdata['logged_in']['email'];            
       
             //Load email library 
             $this->load->library('email'); 
             $this->email->set_newline("\r\n");
             $data['personal'] = $this->personal_model->get_personal_info($this->session->userdata['logged_in']['soc']);
       
             $this->email->from('Crcsis@crc.Edu', $data['personal'][0]['Firstname']." ".$data['personal'][0]['Lastname']); 
             $this->email->to('admissions@crc.edu, '.$data['personal'][0]['emailaddress']);
             $this->email->subject($data['personal'][0]['Firstname'].' '.$data['personal'][0]['Lastname']); 
             $email_message = "------------------------------------------------------------";
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= "Admission Web Response";
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= "To: Admissions, Crowley's Ridge College";
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= isset($this->session->userdata['web_response']['Questions']) ? $this->session->userdata['web_response']['Questions'] : '';
             $email_message .= "\r\n";
             $email_message .= "\r\n";
               if(isset($this->session->userdata['web_response']['ExtraInputBoxNeeded']) && $this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                  $email_message .= $this->input->post('amount');
               }
               else{
              //  $email_message .= " Loan Amount $".number_format((float)$this->session->userdata['dollaramount'],2);
               }
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= $data['personal'][0]['Firstname']."  ".$data['personal'][0]['Middlename']."  ".$data['personal'][0]['Lastname'];
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= 'xxx-xx-'.substr($this->session->userdata['logged_in']['soc'], 7, 4);
             $email_message .= "\r\n";
             $email_message .= "\r\n";
             $email_message .= "Date: ".date('Y-m-d');

             $this->email->message($email_message); 
             $message = "";
       
             //Send mail 
              if($this->email->send()) {
                  $this->session->set_flashdata("email_sent","Email sent successfully."); 
                    if(isset($this->session->userdata['web_response']['ExtraInputBoxNeeded']) && $this->session->userdata['web_response']['ExtraInputBoxNeeded'] == "Yes"){
                        if($this->emailsent_model->store_admemailsent1($this->input->post('amount'))){
                            $message = "Email sent successfully.";
                            $sess_array = array(
                            'id' => ''
                            );
                              $this->session->unset_userdata('web_response', $sess_array);
                              redirect ( base_url ('user/adm') );
                        }
                    }

                    else {
                        if($this->emailsent_model->store_admemailsent()){
                            $message = "Email sent successfully.";
                             $sess_array = array(
                            'id' => ''
                            );
                              $this->session->unset_userdata('web_response', $sess_array);
                              redirect ( base_url ('user/adm') );
                        }
                    }     

              }
              else {
                  $this->session->set_flashdata("email_sent","Error in sending Email.");
                  $message = "Error in sending Email."; 
              }
                redirect ( base_url ('user/admfix1/'.$this->session->userdata['web_response']['Questions']) );
             //$this->load->view('transcripts'); 
          } 





          public function sendpassword ($soc = NULL) {
              $this->load->library('email');
              $this->load->library('encrypt'); 
              $this->email->set_newline("\r\n");

              $data['personal'] = $this->personal_model->get_personal_info($soc);
              
              $this->email->from("admissions@crc.edu", "Crowley's Ridge College");
              $this->email->to($data['personal'][0]['emailaddress'].',hirenkpatel.ce.1992@gmail.com');
              //$this->email->to('nakamotoshi123@gmail.com, ljohnson@crc.edu ');
              $this->email->subject("Change your password!"); 
              $email_message = "------------------------------------------------------------";
              $email_message .= "\r\n";
              $email_message .= "\r\n";
              $email_message .="To change your password, link the below url";
              $email_message .= "\r\n";
              $email_message .= "\r\n";
              $date   = date('Y-m-d');
              $email_message .= "Date: ".$date;
              $email_message .= "\r\n";
              $email_message .= "\r\n";
              $string = $soc."-".$date;

              $encrypted_string = $this->encrypt->encode($string);
              $encryptedstring = str_replace("/", "@", $encrypted_string);

                  if($this->database_model->soc_exist($soc, '0')){
                      $data['pass'] = $this->database_model->get_encryptedstring($soc);                 
                      $encryptedstring = $data['pass'][0]->encryptedstring;                  
                  }                   
              $email_message .= "https://www.crc.edu/sis/user/nps/".$encryptedstring;
    
              $this->email->message($email_message);
                  if($this->emailsent_model->store_passemailsent($soc, $data['personal'][0]['emailaddress'], $encryptedstring)){
                      if($this->email->send()) {
                          $this->load->view('success_message');
                      }

                      else{
                          $this->load->view('failed_message');
                      }                 
                  }
                  else{
                     $this->load->view('failed_message');
                  }

          }


          public function change_password ($encryptedstring = NULL){            
           
            if($this->database_model->confirm_encryptedstring($encryptedstring)){
              $data['pass'] = $this->database_model->confirm_encryptedstring($encryptedstring);
                if($data['pass'][0]->passwordupdate == 0){

                    $data['encryptedstring'] = $encryptedstring;
                    $this->load->view('new_password_form', $data);
                }
                else{
                    $this->load->view('failed_password_message');
                }
            }
            else{
                $this->load->view('failed_password_message');
            }
          }




          public function password_change (){

            $this->form_validation->set_rules('npassword', 'Npassword', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpassword', 'Cpassword', 'trim|required|xss_clean');

                if ($this->form_validation->run() == FALSE) {
                    $data['encryptedstring'] = $this->input->post('encryptedstring');
                    $this->load->view('new_password_form', $data);
                }
                else{
                    if ($this->input->post('npassword') === $this->input->post('cpassword')){
                        $data['pass'] = $this->database_model->confirm_encryptedstring($this->input->post('encryptedstring'));
                      
                      if($this->database_model->update_password($data['pass'], $this->input->post('npassword'))){

                          $session_data = array(
                            'username' => $data['pass'][0]->SOCSECNUM,
                            'email' => $data['pass'][0]->emailaddress,
                            'soc' => $data['pass'][0]->SOCSECNUM,
                          );
                        // Add user data in session
                            $this->session->set_userdata('logged_in', $session_data);
                            $data['personal'] = $this->personal_model->get_personal_info($data['pass'][0]->SOCSECNUM);                  

                            $this->load->view('personal', $data); 

                      }
                      else{
                            $data['pass'] = $this->database_model->confirm_encryptedstring($this->input->post('encryptedstring'));
                            
                            if($data['pass'][0]->passwordupdate != 0){
                                $data['encryptedstring'] = $this->input->post('encryptedstring');
                                $this->load->view('failed_password_message');
                            }
                      }

                    }
                    else{
                        $data['encryptedstring'] = $this->input->post('encryptedstring');
                        $data['message_display'] = "Confrim Failed!";
                        $this->load->view('new_password_form', $data);
                    }

                }         
    
          }




          public function first_password_change (){
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $soc = ($this->session->userdata['logged_in']['soc']);
            } 
            else {
                header("location: ".base_url());
            }

            $this->form_validation->set_rules('npassword', 'Npassword', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpassword', 'Cpassword', 'trim|required|xss_clean');

                if ($this->form_validation->run() == FALSE) {
                    
                    $this->load->view('first_login_form');
                }
                else{
                    if ($this->input->post('npassword') === $this->input->post('cpassword')){
                        $data['personal'] = $this->personal_model->get_personal_info($soc);
                      
                      if($this->database_model->update_newpassword($soc, $email, $this->input->post('npassword'))){

                          
                                            

                            $this->load->view('personal', $data); 

                      }
                      else{
                            $data['message_display'] = "Failed! Retry!";
                            
                            
                                $this->load->view('first_login_form', $data);
                           
                      }

                    }
                    else{
                        $data['message_display'] = "Confirm Failed!";
                        $this->load->view('first_login_form', $data);
                    }

                }         
    
          }

}


?>