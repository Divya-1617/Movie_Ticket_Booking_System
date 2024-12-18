<?php
extract($_GET);
$con=mysqli_connect('localhost','root','','moviedb') ;
$result = mysqli_query($con,"SELECT * FROM index WHERE index='$id'");
$data = mysqli_fetch_assoc($result);
?>
<form action="update_save_library.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" class="form-control" value="<?=$data['index']?>" >
   
    <input type="file" name="image" class="form-control" value="<?=$data['image']?>">
    <input type="hidden" name="old_image" class="form-control" value="<?=$data['image']?>">

    <img src="uploads/<?=$data['image']?>" width="100px"/><br><br>


    <button>Save</button>
</form>
