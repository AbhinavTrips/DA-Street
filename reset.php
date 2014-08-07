<?php
require 'connection.php';
for($i=1;$i<250;$i++){
$query = "DELETE FROM `$i` WHERE 1";
$query_run = mysql_query($query);}
?>
