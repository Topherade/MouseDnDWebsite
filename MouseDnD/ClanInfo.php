<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Clan Info Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
     <h1>Clan Info </h1>
     <p>You are logged in as <code><?=$_SESSION['Username']?></code>,<a href="logout.php">click here to logout</a>.</p>  
     <?php
     $checkclan = mysql_query("SELECT * FROM users WHERE Username = '".$username."'"); 
     $row = mysql_fetch_array($checkclan);
     if(empty($row['clanName']))
     { 
     ?>
     	<p><a href="ClanCreation.php">click here to create your clan</a></p>
     <?php
     }
     else
     {
     ?>

     <?php
     $result = mysql_query("SELECT * FROM users WHERE clanName = '".$row['clanName']."'");
     $row = mysql_fetch_array($result,MYSQL_NUM)
     ?>
     <p>Clan Name: <code><?$row['clanName']?></code> </p>
     <p>Headquarters: <code><?$row['headquarters']?></code></p>
     <p>Profession: <code><?$row['profession']?></code></p>
     <p>Treasury: <code><?.$row['treasury']?></code></p>
     <p>Population: <code><?$row['clanPopulation']?></code></p>

     <?php
     }
     ?>
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
