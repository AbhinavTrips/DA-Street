<?php	
require 'current_page.php';
require 'connection.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

		<style>

				.bans1{background:url('sponsor_box_new.jpg') no-repeat; 
width:166px; height:72px;  padding:6px 6px
		}

				.w_10{-x-system-font:none;color:#FFFFFF;font-family:arial;font-size:11px;font-size-adjust:none;font-stretch:normal;font-style:solid;font-variant:normal;font-weight:solid;line-height:normal;	 }

		</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>DA-Street>> Inter college virtual stock market </title>

<link href="game1.css" rel="stylesheet" type="text/css" />
<link href="game2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="gamescript.js"></script>

<link href="game1.css" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="auto-style7">

	<div class="header" style="left: -2px; top: 0px">

		<div class="mybhai_menu clearfix">

			<div class="FL PR5 PT7"><span>
				<a href="index.php">
				<img src="home.gif" width="22" height="20" alt="" /></a></span></div>

			<ul>



				<li></li>

				<li><a href="myspace.php"><span>MY SPACE</span></a></li>

				<li><a href="rules.php" ><span>HOW TO PLAY</span></a></li>
				<li><a href="contact.php"><span>Contact Us</span></a></li>

				<li></li>

				<li></li>

				<li></li>

			</ul>

		</div>

	

	<div></div>

			<div class="main_cnt">

			<div class="CTR" ><map name="Map" id="Map">

					&nbsp;
<?php
if(loggedin()){
		$name = getuserfield('username');
		
		echo '<span style = "font-size :12px">Hi '.$name.'!</span> </br> <a href="logout.php"> Log out</a><br/><a href ="forgot.php">Change password</a>';
	}	else {
		header('Location:index.php');
		}

?>

					<area shape="rect" coords="504,78,637,110" href="#" /></map></div>

			<div class="clearfix ML15 MR15" style="border-bottom:5px solid #000">

				<div class="auto-style10" style="width: 406px; height: 863px;">
					<img src="sikke.gif" width="70" height="65" alt="" class="FL MR15" />
					<div class="imgctr">
						<div class='PB10'>
							<span class="auto-style1">Rankings</span></div>
						<p class="b_13 PB5">The richest people show up here</p>
						
						<div class="auto-style12">
<!------------------------------------------- NETWORTH ------------------------------------------------ -->						
<!--
<?php

require 'connection.php';
$i=0;
$d=0;
$k = 0;
$id = array();
$query_user = "SELECT * FROM `users`";
$query_user_run = mysql_query($query_user);
$users_num = mysql_num_rows($query_user_run);
while($row1 = mysql_fetch_assoc($query_user_run)){
$id[$i] = $row1['id'];

$name[$i] = $row1['username'];
$i++;
}
for($j = 0; $j<$users_num;$j++){
$query_sum = "SELECT `SUM(profit)` FROM `$id[$j]`";
		$query_sum_run = mysql_query($query_sum);
		while($row=mysql_fetch_assoc($query_sum_run)){
		$networth = $row["SUM(profit)"];
		//$name = $row1['username'];
		$netw = $networth+2500000;
		//echo $netw;
		
		$query_up = "SELECT * FROM `leaders` WHERE `id`=$id[$j]";
		$query_up_run = mysql_query($query_up);
		if($num = mysql_num_rows($query_up_run)){ // Only update the networth if user exists
		//echo 'exists';
		$query_update = "UPDATE `leaders` SET `networth` = $netw WHERE `id`=$id[$j]";
		$query_update_run = mysql_query($query_update);
		//echo $netw;
		}	else{	// Insert if there's a new entry		
			$query_leaders = "INSERT INTO `leaders`(`id`, `username`, `networth`) VALUES ('$id[$j]','$name[$j]','$netw')";
			$query_leaders_run = mysql_query($query_leaders);			
				}
			}	
	//echo '</br>';
		}
		
/*	
	$query_asc = "SELECT * FROM `leaders` ORDER BY `networth` DESC";
		$query_asc_run = mysql_query($query_asc);
		while(($row2 = mysql_fetch_assoc($query_asc_run))&& $k<5){
		$player = $row2['username'];
		echo $player;
		echo '<br/>';
		$k++;
		}
	
*/	

?>
-->
<!--

						<?php
						//require 'networth.php';
									
					
						echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tbldata'>\n";
							echo "<tr>\n";
							echo	"<th width=\"39%\" align=\"left\">USERNAME </th>\n";
							echo	"<th width=\"33%\" align=\"right\">NETWORTH </th>\n";
							//echo	"<th width=\"28%\" align=\"right\">TOTAL GAIN</th>\n";
							echo "</tr>\n";
							echo "<tr>\n";
						$query_asc = "SELECT * FROM `leaders` ORDER BY `networth` DESC";
						$query_asc_run = mysql_query($query_asc);
							while($row2 = mysql_fetch_assoc($query_asc_run)){
								//$player = $row2['username'];
								//	echo $player;
								//	echo '<br/>';
								//	}
    						echo "<td class=\"b_18 no_brd\" style=\"width: 20%; font-size: 12px;\">{$row2['username']}</td>\n" . "<td style=\"font-size:12px;text-align:right;\">{$row2['networth']}</td>\n";

    						echo "</tr>\n";
							}


						echo "</table>\n";
						
						?>
						-->
						
							<br/><span class="auto-style11">Rankings will be 
							updated tomorrow</span></div>
						
					</div>
				</div>
				<div class="auto-style10" style="width: 555px; height: 863px;">
					<img src="sikke.gif" width="70" height="65" alt="" class="FL MR15" />
					<div class="imgctr">
						<div class='auto-style8'>
							<strong>Your 
							Portfolio</strong></div>
<?php
$trader = $_SESSION['user_id'];
$query = "SELECT * FROM `$trader` WHERE 1";
$query_run = mysql_query($query);
$num = mysql_num_rows($query_run);


echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tbldata'>\n";
							echo "<tr>\n";
								echo "<th align=\"left\" style=\"width: 20%\">Company</th>\n";
								echo "<th align=\"right\" style=\"width: 9%\">&nbsp;Holdings</th>\n";
								echo "<th align=\"right\" style=\"width: 15%\">Avg Price</th>\n";
								//echo "<th align=\"right\" style=\"width: 17%\">Current Price</th>\n";
								echo "<th width=\"28%\" align=\"right\">Value Holdings</th>\n";
								echo "<th width=\"28%\" align=\"right\">Profit</th>\n";
							echo "</tr>\n";


$my_array = array();

	while($row = mysql_fetch_assoc($query_run)){
//	$my_array[]=$row;
	switch($row['scrip_id']){
		case 1:
		$name='Bajaj Auto';
		break;
		
		case 2:
		$name='Bharti Airtel';
		break;
		
		case 3:
		$name='BHEL';
		break;
		
		case 4:
		$name='Cipla';
		break;
		
		case 5:
		$name='Coal India';
		break;
		
		case 6:
		$name='Dr Reddy';
		break;
		
		case 7:
		$name='GAIL';
		break;
		
		case 8:
		$name='HDFC';
		break;
		
		case 9: 
		$name='HDFC Bank';
		break;
		
		case 10:
		$name='Hero Motocop';
		break;
		
		case 11:
		$name='Hindalco';
		break;
		
		case 12:
		$name='HUL';
		break;
		
		case 13:
		$name='ICICI Bank';
		break;
		
		case 14:
		$name='Infosys';
		break;
		
		case 15:
		$name='ITC';
		break;
		
		case 16:
		$name='Jindal Steel';
		break;
		
		case 17:
		$name='Larsen Toubro';
		break;
		
		case 18:
		$name='Maruti';
		break;
		
		case 19:
		$name='Mah Mah';
		break;
		
		case 20:
		$name='NTPC';
		break;
		
		case 21:
		$name='ONGC';
		break;
		
		case 22:
		$name='RIL';
		break;
		
		case 23:
		$name='SBI';
		break;
		
		case 24:
		$name='Sterlite';
		break;
		
		case 25:
		$name='Sun Pharma';
		break;
		
		case 26:
		$name='Tata Motors';
		break;
		
		case 27:
		$name= 'Tata Power';
		break;
		
		case 28:
		$name='Tata Steel';
		break;
		
		case 29:
		$name='TCS';
		break;
		
		case 30:
		$name='Wipro';
		break;
		
	}
	
    echo "<tr>\n";
    echo "<td class=\"b_18 no_brd\" style=\"width: 20%; font-size: 12px;\">{$name}</td>\n" . "<td style=\"font-size:12px;text-align:right;\">{$row['holding']}</td>\n" . "<td style=\"font-size:12px;text-align:right;\">{$row['avg_price']}</td>\n" ."<td style=\"font-size:12px;text-align:right;\">{$row['value_holding']}</td>\n"."<td style=\"font-size:12px;text-align:right;\">{$row['profit']}</td>\n";

    echo "</tr>\n";
}

echo "</table>\n";
	

?>

					</div>
				</div>
				<div class="CL">
				</div>

			</div>

			<div class="PL15 PR15">

				<div>

					<div class="FR MT15 MB15">

					<br /><br /><br />







					</div>

					

				</div>

		<!--Explore start here-->

		<div class="PT10 PB5">

			<div> <b class="explore"> <b class="explore1"></b> <b class="explore2"></b> <b class="explore3"></b> <b class="explore4"></b> <b class="explore5"></b></b>

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

				<b class="explore"> <b class="explore5"></b> <b class="explore4"></b> <b class="explore3"></b> <b class="explore2"></b> <b class="explore1"></b></b> </div>

		</div>

		<!--Explore End here-->

		<div class="bdr_tp5"></div>

		<div class="gL_11 PT3 PB3" align="right"></div>

				<style>

		.gL_10 {color: #7F7F7F;font: 10px arial;}

				.auto-style1 {
					font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
					font-weight: bold;
					font-size: 25px;
					color: #000000;
				}

		.auto-style5 {
	font-family: arial;
	font-size: 12px;
	color: #A0BBC4;
	padding-top: 3px;
}

		.auto-style7 {
	width: 1000px;
	margin: 0 auto;
}
.auto-style8 {
	font-size: x-large;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	padding-bottom: 10px;
}

				.auto-style10 {
					float: left;
					width: 460px;
					border-style: solid;
					border-width: 1px;
					background-color: #d7faff;
				}

				.auto-style11 {
					font-size: medium;
					color: #F11B1B;
					background-color: #FFFF00;
				}
				.auto-style12 {
					text-align: center;
				}

		</style>

			</div>

</div>

</div>



</div>

</body>

</html>

