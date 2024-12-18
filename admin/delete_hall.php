<?php
include('../database/dbcon.php');
 $ID = $_GET['h_id'];
mysqli_query($con,"DELETE FROM `halls` WHERE h_id = $ID");

header('location:manage_hall.php');

?>