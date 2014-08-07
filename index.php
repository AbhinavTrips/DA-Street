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

				<li><a href="portfolio.php"><span>PORTFOLIO</span></a></li>

				

				<li><a href="myspace.php"><span>MY SPACE</span></a></li>

				<li><a href="rules.php" ><span>HOW TO PLAY</span></a></li>

			<li><a href="contact.php"><span>Contact Us</span></a></li>

				<li>
				
				</li>

			</ul>

		</div>

		<div class="CL"></div>

	

	<div><img src="curbtp.gif" width="995" height="9" border="0" /></div>

			<div class="main_cnt">

			<div class="clearfix ML15 MR15" style="border-bottom:5px solid #000">

				<div class="auto-style8" style="width: 321px; height: 326px;">

					&nbsp;<div class="imgctr">

						<div class='auto-style6' style="width: 288px">
							
							<span class="auto-style7">

					<img src="men_img.png" width="42" height="40" alt="" class="FL MR15" />Join Now/Log In</span></div>

					    <p class="b_13 PB5">Let the intuition rule!</p>
<?php				
if(loggedin()){
		$name = getuserfield('username');
		
		echo 'Welcome '.$name.'!</br> You are now logged in. </br> <a href="logout.php"> Log out</a>';
	}	else {
		include 'login.php';
		}

?>
<!-- </p> -->

					</div>

				</div>

				<div class="auto-style9" style="width: 580px; height: 326px;">

					&nbsp;<div class="imgctr">

						<div class='auto-style10'>Our Sponsor:</div>
						<p class="b_13 PB5">
						<img alt="" class="auto-style22" height="277" src="Flipkart.jpg" width="552"></p>

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

							<div><br></div>

							<ul>

								<li class="auto-style5">Virtual Stock Market</li>

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

		<div class="gL_11 PT3 PB3" align="right"></div>

				<style>

		.gL_10 {color: #7F7F7F;font: 10px arial;}

				.auto-style5 {
					font-family: arial;
					font-size: x-large;
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
	margin-left: 0px;
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
	margin-left: 2px;
}

		</style>

			</div>

</div>

</div>

</div>


</body>

</html>

