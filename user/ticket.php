<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket and Food Counter</title>
    <script src="https://kit.fontawesome.com/0861b9b03a.js" crossorigin="anonymous"></script>
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
	height: 500px;
	width: 700px;
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
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Ticket and Food Counter</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
   <a href="seat.php"><i class="fa-solid fa-arrow-left" style="color: #ffffff; height: 40px; width: 40px;"></i></a>
           
<section class="image-text-section">
    <div class="img-container">
    <img src="../photos/kedarnath movie" alt="">
    </div>

    
    <div class="text-container" >
	
       <h1 style="color: white;">Movie Ticket and Food Counter</h1>
        <div class="form" style="background-color: rgb(240, 240, 240);">
            
			 <form id="booking-form" method="post" action="ticket.php">
			
        <div class="ticket">
            <h2>Movie Ticket</h2>
			
			 <label>name of customer</label>
			 <input type="text" name="name">
			
            <label for="movie">Select a Movie:</label>
            <select id="movie" name="movie">
                <option value="200">Kedarnath</option>
                
            </select>
            <label for="tickets">Number of Tickets:</label>
            <input type="number" id="tickets" name="no" min="1">
            <label for="seating">Seating Type:</label>
            <select id="seating" name="seating">
                <option value="standard">Standard</option>
                <option value="premium">Premium (+50Rs)</option>
            </select>
			<label for="location">Where to see:</label>

            <select id="location" name="location">
                <option value="Asha Theater">Asha Theater</option>
                <option value="Mahesh Theater">Mahesh Theater</option>
                <option value="Konihoor Mall">Konihoor Mall </option>

            </select>

            <label for="date">Select Date:</label>
            <select id="date" name="date">
                <option value="2023-09-06">September 6, 2023</option>
                <option value="2023-09-07">September 7, 2023</option>
                <option value="2023-09-08">September 8, 2023</option>
                <!-- Add more date options as needed -->
            </select>
        
            <br>
        
            <label for="time">Select Time:</label>
            <select id="time" name="time">
                <option value="09:00 AM">9:00 AM</option>
                <option value="01:00 PM">1:00 PM</option>
                <option value="04:30 PM">4:30 PM</option>
                <!-- Add more time options as needed -->
            </select>
        
            <br>

        </div>
        <div class="food">
            <h2>Food Counter</h2>
            <label for="popcorn">Popcorn (50Rs.each):</label>
            <input type="number" id="popcorn" name="popcorn" min="0">
            <label for="sodas">Sodas (50Rs.each):</label>
            <input type="number" id="sodas" name="soda" min="0">
        </div>
        <button type="button" id="calculate">Calculate Total</button>
        <div id="total">Total Cost: Rs.0</div>
		
		
		
		<input type="submit" class="submit"  value="submit" name="submit">
    </form>
          
           
    
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const calculateButton = document.getElementById("calculate");
    const totalOutput = document.getElementById("total");

    calculateButton.addEventListener("click", function() {
        const moviePrice = parseFloat(document.getElementById("movie").value);
        const ticketCount = parseInt(document.getElementById("tickets").value);
        const popcornCount = parseInt(document.getElementById("popcorn").value);
        const sodaCount = parseInt(document.getElementById("sodas").value);
        const seatingType = document.getElementById("seating").value;

        let totalCost = moviePrice * ticketCount;
        totalCost += (popcornCount * 50) + (sodaCount * 50);

        if (seatingType === "premium") {
            totalCost += 50 * ticketCount;
        }

        totalOutput.textContent = `Total Cost: Rs${totalCost}`;
    });
}); 


</script>    
        
   
</body>

</html>










<?php

include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];

$no=$_POST['no'];
$popcorn=$_POST['popcorn'];
$soda=$_POST['soda'];
$seating=$_POST['seating'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];




$qry="INSERT INTO `booking`( `rid`,`name`,`no`,`popcorn`,`soda`,`seating`,`location`,`date`,`time`) VALUES(NULL,'$name','$no','$popcorn','$soda','$seating','$location','$date','$time')";
$run=mysqli_query($con,$qry);

if($run==true)
{
	echo '<script>alert("Ticket booked Successfully...")</script>';
   echo '<script>window.location.href = "payment1.php";</script>';
}
else
{
	echo '<script>alert("Ticket not booked...")</script>';
   echo '<script>window.location.href = "ticket.php";</script>';
}
}
?>
