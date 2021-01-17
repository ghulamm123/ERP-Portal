<?php session_start(); ?>
<html>


<head>

<link rel="stylesheet" href="hr.css">

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
echo "DATA BASE Connected successfully";
$message="--";
$sent_by="--";
$time="--";
$sql = "SELECT * FROM `orders` WHERE reciver_ID='hr' ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
    // output data of each row
						while($row = $result->fetch_assoc())
						{
							$message=$row["message"];
							$sent_by=$row["sender_ID"];
							$time=$row["date_time"];
						}//while
		}//if
echo $message;
?>


    <div class="lg">
    <input type="submit" onclick="cal4()" value="Log Out">
</div>




<div class="buttons">
    <input type="submit" onclick="cal1()" value="Hire employee">
    
    <input type="submit" onclick="cal2()" value="Fire employee">

    
    <input type="submit" onclick="cal5()" value="Increase Salary">
	<input type="submit" onclick="cal4()" value="Sent MESSAGE">
	<br><br><br><br>ORDERS
	<textarea name="comment" rows="5" cols="40"><?php echo "SENT BY:".$sent_by;echo "        MESSAGE:"; echo $message; echo "         DAY_TIME:"; echo $time;?></textarea>
</div><!--Buttons div-->

<?php

if($_SESSION['add employee']==1)
	{
	echo"in quary";	
	$employee_name=$_POST["employee_name"];
	$employee_password=$_POST["employee_password"];
	$employee_salary=$_POST["employee_salary"];
	$team=$_POST["team_name"];
	//$deadline=$_POST["deadline"];
	//$cost=$_POST["cost"];
	//$module1_status="in progress";
	//$sql="INSERT INTO `employee`(`employee_name`, `salary`, `team`, `password`) VALUES ( '$employee_name', '$employee_salary', '$team', '$employee_password'); ";
$sql="INSERT INTO `employee` (`employee_id`, `employee_name`, `salary`, `task`, `team`, `password`) VALUES (NULL, '$employee_name', '$employee_salary', '', '$team', '786');";
	//$conn->query($sql);
	$conn->query($sql);
	//			$result = $conn->query($sql);	
	$_SESSION['add employee']=0;
	}
	
	if($_SESSION['HR_order']==1)
	{
	echo"in quary ORDERS";	
	$sent_to=$_POST["reciver"];
	$message=$_POST["message"];
	echo $message;
	$sent_by="HR";
	$module1_status="in progress";
	$sql="INSERT INTO `orders`(`sender_ID`, `reciver_ID`, `message`, `date_time`) VALUES ('$sent_by','$sent_to','$message',SYSDATE())";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['HR_order']=0;
	}
?>



</body>
<script>

    function cal1()
    {
        var x=window.open("hire_employee.php");
        
    }

    function cal2()
    {
        var x=window.open("fire_employee.php");
        
    }

function cal3()
    {
        var x=window.open("#");
        
    }

function cal4()
    {
        window.location.href="Home.php";
        
    }

function cal5()
    {
        window.location.href="order_hr.php";
        
    }
</script>

</html>