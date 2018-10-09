<html>

<head>
<title>Forgot Password</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/user.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="main">
<div id="login">


<?php
if (isset($message_display1)) {
echo "<div class='message'>";
echo $message_display1;
echo "</div>";
}
?>

<h2>Email Confirm</h2>
<hr/>
<?php echo form_open('user/confirm_process'); ?>


<label>Your Email Address :</label>
<input type="email" name="email" id="email" placeholder="example@aa.com"/><br /><br />

<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
?>
<input type="submit" value="confirm" name="Confirm"/><br />

<?php echo form_close(); ?>
<a href="<?php echo base_url().'user/login'; ?>">Login</a>
</div>
</div>
</body>
</html>