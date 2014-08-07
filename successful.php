<?php
header('Refresh:2 ; URL=myspace.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
</head>
<body>

<table style="width: 100%; height: 503px">
	<tr>
		<td class="auto-style1"><?php
print 'Transaction Successful. Wait while page reloads';
echo '</br>';
print 'OR';
echo '</br>';
echo 'Go to <a href = "portfolio.php">Portfolio</a> for confirmation.';
?>
&nbsp;</td>
	</tr>
</table>

</body>

</html>
