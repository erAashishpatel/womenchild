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
                
                <li><a href="home.php">Home</a></li>
                
                <li><a href="login.php">Login</a></li>
                
 <li><a href="registration.php">Register</a></li>



			</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


   <div id="body" class="width">

	<section id="content" class="one-column">


<?php
if(isset($_REQUEST['submit']))
{
	mysql_connect('localhost','root','');
	mysql_select_db('mail');
	$u1=$_REQUEST['a'];
	$u2=$_REQUEST['b'];
	$u3=$_REQUEST['c'];
	$u4=$_REQUEST['d'];
	$u5=$_REQUEST['e'];
	$u6=$_FILES['f']['name'];
	$tmp=$_FILES['f']['tmp_name'];
	 if(move_uploaded_file($tmp,$u6))
    {
	$q="insert into logintbl values('$u1','$u2','$u3','$u4','$u5','$u6')";
	$rs=mysql_query($q);
	if($rs)
	{
		echo"<script>
			alert('Register Sucessfully');
			window.location='login.php';
			</script>
		";
	}
	else
	{
		echo"unsucessful";
	}


	}
	else
	{
			echo "Error while uploading file";
	}


	}

?>
<form  action="registration.php" method="post" enctype="multipart/form-data">
<div id="id7">
<table style="color:black;" height="350" width="700"><tr><td>
uname</td><td><input type="text" name="a"/><br /></td></tr>
<tr><td>password</td><td><input type="password"name="b" /><br /></td></tr>
<tr><td>branch</td><td><input type="text" name="c"><br /></td></tr>
<tr><td>mobileno</td><td><input type="text" name="d"/></br></td></tr>
<tr><td>address</td><td><textarea name="e"></textarea><br /></td></tr>
<tr><td>image</td><td><input type="file"  name="f"/><br /></td></tr>
<tr><td colspan="2"><input type="submit" name='submit' value="submit" /></td></tr>
</table>
</div>
</form>



<?php
include_once("footer.php");
?>