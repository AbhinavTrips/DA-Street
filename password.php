<html>
<head>
<style type="text/css">
.auto-style2 {
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	font-size: medium;
}
.auto-style3 {
	margin-bottom: 5px;
}
.auto-style4 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
}
</style>
</head>
<body>
<?php
require 'connection.php';
if(isset($_POST['forgot_user'])&&isset($_POST['forgot_email'])&&isset($_POST['forgot_mobile'])&&isset($_POST['forgot_pass'])){
$user = $_POST['forgot_user'];
$password = $_POST['forgot_pass'];
$password_hash = md5($password);
$email = $_POST['forgot_email'];
$mobile = $_POST['forgot_mobile'];

$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($user)."' AND `email`='".mysql_real_escape_string($email)."' AND `mobile`='".mysql_real_escape_string($mobile)."'";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
	echo 'Credentials provided by you, do not match' ; 
	} 	else if($query_num_rows==1){
		$query_reset = "UPDATE `users` SET `password`='".mysql_real_escape_string($password_hash)."' WHERE `username`='".mysql_real_escape_string($user)."' AND `email`='".mysql_real_escape_string($email)."' AND `mobile`='".mysql_real_escape_string($mobile)."'";
		$query_reset_run = mysql_query($query_reset);
		echo 'Password updated';
		echo '<br/><a href ="index.php">Login</a> to continue.'; 
		}
	}
}
?>
<form name ="form_forgot" action="<?php echo $current_file; ?>"method="post" style="height: 361px" class="auto-style3">
	<span class="auto-style2"><br></span>
	<span class="auto-style4">Username:</span><br>
	<input name="forgot_user" type="text" style="height: 31px; width: 230px" value="<?php if(isset($user)){echo $user;} ?>"/><br />
	<br>email id:<br>
	<input name="forgot_email" type="text" style="height: 30px; width: 230px" value="<?php if(isset($email)){echo $email;} ?>" /><br>
	<br>Registered mobile number:<br>
	<input name="forgot_mobile" style="width: 230px; height: 30px" type="text" value="<?php if(isset($mobile)){echo $mobile;} ?>"><br>
	<br>New Password:<br>
	<input name="forgot_pass" style="width: 230px; height: 30px" type="password"><br>
	<br>
	<input name="forgot_submit" type="submit" value="Change Password" class="auto-style4" style="width: 140px" /></form>
</body>
</html>


