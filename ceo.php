<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="ceo1.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
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
$message1="--";
$sent_by1="--";
$time1="--";	
$message2="--";
$sent_by2="--";
$time2="--";
$sql = "SELECT * FROM `orders` WHERE (reciver_ID='CEO' and sender_ID='MANAGER') ;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
    // output data of each row
						while($row = $result->fetch_assoc())
						{
							$message1=$row["message"];
							$sent_by1=$row["sender_ID"];
							$time1=$row["date_time"];
						}//while
		}//if
$sql = "SELECT * FROM `orders` WHERE (reciver_ID='CEO' and sender_ID='HR') ;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
    // output data of each row
						while($row = $result->fetch_assoc())
						{
							$message2=$row["message"];
							$sent_by2=$row["sender_ID"];
							$time2=$row["date_time"];
						}//while
		}//if		
?>
    <div class="ceoimage"></div>
  <h1>CEO</h1>

<div class="nav1">
  <ul>
    <li><a href="#">LINK</a></li>
	<li><a href="orderceo.php">ORDERS</a></li>
    <li><a href="addproject.php">ADD PROJECT</a></li>
    <li><a href="status.php">PROJECT STATUES</a></li>
	<li><a href="all_employee.php"> EMPLOYESS</a></li>
	<li><a href="project_history.php">COMPLETE PROJECTS</a></li>
    <li><a href="Home.php">Log Out</a></li>
  </ul>
</div>

  
<div class="sm">
                
	<p id="p1">REQUESTS FROM MANAGER:<BR></p>
	<textarea class="text1" name="comment" rows="5" cols="40"><?php echo "SENT BY:"; echo $sent_by1;echo "       MESSAGE:"; echo $message1; echo "         DAY_TIME:"; echo $time1;?></textarea>
	<BR>
	<p id="p2"> REQUESTS FROM HR:<BR></p>
	<textarea  class="text2"  name="comment" rows="5" cols="40"><?php echo "SENT BY:"; echo $sent_by2;echo "        MESSAGE:"; echo $message2; echo "         DAY_TIME:"; echo $time2;?></textarea>
    
</div>

<?php

if($_SESSION['check']==1)
	{
	echo"in quary";	
	$project_name=$_POST["project_name"];
	$deadline=$_POST["deadline"];
	$cost=$_POST["cost"];
	$module1_status="in progress";
	$sql="INSERT INTO `project` ( `project_name`, `dead_line`, `module1_status`, `module2_status`, `module3_status`, `price`, `team`) VALUES ( '$project_name', '$deadline', '$module1_status', '$module1_status', '$module1_status', '$cost', 'to be asigned'); ";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['check']=0;
	}
	
	if($_SESSION['ceo_order']==1)
	{
	echo"in quary ORDERS";	
	$sent_to=$_POST["reciver"];
	$message=$_POST["message"];
	echo $message;
	$sent_by="CEO";
	$module1_status="in progress";
	$sql="INSERT INTO `orders`(`sender_ID`, `reciver_ID`, `message`, `date_time`) VALUES ('$sent_by','$sent_to','$message',SYSDATE())";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['ceo_order']=0;
	}
?>



</body>





</html>
