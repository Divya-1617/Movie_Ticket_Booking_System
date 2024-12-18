<?php
  include 'dbcon.php';
  $sql="SELECT * FROM library";
  $data = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librabry</title>
           <link rel="stylesheet" href="./style.css">
</head>
<style>

body{
    background-color:#000000;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

section.services-container {
	display: flex;
	max-width:100%;
	width: 100%;
	justify-content:start;
	flex-wrap: wrap;
	align-items: center;
	padding: 10px;
	height: 100px;
    margin-left: 60px;
}

section.services-container .service-container {
	width: 13%;
	padding: 8px 10px;
	
}

section.services-container .service-container img {
	width: 100%;
    height: 210px;
    border-radius: 4px 4px 4px 4px;
}

section.services-container .service-container h1{
    font-size:14px;
   
}

section.services-container .service-container p{
    font-size: 14px;
    color: rgb(209, 207, 207);
}

.heading{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: bold;
    margin-left: 20px;
}


section.services-container .service-container:hover{
    box-shadow: whitesmoke 0px 20px 30px -10px;

}

.modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }
    /* Style for the modal content */
    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	   border: 1px solid #888;
    width: 23%;
    height: 10%;
	  
    }
    /* Close button style */
    .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px;
      cursor: pointer;
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
       
          
         
  

        <button><a href="demo.php" style="text-decoration: none;color: black;">Sign Up</a></button>
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

<form method="post" action="library.php">
    <h1 class="heading">Movie Library</h1>
    <section class="services-container">
      <?php
      foreach($data as $key => $row)
     {
      ?>
          <div class="service-container">
            <a href="library_display.php">
              <img src="admin/uploads/<?=$row['image']?>" class="image" data-popup="For watching this movie <a message-link' href='contact.php'>Contact Us</a> to enquire."></a>
              <h1><?=$row['title']?></h1>
              <p name="rate">&#8377; <?=$row['price']?> /-</p>
              <p><?=$row['language']?> • <?=$row['action']?> • <?=date('Y',strtotime($row['date']))?></p>
          </div>
      <?php
     }
      ?>
    </section>
      
     
</form>
	 

<script>
// Get modal and image elements
var modal = document.getElementById("myModal");
var images = document.getElementsByClassName("image");
var popupMessage = document.getElementById("popupMessage");
var closeModal = document.getElementById("closeModal");

// Function to display the modal with the clicked image and message
function showModal(message) {
  modal.style.display = "block";
  popupMessage.innerHTML = message;
}

// Function to close the modal
function closeModalFunction() {
  modal.style.display = "none";
}

// Event listeners for each image to open the modal
for (var i = 0; i < images.length; i++) {
  images[i].addEventListener("click", function() {
    var message = this.getAttribute("data-popup");
    showModal(message);
  });
}

// Event listener to close the modal when the close button is clicked
closeModal.addEventListener("click", closeModalFunction);

// Event listener to open a new page when clicking the message link
popupMessage.addEventListener("click", function(event) {
  if (event.target.classList.contains("message-link")) {
    window.location.href = event.target.getAttribute("href");
  }
});

// Close modal when clicking outside the message
modal.addEventListener("click", function(event) {
  if (event.target === modal) {
    closeModalFunction();
  }
});
</script>
	 
	 
</body>
</html>


