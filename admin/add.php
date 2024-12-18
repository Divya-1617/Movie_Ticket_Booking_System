<html>
<head>
	<title>Add User</title>
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
    </style>
</head>

<body>
	<h2 align="center">&nbsp;</h2>
	<h2 align="center">Add User </h2>
	<form action="add.php" method="post" name="add">
		<div align="center">
		  <p>&nbsp;</p>
		  <table width="38%" border="0" bgcolor="#003366">
		    <tr> 
		      <td height="56"><div align="center" class="style1">
		        <p>Name</p>
		        </div></td>
			    <td><input type="text" name="name"></td>
			  </tr>
		    <tr> 
    <td height="42"><div align="center" class="style1">Email</div></td>
				  <td><input type="text" name="email"></td>
			  </tr>
		    
  <tr> 
    <td height="42"><div align="center" class="style1">Password</div></td>
				  <td><input type="text" name="password"></td>
			  </tr>
		    

		    <tr> 
		      <td><p align="center">&nbsp;</p>
	          <p align="center">&nbsp;</p></td>
			    <td><input type="submit" name="submit" value="Add"></td>

		  </tr>
		    </table>
	  </div>
</form>
</body>
</html>

<?php

include("dbcon.php");

if (isset($_POST['submit'])) {
	
	$name =  $_POST['name'];
	$email =  $_POST['email'];
$password =  $_POST['password'];

		$sql= "INSERT INTO signup (`name`, `email`, `password``) VALUES ('$name', '$email', '$password')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Add !!");
                    window.location="admin_user.php";
					
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Add");
            window.location="add_user.php";
            </script>';
        }
}
?>