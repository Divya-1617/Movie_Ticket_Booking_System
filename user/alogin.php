<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./home.css">
    
    <script src="https://kit.fontawesome.com/0861b9b03a.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'><link rel="stylesheet" href="./style.css">
  <style>
	.grid-container {
	display: grid;
	grid-template-columns: auto auto auto auto;
	/* background-color: #2196f3; */
	padding: 10px;
}

.grid-container img {
	width: 318px;
	height:500px;
}
</style>
  </head>
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
              <input name="checkbox" type="checkbox" />
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
               
                
                <li><a href="about.php" style="color:#FFFFFF">About Page</a></li>
                <li><a href="gallery.php" style="color:#FFFFFF">Gallery Page</a></li>
                
                <li><a href="library.php" style="color:#FFFFFF">Library Page</a></li>
                
                                <li><a href="categories.php" style="color:#FFFFFF">Category Page</a></li>

                <li><a href="feedback.php" style="color:#FFFFFF">feedback Page</a></li>
                
                <li><a href="demo.php"style="color:#FFFFFF">Login/Signup Page</a></li>
                
                <li><a href="../admin/adminlogin.php"style="color:#FFFFFF">Admin Page</a></li>


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

<main>
     
<div class="grid-container">
  <div class="container">
    <h2>Recommended Movies</h2>
    <div class="card">
	<a href="index_seat.php">
		  <img src="../gallery/subhedar" class="subhedar" width="400" height="400">
</a>
      <img src="../photos/gadar"" alt="Cinque Terre" width="600" height="400">
      <img src="../photos/opne" alt="Northern Lights" width="600" height="400">
      <img src="../photos/rocky" alt="Mountains" width="600" height="400">
      <img src="../photos/omg" alt="Mountains" width="600" height="400">

    </div>
  </div>
</div>

<!-- <div class="banner">
    <img src="https://in.bookmyshow.com/explore/c/stream" alt="">
</div> -->
<div class="grid-container">
  <div class="container">    <h2>Comming Soon Movies</h2>
    <div class="card">
      <img src="../img/s1" alt="Cinque Terre" width="300" height="400">
      <img src="../img/s2" alt="Forest" width="300" height="400">
      <img src="../img/s3" alt="Northern Lights" width="300" height="400">
      <img src="../img/s4" alt="Mountains" width="300" height="400">
      <img src="../img/s5" alt="Mountains" width="300" height="400">

    </div>
  </div>
</div>

<div class="grid-container">
  <div class="container">
        <h2>The Best Of Live Events</h2>
        <div class="card">
          <img src="../img/event1" alt="Cinque Terre" width="600" height="400">
          <img src="../img/event2" alt="Forest" width="600" height="400">
          <img src="../img/event 3" alt="Northern Lights" width="600" height="400">
          <img src="../img/event4" alt="Mountains" width="600" height="400">
          <img src="../img/event5" alt="Mountains" width="600" height="400">
    
    
        </div>
    </div>
</div>




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