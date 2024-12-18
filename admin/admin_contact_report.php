<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM `contact` ORDER BY `rid` ASC";
 $query= $con->query($sql);
?>

<html>
<title>Contact-Us Report</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
     <a href="userReport.php" class="w3-bar-item w3-button  w3-hover-black" >
   <i class="fa fa-user" style="font-size:28px"></i>
    <p style="font-size:12px">USER-REPORT</p>
  </a>
  
  <a href="admin_feedback_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
 <i class="fa fa-comments-o" style="font-size:26px"></i>
     <p>FEEDBACK-REPORT</p>
  </a>
  
  <a href="admin_contact_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-commenting-o" style="font-size:19px"></i>
    <p>CONTACT-REPORT</p>
  </a>
  
   <a href="admin_movie_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-caret-square-o-right" style="font-size:18px"></i>
    <p>MOVIE-REPORT</p>
  </a>
  
  <a href="admin_ticket_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-eye w3" style="font-size:26px"></i>
    <p style="font-size:12px">TICKET-REPORT</p>
  </a>
  
     <a href="admin_payment_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-credit-card" style="font-size:16px"></i>
    <p style="font-size:12px">PAYMENT-REPORT</p>
  </a>
 
  
 
 
</nav>



  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Contact - Us &nbsp;</span>Report</h1>
	
	<div id="rpt">
	  <div align="center">
	    <p>&nbsp;</p>
	    <table width='66%' border=1 cellspacing="0">
	      <tr bgcolor="#333333" align="center">
	        <td height="50"><div align="center"><span class="style3">Sr. No.</span></div></td>
			  <td><div align="center"><span class="style3">Name</span></div></td>
			  <td><div align="center"><span class="style3">Email</span></div></td>
					  <td><div align="center"><span class="style3">contact</span></div></td>
					  					  <td><div align="center"><span class="style3">Query</span></div></td>

		</tr>
	      <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";

                                   echo "<td>".$res['contact']."</td>";
								                                      echo "<td>".$res['query']."</td>";

						echo "</tr>";	
		}
		?>
          </table>
      </div>
</div>
    <div align="center">
      <p>&nbsp;</p>
      <button type="button" class="btn btn-dark" onClick="myFunction()">Print Report</button>
</div>
</body>
</html>


<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: ;font-family:Apple Chancery, cursive;font-style:italic;"><h1 align="center"><u>Contact - Us Report</u></h1></div><h3><u></u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>