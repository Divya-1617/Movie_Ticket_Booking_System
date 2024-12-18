<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Selection with Theater Screen</title>
    <style>

        body{
            background-color: #252528;
        }
        /* Add your CSS styles here */
        .theater {
            width: 600px;
            margin: 30px auto;
            text-align: center;
            margin-top: 50px;
        }

        .screen {
            /* background-color: #333;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            margin-bottom: 10px;
            width: 470px;
            margin-left: 55px; */

            background-color: #171616;
            height: 150px;
            width: 83%;
            margin: 0 0 0 51px;
            transform: rotateX(-45deg);
            box-shadow: 2px 3px 10px rgba(255, 255, 255, 0.7);
            perspective: 1000px;
            margin-bottom: 30px;
            color: white;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .seat {
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            cursor: pointer;
            color: whitesmoke;
            
            background-color: #444451;
            height: 30px;
            width: 35px;
            margin: 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .seat.selected {
            background-color: #fafcfc;
            color: #171616;
        }
        
        #total-seats-input, #total-amount-input {
            width: 50px;
            text-align: center;
            margin-bottom: 5px;

        }

        #total-amount-input{
            margin-left: 3%;
        }

        label #total-amount-input{
            margin-left: 50%;
        }

        label{
            margin-left: 40%;
            color: rgb(137, 129, 129);

        }

        #submit-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-left: 40%;
           
        }
         button{
            margin-left: 45%;

         }


        .seat.selected {
  background-color: #6feaf6;
}

.seat.occupied {
  background-color: #fff;
  color: black;
}

.seat:nth-of-type(2) {
  margin-right: 18px;
}

.seat:nth-last-of-type(2) {
  margin-left: 18px;
}

.seat:not(.occupied):hover {
  cursor: pointer;
  transform: scale(1.2);
}

.showcase .seat:not(.occupied):hover {
  cursor: default;
  transform: scale(1);
}

.showcase {
 
  padding: 5px 10px;
  border-radius: 5px;
  color: #777;
  list-style-type: none;
  display: flex;
  justify-content:start;
  margin-left: 130px;
}

.showcase li {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 10px;
}

.showcase li small {
  margin-left: 2px;
}


    </style>
</head>
<body>

    <h2 style="color: white;margin-left: 42%;margin-top: 50px;">Select Your Prefered Seat</h2>
    
    <div class="theater">
        <div class="screen"></div>

        <ul class="showcase">
            <li>
              <div class="seat" ></div>
              <small>N/A</small>
            </li>
            <li>
              <div class="seat selected"></div>
              <small>Selected</small>
            </li>
            <li>
              <div class="seat occupied"></div>
              <small>Occupied</small>
            </li>
          </ul>


        <!-- Generate theater layout using only HTML -->
		<form action="seat2.php" method="post">
        <div class="row">
            <div class="seat" name="a1">A1</div>
            <div class="seat" name="a2">A2</div>
            <div class="seat occupied" name="a3">A3</div>
            <div class="seat" name="a4">A4</div>
            <div class="seat" name="a5">A5</div>
			<div class="seat occupied" name="a6">A6</div>
            <div class="seat">A7</div>
            <div class="seat">A8</div>
            <div class="seat">A9</div>
            <div class="seat">A10</div>
			 <div class="seat">A11</div>
            <div class="seat">A12</div>
        </div>
        <div class="row">
            <div class="seat">B1</div>
            <div class="seat">B2</div>
            <div class="seat">B3</div>
            <div class="seat">B4</div>
            <div class="seat">B5</div>
			<div class="seat">B6</div>
          <div class="seat">B7</div>
          <div class="seat">B8</div>
          <div class="seat">B9</div>
          <div class="seat">B10</div>
		   <div class="seat occupied">B11</div>
            <div class="seat occupied">B12</div>
        </div>
		 <div class="row">
            <div class="seat">C1</div>
            <div class="seat">C2</div>
            <div class="seat occupied">C3</div>
            <div class="seat occupied">C4</div>
            <div class="seat occupied">C5</div>
			<div class="seat occupied">C6</div>
            <div class="seat occupied">C7</div>
            <div class="seat">C8</div>
            <div class="seat">C9</div>
            <div class="seat">C10</div>
		    <div class="seat">C11</div>
            <div class="seat">C12</div>
        </div>
		
		<div class="row">
            <div class="seat">D1</div>
            <div class="seat occupied">D2</div>
            <div class="seat">D3</div>
            <div class="seat occupied">D4</div>
            <div class="seat occupied">D5</div>
			<div class="seat">D6</div>
            <div class="seat">D7</div>
            <div class="seat">D8</div>
            <div class="seat occupied">D9</div>
            <div class="seat occupied">D10</div>
		    <div class="seat">D11</div>
            <div class="seat">D12</div>
        </div>
		
		<div class="row">
            <div class="seat">E1</div>
            <div class="seat">E2</div>
            <div class="seat">E3</div>
            <div class="seat occupied">E4</div>
            <div class="seat occupied">E5</div>
			<div class="seat">E6</div>
            <div class="seat">E7</div>
            <div class="seat">E8</div>
            <div class="seat">E9</div>
            <div class="seat">E10</div>
		    <div class="seat occupied">E11</div>
            <div class="seat">E12</div>
        </div>
		
		<div class="row">
            <div class="seat">F1</div>
            <div class="seat occupied">F2</div>
            <div class="seat occupied">F3</div>
            <div class="seat occupied">F4</div>
            <div class="seat">F5</div>
			<div class="seat occupied">F6</div>
            <div class="seat">F7</div>
            <div class="seat">F8</div>
            <div class="seat occupied">F9</div>
            <div class="seat">F10</div>
		    <div class="seat">F11</div>
            <div class="seat occupied">F12</div>
        </div>
        <!-- Add more rows as needed -->
    </div>

    <div>
        <label>Total Seats Selected:</label>
        <input type="text" name="seats" id="total-seats-input" value="0" readonly>
    </div>
	<br>
    <div>
        <label>Total Amount:</label>
        <input type="text" name="amount" id="total-amount-input" value="Rs0" readonly>
    </div>
    <br>
    <button name="submit">Submit</button>
	</form>
    
    <script>
        // JavaScript to handle seat selection and calculate total number of selected seats and total amount
        const seats = document.querySelectorAll('.seat');
        const totalSeatsInput = document.getElementById('total-seats-input');
        const totalAmountInput = document.getElementById('total-amount-input');
        const submitButton = document.getElementById('submit-button');
        let selectedSeats = 0;
        let selectedAmount = 0;

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                if (!seat.classList.contains('selected')) {
                    seat.classList.add('selected');
                    selectedSeats++;
                    selectedAmount += 250; // Assuming each seat costs $10
                } else {
                    seat.classList.remove('selected');
                    selectedSeats--;
                    selectedAmount -= 250;
                }

                totalSeatsInput.value = selectedSeats;
                totalAmountInput.value = 'Rs.' + selectedAmount;
            });
        });

        submitButton.addEventListener('click', () => {
            alert(`You have selected ${selectedSeats} seats for a total of Rs${selectedAmount}.`);
        });
    </script>
</body>
</html>






<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$seats=$_POST['seats'];
$amount=$_POST['amount'];





$qry="INSERT INTO `seat`( `rid`,`seats`,`amount`) VALUES(NULL,'$seats','$amount')";
$run=mysqli_query($con,$qry);

if($run==true)
{
	echo '<script>alert("Pyment paid Successfully...")</script>';
   echo '<script>window.location.href ="display.php";</script>';
}
else
{
	echo '<script>alert("Pyment error...")</script>';
   echo '<script>window.location.href = "seat2.php";</script>';
}
}
?>