<?php 
require 'connection.php';
require 'current_page.php';

function sell($price,$qty,$id,$trader){

	$query_sw = "SELECT * FROM `ltp` WHERE `id`=$id";//getting buy_weight from database for given id
	$query_run_sw = mysql_query($query_sw);						// getting query result in $query_run_bw
	while($row1 = mysql_fetch_assoc($query_run_sw)){
	$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
	$b_weight = $row1['buy_weight'];							//fetching the current buy_weight and storing in $b_weight
	$cmp = $row1['current_price'];
	$open = $row1['open_price'];
	$s_weight += ($price * $qty);
	if($b_weight>$s_weight){
		$cmp =	$open + ($b_weight-$s_weight)/100;							//adding ($price*$qty) to $b_weight
		}	else{
			$cmp =	$open - ($s_weight-$b_weight)/100;							//adding ($price*$qty) to $b_weight
			}
	$query_sw_update = "UPDATE `ltp` SET `sell_weight`=$s_weight WHERE id = $id";//upadating the buy_weight in database
	$query_sw_update_run = mysql_query($query_sw_update);
	$query_ltp_update = "UPDATE `ltp` SET `current_price`= $cmp WHERE id = $id";
	$query_ltp_update_run = mysql_query($query_ltp_update);
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
		}else {
			echo 'You have insufficient holdings. You can\'t sell more than you own';
			}
	 	}
	 	}else{
	///////////////////////////////////// INSERT ///////////////////////////////////////
	//	$value_holding = $qty * $price;
	//	$buy_net = $value_holding;
	//	$p_avg = $price;
	//	$query_insert = "INSERT INTO `$trader`(`scrip_id`, `buy_qty`, `buy_price`, `holding`, `value_holding`, `buy_net`, `avg_price`) VALUES ('$id','$qty','$price','$qty','$value_holding','$buy_net','$p_avg')"; 
	//	$query_insert_run = mysql_query($query_insert);
		
		}
			header('Location:myspace.php');		
	}
	}
$trader = $_SESSION['user_id'];
if(loggedin()){
if(isset($_POST['scrip_sell'])&&isset($_POST['qty'])){
$id = $_POST['scrip_sell'];							// id of the scrip for buy request
$qty = $_POST['qty'];									// qty requested
$query_t ="SELECT * FROM `$trader` WHERE `scrip_id` = '$id'";
	$query_t_run = mysql_query($query_t);
	if($query_t_rows = mysql_num_rows($query_t_run)){
		$query_price = "SELECT `current_price` FROM `ltp` WHERE `id`='$id'";						// price of the scrip for buy request
		$query_price_run = mysql_query($query_price);
		while($row=mysql_fetch_assoc($query_price_run)){
		$price = $row['current_price'];
		}
		echo $price;	
		sell($price,$qty,$id,$trader);							//buy function for the id	
	}	
	else{
			echo 'You don\'t have this scrip in your portfolio. Go to <a href="portfolio.php">Portfolio</a> and check your holdings.';
			}
}
	} else{
	echo 'You need to log in to transact';
	}
	
?>

