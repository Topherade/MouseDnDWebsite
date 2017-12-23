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
     <table id="myTable">
	<tr>
	   <th onclick="sortTable(0)">Item</th>
	   <th onclick="sortTable(1)">Type</th>
           <th onclick="sortTable(2)">Subtype/Rarity</th>
           <th onclick="sortTable(3)">Base Value</th>
           <th onclick="sortTable(4)">Quantity</th>
           <th onclick="sortTable(5)">Actions</th>
        </tr>
<?php
     $query="SELECT * FROM ".$_SESSION['ClanName']."Inventory";
     $results = mysql_query($query);
     while ($row = mysql_fetch_array($results)) {
        echo '<tr>';
        $iteminfo=mysql_query("SELECT * FROM Items WHERE Item = '".$row['Item']."'");
        $itemrow = mysql_fetch_array($iteminfo);
        if(! empty($itemrow))
        {
           echo '<td><div class="tooltip">' .$row[Item].'<span class="tooltiptext">'.'Stats <br />Weight: '.$itemrow['Weight'].'<br /> Damage: '.$itemrow['Damage'].'<br /> Protection: '.$itemrow['Protection'].'<br /> Info: '.$itemrow['Info'].'</span></div></td>';
	   echo '<td>' .$itemrow['ItemType']. '</td>';
           echo '<td>' .$itemrow['ItemSubtype']. '</td>';
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
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</div>
</body>
</html>
