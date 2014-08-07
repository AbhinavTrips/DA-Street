<?php
require 'current_page.php';
require 'connection.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.html-marquee {height:33px;width:416px;background-image:url(http://);font-family:Cursive;font-size:14px;color:000000;border-width:0;border-style:dotted;}
</style>
</head>

<body>
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
	}

?></marquee>


<?php
/*$query = "SELECT * FROM `$trader` WHERE 1";
$query_run = mysql_query($query);
$num = mysql_num_rows($query_run);
$names = array();
	while($row = mysql_fetch_assoc($query_run)){
//	$my_array[]=$row;
$names[]=$row['scrip_id'];
}
echo $name[0];
	$bajaj ;
		
		$bharti;
		
		$bhel;
		
		$cipla;
		
		$coal;
		$reddy;
		
		$gail;
		
		$hdfc;
		
		$hdfcbank;
		
		$hero;
		
		$hindalco;
		
		$hul;
		
		$icici;
		
		$infy;
		
		$itc;
		
		$jindal;
		
		$larsen;
		
		$maruti;
		
		$mah;
		
		$ntpc;
		
		$ongc;
		
		$ril;
		
		$sbi;
		
		$sterlite;
		
		$sun;
		
		$tatamotors;
		
		$tatapower;
		
		$tatasteel;
		
		$tcs;
		
		$wipro;
		
	}*/
?>
</body>

</html>
