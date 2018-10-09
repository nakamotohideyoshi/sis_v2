<html>

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
<?php echo form_open( base_url().'user/change_process'); ?>
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
<input type="hidden" name="encryptedstring" id="encryptedstring" value="<?php echo $encryptedstring; ?>"/>
<input type="submit" value=" Change " name="submit"/><br />

<?php echo form_close(); ?>

 



</div>
</div>
</body>
</html>