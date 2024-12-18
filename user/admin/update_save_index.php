<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','moviedb') ;
$image = "";
if ($_FILES['image']['name'] != "")
{
	unlink("uploads/".$old_image);
	$image = time().$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"uploads/$image");

	$sql = "UPDATE index SET image='$image' WHERE index='$id'";
	mysqli_query($con,$sql);
}

$sql = "UPDATE index SET `image`='$image' WHERE index='$id' ";
mysqli_query($con,$sql);
header("location:index.php");

?>