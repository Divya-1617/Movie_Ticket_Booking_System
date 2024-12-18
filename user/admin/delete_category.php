<?php

extract($_GET);
$con=mysqli_connect('localhost','root','','moviedb') ;


$sql = "DELETE FROM category WHERE category = '$id'";
mysqli_query($con,$sql);

header("location:category.php");

?>