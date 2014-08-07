<?php
require 'connection.php';
require 'current_page.php';
if(isset($_POST['scrip_quote'])){
$id = $_POST['scrip_quote'];
$query_quote ="SELECT * FROM `ltp` WHERE `id`=$id";
$query_quote_run = mysql_query($query_quote);
while($row1 = mysql_fetch_assoc($query_quote_run)){
$quote = $row1['current_price'];
$volume_u = $row1['volume'];
$s_weight = $row1['sell_weight'];							//fetching the current buy_weight and storing in $b_weight
$b_weight = $row1['buy_weight'];
$volume_u = $s_weight + $b_weight;
$query_volume_update = "UPDATE `ltp` SET `volume`=$volume_u WHERE id = $id";//upadating the buy_weight in database
$query_volume_update_run = mysql_query($query_volume_update);

echo $quote;
	
	}
}
?>