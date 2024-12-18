<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM `ibooking` ORDER BY `rid` DESC";
 $query= $con->query($sql);
?>

<html>
<title>Payment-Report</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>

body, h1,h2,h3,h4,h5,h6 {
  font-family: "Montserrat", sans-serif;
  
}
.w3-row-padding img {
  margin-bottom: 12px
}

.w3-sidebar {
  width: 120px;background: #222;
}

#main {
  margin-left: 120px
}

@media only screen and (max-width: 600px) {
  #main {margin-left: 0}
}

.table{
    height: 340px;
    width: 100%;
    border: 2px solid whitesmoke;
    border-radius: 10px 10px;
    
}

.heading{
    color: red;
}

.logo{
    margin: 5px 5px;
}

.data{
  color: rgb(126, 9, 176);
}


</style>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img class="logo" src="https://cdn-icons-png.flaticon.com/512/306/306425.png" style="width:90%"> <h3><a href="dash.php" style="text-decoration:none">Admin</a></h3><BR>
 
  
 
       <a href="user.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>VIEW USER</p>
  </a>
  
  <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
 <i class="fa fa-comments-o" style="font-size:36px"></i>
     <p>VIEW FEEDBACK</p>
  </a>
  
   <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-commenting-o" style="font-size:32px"></i>
    <p>VIEW Contact- us</p>
  </a>
  
  <a href="ticket1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>VIEW TICKET</p>
  </a>
  
     <a href="payment1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-credit-card" style="font-size:32px"></i>
    <p>VIEW PAYMENT</p>
  </a>
 
 
</nav>



  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">List of  &nbsp;</span>Ticket Through Home Page</h1>
	
	<div id="rpt">
	  <div align="center">
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <table width='50%' border="1" cellspacing="0">
	      <tr bgcolor="#333333" align="center">
	         <td height="43"><span class="style3">Sr. No.</span></td>

			  <td><span class="style3">Number of Seats</span></td>

			  <td><span class="style3">Number of Popcorn</span></td>
			  <td height="43"><span class="style3">Number of Soda.</span></td>
			  <td><span class="style3">Type of Seating</span></td>

			  <td><span class="style3">Location</span></td>
			  <td height="43"><span class="style3">Date</span></td>
			  <td><span class="style3">Time</span></td>

			  <td><span class="style3">Total</span></td>
			 
		</tr>
	      <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['no']."</td>";

			echo "<td>".$res['popcorn']."</td>";
			
			echo "<td>".$res['soda']."</td>";

			echo "<td>".$res['seating']."</td>";
			echo "<td>".$res['location']."</td>";

			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['time']."</td>";

			echo "<td>".$res['total']."</td>";
			;
                             
				echo "</tr>";	
		}
		?>
        </table>
      </div>
</div>
    
</body>
</html>

<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #999999 0px 0px 20px, #999999 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #999999 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>Payment Report</u></h1></div><h3><u></u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>