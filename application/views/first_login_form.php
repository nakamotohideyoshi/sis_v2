<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
    <?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$soc = ($this->session->userdata['logged_in']['soc']);
} else {
header("location: ".base_url());
}
?>

<head>
<title>Password Change</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/user.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="main">
<div id="login">
	<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

<h2>Please Insert New Password</h2>
<hr/>
<?php echo form_open( base_url().'user/first_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($message_display1)) {
echo $message_display1;
}
echo validation_errors();
echo "</div>";
?>
<label>New password :</label>
<input type="password" name="npassword" id="npassword" placeholder="**********"/><br/><br />
<label>Confirm :</label>
<input type="password" name="cpassword" id="cpassword" placeholder="**********"/><br/><br />

<input type="submit" value=" Change " name="submit"/><br />

<?php echo form_close(); ?>





</div>
</div>
</body>
</html>