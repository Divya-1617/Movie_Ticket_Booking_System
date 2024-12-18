<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"content="width=device-width,initial-scale=1.0">
	<title>Login || Sign In</title>
		 <script src="https://kit.fontawesome.com/0861b9b03a.js" crossorigin="anonymous"></script>



	<style>
		/* @import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"); */

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	background-color: rgb(37, 35, 35);
}

body {
	height: 100vh;
	width: 100vw;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	gap: 30px;
	background-color: #1B1B1B;
}

header {
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 8px;
}

.heading {
	color: green;
}

.title {
	font-weight: 400;
	letter-spacing: 1.5px;
}

.container {
	height: 600px;
	width: 500px;
	background-color: black;
	box-shadow: 8px 8px 20px 10px rgb(128, 128, 128);
	position: relative;
	overflow: hidden;
}

.btn {
	height: 60px;
	width: 300px;
	margin: 20px auto;
	/* box-shadow: 10px 10px 30px rgb(254, 215, 188); */
	border-radius: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}

.login,
.signup {
	font-size: 22px;
	border: none;
	outline: none;
	background-color: transparent;
	position: relative;
	cursor: pointer;
}

.slider {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	/* background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91)); */
			background-color:#FFFFFF;
	position: absolute;
	top: 20px;
	left: 100px;
	transition: all 0.5s ease-in-out;
}

.moveslider {
	left: 250px;
}

.form-section {
	height: 500px;
	width: 1000px;
	padding: 20px 0;
	display: flex;
	position: relative;
	transition: all 0.5s ease-in-out;
	left: 0px;
}

.form-section-move {
	left: -500px;
}

.login-box,
.signup-box {
	height: 100%;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	padding: 0px 40px;
	color: aliceblue;
}

.login-box {
	gap: 50px;
	color: aliceblue;
}

.signup-box {
	gap: 30px;
	color: aliceblue;

}

.ele {
	height: 60px;
	width: 400px;
	outline: none;
	border: none;
	/* color: rgb(77, 77, 77); */
	color:#000000;
	background-color: rgb(240, 240, 240);
	border-radius: 50px;
	padding-left: 30px;
	font-size: 18px;
}

.clkbtn {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	/* background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91)); */
			background-color: white;
			color: black;
	font-size: 22px;
	border: none;
	cursor: pointer;
}

/* For Responsiveness of the page */

@media screen and (max-width: 650px) {
	.container {
		height: 600px;
		width: 300px;
	}

	.title {
		font-size: 15px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 50px;
	}

	.moveslider {
		left: 150px;
	}

	.form-section {
		height: 500px;
		width: 600px;
		
	}

	.form-section-move {
		left: -300px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 300px;
	}

	.ele {
		height: 50px;
		width: 250px;
		font-size: 15px;
		color:#000000;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

@media screen and (max-width: 320px) {
	.container {
		height: 600px;
		width: 250px;
	}

	.heading {
		font-size: 30px;
	}

	.title {
		font-size: 10px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
			}

	.slider {
		height: 50px;
		width: 100px;
		left: 27px;
		/* color: aliceblue; */
	}

	.moveslider {
		left: 127px;
		color:#333333;

	}

	.form-section {
		height: 500px;
		width: 500px;
	}

	.form-section-move {
		left: -250px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 250px;
		
	}

	.ele {
		height: 50px;
		width: 220px;
		font-size: 15px;
		color:#000000;

	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

	</style>
</head>

<body background="../photos/login bg"> 
	

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="login" style="color:#333333;">Login</button>
			<button class="signup" style="color:#333333;">Signup</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">




        <form name="form1" method="post" action="demo.php" class="style1">
			<!-- login form -->
			<div class="login-box">
			<input name="email" type="text" class="email ele" placeholder="Enter Your Email" />					

			<input name="password" type="password" class="password  ele" placeholder="Enter Your Password" style="color: black" />					

			<button class="clkbtn" input name="login" type="submit" value="login" >Login</button>
			</div>
            </form>



           <div class="form-section">

			
		<form name="form2" method="post" action="demo.php" class="style1">
			<!-- signup form -->
			<div class="signup-box">
				
			<input name="name" type="text" class="name ele" placeholder="Enter Your  Name" />					
			
			
			<input name="email" type="text" class="email ele" placeholder="Enter Your Email" />					

				
			<input name="password" type="password" class="password ele" placeholder="Enter 6 Digit Password" style="color: black" />					

				
			<input name="cpassword" type="password" class="password  ele" placeholder="Re-enter Your Password" style="color: black" />					
	

				
					<button class="clkbtn" input name="signup" type="submit" value="signup" >Signup</button>
			</div>
		</div>
		</form>

	</div>
	<script>

let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");

signup.addEventListener("click", () => {
	slider.classList.add("moveslider");
	formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
	slider.classList.remove("moveslider");
	formSection.classList.remove("form-section-move");
});

	</script>
</body>
</html>



<!-- regi -->
<?php
include('dbcon.php');
if(isset($_POST['signup']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$qry="INSERT INTO `signup`( `name`,`email`,`password`,`cpassword`) VALUES('$name','$email','$password','$cpassword')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("registration done Successfully...")</script>';
	  echo '<script>window.location.href = "alogin.php";</script>';

}
else
{
   echo '<script>alert("registration not done...")</script>';
   echo '<script>window.location.href = "demo.php";</script>';
}
}
?>




<!-- login -->
<?php
include('dbcon.php');
 
 if(isset($_POST['login']))
 {  
  $email = $_POST['email'];	
  $password = $_POST['password']; 
 
  $n=0;
  $result=mysqli_query($con,"select * from signup") or die("record not find");
  while( $row=mysqli_fetch_array($result,MYSQLI_BOTH))
  {
    if($row['email']==$email && $row['password']==$password) 
    {
  
		
	
		echo '<script>alert("Login done Sucessfull")</script>';
        echo '<script>window.location.href = "alogin.php";</script>';
    }
  }	
	
  	       echo '<script>alert("Invalid Details")</script>';
   			echo '<script>window.location.href="demo.php";</script>'; 
    }
?>
