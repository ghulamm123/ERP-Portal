<?php session_start(); ?>
<html>

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
    <div class="main">

        <input type="submit" class="lg" onclick="logout()" value="logout">
<?php
	if($_SESSION['complete_task']==1)
	{
			$E_id=$_POST["username"]; 
			$P_id=$_POST["project_id"];
			$module=$_POST["module_number"];
			if($module==1)
			{				
				$sql="UPDATE `project` SET `module1_status`='completed' WHERE project_id=$P_id ;";
				$result = $conn->query($sql);
				$sql="UPDATE `employee` SET `task`='--' WHERE employee_id=$E_id ;";
				$result = $conn->query($sql);
			}else if($module==2)
			{				
				$sql="UPDATE `project` SET `module2_status`='completed' WHERE project_id=$P_id ;";
				$result = $conn->query($sql);
				$sql="UPDATE `employee` SET `task`='--' WHERE employee_id=$E_id ;";
				$result = $conn->query($sql);
			}else if($module==3)
			{				
				$sql="UPDATE `project` SET `module3_status`='completed' WHERE project_id=$P_id ;";
				$result = $conn->query($sql);
				$sql="UPDATE `employee` SET `task`='--' WHERE employee_id=$E_id ;";
				$result = $conn->query($sql);
			}
			$E_id=$_SESSION["employee_id"];
			$password1=$_SESSION["password"];
		$sql = "SELECT * FROM employee where employee_id=$E_id and password=$password1 ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
						{
							$name=$row["employee_name"];
							$task=$row["task"];
						}
		}
			
	}
	
	if($_SESSION['complete_task']==0)
	{
		$E_id=$_POST["username"]; 
		$password1=$_POST["password"];
		$_SESSION["employee_id"]=$E_id;
		$_SESSION["password"]=$password1;
		$sql = "SELECT * FROM employee where employee_id=$E_id and password=$password1 ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
						{
							$name=$row["employee_name"];
							$task=$row["task"];
						}
		}
	}   
    echo"    <h1>EMPLOYEE: $name</h1>   ";

?>            

        <div class="tr">
        <h1> Current Task</h1>
<?php

echo "    <p> $task</p>  ";

?>    
        <!--para where REECH will add project name-->

    </div><!--task running from database-->

	
	<form action="completetask.php">

    <input type="submit" id="task" value="complete task" >

	</form>


</div><!--Main div on which we are working-->


</body>
<script>

function logout()
{
    window.location.href="Home.php";
}



</script>
</html>