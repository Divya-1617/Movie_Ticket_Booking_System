<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM iseat ORDER BY rid DESC LIMIT 1;";
 $query= $con->query($sql)
?>

<html>
<head>	
	
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: black;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color:black;

}

/* h2 {
   
    text-align: center;
}
 */


.image-text-section {
	display: flex;
	width: 100%;
	padding: 0px 50px;
}

.image-text-section .img-container {
	width: 60%;
    margin-top: 90px;
}

.image-text-section .img-container img {
	height: 550px;
	width: 500px;
	padding-left:50px;
}



.image-text-section .text-container {
	width: 40%;
    
}

.image-text-section .text-container h1 {

	margin-bottom: 20px;
	
}


 

.form {
    width: 300px;
    margin: 0 auto;
    margin: 0 0 0 0;
    padding: 10px 40px 40px 40px;   
    border-radius: 10px 10px; 
}

label {
    display: block;
    margin-bottom: 5px;
}

select, input {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border-radius: 5px 5px;
}

button {
    display: block;
    width: 50%;
	height:50%;
    background-color: #0b335b;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 20px 20px;
    align-items: center;
    margin: 0 0 0 70px;
}

#total {
    font-weight: bold;
    text-align: center;
    margin-top: 10px;
	 width: 50%;
	height:50%;
}

button:hover{
    background-color: #0429ad;
    cursor: pointer;
}

.submit{
display: block;
    width: 50%;
    background-color: #0b335b;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 20px 20px;
    align-items: center;
    margin: 0 0 0 70px;
	}
	

</style>
</head>

<body>

<section class="image-text-section">
    <div class="img-container">
	<img src="../photos/subhedar" width="50%">
    </div>

    
    <div class="text-container" >
	
       <h1 style="color: white;">Movie Ticket and Food Counter</h1>
        <div class="form" style="background-color: rgb(240, 240, 240);">
            
			 <form id="booking-form" method="post" action="index_display.php">
			
        <div class="ticket">
      
				 <h2>Movie Ticket</h2>
			
			

	  <table width='80%' border="1" cellspacing="0" style="text-align:center; margin-left:10px;">
	    <tr>
								<td><div align="center" class="style6">Customer ID</div></td>

			      <td height="47"><div align="center" class="style3 style5" >Total Seats</div></td>

			  
						<td><div align="center" class="style6">amount</div></td>
												<td><div align="center" class="style6">Seat no.</div></td>
						<td><div align="center" class="style6">Seat no.</div></td>

	    </tr>
	    <?php
		// Fetch the next row of a result set as an associative array
				$i=0;

		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
						echo "<td>".$res['rid']."</td>";

			echo "<td>".$res['seats']."</td>";
			echo "<td>".$res['amount']."</td>";
						echo "<td>".$res['a9']."</td>";
			echo "<td>".$res['a10']."</td>";

			
		}
		?>
      </table>
	  
	    <label for="movie">Selected Movie:</label>
            <select id="movie" name="movie">
                <option value="150">Subhedar</option>
                
            </select>
			
			 
            
			<label for="seating">Seating Type:</label>
            <select id="seating" name="seating">
                <option value="standard">Standard</option>
                <option value="premium" id="premium">Premium (+50Rs)</option>
            </select>
			<label for="location">Where to see:</label>

            <select id="location" name="location">
                <option value="Asha Theater">Asha Theater</option>
                <option value="Mahesh Theater">Mahesh Theater</option>
                <option value="Konihoor Mall">Konihoor Mall </option>

            </select>

            <label for="date">Select Date:</label>
            <select id="date" name="date">
                <option value="September 6, 2023">September 6, 2023</option>
                <option value="September 7, 2023">September 7, 2023</option>
                <option value="September 8, 2023">September 8, 2023</option>
                <!-- Add more date options as needed -->
            </select>
        
            <br>
        
            <label for="time">Select Time:</label>
            <select id="time" name="time">
                <option value="9:00 - 12:00 AM">9:00 - 12:00 AM</option>
                <option value="1:00 - 4:00 PM">1:00 - 4:00 PM</option>
                <option value="4:30 - 7:00 PM">4:30 - 7:00 PM</option>
                <!-- Add more time options as needed -->
            </select>
        
            <br>

        </div>
         <div class="container">
        <div class="section">
            <label for="ticketCount">Select the number of tickets:</label>
            <input type="number" name="no" id="ticketCount" min="0" value="0">
        </div>

        <div class="section">
            <h2>Food Items</h2>
            <label for="popcorn">Popcorn(150):</label>
            <input type="number" name="popcorn" id="popcorn" min="0" value="0">
            <label for="soda">Soda(100):</label>
            <input type="number" name="soda" id="soda" min="0" value="0">
        </div>
    </div>

    <div class="total">
        <h2>Total Amount:</h2>
        <input type="text" name="total" id="totalAmount" readonly>
    </div>

		
		
		<input type="submit" class="submit"  value="submit" name="submit">
    </form>
          
           
    
  <script>
  const ticketCountInput = document.getElementById('ticketCount');
const popcornInput = document.getElementById('popcorn');
const sodaInput = document.getElementById('soda');
const totalAmountInput = document.getElementById('totalAmount');



// Event listeners for input changes
ticketCountInput.addEventListener('input', calculateTotal);
popcornInput.addEventListener('input', calculateTotal);
sodaInput.addEventListener('input', calculateTotal);

function calculateTotal() {
    const ticketCount = parseInt(ticketCountInput.value);
    const popcornCount = parseInt(popcornInput.value);
    const sodaCount = parseInt(sodaInput.value);

    const ticketPrice = 300; // Price per movie ticket
    const popcornPrice = 150; // Price per popcorn
    const sodaPrice = 100;
	
    const totalAmount = ticketCount * ticketPrice + popcornCount * popcornPrice + sodaCount * sodaPrice ;

    totalAmountInput.value = totalAmount.toFixed(2);
}


</script>    
        
   
</body>

</html>








<?php

include('dbcon.php');
if(isset($_POST['submit']))
{
$no=$_POST['no'];
$popcorn=$_POST['popcorn'];
$soda=$_POST['soda'];
$seating=$_POST['seating'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];
$total=$_POST['total'];




$qry="INSERT INTO `ibooking`( `rid`,`no`,`popcorn`,`soda`,`seating`,`location`,`date`,`time`,`total`) VALUES(NULL,'$no','$popcorn','$soda','$seating','$location','$date','$time','$total')";
$run=mysqli_query($con,$qry);

if($run==true)
{
	echo '<script>alert("Ticket booked Successfully...")</script>';
   echo '<script>window.location.href = "index_payment.php";</script>';
}
else
{
	echo '<script>alert("Ticket not booked...")</script>';
   echo '<script>window.location.href = "index_display.php";</script>';
}
}
?>
