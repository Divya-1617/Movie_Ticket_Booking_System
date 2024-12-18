<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM booking ORDER BY rid DESC";
 $query= $con->query($sql)
?>

<html>
<head>	
	
<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
.style4 {font-size: 24px}
.style5 {color: #FFFFFF}
.style6 {font-size: 18px; font-weight: bold; color: #FFFFFF; }

body{background-image:url(../img/user,php);
background-position:center;
background-repeat:no-repeat;
color:#FFFFFF;
}
-->
</style>
</head>

<body>


	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div align="center">
		<h1>List Of Ticket</h1>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width='70%' border="1" cellspacing="0">
	    <tr bgcolor="#333333">
	      <td height="47"><div align="center" class="style3 style5" >Sr. No.</div></td>
			  						<td><div align="center" class="style6">Name of customer</div></td>

						<td><div align="center" class="style6">Number of tickets</div></td>
			<td><div align="center" class="style6">Seating type</div></td>
						<td><div align="center" class="style6">Location</div></td>
						<td><div align="center" class="style6">Date</div></td>
						<td><div align="center" class="style6">Time</div></td>
									<td><div align="center" class="style6">Number of Popcorn</div></td>
			<td><div align="center" class="style6">Number of Sodas</div></td>


	    </tr>
	    <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
						echo "<td>".$res['name']."</td>";

			echo "<td>".$res['no']."</td>";
			echo "<td>".$res['seating']."</td>";
			echo "<td>".$res['location']."</td>";
			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['time']."</td>";
			echo "<td>".$res['popcorn']."</td>";
			echo "<td>".$res['soda']."</td>";
			
			
			
		}
		?>
      </table>
 </div>
</body>
</html>
