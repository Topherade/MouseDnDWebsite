<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Info Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
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
         <h1>Welcome To the Admin Page</h1>
	 <form method="post" action="AddItem.php" name="ItemAdditionform" id="ItemAdditionform">
	    <fieldset>
	        <legend><strong>Add an Item to Item List:</strong></legend>
                <label for="ItemType"></label>
			<select id="ItemType" name="ItemType">
				<option value="">Category</option>
				<option value="Weapon">Weapon</option>
				<option value="Armor">Armor</option>
				<option value="Equipment">Equipment</option>
				<option value="Magic Item">Magic Item</option>
				<option value="Trade Goods">Trade Goods</option>
				<option value="Livestock">Livestock</option>
				<option value="Transportation">Transportation</option>			
                	</select>
		<label for="ItemSubtype"> - </label>
                        <select id="ItemSubtype" name="ItemSubtype">
                                <option value="">SubType</option>
				<option value="Weapon">Weapon</option>
                                <option value="Armor">Armor</option>
                                <option value="Equipment">Equipment</option>
                                <option value="Magic Item">Magic Item</option>
                                <option value="Trade Goods">Trade Goods</option>
                                <option value="Livestock">Livestock</option>
                                <option value="Transportation">Transportation</option>
                        </select>
		<br />
	        <label for="Item">Item:</label><input type="text" name="Item" id="Item" /><br />
		<label for="BasePrice">Base Price:</label><input type="text" name="BasePrice" id="BasePrice" /><br />	    
	        <input type="submit" name="Add Item" id="create" value="create" />
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

