<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Clan Creation Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
	<?php
	if(!empty($_POST['clanname']) && !empty($_POST['profession']) && !empty($_POST['headquarters']))
	{
	    $clanname = mysql_real_escape_string($_POST['clanname']);
	    $profession = mysql_real_escape_string($_POST['profession']);
	    $headquarters = mysql_real_escape_string($_POST['headquarters']);
	    
            $checkclanname = mysql_query("SELECT * FROM users WHERE clanName = '".$clanname."'");
	      
	     if(mysql_num_rows($checkclanname) == 1)
	     {
	        echo "<h1>Error</h1>";
	        echo "<p>Sorry, that clan name is taken. Please go back and try again.</p>";
	     }
	     else
	     {
  		$population = rand(30, 40);
		$treasury = rand(2000, 3000);
	        $registerquery = mysql_query("INSERT INTO ClanInfo (clanName, clanPopulation, treasury, profession, headquarters) VALUES('".$clanname."', '{$treasury}', '{$population}', '".$profession."', '".$headquarters."')");
                $registerquery = mysql_query("UPDATE users SET clanName = '".$clanname."' WHERE UserName = '".$SESSION[Username]."'");


	 	if($registerquery)
	        {
	            echo "<h1>Success</h1>";
	            echo "<p>Your clan was successfully created. Please <a href=\"ClanInfo.php\">click here to view your Clan</a>.</p>";
	        }
	        else
	        {
	            echo "<h1>Error</h1>";
	            echo "<p>Sorry, your clan creation failed. Please go back and try again.</p>";    
	        }       
             }
	}
	else
	{
	    ?>
     
	   <h1>Clan Creation</h1>
	     
	   <p>Please enter your details below to create your clan.</p>
     
	    <form method="post" action="ClanCreation.php" name="ClanCreationform" id="ClanCreationform">
	    <fieldset>
	        <label for="clanname">Clan Name:</label><input type="text" name="clanname" id="clanname" /><br />
	        <label for="profession">Profession:</label><input type="text" name="professsion" id="profession" /><br />
	        <label for="headquarters">Headquarter's Location:</label><input type="text" name="headquarters" id="headquarters" /><br />
	        <input type="submit" name="create" id="create" value="create" />
	    </fieldset>
	    </form>
	     
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
