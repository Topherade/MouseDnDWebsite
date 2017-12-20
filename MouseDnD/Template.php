<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Info Info Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<header id="pageHeader"><h1>Insert Header Here</h1></header>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
     <h1>Clan Info </h1>
     <p>You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
     <p><a href="logout.php">click here to logout</a></p>
     <?php
}
else
{
   ?>
   <h1>Member Login</h1>

   <p>Please either <a href= "index.php">login </a>, or <a href="register.php">click here to register</a>.</p>
   <?php
}
?>

</div>
</body>
</html>
