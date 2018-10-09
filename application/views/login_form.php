<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: user/login_process");
}
?>
<head>
<title>Login Form</title>
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

<h2>Login Form</h2>
<hr/>
<?php echo form_open( base_url().'user/login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($message_display1)) {
echo $message_display1;
}
echo validation_errors();
echo "</div>";
?>
<label>Email :</label>
<input type="email" name="email" id="email" placeholder="example@aa.com"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />

<?php echo form_close(); ?>

 <a href="<?php echo base_url().'user'; ?>/forgot_password">Forgot password or Change password?</a>



</div>
</div>
</body>
</html>