<?php
    $con=mysqli_connect('localhost','root','','moviedb') ;

extract($_POST);

$image = "";
if ($_FILES['image']['name']!="")
{
	$image = time().$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"uploads/$image");
}

$sql = "INSERT INTO `category`(`title`, `language`, `date`, `action`, `image`) VALUES ('$title',$language','$date','$action','$image')";
mysqli_query($con,$sql);
header("location:category.php");

?>