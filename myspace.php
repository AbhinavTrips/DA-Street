
<?php
/*
date_default_timezone_set('Asia/Kolkata');
$hour = date('h', time());
date_default_timezone_set('Asia/Kolkata');
$min = date('i', time());
$finish = false;
if(!(($hour == 10 && $min>=00) || ($hour==11 && $min < 30)))
{
 die("Trading begins at 10:30 p.m and ends at 11:30 .<br/> You can access Myspace only during that time !<br/> Check your <a href=\"portfolio.php\">Portfolio </a> ");
}
*/
require 'current_page.php';
require 'connection.php';
//header('Location:index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

				<style>

		.gL_10 {color: #7F7F7F;font: 10px arial;}

				.auto-style2 {
	font-size: small;
}

				.auto-style3 {
					float: left;
					width: 460px;
					border-style: solid;
					border-width: 1px;
					padding: 15px;
					background-color: #d7faff;
				}
				.auto-style4 {
					font-size: x-large;
					padding-bottom: 10px;
					font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
				}

				.auto-style5 {
					font-size: x-large;
					font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
					padding-bottom: 10px;
				}
				.auto-style6 {
					display: table-cell;
					.display: inline-block;
					margin-left: 0px;
				}

				.auto-style8 {
					text-align: center;
				}

		.auto-style9 {
	font-size: 13px;
}

				.auto-style10 {
					margin-right: 0;
				}

				.auto-style12 {
					font-family: "Arial Rounded MT Bold";
				}
				.auto-style13 {
					margin-top: 0px;
				}
				.auto-style14 {
					display: table-cell;
					.display: inline-block;
					margin-top: 72px;
				}

				.auto-style15 {
					font-size: medium;
					color: #F11B1B;
					background-color: #FFFF00;
				}

		</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="70"/> 
<title>DA-Street>> Inter college virtual stock market </title>

<link href="game1.css" rel="stylesheet" type="text/css" />

</head>

<body>


<link href="game2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="gamescript.js"></script>

<link href="game1.css" rel="stylesheet" type="text/css" />



<div class="main">

	<div class="header" style="left: 0px; top: 0px">

		<div style="left:0;position:absolute;top:42px; height: 98px;"></div>

		<style>

				.bans1{background:url('sponsor_box_new.jpg') no-repeat; 
width:166px; height:72px;  padding:6px 6px
		}

				.w_10{-x-system-font:none;color:#FFFFFF;font-family:arial;font-size:11px;font-size-adjust:none;font-stretch:normal;font-style:solid;font-variant:normal;font-weight:solid;line-height:normal;	 }

		</style>

		<div class="mybhai_menu clearfix">

			<div class="FL PR5 PT7" style="height: 27px"><span>
				<a href="index.php">
				<img src="home.gif" width="22" height="20" alt="" /></a></span></div>

			<ul>

				<li><a href="portfolio.php"><span>PORTFOLIO</span></a></li>

				<li></li>

		

				<li class="auto-style10"><a href="rules.php" ><span>HOW TO PLAY</span></a></li>
				<li><a href="contact.php"><span>Contact Us</span></a></li>

				<li></li>

				<li></li>

				<li style="width: 1px"></li>

			</ul>

		</div>

		<div class="CL"></div>

	

			<div class="main_cnt">

			<div class="CTR" style="width: 988px" ><map name="Map" id="Map">

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

				<div class="auto-style3" style="width: 448px; height: 647px">


					<div class="auto-style6" style="height: 111px">

						<div class='auto-style5'><strong>&nbsp;<img alt="" height="65" src="sikke.gif" width="70" /> Get Quote<br />
							</strong><span class="auto-style9">Select the stock to know its current 
						price</span></div>
				<form name="form_quote" action="myspace.php" method="post">
	
	<select name="scrip_quote" style="width: 125px">
	<option value="1">Bajaj Auto</option>
	<option value="2">Bharti Airtel</option>
	<option value="3">BHEL</option>
	<option value="4">Cipla</option>
	<option value="5">Coal India</option>
	<option value="6">Dr Reddy</option>
	<option value="7">GAIL</option>
	<option value="8">HDFC</option>
	<option value="9">HDFC Bank</option>
	<option value="10">Hero Motocop</option>
	<option value="11">Hindalco</option>
	<option value="12">HUL</option>
	<option value="13">ICICI</option>
	<option value="14">Infosys</option>
	<option value="15">ITC</option>
	<option value="16">Jindal Steel</option>
	<option value="17">Larsen and Toubro</option>
	<option value="18">Maruti</option>
	<option value="19">Mahindra and Mahindra</option>
	<option value="20">NTPC</option>
	<option value="21">ONGC</option>
	<option value="22">RIL</option>
	<option value="23">SBI</option>
	<option value="24">Sterlite Ind</option>
	<option value="25">Sun Pharma</option>
	<option value="26">Tata Motors</option>
	<option value="27">Tata Power</option>
	<option value="28">Tata Steel</option>
	<option value="29">TCS</option>
	<option value="30">Wipro</option>
	</select><input name="quote" type="submit" value="Get Quote" />
<?php
if(isset($_POST['scrip_quote'])){
$id = $_POST['scrip_quote'];
$query_quote ="SELECT * FROM `ltp` WHERE `id`=$id";
$query_quote_run = mysql_query($query_quote);
while($row1 = mysql_fetch_assoc($query_quote_run)){
$open = $row1['open_price'];
$quote = $row1['current_price'];
$volume_u = $row1['volume'];
$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
$b_weight = $row1['buy_weight'];
$volume_u = $s_weight + $b_weight;
$query_volume_update = "UPDATE `ltp` SET `volume`=$volume_u WHERE id = $id";//upadating the buy_weight in database
$query_volume_update_run = mysql_query($query_volume_update);
$diff = ($quote - $open);
switch($row1['id']){
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

echo '<br/>';
echo '<br/>';
echo '<span style="color:blue;font-size:14px">';
echo $name ;
echo '  :  ';
echo $quote;

if($diff>=0){
echo '   <img alt="up" src="up%20(60x58).jpg">   ';
}

else if($diff<0){
echo '   <img alt="down" src="down.jpg">   ';
}
echo $diff;
echo '<br/>';
echo 'Volume :';
echo  $volume_u;
echo '</span>';
	
	}
}
?>

					</form>
		&nbsp;<div style="height: 33px">
		<!---- ------------------------------- Slider ----------------------------------------------------------------->

<marquee class="html-marquee" direction="left" behavior="scroll" scrollamount="8" > 
<?php
$query_quote ="SELECT * FROM `ltp`";
$query_quote_run = mysql_query($query_quote);
while($row1 = mysql_fetch_assoc($query_quote_run)){
$open = $row1['open_price'];
$quote = $row1['current_price'];
$volume_u = $row1['volume'];
$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
$b_weight = $row1['buy_weight'];
$diff = ($quote - $open);
switch($row1['id']){
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
echo '<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>                                             ';
echo '<span style="color:blue;font-weight:bold;font-size:14px">';

echo $name;
echo '                   ';

echo $quote;
echo '         ';
if($diff>=0){
echo '   <img alt="up" src="up%20(60x58).jpg">   ';
}

else if($diff<0){
echo '   <img alt="down" src="down.jpg">   ';
}
echo $diff;
echo '                  							';
echo '</span>';

	}

?></marquee>

						</div>
						<p class="auto-style15">News on Infosys</p>
		
		

						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbldata">

								<tr>

									<th width="39%" align="left">Networth</th>

									<th width="33%" align="right">Profit </th>

									<th width="28%" align="right">Cash in Hand</th>

								</tr>

								<tr>

									<td class="b_18 no_brd"><?php
		$trader = $_SESSION['user_id'];
		$query_sum = "SELECT SUM(profit) FROM `$trader`";
		$query_sum_run = mysql_query($query_sum);
		while($row=mysql_fetch_assoc($query_sum_run)){
		$networth = $row["SUM(profit)"];
		$netw = $networth+2500000;
		echo $netw;
		}
		?></td>

									<td align="right" class="b_18 no_brd"><?php 
									$query_sum = "SELECT SUM(profit) FROM `$trader`";
									$query_sum_run = mysql_query($query_sum);
									while($row=mysql_fetch_assoc($query_sum_run)){
									$netprofit = $row["SUM(profit)"];
									
									echo $netprofit;
									}
									?></td>

									<td align="right" class="b_18 no_brd">
									<?php 
									$query = "SELECT SUM(buy_net) FROM `$trader`";
									$query_run = mysql_query($query);
									while($row=mysql_fetch_assoc($query_run)){
									$value_buy = $row["SUM(buy_net)"];
									}							
									$query2 = "SELECT SUM(sell_net) FROM `$trader`";
									$query_run = mysql_query($query2);
									while($row=mysql_fetch_assoc($query_run)){
									$value_sell = $row["SUM(sell_net)"];
									}
									$cash = 2500000-$value_buy+$value_sell;
									echo $cash;
									?>
									</td>

								</tr> 

								<!-- <tr>

									<td class="b_18 no_brd"><strong>Praveen Pinto</strong></td>

									<td align="right" class="b_18 no_brd">24,25,245</td>

									<td align="right" class="b_18 no_brd">78.09%</td>

								</tr> -->

							</table>

						<p style="height: 312px" class="auto-style8">
						&nbsp;</p>

					</div>

				</div>

				<div class="auto-style3" style="width: 451px; height: 286px;">

					<img src="sikke.gif" width="70" height="65" alt="" class="FL MR15" />

					<div class="auto-style14" style="height: 182px; width: 446px;">

						<div class='auto-style4'>
							<strong>Buy a new stock</strong></div>

	<form name="form_buy" action="myspace.php" method="post" style="height: 124px; width: 447px;" class="auto-style13" >
		<span class="auto-style2">Select Scrip :</span><br />
	<select name="scrip_buy" style="width: 230px; height: 21px;">
	<option value="1">Bajaj Auto</option>
	<option value="2">Bharti Airtel</option>
	<option value="3">BHEL</option>
	<option value="4">Cipla</option>
	<option value="5">Coal India</option>
	<option value="6">Dr Reddy</option>
	<option value="7">GAIL</option>
	<option value="8">HDFC</option>
	<option value="9">HDFC Bank</option>
	<option value="10">Hero Motocop</option>
	<option value="11">Hindalco</option>
	<option value="12">HUL</option>
	<option value="13">ICICI</option>
	<option value="14">Infosys</option>
	<option value="15">ITC</option>
	<option value="16">Jindal Steel</option>
	<option value="17">Larsen and Toubro</option>
	<option value="18">Maruti</option>
	<option value="19">Mahindra and Mahindra</option>
	<option value="20">NTPC</option>
	<option value="21">ONGC</option>
	<option value="22">RIL</option>
	<option value="23">SBI</option>
	<option value="24">Sterlite Ind</option>
	<option value="25">Sun Pharma</option>
	<option value="26">Tata Motors</option>
	<option value="27">Tata Power</option>
	<option value="28">Tata Steel</option>
	<option value="29">TCS</option>
	<option value="30">Wipro</option>
	</select><span class="auto-style2"><br class="auto-style12" />
		Enter quantity :</span> <br />
		<input name="qty" type="text" style="width: 227px; height: 21px" /><br>
		<br />
		<input name="button_buy" type="submit" value="buy" style="width: 80px" /><br />
<?php 

function buy($price,$qty,$id,$trader){
/////////// Upper half is for price modification /////////////////////////////////////////////////////////////
$query_h ="SELECT `holding` FROM `$trader` WHERE `scrip_id` = '$id'";
$query_h_run = mysql_query($query_h);
while($row2 = mysql_fetch_assoc($query_h_run)){
	$hold = $row2['holding'];	
	}
	$query_bw = "SELECT * FROM `ltp` WHERE `id`=$id";//getting buy_weight from database for given id
	$query_run_bw = mysql_query($query_bw);						// getting query result in $query_run_bw
	while($row1 = mysql_fetch_assoc($query_run_bw)){
	$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
	$b_weight = $row1['buy_weight'];							//fetching the current buy_weight and storing in $b_weight
	$cmp = $row1['current_price'];
	$open = $row1['open_price'];
	}
if(($hold + $qty)<=500){	
	$b_weight += ($price * $qty);
	if($b_weight >= $s_weight){
		$cmp_old = $cmp;
		$cmp =	$open + (($b_weight-$s_weight)/10000);							//adding ($price*$qty) to $b_weight
		if($cmp < ($open + ($open)*0.2)){										// setting circuit filter
			$query_ltp_update = "UPDATE `ltp` SET `current_price`= $cmp WHERE id = $id";
			$query_ltp_update_run = mysql_query($query_ltp_update);
			$query_bw_update = "UPDATE `ltp` SET `buy_weight`=$b_weight WHERE id = $id";//upadating the buy_weight in database
			$query_bw_update_run = mysql_query($query_bw_update);
			} else{
			$cmp = $cmp_old;
			header('Location: upper_circuit.php');
			exit();
			}
		}	// closing for ($b_weight >= s_weight)
		else if($b_weight < $s_weight){
			$cmp_old = $cmp;
			$cmp =	$open - (($s_weight-$b_weight)/10000);							//adding ($price*$qty) to $b_weight
			if($cmp > ($open - ($open)*0.2)){
				$query_ltp_update = "UPDATE `ltp` SET `current_price`= $cmp WHERE id = $id";
				$query_ltp_update_run = mysql_query($query_ltp_update);
				$query_bw_update = "UPDATE `ltp` SET `buy_weight`=$b_weight WHERE id = $id";//upadating the buy_weight in database
				$query_bw_update_run = mysql_query($query_bw_update);
			}	else{
			$cmp = $cmp_old;
			header('Location: lower_circuit.php');
			}
		}// closing for (b_weight < s_weight)
		
	

	
	
	//echo $b_weight;
//////////////////////////// from Here on, data goes to traders' tables/////////////////////////////////////////	
	$query_t ="SELECT * FROM `$trader` WHERE `scrip_id` = '$id'";
	$query_t_run = mysql_query($query_t);
	if($query_t_rows = mysql_num_rows($query_t_run)){
	while($row2 = mysql_fetch_assoc($query_t_run)){
	$scrip = $row2['scrip_id'];
	$q_buy = $row2['buy_qty'];
	$p_buy = $row2['buy_price'];
	$q_sell = $row2['sell_qty'];
	$p_sell = $row2['sell_price'];
	$holding = $row2['holding'];
	$value_holding = $row2['value_holding'];
	$b_net = $row2['buy_net'];
	$s_net = $row2['sell_net'];
	echo $dirt;
	////////////////////////// CALCULATIONS////////////////////////////////////////
		if(($holding + $qty) <= 500){
		$b_net += ($qty * $price);				// Total money spent on buying this stock from beginning
		$q_buy += $qty;							// Total quantity bought since beginning
		$holding = ($q_buy - $q_sell);			// Total quantity in portfolio at present
		$p_avg = ($b_net - $s_net)/$holding ; 	// Current avg price of this holding
		$value_holding = ($holding * $price);	// Overall value of this holding
		$profit = ($s_net + $value_holding)-$b_net;
		$networth = $s_net + $value_holding - $b_net; 
	//////////////////////// Update //////////////////////////////////////////////
	
		$query_t_update = "UPDATE `$trader` SET `buy_qty`='$q_buy',`buy_price`='$b_net',`holding`='$holding',`value_holding`='$value_holding',`buy_net`='$b_net',`avg_price`='$p_avg',`profit`='$profit',`net`='$networth' WHERE `scrip_id`='$id'";	
		$query_t_update_run = mysql_query($query_t_update);
		} else{
			header('Location:500.php');
		}
	}
	} else{
	///////////////////////////////////// INSERT ///////////////////////////////////////
		if($qty<=500){	
		$value_holding = $qty * $price;
		$buy_net = $value_holding;
		$p_avg = $price;
		$query_insert = "INSERT INTO `$trader`(`scrip_id`, `buy_qty`, `buy_price`,`holding`,`value_holding`, `buy_net`, `avg_price`) VALUES ('$id','$qty','$price','$qty','$value_holding','$buy_net','$p_avg')"; 
		$query_insert_run = mysql_query($query_insert);
		}

		}		header('Location:successful.php');
				exit();		
}else {
header('Location:500.php');

}
}
$trader = $_SESSION['user_id'];
if(loggedin()){
if(isset($_POST['scrip_buy'])&&isset($_POST['qty'])&&!empty($_POST['qty'])){
$id = $_POST['scrip_buy'];							// id of the scrip for buy request
$qty = $_POST['qty'];		
$query_price = "SELECT `current_price` FROM `ltp` WHERE `id`='$id'";						// price of the scrip for buy request
$query_price_run = mysql_query($query_price);
while($row=mysql_fetch_assoc($query_price_run)){
$price = $row['current_price'];
//echo 'Transaction successful. Wait while page loads and then check <a href = "portfolio.php">portfolio</a> for confirmation.';
	}						// qty requested
if($qty>0){
buy($price,$qty,$id,$trader);							//buy function for the id
	} else{
	echo "Enter a positive value in Quantity";
	}
	}
	
}
	else{
echo 'You are not logged in';
}
?>

</form>
						&nbsp;</div>

				</div>

				<div class="auto-style3" style="width: 451px; height: 351px;">

					<img src="sikke.gif" width="70" height="65" alt="" class="FL MR15" /><br />
					<br /><br /><br />&nbsp;<div class="imgctr" style="height: 233px; width: 411px">
						<div class='auto-style5'>
							<strong>Sell a stock </strong></div>
						<p class="b_13 PB5">First make sure that you own the 
						stock that you are going to sell</p>
						<p class="b_13 PB5">
						<form name="form_sell" action="myspace.php" method="post" style="height: 128px; width: 422px;">
							<span class="auto-style2">Select Scrip to sell :</span><br />
							<select name="scrip_sell" style="width: 230px; height: 21px;">
							<option value="1">Bajaj Auto</option>
							<option value="2">Bharti Airtel</option>
							<option value="3">BHEL</option>
							<option value="4">Cipla</option>
							<option value="5">Coal India</option>
							<option value="6">Dr Reddy</option>
							<option value="7">GAIL</option>
							<option value="8">HDFC</option>
							<option value="9">HDFC Bank</option>
							<option value="10">Hero Motocop</option>
							<option value="11">Hindalco</option>
							<option value="12">HUL</option>
							<option value="13">ICICI</option>
							<option value="14">Infosys</option>
							<option value="15">ITC</option>
							<option value="16">Jindal Steel</option>
							<option value="17">Larsen and Toubro</option>
							<option value="18">Maruti</option>
							<option value="19">Mahindra and Mahindra</option>
							<option value="20">NTPC</option>
							<option value="21">ONGC</option>
							<option value="22">RIL</option>
							<option value="23">SBI</option>
							<option value="24">Sterlite Ind</option>
							<option value="25">Sun Pharma</option>
							<option value="26">Tata Motors</option>
							<option value="27">Tata Power</option>
							<option value="28">Tata Steel</option>
							<option value="29">TCS</option>
							<option value="30">Wipro</option>
							</select><br /><span class="auto-style2">Enter Quantity : 
							</span><br />
							<input name="qty" type="text" style="width: 230px; height: 21px" /><br />
							<br />
							<input name="sell_price" type="submit" value="sell" style="width: 80px" />
<!-- --------------------------------------- Function Sell ------------------------------------------------------------ -->
							
							
							
<?php
function sell($price,$qty,$id,$trader){
$query_h ="SELECT `holding` FROM `$trader` WHERE `scrip_id` = '$id'";
$query_h_run = mysql_query($query_h);
while($row2 = mysql_fetch_assoc($query_h_run)){
	$hold = $row2['holding'];	
	}
	$query_sw = "SELECT * FROM `ltp` WHERE `id`=$id";//getting buy_weight from database for given id
	$query_run_sw = mysql_query($query_sw);						// getting query result in $query_run_bw
	while($row1 = mysql_fetch_assoc($query_run_sw)){
	$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
	$b_weight = $row1['buy_weight'];							//fetching the current buy_weight and storing in $b_weight
	$cmp = $row1['current_price'];
	$open = $row1['open_price'];
	}
if($hold >= $qty){											// selling must happen only if user has sufficient amount to sell
	$s_weight += ($price * $qty);
	//if($b_weight >= $s_weight){
		$cmp_old = $cmp;
		$cmp =	$open + (($b_weight-$s_weight)/10000);							//adding ($price*$qty) to $b_weight
		if($cmp > ($open - ($open)*0.2)){										// setting circuit filter
			$query_ltp_update = "UPDATE `ltp` SET `current_price`= $cmp WHERE id = $id";
			$query_ltp_update_run = mysql_query($query_ltp_update);
			$query_sw_update = "UPDATE `ltp` SET `sell_weight`=$s_weight WHERE id = $id";//upadating the buy_weight in database
			$query_sw_update_run = mysql_query($query_sw_update);
			} else{
			$cmp = $cmp_old;
			header('Location: lower_circuit.php');
			exit();
			}
		//}	
	/*	else {
			$cmp_old = $cmp;
			$cmp =	$open - (($s_weight-$b_weight)/10000);							//adding ($price*$qty) to $b_weight
			if($cmp > ($open - ($open)*0.2)){
				$query_ltp_update = "UPDATE `ltp` SET `current_price`= $cmp WHERE id = $id";
				$query_ltp_update_run = mysql_query($query_ltp_update);
				$query_sw_update = "UPDATE `ltp` SET `sell_weight`=$s_weight WHERE id = $id";//upadating the buy_weight in database
				$query_sw_update_run = mysql_query($query_sw_update);
			}	else if($cmp <= ($open - ($open)*0.2)){
			$cmp = $cmp_old;
			header('Location: lower_circuit.php');

			}
		}*/
//////////////////////////// from Here on, data goes to traders' tables/////////////////////////////////////////	
	
	$query_t ="SELECT * FROM `$trader` WHERE `scrip_id` = $id";
	$query_t_run = mysql_query($query_t);
	if($query_t_rows = mysql_num_rows($query_t_run)){
	while($row2 = mysql_fetch_assoc($query_t_run)){
	$scrip = $row2['scrip_id'];
	$q_buy = $row2['buy_qty'];
	$p_buy = $row2['buy_price'];
	$q_sell = $row2['sell_qty'];
	$p_sell = $row2['sell_price'];
	$holding = $row2['holding'];
	$value_holding = $row2['value_holding'];
	$b_net = $row2['buy_net'];
	$s_net = $row2['sell_net'];
	////////////////////////// CALCULATIONS////////////////////////////////////////
	if($holding >= $qty){
		$s_net += ($qty * $price);				// Total money spent on buying this stock from beginning
		$q_sell += $qty;							// Total quantity bought since beginning
		$holding = ($q_buy - $q_sell);			// Total quantity in portfolio at present
		$p_avg = ($b_net - $s_net)/$holding ; 	// Current avg price of this holding
		$value_holding = ($holding * $price);	// Overall value of this holding
		$profit = ($s_net + $value_holding)-$b_net;
		$networth = $s_net + $value_holding - $b_net; 

	//////////////////////// Update //////////////////////////////////////////////
	
		$query_t_update = "UPDATE `$trader` SET `sell_qty`='$q_sell',`sell_price`='$s_net',`holding`='$holding',`value_holding`='$value_holding',`sell_net`='$s_net',`avg_price`='$p_avg',`profit`='$profit',`net`='$networth' WHERE `scrip_id`='$id'";	
		$query_t_update_run = mysql_query($query_t_update);
		header('Location:successful.php');
		}else {
			header('Location:no_holding.php');
			}
	 	
	 	}

			
	}
	
	}
	else {
header('Location:no_holding.php');

	}
	}
$trader = $_SESSION['user_id'];
if(loggedin()){
if(isset($_POST['scrip_sell'])&&isset($_POST['qty'])&&!empty($_POST['qty'])){
$id = $_POST['scrip_sell'];							// id of the scrip for buy request
$qty = $_POST['qty'];	
//echo 'Transaction successful. Wait while page loads and then check <a href = "portfolio.php">portfolio</a> for confirmation.';
							// qty requested
$query_t ="SELECT * FROM `$trader` WHERE `scrip_id` = '$id' AND `holding` !=0";
	$query_t_run = mysql_query($query_t);
	if($query_t_rows = mysql_num_rows($query_t_run)){
		$query_price = "SELECT `current_price` FROM `ltp` WHERE `id`='$id'";						// price of the scrip for buy request
		$query_price_run = mysql_query($query_price);
		while($row=mysql_fetch_assoc($query_price_run)){
		$price = $row['current_price'];
		}
		if($qty>0){
		sell($price,$qty,$id,$trader);							//buy function for the id	
		}
		else {
		echo "Quantity can't be negative";
		}
	}	
	
	else{
			echo 'You don\'t have this scrip in your portfolio. Go to <a href="portfolio.php">Portfolio</a> and check your holdings.';
			}
}
	} else{
	echo 'You need to log in to transact';
	}
	
?>

						</form>

						&nbsp;</div>

				</div>

				<div class="CL"><br />
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

			<div> <b class="explore"> <b class="explore1"><b></b></b> <b class="explore2"><b></b></b> <b class="explore3"></b> <b class="explore4"></b> <b class="explore5"></b></b>

				<div class="explorefg">

					<div class="FL PL5"><img src="explore.gif" border="0" /></div>

					<div class="PL15 FL PT5" style="width: 879px">

						<div class="FL" style="width:874px; height: 106px;">

							<div><br><br></div>

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

		<!--Explore End here-->

		<div class="bdr_tp5"></div>

			</div>

</div>

</div>



<script type="text/javascript">

 

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-156703-1']);

  _gaq.push(['_setDomainName', 'none']);

  _gaq.push(['_setAllowLinker', true]);

  _gaq.push(['_trackPageview']);

 

  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

 

</script>





<!-- Begin comScore Tag -->

<script type="text/javascript"> 

  var _comscore = _comscore || [];

  _comscore.push({ c1: "2", c2: "6683813" });

  (function() {

    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;

    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";

    el.parentNode.insertBefore(s, el);

  })();

</script>

<noscript>

  <img src="http://b.scorecardresearch.com/p?c1=2&c2=6683813&cv=2.0&cj=1" />

</noscript>

<!-- End comScore Tag -->





</body>

</html>		

