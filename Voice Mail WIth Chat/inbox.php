<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--
hallux, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
<div id="container">

    <header> 
	<div class="width">
    		<h1><a href="admin.php">COLLEGE</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">
                



<?php

include_once('menu.php');


?>

</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


   <div id="body" class="width">

	<section id="content" class="one-column">




<?php
session_start();
mysql_connect('localhost','root','');
	mysql_select_db('mail');
	$name=$_SESSION['uname'];
	$q="select * from voicechat where mailto='$name'";
	$rs=mysql_query($q);
	while($row=mysql_fetch_row($rs))
	{
	echo "<h4> Sent By $row[2]<br>Subject $row[5] <br> Description $row[6]</h4><br>";
	$data="Sent By ". $row[2]." Subject IS ". $row[5]."Description".$row[6];
	?>
    <input onclick='responsiveVoice.speak("<?php echo $data; ?>");' type='button' value="Play" />
<br /><br />
    <?php

	//echo"<br>";
	}
?>
<?php
include_once("footer.php");
?>