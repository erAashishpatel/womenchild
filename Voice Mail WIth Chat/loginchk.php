
<script src="../fancy/fancyBox-master/jquery-1.9.1.js"></script>
<script src="jquery.airport-1.1.source.js">
</script>

<script>
$(document).ready(function(){
chrome.tts.speak('Hello, world.');
$('#id').airport(['Rungta Mail System']);

});

</script><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" />
</head>

<body>
<div id="header"><div id="id" style="text-transform:uppercase">Rungta Mail System</div>
<div id="left">
<table width="70%" align="right">
<tr>
<td>
<div class="menu"><a href="home.php">Home</a></div>
</td>
<td><div class="menu"><a href="login.php">Login</a></div>
</td>
<td>
<div class="menu"><a href="registration.php">Register</a></div></div>
</td>
</tr>
</table>
</div>
<div id="content">
<?php
    session_start();
	$a=$_REQUEST['x'];
	$b=$_REQUEST['y'];
	mysql_connect('localhost','root','');
	mysql_select_db('mail');
	$q="select * from logintbl where uname='$a' and password='$b'";
	$rs=mysql_query($q);
	if($row=mysql_fetch_row($rs))
	{
		$_SESSION['uname']=$a;
		echo"<script>
			alert('welcome user');
			window.location='home.php';
			</script>
		";
	}
	else
	{
		echo"<script>
			alert('invalid user');
			window.location='login.php';
			</script>
		";
	}
?>


</div>
</body>
</html>




