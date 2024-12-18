<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plays page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
          h1{
        padding-top: 10px;
        padding-bottom: 20px;
    }

  .container .card{
    display: flex;
    justify-content: center;
    justify-content: space-around;
}

.card img{
    width:490px;
    height: 400px;
    border-radius: 5px;
    padding-left: 10px;
    padding-right: 10px;

}

.containers .card{
    display: flex;
    justify-content: center;
    justify-content: space-around;
}

.card img{
    width:490px;
    height: 400px;
    border-radius: 5px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 50px;

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
                
                <li><a href="demo.php"style="color:#FFFFFF">Login</a></li>
                
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

    <h1 style="margin-top: 10px;">Plays In Ahmednagar</h1>
        

    <div class="container">
        <div class="card">
          <img src="../img/p1" alt="" width="600" height="400">
          <img src="../img/p2" alt="" width="600" height="400">
          <img src="../img/p3" alt="" width="600" height="400">
          <img src="../img/p4" alt="" width="600" height="400">
          <img src="../img/p5" alt="" width="600" height="400">
    
        </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
          <img src="../img/p6" alt="" width="600" height="400">
          <img src="../img/p7" alt="" width="600" height="400">
          <img src="../img/p8" alt="" width="600" height="400">
          <img src="../img/p9" alt="" width="600" height="400">
   <img src="../gallery/play" alt="play"  width="600" height="400">
    
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