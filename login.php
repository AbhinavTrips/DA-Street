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
if(isset($_POST['login_user'])&&isset($_POST['login_pass'])){
$user = $_POST['login_user'];
$password = $_POST['login_pass'];
$password_hash = md5($password);

$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($user)."' AND `password`='".mysql_real_escape_string($password_hash)."' ";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
		echo 'user does not exist';
	} 	else if($query_num_rows==1){
		$user_id = mysql_result($query_run,0,'id');
		$_SESSION['user_id']= $user_id;
		header('Location: index.php');
		
		}
	}
}

?>
<form name ="form_login" action="<?php echo $current_file; ?>"method="post" style="height: 195px" class="auto-style3">
	<span class="auto-style2"><br></span>
	<span class="auto-style4">Username:</span><br>
	<input name="login_user" type="text" style="height: 31px; width: 230px" /><br />
	<br><span class="auto-style4">Password:</span><br>
	<input name="login_pass" type="password" style="height: 30px; width: 230px" /><br>
	<br>
	<input name="login_submit" type="submit" value="login" class="auto-style4" style="width: 101px" /></form>
<span class="auto-style4"><a href="register.php">Click Here to register</a></span>
<br/>
<span class="auto-style4"><a href="forgot.php">Change Password</a></span>
</body>
</html>


