<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM lbooking ORDER BY rid DESC LIMIT 1;";
 $query= $con->query($sql)
?>



<html>
<title>Ticket-bill</title>
<meta charset="UTF-8">

<style>

body, h1, h2, h3, p, img {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    border-radius: 10px 10px 0 0;
}

h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.receipt {
    margin: 20px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.receipt-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.movie-poster {
    max-width: 100px;
    height: auto;
    border-radius: 5px;
    margin-right: 20px;
    border: 2px solid #333;
}

.movie-info {
    flex-grow: 1;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.receipt-body {
    text-align: left;
    margin-bottom: 20px;
}

h3 {
    font-size: 20px;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    margin: 10px 0;
}

.barcode {
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
}

.barcode img {
    max-width: 100%;
    height: auto;
}

.heading{
    max-width: 300px;
    margin: 10px auto;
    background-color: #7f7d7d;
    /* color: #fff; */
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    padding: 10px;
}

.Comment{
    max-width: 800px;
    margin: 10px auto;
    background-color: #333;
    color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    padding: 10px;
}

</style>

<body >
 <div class="heading">Thank You For Using bookmyshow ! ! !</div>
    <hr>

    <p class="Comment">Dear Customer,Your Ticket Has Been Successfully Booked.Please Check Your Details</p>
    <div class="container">
        <header>
            <h1>Movie: Fast And Furious 7</h1>
        </header>
		
		
		                <div class="movie-info">

	<div id="rpt">
	  <div align="center">
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	     <table width='97%' height="19%" border="1" cellspacing="0">
	      <tr align="center">
		  			  <td><span class="style3">Customer ID </span></td>

			  <td><span class="style3">Total No of Seats</span></td>

			  <td><span class="style3">Seating Type</span></td>
			   <td><span class="style3">Location Type</span></td>

			  <td><span class="style3">Prefered Date</span></td>
			   <td><span class="style3">Prefered Time</span></td>

			  <td><span class="style3">Total No of Popcorns</span></td>
			   <td><span class="style3">Total No of Sodas</span></td>

			  <td><span class="style3">Total</span></td>
		</tr>
	      <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
						echo "<td>".$res['rid']."</td>";

			echo "<td>".$res['no']."</td>";

			echo "<td>".$res['seating']."</td>";
			echo "<td>".$res['location']."</td>";

			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['time']."</td>";

			echo "<td>".$res['popcorn']."</td>";
			echo "<td>".$res['soda']."</td>";

			echo "<td>".$res['total']."</td>";
                             
				echo "</tr>";	
		}
		?>
		
		
		  <?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM libseat ORDER BY rid DESC LIMIT 1;";
 $query= $con->query($sql)
?>


 <table width='21%' height="10%" border="1" cellspacing="0" style="margin-right:76%;" >
	    <tr>
					     
												<td><div  class="style6">Seat no.</div></td>
						<td><div class="style6">Seat no.</div></td>

	    </tr>
	    <?php
		// Fetch the next row of a result set as an associative array
				$i=0;

		while ($res = $query->fetch_assoc()) {
			echo "<tr>";

						echo "<td>".$res['a3']."</td>";
			echo "<td>".$res['a4']."</td>";

			
		}
		?>
        </table>
		
		
        </table>
		</div>
      </div>
</div>
    <div align="center">
      <p>&nbsp;</p>
      <button type="button" class="btn btn-dark" onClick="myFunction()">Print Report</button>
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
    popupWin.document.write('<html><body onload="window.print()"<center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #999999 0px 0px 20px, #999999 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #999999 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>Movie Ticket Receipt</u></h1></div><h3><u></u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>