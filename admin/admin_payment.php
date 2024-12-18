<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM payment ORDER BY rid DESC";
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
-->
body{
background-image:url(../photos/backgroundd.png);
background-position:center;
background-repeat:no-repeat;

}
</style>
</head>

<body>

	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div align="center">
		<h1 style="color:WHITE; font-weight:bolder">MANAGE-PAYMENT</h1>

	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width='50%' border="1" cellspacing="0">
	    <tr bgcolor="#333333">
	      <td height="47"><div align="center" class="style3 style5" >Sr. No.</div></td>
			  
						<td><div align="center" class="style6">Name</div></td>
			<td><div align="center" class="style6">Card No</div></td>
				<td><div align="center" class="style6">Expiry Month</div></td>
			<td><div align="center" class="style6">Expiry Year</div></td>
						<td><div align="center" class="style6">Cvv</div></td>

			 <td><div align="center" class="style6">Query</div></td>
	    </tr>
	    <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['cno']."</td>";
			echo "<td>".$res['expiry']."</td>";
			echo "<td>".$res['expiry2']."</td>";
						echo "<td>".$res['cvv']."</td>";

			
			
			echo "<td><a href=\"admin_payment_edit.php?id=$res[rid]\">Edit</a>
			<a href=\"admin_payment_delete.php?id=$res[rid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
      </table>
 </div>
</body>
</html>
