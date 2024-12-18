<?php

	include("dbcon.php");


	// Get id from URL parameter

	$id = $_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM booking WHERE  rid=$id";


 	$query= $con -> query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];

	$no = $resultData['no'];

		$seating = $resultData['seating'];
		
		$location = $resultData['location'];

	$popcorn = $resultData['popcorn'];

		$soda = $resultData['soda'];






?>

<html>

<head>
<title>Edit Data</title>

</head>


<body>
    
<h2>Edit Data</h2>
   
 
	
	
<form name="edit" method="post" action="admin_ticket_edit.php?id=<?php echo $id; ?>">
		
<table border="0">
			
<tr> 	
<td>Name of customer</td>
				
	<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
	</tr>
			
<tr> 
	<td>Number of seats</td>
				
	<td><input type="text" name="no" value="<?php echo $no; ?>"></td>
	</tr>

<tr>
	<td>Seating</td>
				
	<td><input type="text" name="seating" value="<?php echo $seating; ?>"></td>
	</tr>
	<tr>
	<td>Location</td>
				
	<td><input type="text" name="location" value="<?php echo $location; ?>"></td>
	</tr>
			
<tr>
	<td>No of popcorn</td>
				
	<td><input type="text" name="popcorn" value="<?php echo $popcorn; ?>"></td>
	</tr>

<tr>
	<td>No of soda</td>
				
	<td><input type="text" name="soda" value="<?php echo $soda; ?>"></td>
	
	
	</tr>	
			
						
						
					
		
			
<tr>
				
	<td><input type="hidden" name="rid" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
	</tr>
		
</table>
	
</form>


</body>

</html>
<?php
// Include the database connection file



if (isset($_POST['update'])) 
{

	// Escape special characters in a string for use in an SQL statement
	$id = $_POST['rid'];
	$name =  $_POST['name'];
	$no =  $_POST['no'];
	$seating =  $_POST['seating'];
	$location =  $_POST['location'];
	$popcorn =  $_POST['popcorn'];
	$soda =  $_POST['soda'];
	 
	$sql = "UPDATE booking SET `name` = '$name', `no` = '$no', `seating` = '$seating',`location` = '$location', `popcorn` = '$popcorn', `soda` = '$soda' WHERE `rid` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="admin_ticket.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="admin_ticket_edit.php?id=$id";
            </script>';
        }
}

?>