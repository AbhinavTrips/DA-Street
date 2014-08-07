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
for($j=0; $j<$users_num;$j++){
echo $k++;
$query_sum = "SELECT SUM(profit) FROM $id[$j] WHERE 1";
		$query_sum_run = mysql_query($query_sum);
		$rows = mysql_num_rows($query_sum_run);
		echo $rows;
		while($row2=mysql_fetch_assoc($query_sum_run)){
		$networth = $row2['SUM(profit)'];
		//$name = $row1['username'];
		$netw = $networth+2500000;
		echo $netw;
		
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
	echo '</br>';
		}
		

	$query_asc = "SELECT * FROM `leaders` ORDER BY `networth` DESC";
		$query_asc_run = mysql_query($query_asc);
		while(($row2 = mysql_fetch_assoc($query_asc_run))&& $k<5){
		$player = $row2['username'];
		echo $player;
		echo '<br/>';
		$k++;
		}

?>
