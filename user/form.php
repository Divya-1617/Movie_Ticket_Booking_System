<html>
    <head>
        <title>Form</title>
    </head>
    <style>
        .container{
        background-color: beige;
        font-size: xx-large;
        padding-top: 10px;
        padding-bottom: 20px;
        height: 430px;
        width: 650px;
        margin-left: 370px;
        margin-top:100px;
    }
    .container label{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    
    h2{
        text-align: center;
    }
       
    .container button{
       margin-top: 30px;
        height: 30px;
        width: 90px;
        font-size: x-large;
       
    }

    .container input{
        margin-top:20px;
    }

    
    
    </style>
    <body>
            
            <div class="container"> 
            <h2 >Form Registration</h2>
            <form action="form.php" method="post" style="text-align: center;margin-top: 20px;">

                    <label for="Name">Enter Your Name:</label>
                    <input type="text" name="name" required><br>

                    <label for="Email">Enter Your Email:</label>
                    <input type="text" name="email" required><br>

                    <label for="Phone">Enter Your Contact:</label>
                    <input type="number" name="number" required><br>

                    <label for="Password">Enter Your Pasword:</label>
                    <input type="password" name="password" required><br>

                    <label>Select Image </label>
                    <input type="file" name="image"><br>
                    <!-- <input type="submit" name="submit" class="button"><br> -->

                    <button name="submit">submit</button>

                </form>
            </div>
        </section>
    </body>
</html>


<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];
$image=$_POST['image'];


$qry="INSERT INTO `form`( `name`,`email`,`number`,`password`,`image`) VALUES('$name','$email','$number','$password','$image')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("registration done Successfully...")</script>';
	  echo '<script>window.location.href = "form1.php";</script>';

}
else
{
   echo '<script>alert("registration not done...")</script>';
   echo '<script>window.location.href = "form.php";</script>';
}
}
?>