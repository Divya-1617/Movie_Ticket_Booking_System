<?php
session_start();
error_reporting(0);

include('dbcon.php');
?>
	
		<div class="agileinfo-dot">
		<?php include_once('includes/header.php');?>
		<p align="right">
    

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <style>
  input{
    margin: 10px;


}
body {
	font-size: 90.5%;}
            </style>

</head>
<body>

       <p>&nbsp;</p>

<div class="container"> 
		   <table  class="table"  >
   <thead >
</thead>
  <tbody>
     
        <?php
include('../database/dbcon.php');
$ID = $_GET['h_id'];
        $pic = mysqli_query($con,"SELECT * FROM `halls` WHERE h_id = $ID");
        while($row = mysqli_fetch_array($pic)){
        echo "
  
        <img src='$row[image]'  width = '300px'  height = '300px' >
            <tr> <th >Id</th> 
                <td >$row[h_id]</td></tr>	
 </tr>
 <tr >
        <th >Name</th>  
         <td >$row[name]</td></tr>
 
 <tr>     
 	<th >Location</th>  
	 <td>$row[location]</td>
</tr>
 <tr>     
	 <th>contact</th>      
         <td>$row[contact]</td>
</tr>
   
 		
               
                
                
       ";
        }
        ?>


  
  </tbody>
</table>
</div>
</body>
