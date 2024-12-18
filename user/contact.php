<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us pageS</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./contact.css">
</head>
<style>
  body{
    background-color: var(--primary-bg);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
</style>

<body>

 <nav class="fnav" style="height: 65px;">
    <div class="left">
        <img src="../img/logo.jpeg" alt="logo"> 
        <input type="text" placeholder="search for event,movies,plays,and more">
    </div>

       <div class="right">
        <p>location</p>
       
          
         


        <button><a href="demo.php"" style="text-decoration: none;color: black;">Sign Up</a></button>
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
               
                
                <li><a href="about.php" style="color:#FFFFFF">About</a></li>
                <li><a href="gallery.php" style="color:#FFFFFF">Gallery</a></li>
                
                <li><a href="library.php" style="color:#FFFFFF">Library</a></li>
                
                <li><a href="categories.php" style="color:#FFFFFF">Category</a></li>
                
                <li><a href="feedback.php" style="color:#FFFFFF">feedback</a></li>
                
                <li><a href="login.php"style="color:#FFFFFF">Login</a></li>
                
                <li><a href="../admin/adminlogin.php"style="color:#FFFFFF">Admin</a></li>



              </ul>
            </div>
         
 

</nav>

<nav class="sec-nav">
<div class="s-left">
    
  <a href="stream.php" >Streams</a>
  <a href="event.php" >Events</a>
  <a href="plays.php">Plays</a>
  <a href="activities.php">Activites</a></div> 

<div class="s-right">
  <a  href="index.php">Home</a>
  <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
     <!-- <a href="gallery.php" > Gallery</a>  -->
   

</div>
</nav>
<form action="contact.php" method="post" >

    <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT</span>
                  <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : +62 81 314 928 595
                </div>
                
      
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" name="name" placeholder="NAME" >
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="email" placeholder="EMAIL">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="contact" placeholder="CONTACT NO">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" name="query" placeholder="QUERY">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button" name="submit">SUBMIT</button>
					

					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

</form>

      
     <footer>
    <section class="company">
      <h1>Our Company</h1><br>
     

      <p>Our Brands</p>
      <p> Contact Us</p>
      <p>Corporate Information</p>
      
      <p>Associate Portal</p>
      <p>Vulnerability Reporting</p>
     
      <p>Privacy Policy</p>

  </section>
     
     <section class="movies">
      <h1>Movies</h1><br>
      
      <p> Movies </p>
      <p> Theatres  </p>
     
     
      <p> 
       Rating Information </p>
        <p> 
          PRIME at Book My Show </p>
          <p> 
            RealD 3D </p>
          
              <p> 
                BigD at Book My Show </p>
    

     </section>

     <section class="prog">
      <h1>Programming</h1><br>
      
<p>Private Theatre Rentals</p>
        <p>    Thrills & Chills</p>
          <p>      Fan Faves</p>
            <p>          International Films</p>
                <p>     Special Events</p>
                  <p>   Fathom Events</p>
                      <p>  Sensory Friendly Films</p>
                        <p>  Groups & Events</p>
       
     </section>

     <section class="more">
      <h1>More</h1><br>

   
          <p> Offers & Promotions</p>
            <p> Movie Merchandise</p>
                 <p> Photosensitivity Notice</p>
                <p>  Request Refund</p>
                             


     </section>

     
</footer>

      
</body>
</html>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$query=$_POST['query'];

$qry="INSERT INTO `contact`( `name`,`email`,`contact`,`query`) VALUES('$name','$email','$contact','$query')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	echo '<script>alert("Thank you for contacting us! We have received your message and will respond shortly. ")</script>';
	  echo '<script>window.location.href = "index.php";</script>';

}
else
{
   echo '<script>alert("Respond not send...")</script>';
   echo '<script>window.location.href = "contact.php";</script>';
}
}
?>

