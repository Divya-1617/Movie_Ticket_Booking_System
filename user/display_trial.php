<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM ibooking ORDER BY rid DESC LIMIT 1;";
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
            <h1>Movie: Subhedhar</h1>
        </header>
		
		
		<div class="movie-info">

	<div id="rpt">
	  <div align="center">
	    <p>&nbsp;</p>
	  
	     <table width='97%' height="19%"  cellspacing="0">
	      <tr align="center">
		   <tr><td><span class="style3"><strong>Booking ID:-</strong></span></td></tr>
			  <tr><td><span class="style3"><strong>Total No of Seats:-</strong></span></td></tr>

			 <tr><td><span class="style3"><strong>Seating Type:-</strong></span></td></tr>
			   <tr><td><span class="style3"><strong>Location Type:-</strong></span></td></tr>

			  <tr><td><span class="style3"><strong>Show Date:-</strong></span></td></tr>
			  <tr> <td><span class="style3"><strong>Show Time:-</strong></span></td></tr>

			  <tr><td><span class="style3"><strong>Total No of Popcorns:-</strong></span></td></tr>
			   <tr><td><span class="style3"><strong>Total No of Sodas:-</strong></span></td></tr>

			  <tr><td><span class="style3"><strong>Total:-</strong></span></td></tr>
		</tr>
	     
        </table>
		 <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {

						echo "<h3>".$res['rid']."</h3>";

			echo "<h3>".$res['no']."</h3>";

			echo "<h3>".$res['seating']."</h3>";
			echo "<h3>".$res['location']."</h3>";

			echo "<h3>".$res['date']."</h3>";
			echo "<h3>".$res['time']."</h3>";

			echo "<h3>".$res['popcorn']."</h3>";
			echo "<h3>".$res['soda']."</h3>";

			echo "<h3>".$res['total']."</h3>";
                             
				echo "</tr>";	
		}
		?>
		</div>
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