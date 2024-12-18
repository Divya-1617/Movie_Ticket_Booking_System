<?php

	include("dbcon.php");


	// Get id from URL parameter

	$id = $_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM movie WHERE  rid=$id";


 	$query= $con -> query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];
	$rate = $resultData['rate'];

	$type = $resultData['type'];



	



?>

<html>

<head>
<title>Edit Movie Data</title>
<style type="text/css">
<!--
.style7 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>


<body>
    
<h2 align="center">&nbsp;</h2>
<h2 align="center"><strong>Edit Movie Data</strong></h2>
<form name="edit" method="post" action="admin_movie_edit.php?id=<?php echo $id; ?>">
		
  <div align="center">
    <p>&nbsp;</p>
    <table border="0">
      
      <tr> 	
        <td height="31"><span class="style7">Name</span></td>
				    
	<td><input name="name" type="text" value="<?php echo $name; ?>"></td>
	      </tr>
		  
		 
		  <tr> 	
        <td height="31"><span class="style7">Rate</span></td>
				    
	<td><input name="rate" type="text" value="<?php echo $rate; ?>"></td>
	      </tr>
		 
		 
      <tr> 	
        <td height="31"><span class="style7">Type</span></td>
				    
	<td><input name="type" type="text" value="<?php echo $type; ?>"></td>
	      </tr>
      
      
      
      
      
      <tr>
        
        <td><p>
          <input name="rid" type="hidden" value=<?php echo $id; ?>>
        </p>
        </td><p>
			      <td><input name="update" type="submit" value="Update"></td>
				  </p>
		      </tr>
    </table>
  </div>
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
	$rate =  $_POST['rate'];

	$type =  $_POST['type'];
	

		
	 
	$sql = "UPDATE movie SET `name` = '$name',`rate` = '$rate',`type` = '$type' WHERE `rid` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="admin_movie.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="admin_movie_edit.php?id=$id";
            </script>';
        }
}

?>