<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM `feedback` ORDER BY `rid` DESC";
 $query= $con->query($sql);
?>


<!--
.style3 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
-->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Admin Dashboard</title>
  <style>
  *{
  margin:0;
  padding:0;
  box-sizing:border-box;}
  
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.dashboard {
  display: flex;
  height: 100vh;
}

.sidebar {
  width: 250px;
  background-color: #20232a;
  color:#FFFFFF;
  padding: 20px;
}

.logo {
  text-align: center;
  margin-bottom: 20px;
}

.logo img {
  max-width: 100px;
}

.sidebar .menu {
  list-style: none;
  padding: 0;
}

.sidebar .menu li {
  margin-bottom: 10px;
}

.sidebar .menu li a {
  color:#FFFFFF;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.sidebar .menu li a.active,
.sidebar .menu li a:hover {
  background-color: #282c34;
  color: #FFFFFF;
}

.content {
  flex: 1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.header h2 {
  font-size: 24px;
  margin: 0;
}

.header p {
  color: #999;
  margin: 0;
}

.logout-btn {
  background-color:#333333;
  border: none;
  color: #fff;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.logout-btn:hover {
  background-color: #282c34;
}

.overview {
  display: flex;
  margin-bottom: 20px;
}

.overview-card {
  flex: 1;
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 5px;
  text-align: center;
}

.chart {
  flex: 1;
  background-color: #f5f5f5;
  border-radius: 5px;
  margin-bottom: 20px;
  min-height: 300px;
}

.data-table {
  flex: 1;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}




.main {
    background-color: white;
    padding: 30px;
	height:300px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.main h1 {
    margin: 0;
    font-size: 28px;
    color: #333;
	padding-bottom:20px;
}

.stats {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    text-decoration:none;
}

.stat-box {
    background-color:#999999;
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin: 0 10px;
    text-align: center;
	margin-bottom:20px;
	text-decoration:none;
}

.stat-box h2 {
    margin: 0;
    font-size: 20px;
		text-decoration:none;
	

}

.stat-box p {
    margin: 10px 0 0;
    font-size: 24px;
    font-weight: bold;
}


  </style>
</head>
<body>
 <div class="dashboard">
    <div class="sidebar">
      <div class="logo">
        <img  src="../photos/manager.png" alt="Admin Logo">
      </div>
      <ul class="menu">
        <li><a href="#" class="active">Dashboard</a></li>
        <li><a href="user.php">Users</a></li>
        <li><a href="feedback.php">Feedback</a></li>
		<li><a href="ticket.php">Ticket</a></li>
        <li><a href="payment.php">Payment</a></li>
        
      </ul>
    </div>
    <div class="content">
      <header class="header">
      <body>
      <div class="dashboard" style="margin-right:50%">
<h2 align="center">&nbsp;</h2>
	<h1 align="center"><strong> FEEDBACK REPORT</strong>&nbsp;</h1>
	<div id="rpt">
	  <div align="center">
	    <table width='101%' height="71" border="1" cellspacing="0" style="margin-top:50%">
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
	    <p>&nbsp;</p>
        <button type="button"  class="btn btn-dark" onClick="myFunction()">Print Report</button>
        </h2>
</div>
</div>
<div align="center">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</div>
</body>
</html>

<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #999999 0px 0px 20px, #999999 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #999999 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>User Report</u></h1></div><h3><u>All Feedback Report</u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>
