<?php

extract($_GET);
$con=mysqli_connect('localhost','root','','moviedb') ;


$sql = "DELETE FROM index WHERE index = '$id'";
mysqli_query($con,$sql);

header("location:index.php");

?>