<?php
extract($_POST);
// print_r($_FILES);

$con=mysqli_connect('localhost','root','','moviedb') ;

$image = "";
if ($_FILES['image']['name']!="")
{
	$image = time().$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"uploads/$image");

}
	$sql = "INSERT INTO `image`(`gallery_image`, `title`) VALUES ('$image','$title')";
	mysqli_query($con,$sql);

header("location:index.php");

?>