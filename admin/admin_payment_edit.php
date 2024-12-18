<?php

	include("dbcon.php");


	// Get id from URL parameter

	$id = $_GET['id'];

	
// Select data associated with this particular id

	$sql=  "SELECT * FROM payment WHERE  rid=$id";


 	$query= $con -> query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


	$name = $resultData['name'];

$cno = $resultData['cno'];

$expiry = $resultData['expiry'];

$expiry2 = $resultData['expiry2'];

$cvv = $resultData['cvv'];


	



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
<form name="edit" method="post" action="admin_payment_edit.php?id=<?php echo $id; ?>">
		
  <div align="center">
    <p>&nbsp;</p>
    <table border="0">
      
      <tr> 	
        <td height="31"><span class="style7">Name</span></td>
				    
	<td><input name="name" type="text" value="<?php echo $name; ?>"></td>
	      </tr>
		  
		 
      
      <tr> 	
        <td height="31"><span class="style7">Card No</span></td>
				    
	<td><input name="cno" type="text" value="<?php echo $cno; ?>"></td>
	      </tr>
      
	  <tr> 	
        <td height="31"><span class="style7">Expiry Month</span></td>
				    
	<td><input name="expiry" type="text" value="<?php echo $expiry; ?>"></td>
	      </tr>
		  
		  <tr> 	
        <td height="31"><span class="style7">Expiry Year</span></td>
				    
	<td><input name="expiry2" type="text" value="<?php echo $expiry2; ?>"></td>
	      </tr>
      
      <tr> 	
        <td height="31"><span class="style7">CVV</span></td>
				    
	<td><input name="cvv" type="text" value="<?php echo $cvv; ?>"></td>
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
	
$name=$_POST['name'];
$cno=$_POST['cno'];
$expiry=$_POST['expiry'];
$expiry2=$_POST['expiry2'];
$cvv=$_POST['cvv'];
	

		
	 
	$sql = "UPDATE payment SET `name` = '$name',`cno` = '$cno',`expiry` = '$expiry',`expiry2` = '$expiry2',`cvv` = '$cvv' WHERE `rid` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="admin_payment.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="admin_payment_edit.php?id=$id";
            </script>';
        }
}

?>