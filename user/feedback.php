<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css" /> 
  <title>Feedback Page</title>
  <script src="https://kit.fontawesome.com/0861b9b03a.js" crossorigin="anonymous"></script>
  <style>


@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

* {
  box-sizing: border-box;
}


body {
    background: black; 
    /* background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  
    background: linear-gradient(to right, #8f94fb, #4e54c8);      */
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  /* overflow: hidden;
  height:100vh; */
}

.container {
  width: 430px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  padding: 30px;
  margin-left:550px;
  margin-top:120px;
}

.header {
  text-align: center;
  margin-bottom: 30px;
}

.header h1 {
  font-size: 32px;
  color: #333;
  margin-bottom: 10px;
}

.header p {
  font-size: 16px;
  color: #666;
}

.input-group {
  position: relative;
  margin-bottom: 20px;
}

.input-group input,
.input-group textarea {
  width: 100%;
  padding: 10px;
  border: none;
  border-bottom: 2px solid #333;
  font-size: 16px;
  background-color: transparent;
  color: #333;
  border-radius: 0;
  transition: border-bottom-color 0.3s;
}

.input-group label {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: black;
  pointer-events: none;
  transition: transform 0.3s ease-out, font-size 0.3s ease-out;
}

.input-group input:focus,
.input-group textarea:focus {
  outline: none;
  border-bottom-color: #ff6b6b;
}

.input-group input:focus + label,
.input-group textarea:focus + label,
.input-group input:not(:placeholder-shown) + label,
.input-group textarea:not(:placeholder-shown) + label {
  transform: translateY(-30px);
  font-size: 12px;
  color: black;
}

.button-group {
  text-align: center;
}

button {
  padding: 10px 20px;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s;
}



.message {
  text-align: center;
  margin-top: 20px;
  padding: 20px;
  border-radius: 10px;
  background-color: #ffe2e2;
  color: #ff6b6b;
  display: none;
}

.submit{
color:#000000;}



    </style>
  </head>
  <body>
  <a href="index.php">  <i class="fa-solid fa-arrow-left" style="color: #ffffff; height: 50px; width: 50px; margin:15px 15px 15px 15px"></i></a>
  




  <div class="container">
    <div class="header">
      <h1>Give Us Your Thoughts!</h1>
      <p>We want to hear from you.</p>
    </div>
 <form name="form2" method="post" action="feedback.php" class="style1">
      <div class="input-group">
        <input type="text" id="name" name="name" required>
        <label for="name">Who are you?</label>
      </div>
      <div class="input-group">
        <input type="email" id="email" name="email" required>
        <label for="email">Your Email</label>
      </div>
      <div class="input-group">
        <textarea id="feedback" name="feedback" rows="2"  required></textarea>
        <label for="feedback">Speak your mind</label>
      </div>
      <button  name="submit"  class="submit" type="submit" value="submit" >Submit</button>

	  
    </form>
    </div>
  </div>

</body>
</html>









<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedbcak'];


$qry="INSERT INTO `feedback`( `name`,`email`,`feedback`) VALUES('$name','$email','$feedback')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("Thank you for your feedback! We appreciate your input and will use it to improve your experience.")</script>';
	  echo '<script>window.location.href = "index.php";</script>';

}
else
{
   echo '<script>alert("Respond not send...")</script>';
   echo '<script>window.location.href = "feedback.php";</script>';
}
}
?>

