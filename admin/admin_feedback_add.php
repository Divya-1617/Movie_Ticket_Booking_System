<html>
<head>
	<title>Add Data</title>
    <style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
.style4 {color: #FFFFFF}
.table{
padding-top:20px;
text-align:center}
.add{
text-align:center;
margin-right:50%;
}
-->
    </style>
</head>

<body>
	<h2 align="center">&nbsp;</h2>
	<h2 align="center"><strong>Add Feedback </strong></h2>
	<form action="admin_feedback_add.php" method="post" name="add">
		<div align="center">
		  <p>&nbsp;</p>
		  <table class="table" width="30%" height="10%"  border="0" bgcolor="#333333">
		    <tr> 
		      <td><span class="style3">Name</span></td>
			    <td><strong>
		        <input type="text" name="name">
			    </strong></td>
		    </tr>
			
			
		    <tr> 
		      <td><span class="style3">Feedback</span></td>
			    <td><strong>
		        <textarea name="feedback"></textarea>
			    </strong></td>
		    </tr>
		    
		    
		    
		    
		    
		    <tr> 
		      <td><p class="style4">&nbsp;</p>
	          <p class="style4">&nbsp;</p></td>
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
	$feedback =  $_POST['feedback'];
	
	

		$sql= "INSERT INTO feedback (`name`, `feedback`) VALUES ('$name', '$feedback')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Add !!");
                    window.location="admin_feedback.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Add");
            window.location="admin_feedback_add.php";
            </script>';
        }
}
?>