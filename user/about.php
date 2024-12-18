<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Us Page</title>
    <link rel="website icon" type="png" href="C:\Project Electricals\logo3.png">
    <style>
        body{
    background-color: var(--primary-bg);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

        .container {
         position: relative;
         text-align: center;
         color: rgb(213, 213, 213);
        }

        .bottom-left {
         position: absolute;
         bottom: 8px;
         left: 16px;
        }

         p{
            text-align: justify;
            font-size: 15px;
            margin: 0 20px 0 20px;
        }
       
       
        section.services-container {
	display: flex;
	max-width:100%;
	width: 100%;
	justify-content:start;
	flex-wrap: wrap;
	align-items: center;
	/* padding: 10px; */
	height: 100px;
}

section.services-container .service-container {
	width: 19%;
	padding: 4px 6px;
    margin-top: 20px;
}

section.services-container .service-container img {
	width: 100%;
    height: 320px;
    border-radius: 4px 4px 4px 4px;
    opacity: 0.7;
}

section.services-container .service-container h1{
    font-size:14px;
    text-align: center;
   
}

section.services-container .service-container .paragraph{
    font-size: 14px;
    color: rgb(209, 207, 207);
    text-align: center;
}
 
section.services-container .service-container img:hover{
    opacity: 1.0;
    box-shadow: rgba(249, 248, 248, 0.25) 0px 54px 55px, rgba(244, 239, 239, 0.12) 0px -12px 30px, rgba(243, 240, 240, 0.12) 0px 4px 6px, rgba(241, 238, 238, 0.17) 0px 12px 13px, rgba(243, 241, 241, 0.09) 0px -3px 5px;
}       


    </style>
    <link rel="stylesheet" href="./style.css">
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
    <div class="container">
        <img src="../photos/aboutfix" alt="Snow" style="width:100%; height: 600px;">
        <div class="bottom-left"><p><span style="font-size: 50px; font-weight: bolder;color:rgb(153, 131, 18);">ABOUT US:</span> 
            Our mission is to advance and reimagine the movie-going experience by continuing to reinvent ourselves in keeping up with the times and the ever-changing entertainment landscape to make our brand aspirational and accessible. We take pride in our strategically located cinemas and we continuously invest in introducing premium formats, comfortable seating, sound, projection, ambience, and food & beverage to meet evolving consumer expectations so that our patrons have a memorable experience every time they visit our cinemas.

            <p>We serve as a conduit between consumers and the film industry on one hand and the retail industry and real estate development on the other. As a leading player in the film exhibition industry, our company is spearheading the establishment of a robust ecosystem that brings together key partners, including filmmakers, studios, content providers, equipment and concession manufacturers, data and technology companies, all of whom rely on the strength of our business and the communities we serve. We engage with multiple channels to connect with our over 180 million patrons through research, loyalty, online, digital, and offline modes to provide a platform to showcase film and non-film content and identifying new trends in the film exhibition industry.
            <!-- <p>Our diversified revenue stream comes mainly from box office and non-box office, which primarily includes revenue from Sale of Food and Beverages, advertisement income, convenience fees, and income from movie distribution, among others. Our leadership across key operating metrics and robust financial position is backed by experienced Promoters, Key Managerial Personnel, and a senior management team with an established track record. -->
            
            
    
        </div>
        </div>

            <h3 style="color:rgb(153, 131, 18); margin-left: 30px; font-size: 25px;">COMPANY STRENGTHS</h3>
            <ul style="margin-left: 50px;color: whitesmoke;">
                <li>Movie exhibition industry leader in India</li>
                <li>Strategically located cinemas</li>
                <li>Diversified product offerings and premium guest experience</li>
                <li>Leadership across key operating metrics and robust financial position</li>
                <li>Promoters, Key Managerial Personnel and senior management team with established track  record</li>
            </ul>  
            
            <h1 style="color:rgb(153, 131, 18); font-size: 25px; margin-left: 30px; margin-top: 70px;">TEAM</h1>
            <section class="services-container">
                <!-- 1st column 1 to 6 start -->
                
                <div class="service-container">
                 <img src="../photos/pavan-kumar" alt="">
                 <h1>Mr.Pavan Kumar Jain</h1>
                 <p class="paragraph">CHAIRMAN & DIRECTOR</p>
                </div>
       
                <div class="service-container">
                 <img src="../photos/sidharth22" alt="">
                 <h1>Mr.Siddharth Jain</h1>
                 <p class="paragraph">NON-EXECUTIVE DIRECTOR</p>
                </div>
       
                <div class="service-container">
                   <img src="../photos/sanjeev2" alt="">
                   <h1>Mr.Sanjeev Kumar Bijli</h1>
                   <p class="paragraph">EXECUTIVE DIRECTOR</p>
                 </div>
       
                 <div class="service-container">
                   <img src="../photos/renuka 2" alt="">
                   <h1>Ms.Renuka Ramnath</h1>
                   <p class="paragraph">NON EXECUTIVE DIRECTOR</p>
                 </div>
       
                 <div class="service-container">
                   <img src="../photos/ajay22" alt="">
                   <h1>Mr.Ajay Bijli</h1>
                   <p class="paragraph">MANAGING DIRECTOR</p>
                 </div>
            </section>

          <p>&nbsp;</p>
		            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>


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