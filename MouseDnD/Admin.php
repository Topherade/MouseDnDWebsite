<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Info Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header id="pageHeader"><h1>Welcome to the Admin Page!</h1></header>
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
         <script src="JavaScripts/ItemDropDown.js"></script>
     <form method="post" action="AddItem.php" name="ItemAdditionform" id="ItemAdditionform" style = "width: 25%"/>
        <fieldset>
            <legend><strong>Add an Item to Item List:</strong></legend>
                <label for="ItemType">Category:</label>
            <select id="ItemType" name="ItemType">
                <option value="">-- Select a Type--</option>
                <option value="Weapon">Weapon</option>
                <option value="Armor">Armor</option>
                <option value="Equipment">Equipment</option>
                <option value="Magic Item">Magic Item</option>
                <option value="Trade Goods">Trade Goods</option>
                <option value="Livestock">Livestock</option>
                <option value="Transportation">Transportation</option>          
                    </select>
        <br />
        <label for="ItemSubtype">SubType</label>
            <select id="ItemSubtype" name="ItemSubtype">
                <option value=""></option>
            </select>
        <br />
            <label for="Item">Item:</label><input type="text" name="Item" id="Item" /><br />
        <label for="BasePrice">Base Price:</label><input type="text" name="BasePrice" id="BasePrice" /><br />
        <label for="Weight">Weight:</label><input type="text" name="Weight" id="Weight" /><br />   		
        <label for="Damage">Damage:</label><input type="text" name="Damage" id="Damage" /><br /> 
        <label for="Protection">Protection:</label><input type="text" name="Protection" id="Protection" /><br /> 
        <label for="Info">Info:</label><input type="textarea" name="Info" id="Info" /><br /> 
            <input type="submit" name="AddItem" id="AddItem" value="Add Item" />
        </fieldset>
     </form>

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
   ?>
   <h1>Member Login</h1>

   <p>Please either <a href= "index.php">login </a>, or <a href="register.php">click here to register</a>.</p>
   <?php
}
?>

</div>
</body>
</html>

