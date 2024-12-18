<form action="save_index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" class="form-control"><br><br>
    <button>Save</button>
</form>




<?php
$con=mysqli_connect('localhost','root','','moviedb') ;
$sql="SELECT * FROM index";
$data = mysqli_query($con,$sql);
?>

<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>Action</td>
        <td>S.N.</td>
    
        <td>Image</td>
</tr>
         <?php
         {
                foreach($values as $values)
         
            {
               if(is_array($values) || is_object($values))
            
            }
         }
            ?>
    <tr>
        <td>
            <a href="update_index.php?id=<?=$row['index']?>"><button>Edit</button></a>
            <a href="delete_index.php?id=<?=$row['index']?>"><button>Delete</button></a>
        </td>
        <td><?=$key+1?></td>
       
        <td>
            <img src="uploads/<?=$row['image']?>" alt="" width="50px">
        </td>
        </tr>
</table>