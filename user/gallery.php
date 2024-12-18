<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="website icon" type="png" href="C:\Project Electricals\logo3.png">
	 <script src="https://kit.fontawesome.com/0861b9b03a.js" crossorigin="anonymous"></script>
    <style>
        * { box-sizing: border-box; }
 
    body{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: rgb(1, 1, 1);
        background-image:url(../photos/bggggg2);
        background-position: center;
        background-repeat: no-repeat; 
        background-size: cover; 

    }
    
 .grid-container {
   display: grid;
   grid-template-columns: auto auto auto;
   padding: 50px;
 }
 
 
 .grid-container img {
   background-color: rgba(255, 255, 255, 0.8);
   font-size: 30px;
   text-align: center;
   height: 220px;
   width: 300px;
   align-items: center;
   margin: 0 0 50px 40px;
 
 }
 
 
 @media only screen and (max-width: 600px) {
     .gallery {
       grid-template-columns: repeat(2, 1fr);
     }
   }
 
   
 .grid-container img:hover {
     z-index: 9;
     transform: scale(0.9);
     transition: transform ease 0.2s;
     border-radius: 15px;
   }
   
 
    </style>
</head>
<body>
      
<a href="index.php">      <i class="fa-solid fa-arrow-left" style="color: #ffffff; height: 50px; width: 50px; margin:10px 10px 10px 10px"></i></a>
<h3 style="text-align: center; background-color:white; height: 80px; width: 300px; margin-left: 600px; padding-top: 10px; border-radius: 15px 15px 15px 15px; bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); 
    color: #f1f1f1;"> GALLERY</h3>
	  
	
    <h3 style="text-align: center; background-color:white; height: 130px; width: 650px; margin-left: 450px; padding-top: 10px; border-radius: 15px 15px 15px 15px; bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); 
    color: #f1f1f1;"> Mahesh Theater<br>Address: Premdan Chowk, <br>opposite Big Bazaar,<br> Ahmednagar, Maharashtra 414003</h3>
    <div class="grid-container">
        <img src="../photos/gallery 1">
        <img src="../photos/gallery 2">
        <img src="../photos/gallery 3">
        <img src="../photos/gallery 4">
        <img src="../photos/gallery 5">
        <img src="../photos/gallery 6">
    </div> 
   
    <h3 style="text-align: center; background-color:white; height: 130px; width: 650px; margin-left: 450px; padding-top: 10px; border-radius: 15px 15px 15px 15px; bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); 
    color: #f1f1f1;">Asha Theater<br>Address: Mg Road Near Kotwali Police Headquarter,<br> Nalegaon,<br> Ahmednagar, Maharashtra 414001</h3>
    <div class="grid-container">
        <img src="../photos/gallery 7">
        <img src="../photos/gallery 8">
        <img src="../photos/gallery 9">
        <img src="../photos/gallery 10">
        <img src="../photos/gallery 11">
        <img src="../photos/gallery 12">
</div>

      
      <h3 style="text-align: center; background-color:white; height: 130px; width: 650px; margin-left: 450px; padding-top: 10px; border-radius: 15px 15px 15px 15px; bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5); 
      color: #f1f1f1;">Kojinoor Mall<br>Address: Karachiwala,<br> Tarakpur,<br> Ahmednagar, Maharashtra 414001</h3>
      <div class="grid-container">
          <img src="../photos/gallery 13">
          <img src="../photos/gallery 14">
          <img src="../photos/gallery 15">
          <img src="../photos/gallery 16">
          <img src="../photos/gallery 17">
          <img src="../photos/gallery 18">
</div>



</body>
</html>