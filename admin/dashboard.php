<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Admin Dashboard</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.dashboard {
  display: flex;
  height: 100vh;
}

.sidebar {
  width: 250px;
  background-color: #20232a;
  color:#FFFFFF;
  padding: 20px;
}

.logo {
  text-align: center;
  margin-bottom: 20px;
}

.logo img {
  max-width: 100px;
}

.sidebar .menu {
  list-style: none;
  padding: 0;
}

.sidebar .menu li {
  margin-bottom: 10px;
}

.sidebar .menu li a {
  color:#FFFFFF;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.sidebar .menu li a.active,
.sidebar .menu li a:hover {
  background-color: #282c34;
  color: #FFFFFF;
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
}

.header p {
  color: #999;
  margin: 0;
}

.logout-btn {
  background-color:#333333;
  border: none;
  color: #fff;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.logout-btn:hover {
  background-color: #282c34;
}

.overview {
  display: flex;
  margin-bottom: 20px;
}

.overview-card {
  flex: 1;
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 5px;
  text-align: center;
}

.chart {
  flex: 1;
  background-color: #f5f5f5;
  border-radius: 5px;
  margin-bottom: 20px;
  min-height: 300px;
}

.data-table {
  flex: 1;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}




.main {
    background-color: white;
    padding: 30px;
	height:300px;
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
</head>
<body>
 <div class="dashboard">
    <div class="sidebar">
      <div class="logo">
        <img  src="../photos/manager.png" alt="Admin Logo">
      </div>
      <ul class="menu">
        <li><a href="#" class="active">Admin</a></li>
        <li><a href="user.php">Users</a></li>
		<li><a href="contact.php">Contact-Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
		<li><a href="ticket.php">Ticket</a></li>
        <li><a href="payment.php">Payment</a></li>

        
      </ul>
    </div>
    <div class="content">
      <header class="header">
        <div class="header-left">
          <h2>Welcome, Admin!</h2>
          <p>Manage your data and settings with ease.</p>
        </div>
       
      </header>
      <div class="overview">
        <div class="overview-card">
          <h3>Total Users</h3>
          <p>256</p>
        </div>
        <div class="overview-card">
          <h3>Total Products</h3>
          <p>128</p>
        </div>
        <div class="overview-card">
          <h3>Total Orders</h3>
          <p>478</p>
        </div>
      </div>
      <div class="main">
        <div class="stats">
            <div class="stat-box">
                <h2 style="text-decoration:none"><a href="admin_user.php" style="text-decoration:none; color:#FFFFFF">Manage Users</a></h2>
                
            </div>
            <div class="stat-box">
                <h2><a href="admin_feedback.php"  style="text-decoration:none; color:#FFFFFF">Manage Query</a></h2>
            </div>
			
			
			<div class="stat-box">
                <h2><a href="admin_ticket.php"  style="text-decoration:none; color:#FFFFFF">Manage Ticket</a></h2>
            </div>
			
          <div class="stat-box">
                <h2><a href="admin_payment.php"  style="text-decoration:none; color:#FFFFFF">Manage Payment</a></h2>
            </div>
			
        </div>
		
		<div class="stats">
            <div class="stat-box">
                <h2><a href="userReport.php" style="text-decoration:none; color:#FFFFFF"> User Report</a> </h2>
                
            </div>
            <div class="stat-box">
                <h2><a  href="admin_feedback_report.php" style="text-decoration:none; color:#FFFFFF"> Query Report</a> </h2>
            </div>
            <div class="stat-box">
                <h2><a href="admin_ticket_report.php" style="text-decoration:none; color:#FFFFFF"> Ticket Report</a> </h2>
            </div>
			
			<div class="stat-box">
                <h2><a href="admin_payment_report.php" style="text-decoration:none; color:#FFFFFF;"> Payment Report</a> </h2>
            </div>
			
        </div>
		
		
		
		
		
    </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
