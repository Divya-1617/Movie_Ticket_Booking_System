<?php

extract($_GET);
$con=mysqli_connect('localhost','root','','moviedb') ;


$sql = "DELETE FROM library WHERE library = '$id'";
mysqli_query($con,$sql);

header("location:library.php");

?>