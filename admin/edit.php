<?php

	include("dbcon.php");


	// Get id from URL parameter

	$id = $_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM signup WHERE  rid=$id";


 	$query= $con -> query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];

	$email = $resultData['email'];

		$password = $resultData['password'];





?>

<html>

<head>
<title>Edit Data</title>

</head>


<body>
    
<h2>Edit Data</h2>
   
 
	
	
<form name="edit" method="post" action="edit.php?id=<?php echo $id; ?>">
		
<table border="0">
			
<tr> 	
<td>Name</td>
				
	<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
	</tr>
			
<tr> 
	<td>Surname</td>
				
	<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
	</tr>


	<td>Password</td>
				
	<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
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
	$email =  $_POST['email'];
	$password =  $_POST['password'];
	 
	$sql = "UPDATE signup SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `rid` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="admin_user.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="edit.php?id=$id";
            </script>';
        }
}

?>