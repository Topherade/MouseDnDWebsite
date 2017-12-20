<?php
session_start();
 
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "Mouse_DnD"; // the name of the database that you are going to use for this project
$dbuser = "topherade"; // the username that you created, or were given, to access your database
$dbpass = "Powershot1"; // the password that you created, or were given, to access your database
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header id="pageHeader">Header</header>
<nav id="mainNav">Nav</nav>
<footer id="pageFooter">Email: <a href="mailto:Murphy.Christopher.Paul@Gmail.com">Murphy.Christopher.Paul@Gmail.com</a> © Christopher Murphy 2018</footer>
</body>
</html>
