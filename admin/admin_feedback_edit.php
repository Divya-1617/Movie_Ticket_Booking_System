<?php

	include("dbcon.php");


	// Get id from URL parameter

	$id = $_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM feedback WHERE  rid=$id";


 	$query= $con -> query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];

	$feedback = $resultData['feedback'];

?>

<html>

<head>
<title>Edit Data</title>
<style type="text/css">
<!--
.style7 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>


<body>
    
<h2 align="center">&nbsp;</h2>
<h2 align="center"><strong>Edit Data</strong></h2>
<form name="edit" method="post" action="admin_feedback_edit.php?id=<?php echo $id; ?>">
		
  <div align="center">
    <p>&nbsp;</p>
    <table border="0">
      
      <tr> 	
        <td height="31"><span class="style7">Name</span></td>
				    
	<td><input name="name" type="text" value="<?php echo $name; ?>"></td>
	      </tr>
		  
		 
      
      <tr> 
        <td><span class="style7">Feedback</span></td>
				    
	<td><span class="style7">
	  <textarea name="feedback" value="<?php echo $feedback; ?>"></textarea>
	</span></td>
		      </tr>
      
      
      
      
      
      <tr>
        
        <td><p>
          <input name="rid" type="hidden" value=<?php echo $id; ?>>
        </p>
        <p>&nbsp; </p></td>
			      <td><input name="update" type="submit" value="Update"></td>
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

	$feedback =  $_POST['feedback'];
	

		
	 
	$sql = "UPDATE feedback SET `name` = '$name',`feedback` = '$feedback' WHERE `rid` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="admin_feedback.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="admin_feedback_edit.php?id=$id";
            </script>';
        }
}

?>