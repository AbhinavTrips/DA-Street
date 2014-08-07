<?php
require 'current_page.php';
require 'connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>DA-Street>> Inter college virtual stock market </title>

<link href="game1.css" rel="stylesheet" type="text/css" />
<link href="game2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="gamescript.js"></script>

<link href="game1.css" rel="stylesheet" type="text/css" />


</head>

<body>
<!-- <?php include "storescripts/mysql_quicktest.php"; ?> --> 


<br />
<br />

<div class="auto-style15">

	<div class="auto-style16" style="left: 0px; top: -28px">

		

		<div class="mybhai_menu clearfix">

			<div class="FL PR5 PT7"><span>
				<a href="index.php">
				<img src="home.gif" width="22" height="20" alt="" /></a></span></div>

			<ul>

				<li><a href="#"><span>PORTFOLIO</span></a></li>

				<li></li>

				<li><a href="#"><span>MY SPACE</span></a></li>

				<li><a href="rules.php" ><span>HOW TO PLAY</span></a></li>
				<li><a href="contact.php"><span>Contact Us</span></a></li>

				<li></li>

				<li></li>

				<li></li>

			</ul>

		</div>

		<div class="CL"></div>

	

	<div><img src="curbtp.gif" width="995" height="9" border="0" /></div>

			<div class="main_cnt">

			<div class="clearfix ML15 MR15" style="border-bottom:5px solid #000">

				<div class="auto-style8" style="width: 318px; height: 374px;">

					&nbsp;<div class="imgctr">

						<div class='auto-style6' style="width: 288px">
							
							<span class="auto-style7">

					<img src="men_img.jpg" width="42" height="40" alt="" class="FL MR15" />Join Now</span></div>

					    <p class="b_13 PB5">Let the intuition rule!</p>
<?php
if(!loggedin()){
	if(isset($_POST['register_user'])&&isset($_POST['register_pass'])&&isset($_POST['register_repass'])&&isset($_POST['register_email'])&&isset($_POST['register_mobile'])&&isset($_POST['register_college'])){
	$username = $_POST['register_user'];
	$password = $_POST['register_pass'];
	$password_hash = md5($password);
	$repassword = $_POST['register_repass'];
	$email = $_POST['register_email'];
	$mobile = $_POST['register_mobile'];
	$college = $_POST['register_college'];
		if(!empty($username)&&!empty($password)&&!empty($repassword)&&!empty($email)&&!empty($mobile)&&!empty($college)){
			
			if(strlen($username)>20 or strlen($username)<5 ){
			echo ' Username should be no longer than 20 characters and no smaller than 5 character ';
			}
			else{
				if(strlen($email)>50   ){
				echo ' Username should be no longer than 50 characters ';
				}
				else
					{
					if(strlen($mobile)!=10){
					echo ' Enter A valid 10 digit mobile number';
					}
					else
					{
						if(strlen($college)>100){
						echo ' Try a shorter form of your college name ';
						}
						else
						{
							if($password != $repassword){
							echo 'passwords don\'t match !';
							}
							else
							{
								$query = "SELECT `username` FROM `users` WHERE `username` = '$username'";
								$query_run = mysql_query($query);
									if($query_num_rows = mysql_num_rows($query_run)){
										echo '<div style="color: red ; font-size:20px;" >username already taken!</div> ';
									}else
										 {
											$query = "INSERT INTO `users`(`id`, `username`, `password`, `email`, `mobile`, `college`) VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($college)."')";
											if($query_run = mysql_query($query)){
												$query_id = "SELECT `id` FROM `users` WHERE `username` = '$username'";
												$query_id_run = mysql_query($query_id);
												while($row1 = mysql_fetch_assoc($query_id_run)){
												$table_name = $row1['id'];
				
												$query_new = "CREATE TABLE `$table_name` (scrip_id INT(2),buy_qty INT(20),buy_price DECIMAL(11,2),sell_qty INT(20),sell_price DECIMAL(11,2),holding INT(11),value_holding DECIMAL(11,2),buy_net DECIMAL(10,2),sell_net DECIMAL(10,2),avg_price DECIMAL(11,2),profit DECIMAL(11,2),net DECIMAL(11,2))";
			
												$query_new_run = mysql_query($query_new);
												echo '<span style="font-size:12px;">Congratulations! You\'re registered succesfully<br/><a href="index.php">Login</a> to continue.</span>';
												}
				//header('Location: register_success.php');
											}
											else{
											echo 'could not register';
											}
				
										}
									}
			
			}
			}
			}
			}
			}
			}
			
			
	
			
		
			else{
			echo 'All fields are mandatory';
		}

	


?>


<form action="register.php" method="post" name="form_registration">
	<label id="Label_user"><span class="auto-style22">
	<span class="auto-style23">Username : </span></span>
	<span class="auto-style25">*use alpha-numeric combination</span><br />
	</label>
	<input name="register_user" id="register_user" style="width: 275px" type="text" value="<?php if(isset($username)){echo $username;} ?>" maxlength ="20"/><br />
	<label id="Label_pass"><span class="auto-style22">
	<span class="auto-style23">Password : </span></span><br />
	</label><input name="register_pass" id="register_pass" style="width: 275px" type="password" /><br />
	<label id="Label_repass"><span class="auto-style22">
	<span class="auto-style23">Re-password</span></span><br />
	</label>
	<input name="register_repass"  style="width: 275px" type="password" /><br />
	<label id="Label_email"><span class="auto-style22">
	<span class="auto-style23">email id : </span><span class="auto-style26">
	*important for contacting you</span></span><br />
	</label>
	<input name="register_email" value="<?php if(isset($email)){echo $email;} ?>" maxlength="50" style="width: 275px" type="text" /><br />
	<span class="auto-style22"><label id="Label_mobile">
	<span class="auto-style23">Mobile number :<label id="Label_email0"><span class="auto-style26">*important 
	for contacting you</span></label></span></label></span><input name="register_mobile" value="<?php if(isset($mobile)){echo $mobile;} ?>" maxlength="10" style="width: 275px" type="" /><br />
	<label id="Label_college"><span class="auto-style22">
	<span class="auto-style23">College :</span></span><br />
	</label>
	<input name="register_college" value="<?php if(isset($college)){echo $college;} ?>" maxlength="100" style="width: 275px" type="text" /><br />
	<br />
	<input name="button_register" style="width: 155px" type="submit" value="Register" class="auto-style24" /><br />
</form>


<?php


}	else if(loggedin()){
	echo 'You\'re already registered and logged in';
	}
?>

					</div>

				</div>

				<div class="auto-style9" style="width: 581px; height: 374px;">

					&nbsp;<div class="imgctr">

						<div class='auto-style10'>Our Lead Sponsor<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbldata" style="height: 224px">

								<tr>

									<th style="width: 21%">
									<img alt="" height="269" src="Flipkart.jpg" width="569" style="float: left" /></th>

								</tr>

								<tr>

									<td class="b_18 no_brd" style="width: 21%">
									</td>

								</tr> 

								

							</table>

						</div>
						<p class="b_13 PB5">&nbsp;</p>

					</div>

				</div>

				<div class="auto-style21" style="width: 950px"></div>

			</div>

			<div class="PL15 PR15">

				<div>

					<div class="FR MT15 MB15">

					<br /><br /><br />







					</div>

					

				</div>

		<!--Explore start here-->

		<div class="PT10 PB5">

			<div> <b class="explore"> <b class="explore1"><b></b></b> <b class="explore2"><b></b></b> <b class="explore3"></b> <b class="explore4"></b> <b class="explore5"></b></b>

				<div class="explorefg">

					<div class="FL PL5"><img src="explore.gif" border="0" /></div>

					<div class="PL15 FL PT5" style="width: 879px">

						<div class="FL" style="width:874px; height: 106px;">

							<div></div>

							<ul>

								<li class="auto-style5"></li>

							</ul>

						</div>

						<div class="CL"></div>

					</div>

					<div class="CL"></div>

				</div>

				<b class="explore"> <b class="explore5"></b> <b class="explore4"></b> <b class="explore3"></b> <b class="explore2"><b></b></b> <b class="explore1"><b></b></b></b> </div>

		</div>

		<!--Explore End here-->

		<div class="bdr_tp5"></div>

		<div class="gL_11 PT3 PB3" align="right">Copyright &copy; . All rights reserved</div>

				<style>

		.gL_10 {color: #7F7F7F;font: 10px arial;}

				.auto-style5 {
					font-family: arial;
					font-size: 12px;
					color: #A0BBC4;
					padding-top: 3px;
				}

				.auto-style6 {
					font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
					font-weight: bold;
					font-size: 25px;
					color: #000000;
					padding-bottom: 10px;
				}
				.auto-style7 {
					color: #000000;
				}

		.auto-style8 {
	float: left;
	width: 460px;
	border-style: solid;
	border-width: 1px;
	margin-left: 1px;
	padding: 15px;
	background-color: #d7faff;
}
.auto-style9 {
	float: left;
	width: 460px;
	border-style: solid;
	border-width: 1px;
	padding: 15px;
	background-color: #d7faff;
}
.auto-style10 {
	font-size: x-large;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	padding-bottom: 10px;
}

		.auto-style15 {
	width: 1000px;
	margin: 0 auto;
}
.auto-style16 {
	position: relative;
	margin-right: 0px;
}

				.auto-style21 {
					clear: both;
					margin-left: 5px;
				}

				.auto-style22 {
					font-family: "Times New Roman", Times, serif;
				}
				.auto-style23 {
					font-size: medium;
				}
				.auto-style24 {
					font-family: "Times New Roman", Times, serif;
					font-size: medium;
				}

				.auto-style25 {
					font-size: x-small;
					font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
					color: #1D22F1;
				}
				.auto-style26 {
					color: #1D22F1;
					font-size: x-small;
				}

		</style>

			</div>

</div>

</div>

</div>


</body>

</html>

