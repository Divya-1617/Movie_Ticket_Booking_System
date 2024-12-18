<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM `feedback` ORDER BY `rid` DESC";
 $query= $con->query($sql);
?>


<html>
<title>Feedback-Report</title>
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
  <a href="userReport.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>USER-REPORT</p>
  </a>
  
  <a href="admin_feedback_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
 <i class="fa fa-comments-o" style="font-size:36px"></i>
     <p>FEEDBACK-REPORT</p>
  </a>
  
   <a href="admin_movie_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-caret-square-o-right" style="font-size:32px"></i>
    <p>Movie-REPORT</p>
  </a>
  
  <a href="admin_ticket_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>TICKET-REPORT</p>
  </a>
  
     <a href="admin_payment_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-credit-card" style="font-size:32px"></i>
    <p>PAYMENT-REPORT</p>
  </a>
  
 
 
</nav>



  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Feedback &nbsp;</span>Report</h1>
	
	<div id="rpt">
	  <div align="center">
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <table width='50%' border="1" cellspacing="0">
	      <tr bgcolor="#333333" align="center">
	        <td height="43"><span class="style3">Sr. No.</span></td>
			  <td><span class="style3">Name</span></td>

			  <td><span class="style3">Feedback</span></td>
		</tr>
	      <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['name']."</td>";

			echo "<td>".$res['feedback']."</td>";
                             
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
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #999999 0px 0px 20px, #999999 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #999999 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>Feedback Report</u></h1></div><h3><u></u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>