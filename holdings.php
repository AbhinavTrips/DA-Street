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
<?php
require 'connection.php';
require 'current_page.php';
$trader = $_SESSION['user_id'];
if(loggedin()){
$query = "SELECT * FROM `$trader` WHERE 1";
$query_run = mysql_query($query);
$num = mysql_num_rows($query_run);


echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tbldata'>\n";
							echo "<tr>\n";
								echo "<th align=\"left\" style=\"width: 20%\">Company</th>\n";
								echo "<th align=\"right\" style=\"width: 9%\">&nbsp;Holdings</th>\n";
								echo "<th align=\"right\" style=\"width: 15%\">Avg Price</th>\n";
								echo "<th align=\"right\" style=\"width: 17%\">Current Price</th>\n";
								echo "<th width=\"28%\" align=\"right\">Buy/Sell</th>\n";
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
		$name=HDFC;
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
    echo "<td class=\"b_18 no_brd\" style=\"width: 20%; font-size: 20px;color:white;\">{$name}</td>\n" . "<td>{$row['holding']}</td>\n" . "<td>{$row['value_holding']}</td>\n" . "<td>{$row['avg_price']}</td>\n";

    echo "</tr>\n";
}

echo "</table>\n";
	

	
	}




?>

</body>

</html>
