<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

	<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$soc = ($this->session->userdata['logged_in']['soc']);
} else {
header("location: login");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome</title>
 <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/classes.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
		<div id="top_block">
			<div class="navi">
				<a href="" class="navi_tx">Home</a>
				<a href="viewpersonalinfo" class="navi_tx">Personal Info </a>                                
				<a href="viewclasses" class="navi_tx">Classes</a>                              
				<a href="viewtranscripts" class="navi_tx">Transcript</a>                                
				
			</div>
			
</div>
<div id="wrapper">
    <div><b id="logout"><a href="logout">Logout</a></b></div>
  <h1>Welcome!</h1>
  <br>
  <h1><?php echo "Your SOCSECNUM is " . $soc; ?></h1>
  </div>

	
	

</body>
</html>
