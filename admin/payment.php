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
		<h1>List Of Payment</h1>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width='50%' border="1" cellspacing="0">
	    <tr bgcolor="#333333">
	      <td height="47"><div align="center" class="style3 style5" >Sr. No.</div></td>
			  
						<td><div align="center" class="style6">name</div></td>
			<td><div align="center" class="style6">Card No</div></td>
	    </tr>
	    <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['cno']."</td>";
			
			
			
		}
		?>
      </table>
 </div>
</body>
</html>
