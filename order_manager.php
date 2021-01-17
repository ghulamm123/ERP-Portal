<?php session_start(); ?>
<html>
<title> REQUEST SENDING</title>
<head>

<link rel="stylesheet" href="completetask.css">
</head>
<body>
<h1>SEND MESSAGE</h1>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erp_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "DATA BASE Connected successfully";
?>
<div class="div2">
<form method="POST" action="managerview.php"> 
  <p>ENTER MESSAGE  </p><BR> 
  <input type="text" name="message">
  <br>
 <p> ENTER MODULE NUMBER</p><br>
  <input type="radio" name="reciver" value="CEO" > CEO<br>
  <input type="radio" name="reciver" value="teamlead_A"> TEAMLEAD A<br>
  <input type="radio" name="reciver" value="teamlead_B"> TEAMLEAD B<br>
  <input type="radio" name="reciver" value="hr"> HR
  </div>
  <?php 

$_SESSION['manager_order']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>






</body>
</html>