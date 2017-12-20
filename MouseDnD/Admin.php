<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[ADMIN] Create Item Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header id="pageHeader"><h1>Welcome to the Admin Create Item Page!</h1></header>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>

     <?php
     $checkadmin = mysql_query("SELECT * FROM AdminWhiteList WHERE user = '".$_SESSION['Username']."'");
     if(mysql_num_rows($checkadmin) == 1)
     {
     ?>
	  <p><a href="AdminCreateItem.php">Add Items</a></p>

     <?php
     }
     else
     {
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
        header("Location: http://cats.servebeer.com/MouseDnD/ClanInfo.php"); /*redirect browser */
        exit();
     }
     ?>
<?php
}
else
{
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
        header("Location: http://cats.servebeer.com/MouseDnD/ClanInfo.php"); /*redirect browser */
        exit();
}
?>

</div>
</body>
</html>

