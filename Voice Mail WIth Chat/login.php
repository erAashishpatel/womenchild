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






<form action="loginchk.php" method="post" enctype="multipart/form-data">
        <input type="text" name="x"  placeholder="Email ID" class="input"/>
        <BR />
        <input type="password" name="y" placeholder="Password"  class="input"/>
        <br />
        <input type="submit" value="login" id="button" />
    </form>


<?php
include_once("footer.php");
?>