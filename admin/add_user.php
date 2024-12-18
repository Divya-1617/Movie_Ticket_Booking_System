<html>
<head>
	<title>Add User</title>
    <style type="text/css">
<!--
.style1 {font-size: 24px;
color:#FFFFFF}
.table{
padding-top:10px;
margin-top:5px;
text-align:center}
.add{
text-align:center;
margin-right:50%;
}
h2{
margin-bottom:5px;}


-->
    </style>
</head>

<body>
	<p align="center">&nbsp;		</p>
	<h2 align="center"><strong>Add User </strong></h2>
	<div align="center">
	  <p>&nbsp;</p>
	
	<form action="add.php" method="post" name="add">
		<div align="center">
		  <p>&nbsp;</p>
		  <table class="table" width="30%" height="10%"  border="0" bgcolor="#333333">
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
		    
 
		      <td><p align="center">&nbsp;</p>
	          <p align="center">&nbsp;</p></td>
<td><strong>
		        <input class="add" type="submit" name="submit" value="Add">
			    </strong></td>
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
	$cpassword =  $_POST['cpassword'];

		$sql= "INSERT INTO signup (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Add !!");
                    window.location="dashboard.php";
					window.loaction="admin_user.php"
					
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