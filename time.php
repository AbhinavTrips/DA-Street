<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
date_default_timezone_set('Asia/Kolkata');
$hour = date('h', time());
date_default_timezone_set('Asia/Kolkata');
$min = date('i', time());
$finish = false;
if(!(($hour == 10 && $min>=30) || ($hour==11 && $min < 30)))
{
 die("Time Over .<br/> Results will be out by midnight. All the best !! ");
}

?>


</body>

</html>
