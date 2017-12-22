<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Clan Inventory Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<header id="pageHeader"><h1>Clan Inventory</h1></header>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
     <table>
        <tr>
	   <th>Item</th>
           <th>Base Value</th>
           <th>Quantity</th>
           <th>Actions</th>
        </tr>
<?php
     $query="SELECT * FROM ".$_SESSION['ClanName']."Inventory";
     $results = mysql_query($query);
     while ($row = mysql_fetch_array($results)) {
        echo '<tr>';
        echo '<td>' .$row['Item']. '</td>';
        $iteminfo=mysql_query("SELECT * FROM Items WHERE Item = '".$row['Item']."'");
        $itemrow = mysql_fetch_array($iteminfo);
        var_dump(mysql_num_rows($itemrow));
        if(! empty($itemrow))
        {
            echo '<td>' .$itemrow['BasePrice']. '</td>';
        }
        else
        {
            echo '<td>' ."Error Fetching Item Info". '</td>';
        }
        echo '<td>' .$row['Quantity']. '</td>';
        echo '<td>' ."To Be Added". '</td>';
        echo '</tr>';
     }
?>

     </table>
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
