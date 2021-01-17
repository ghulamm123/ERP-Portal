<?php session_start(); ?>
<html>
<title> ORDERS BY CEO</title>
<head>

<link rel="stylesheet" href="completetask.css">
</head>
<body>
<h1>GIVE ORDER</h1>
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
<form method="POST" action="ceo.php"> 
 <p> ENTER ORDER</p>  <BR> 
  <INPUT TYPE="TEXT" NAME="message" >
  <br>
  <p>ENTER MODULE NUMBER<p><br>
  <input type="radio" name="reciver" value="manager" > MANAGER<br>
  <input type="radio" name="reciver" value="teamlead_A"> TEAMLEAD A<br>
  <input type="radio" name="reciver" value="teamlead_B"> TEAMLEAD B<br>
  <input type="radio" name="reciver" value="hr"> HR
  </div>
  <?php 

$_SESSION['ceo_order']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>






</body>
</html>