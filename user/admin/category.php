<form action="save_category.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" class="form-control"><br><br>
    <input type="text" name="language" placeholder="Language" class="form-control"><br><br>
    <input type="file" name="image" class="form-control"><br><br>
    <input type="date" name="date" placeholder="Date" class="form-control"><br><br>
    <input type="text" name="action" placeholder="Type" class="form-control"><br><br>
    <button>Save</button>
</form>


<?php

$con=mysqli_connect('localhost','root','','moviedb') ;
$sql="SELECT * FROM category";
$data = mysqli_query($con,$sql);

?>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>Action</td>
        <td>S.NO.</td>
        <td>Title</td>
        <td>Language</td>
        <td>Date</td>
        <td>Type</td>
        <td>Image</td>
</tr>
        <?php
        foreach($data as $key => $row)
        {
            ?>
    <tr>
        <td>
            <a href="update_category.php?id=<?=$row['category']?>"><button>Edit</button></a>
            <a href="delete_category.php?id=<?=$row['category']?>"><button>Delete</button></a>
        </td>
        <td><?=$key+1?></td>
        <td><?=$row['title']?></td>
        <td><?=$row['language']?></td>
        <td><?=$row['date']?></td>
        <td><?=$row['action']?></td>
        <td>
            <img src="uploads/<?=$row['image']?>" alt="" width="50px">
        </td>
        </tr>
            <?php
        }
        ?>
</table>
