<!DOCTYPE html>
<html>
<head>
    <title>Image Grid with Text</title>
    <style>
	body{
	font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: black;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color:white;
}
        /* Style the image grid container */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Adjust the number of columns as needed */
            gap: 20px; /* Adjust the gap between images */
        }

        /* Style each image container */
        .image-container {
            text-align: center;
        }

        /* Style the image */
        .grid-image {
            width: 600px; /* Specify the width of the images */
            height: 400px; /* Specify the height of the images */
            object-fit: cover; /* Maintain aspect ratio while covering the container */
        }

        /* Style the text below the images */
        .image-text {
            margin-top: 10px;
        }
		
		
		
		
    </style>
</head>
<body>
<h2>Hindi Movies</h2>

    <div class="image-grid">
	
        <div class="image-container">
			<a href="seat2.php">

      <img src="../photos/hindi1" alt="Cinque Terre" width="300" height="400">
	 			</a>
				  <h2 name="name"> Fukrey 3</h2>
          <p name="type">Hindi • COMEDY • 2023</p>
        </div>
        <div class="image-container">
      <img src="../photos/hindi2" alt="Forest" width="300" height="400">
	  <h2 name="name"> Jawan</h2>
          <p name="type">Hindi • ACTION, THRILLER • 2023</p>
        </div>
        <div class="image-container">
      <img src="../photos/hindi3" alt="Northern Lights" width="300" height="400">
	  <h2 name="name"> The Great Indian Family</h2>
          <p name="type">English • COMEDY, DRAMA • 2023</p>
        </div>
        <div class="image-container">
      <img src="../photos/hindi4"" alt="Mountains" width="300" height="400">
	  <h2 name="name"> Sukhee</h2>
          <p name="type">English • COMEDY • 2023</p>
        </div>
        <!-- Add more image containers as needed -->
    </div>
	
	
	<h2>English Movies</h2>

    <div class="image-grid">
	
        <div class="image-container">
          <img src="../photos/english2" alt="Forest" width="300" height="400">
		  <h2 name="name"> The Vaccine War</h2>
          <p name="type">English • DRAMA • 2023</p>
        </div>
        <div class="image-container">
          <img src="../photos/english1" alt="Cinque Terre" width="300" height="400">
        <h2 name="name"> The Nun II</h2>
          <p name="type">English •  HORROR • 2023</p>
		</div>
        <div class="image-container">
          <img src="../photos/english3" alt="Northern Lights" width="300" height="400">
		  <h2 name="name"> A Haunting In Venice</h2>
          <p name="type">English • MYSTERY • 2023</p>
        </div>
        <div class="image-container">
          <img src="../photos/english4" alt="Mountains" width="300" height="400">
		  <h2 name="name"> The Barbie</h2>
          <p name="type">English • COMEDY, FANTACY • 2023</p>
        </div>
        <!-- Add more image containers as needed -->
    </div>
	
	
	<h2>Marathi Movies</h2>

    <div class="image-grid">
	
        <div class="image-container">
      <img src="../photos/mararhi" alt="Forest" width="300" height="400">
	  <h2 name="name"> The Fate Of The Furious</h2>
          <p name="type">English • ACTION • 2015</p>
        </div>
        <div class="image-container">
      <img src="../photos/marathi" alt="Northern Lights" width="300" height="400">
	  <h2 name="name"> The Fate Of The Furious</h2>
          <p name="type">English • ACTION • 2015</p>
        </div>
        <div class="image-container">
      <img src="../photos/marathi3" alt="Mountains" width="300" height="400">
	  <h2 name="name"> The Fate Of The Furious</h2>
          <p name="type">English • ACTION • 2015</p>
        </div>
        <div class="image-container">
      <img src="../photos/marathi2" alt="Mountains" width="300" height="400">
	  <h2 name="name"> The Fate Of The Furious</h2>
          <p name="type">English • ACTION • 2015</p>
        </div>
        <!-- Add more image containers as needed -->
    </div>
	
	<h2>South Movies</h2>

    <div class="image-grid">
	
        <div class="image-container">
          <img src="../photos/tamil1" alt="Cinque Terre" width="300" height="400">
		  <h2 name="name"> Jailer</h2>
          <p name="type">Tamil • ACTION , DRAMA • 2023</p>
		  
		  
        </div>
        <div class="image-container">
          <img src="../photos/tamil2" alt="Forest" width="300" height="400">
		  <h2 name="name"> Mark Antony</h2>
          <p name="type">Tamil • ACTION • 2023</p>
        </div>
        <div class="image-container">
          <img src="../photos/tamil3" alt="Northern Lights" width="300" height="400">
		  <h2 name="name"> Khushi</h2>
          <p name="type">Telgu • ROMANTIC • 2023</p>
        </div>
        <div class="image-container">
          <img src="../photos/tamil4" alt="Mountains" width="300" height="400">
		  <h2 name="name"> Miss Shetty And Mr Polishetty</h2>
          <p name="type">Telgu • ROMANTIC • 2023</p>
        </div>
        <!-- Add more image containers as needed -->
    </div>
		
		
</body>
</html>
