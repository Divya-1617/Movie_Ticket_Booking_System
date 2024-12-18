<?php
$con=mysqli_connect('localhost','root','','moviedb') ;
echo "connection is done";

if ($con==false)
{
echo "connection is  not done";
}

?>