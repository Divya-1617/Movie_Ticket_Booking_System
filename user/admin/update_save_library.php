<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','moviedb') ;
$image = "";
if ($_FILES['image']['name'] != "")
{
	unlink("uploads/".$old_image);
	$image = time().$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"uploads/$image");

	$sql = "UPDATE library SET image='$image' WHERE library='$id'";
	mysqli_query($con,$sql);
}

$sql = "UPDATE library SET `title`='$title', `price`='$price',`language`='$language',`date`='$date',`action`='$action' WHERE library='$id' ";
mysqli_query($con,$sql);
header("location:library.php");

?>