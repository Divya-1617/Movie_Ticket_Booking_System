<?php
extract($_GET);
$con=mysqli_connect('localhost','root','','moviedb') ;
$result = mysqli_query($con,"SELECT * FROM library WHERE library='$id'");
$data = mysqli_fetch_assoc($result);
?>
<form action="update_save_library.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" class="form-control" value="<?=$data['library']?>" >
    <input type="text" name="title" placeholder="Title" class="form-control" value="<?=$data['title']?>"><br><br>
    <input type="text" name="price" placeholder="Price" class="form-control" value="<?=$data['price']?>"><br><br>
    <input type="text" name="language" placeholder="Language" class="form-control" value="<?=$data['language']?>"><br><br>
    <input type="file" name="image" class="form-control" value="<?=$data['image']?>">
    <input type="hidden" name="old_image" class="form-control" value="<?=$data['image']?>">

    <img src="uploads/<?=$data['image']?>" width="100px"/><br><br>

    <input type="date" name="date" placeholder="Date" class="form-control" value="<?=$data['date']?>"><br><br>
    <input type="text" name="action" placeholder="Action" class="form-control" value="<?=$data['action']?>"><br><br>
    <button>Save</button>
</form>
