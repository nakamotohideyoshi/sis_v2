<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forgot Password Message</title>
 <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/makepayment.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
	 <h4>Crowley's RIdge College</h4>
	

 <div id="wrapper">
 	 
  <h2>Username = xxx-xx-xxxx,    your social security number</h2>
  <h2>Password = mmddyyyyBBBB</h2>
  <h2>mmddyyyy = your birthdate,      BBBB = last 4 digits of your social security number.</h2>

      


 
  <h2><p>If you are/were a student any cannot log on,</p>
  	<p>please call 870-236-6901 and ask for Larry Johnson,<P>
  	<p>or email ljohnson@crc.edu<p>
    <p>Thank You!<p></h2> 
  <h1><b id="makepayment"><a href="<?php echo base_url().'user/login'; ?>" >Login</a></b></h1>
  <h1><b id="makepayment"><a href="<?php echo base_url().'user/newpass/'.$soc; ?>" >Change Password</a></b></h1>

				
					 
 </div>



	

</body>
</html>
