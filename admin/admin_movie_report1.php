<html>
<title>Admin-Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>

body, h1,h2,h3,h4,h5,h6 {
  font-family: "Montserrat", sans-serif;
  
}
.w3-row-padding img {
  margin-bottom: 12px
}

.w3-sidebar {
  width: 120px;background: #222;
}

#main {
  margin-left: 120px
}

@media only screen and (max-width: 600px) {
  #main {margin-left: 0}
}

.table{
    height: 340px;
    width: 100%;
    border: 2px solid whitesmoke;
    border-radius: 10px 10px;
    
}

.heading{
    color: red;
}

.logo{
    margin: 5px 5px;
}

.data{
  color: rgb(126, 9, 176);
}

.content {
  flex: 1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.header h2 {
  font-size: 24px;
  margin: 0;
  margin-left:120px;
}

.header p {
  color: #999;
  margin: 0;
    margin-left:120px;

}



.main {
    background-color: #222;
	    margin-left:250px;
		margin-top:130px;
		margin-right:80px;

	padding-top:70px;
	padding-bottom:50px;
	padding-right:30px;
	padding-left:30px;
	height:370px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.main h1 {
    margin: 0;
    font-size: 28px;
    color: #333;
	padding-bottom:20px;
}

.stats {
    display: flex;
    justify-content: center;
    margin-top: 20px;
	margin-right:30px;
    text-decoration:none;
}

.stat-box {
    background-color:#999999;
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin: 0 10px;
    text-align: center;
	margin-bottom:20px;
	text-decoration:none;
}

.stat-box h2 {
    margin: 0;
    font-size: 20px;
		text-decoration:none;
	

}

.stat-box p {
    margin: 10px 0 0;
    font-size: 24px;
    font-weight: bold;
}


</style>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img class="logo" src="https://cdn-icons-png.flaticon.com/512/306/306425.png" style="width:90%"> <h3><a href="dash.php" style="text-decoration:none">Admin</a></h3><BR>
 
     <a href="userReport.php" class="w3-bar-item w3-button  w3-hover-black" >
   <i class="fa fa-user" style="font-size:28px"></i>
    <p style="font-size:12px">USER-REPORT</p>
  </a>
  
  <a href="admin_feedback_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
 <i class="fa fa-comments-o" style="font-size:26px"></i>
     <p>FEEDBACK-REPORT</p>
  </a>
  
  <a href="admin_contact_report.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-commenting-o" style="font-size:19px"></i>
    <p>CONTACT-REPORT</p>
  </a>
  
   <a href="admin_movie_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-caret-square-o-right" style="font-size:18px"></i>
    <p>MOVIE-REPORT</p>
  </a>
  
  <a href="admin_ticket_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-eye w3" style="font-size:26px"></i>
    <p style="font-size:12px">TICKET-REPORT</p>
  </a>
  
     <a href="admin_payment_report1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-credit-card" style="font-size:16px"></i>
    <p style="font-size:12px">PAYMENT-REPORT</p>
  </a>
 
  
 
  
</nav>

	<div class="content">
      <header class="header">
        <div class="header-left">
          <h2>Welcome, Admin!</h2>
          <p>Manage your data and settings with ease.</p>
        
	<div class="main">
       
		
		<div class="stats">
            <div class="stat-box">
                <h2><a href="admin_moviei_report.php"  style="text-decoration:none; color:#FFFFFF">View Movie Report of Home Page </a> </h2>
                
            </div>
			
			<div class="stat-box">
                <h2><a href="admin_moviec_report.php" style="text-decoration:none; color:#FFFFFF;">View Movie Report of Category Page </a> </h2>
            </div>
            <div class="stat-box">
                <h2><a href="admin_movie_report.php" style="text-decoration:none; color:#FFFFFF">View Movie Report of Library Page  </a> </h2>
            </div>
            
			
        </div>
		
		
		
		
		
    </div>
	
</body>
</html>