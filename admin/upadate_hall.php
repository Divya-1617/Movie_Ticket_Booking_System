<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
body {
	background-image: url(../image/33.jpeg);
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php

include('../database/dbcon.php');


	// Get id from URL parameter

	$h_id = $_GET['h_id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM halls WHERE h_id = $h_id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];

                      $image = $resultData['image'];

	$hall_type = $resultData['hall_type'];
       	$contact = $resultData['contact'];
	$email = $resultData['email'];
	$hall_address = $resultData['hall_address'];
	
	$booking_cost = $resultData['booking_cost'];
       	$food_cost = $resultData['food_cost'];
	$capacity = $resultData['capacity'];
	$area = $resultData['area'];

	
	$service = $resultData['service'];

?>

<html>

<head>
<title>Edit Data</title>

</head>


<body>
<center>    
<h2>Edit Data</h2>
 </center>  

			
 
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
<center>
        <div class="main">		
<table border="0">
			
<tr> 	
<td>Name</td>
				
	<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
		</tr>
			
<tr> 
	<td>Image</td>
				
	 <td><input type="file" name="image" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
       
			</tr>
			
<tr> 
	<td>Hall Type</td>
				
	<td><input type="text" name="hall_type" value="<?php echo $hall_type; ?>"></td>
		</tr>

			
<tr> 
	<td>Contact</td>
				
	<td><input type="text" name="contact" value="<?php echo $contact; ?>"></td>
		</tr>			
<tr> 
	<td>Email</td>
				
	<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
		</tr>			
<tr> 
	<td>Address</td>
				
	<td><input type="text" name="hall_address" value="<?php echo $hall_address; ?>"></td>
		</tr>	
<tr> 
	<td>Booking cost</td>
				
	<td><input type="text" name="booking_cost" value="<?php echo $booking_cost; ?>"></td>
		</tr>			
<tr> 
	<td>Food cost</td>
				
	<td><input type="text" name="food_cost" value="<?php echo $food_cost; ?>"></td>
		</tr>			
<tr> 
	<td>Capacity</td>
				
	<td><input type="text" name="capacity" value="<?php echo $capacity; ?>"></td>
		</tr>	
								
<tr>
<tr> 
	<td>Area</td>
				
	<td><input type="text" name="area" value="<?php echo $area; ?>"></td>
		</tr>			
<tr> 
	<td>Service</td>
				
	<td><input type="text" name="service" value="<?php echo $service; ?>"></td>
		</tr>			
	
								
	<td><input type="hidden" name="h_id" value=<?php echo $h_id; ?>></td>
				<td><input type="submit" name="update" class = 'btn btn-danger m-2' value="Update"></td>
			</tr>
		
</table>
</div>
</center>
</form>

</body>

</html>
<?php
// Include the database connection file
include('../Database/dbcon.php');
if (isset($_POST['update'])) 
{

	$h_id = $_POST['h_id'];
    $name = $_POST['name'];

    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../image/".$img_name;
    move_uploaded_file($img_loc,'../image/'.$img_name);
    
    $hall_type = $_POST['hall_type'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $hall_address = $_POST['hall_address'];
    $booking_cost = $_POST['booking_cost'];
    $food_cost= $_POST['food_cost'];
    $capacity = $_POST['capacity'];
    $area = $_POST['area'];
    $service = $_POST['service'];
  

	$sql = "UPDATE halls SET  `name`='$name',`image`='$img_des',`hall_type`='$hall_type',`contact`='$contact',`email`='$email',`hall_address`='$hall_address',`booking_cost`='$booking_cost',`food_cost`='$food_cost',`capacity`='$capacity',`area`='$area',`service`='$service' WHERE h_id = '$h_id' ";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="manage_hall.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="update_halls.php?h_id=$h_id";
            </script>';
        }
}

?>

