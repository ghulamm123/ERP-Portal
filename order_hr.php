<?php session_start(); ?>
<html>
<title> REQUEST SENDING</title>
<head>

<link rel="stylesheet" href="employeeview.css">
</head>
<body>
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
<form method="POST" action="hr.php"> 
  ENTER MESSAGE  :<BR> 
  <textarea name="message" rows="5" cols="100">type here</textarea>
  <br>
  SENT TO:<br>
  <input type="radio" name="reciver" value="manager" > MANAGER<br>
  <input type="radio" name="reciver" value="teamlead_A"> TEAMLEAD A<br>
  <input type="radio" name="reciver" value="teamlead_B"> TEAMLEAD B<br>
    <input type="radio" name="reciver" value="CEO" > CEO<br>
 
  <?php 

$_SESSION['HR_order']=1;		 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>






</body>
</html>