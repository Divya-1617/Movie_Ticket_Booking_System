ADMIN - UPADTE DELETE


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

@import url("https://fonts.googleapis.com/css2?family=Asap&family=Roboto:ital,wght@0,500;0,900;1,500&display=swap");

top {
  width: 100%;
  height: 40vh;
  display: inline-block;
  flex-direction: column;
  align-items: center;
}
.top h1 {
  position: relative;
  left: 5%;
  width: 80%;
  font-size: 60px;
  font-weight: 600;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;   

  background-image: repeating-radial-gradient(farthest-side at 5px 5px,#553c9a, #ee4b2b, #553c9a);
}

            </style>

</head>
<body>
<?php include 'include/tool.php';?>
       <p>&nbsp;</p>
<center>
<div class ="top">
<h1>MANAGE HALLS
</h1></div>
       <table align="center">
        <td><a href='insert.php? h_id= $row[h_id]' class = 'btn btn-danger'>  Insert  </a></td>
		<td>&nbsp </td><td>&nbsp </td><br>
                <td><a href='Halls_rpt.php? h_id= $row[h_id]' class = 'btn btn-danger'>  View Report  </a></td>
</table></center>

		<div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Hall type</th>
      <th scope="col">contact</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Booking cost</th>
      <th scope="col">Food cost</th>
      <th scope="col">Capacity</th>
      <th scope="col">Area</th>
      <th scope="col">Service</th>
      
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
     
      
      
      
      
    </tr>
  </thead>
  <tbody>
     
        <?php
include('../database/dbcon.php');
        $pic = mysqli_query($con,"SELECT * FROM `halls`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[h_id]</td>
                <td>$row[name]</td>
                
                <td><img src='$row[image]'  width = '150px'  height = '70px'></td>
 		<td>$row[hall_type]</td>
                <td>$row[contact]</td>
 		<td>$row[email]</td>
                <td>$row[hall_address]</td>
 		<td>$row[booking_cost]</td>
                <td>$row[food_cost]</td>
		<td>$row[capacity]</td>
                <td>$row[area]</td>
 		<td>$row[service]</td>
                
 		
                <td><a href='delete.php? h_id= $row[h_id]' class = 'btn btn-danger'>Delete</a></td>
                <td><a href='update.php? h_id= $row[h_id]' class = 'btn btn-danger'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        
        ?>


  </tbody>
</table>
</div>
</body>
</html>