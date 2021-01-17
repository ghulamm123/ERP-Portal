<?php session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="managerview1.css">


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


<section>

<?php

if($_SESSION['give_task']==1)
	{
	echo"in quary";	
	$team=$_POST["team_name"];
	$project_id=$_POST["project_id"];
	echo "$team.$project_id";
	
	$sql="UPDATE `project` SET `team`='$team' WHERE project_id=$project_id ;";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['give_task']=0;
	}
	
	if($_SESSION['manager_order']==1)
	{
	echo"in quary ORDERS";	
	$sent_to=$_POST["reciver"];
	$message=$_POST["message"];
	echo $message;
	$sent_by="MANAGER";
	$module1_status="in progress";
	$sql="INSERT INTO `orders`(`sender_ID`, `reciver_ID`, `message`, `date_time`) VALUES ('$sent_by','$sent_to','$message',SYSDATE())";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['manager_order']=0;
	}
	if($_SESSION['end_project']==1)
	{
	echo"in quary ORDERS";	
	$project_id=$_POST["project_id"];
	
	$sql = "SELECT * FROM project WHERE project_id=$project_id  ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
						while($row = $result->fetch_assoc())
						{
						$project_ID=$row["project_id"];	
						$DEADLINE=$row["dead_line"];
						$cost=$row["price"];
						$name=$row["project_name"];
				
         				}									
									}	
	
$sql = "INSERT INTO `projects_history`(`project_id`, `project_name`, `end_date`, `cost`) VALUES ('$project_ID','$name',SYSDATE(),'$cost') ";
		$result = $conn->query($sql);	
	
	
$sql="DELETE FROM `project` WHERE project_id=$project_id";
	
				$result = $conn->query($sql);	
	$_SESSION['end_project']=0;
	}
	$message="--";
$sent_by="--";
$time="--";
$sql = "SELECT * FROM `orders` WHERE reciver_ID='manager' ";
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
?>


    <div class="layer1">
  
        <h2> Manager View </h2>
        <input type="submit" id="gt" value="GIVE TASK" onclick="give_task()"> 
		<input type="submit" id="gt" value="CALL MEETING">
        <input type="submit" id="gt" value="SEND_MESSAGE" onclick="give_order()">
		<input type="submit" id="gt" value="END PROJECT" onclick="end_project()"">	
       
        <table>

            <tr>
                 <th> PROJECT ID</th>
                 <th> PROJECT NAME</th>
				 <th> DEADLINE </th>
                 <th> MODULE 1  STATUS </th>
                 <th> MODULE 2  STATUS </th>
                 <th> MODULE 3  STATUS </th>
				 <th> TEAM </th>
                </tr>
<?PHP				
		$sql = "SELECT * FROM project ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
						while($row = $result->fetch_assoc())
						{
						$project_ID=$row["project_id"];	
						$DEADLINE=$row["dead_line"];
						$name=$row["project_name"];
						$module1=$row["module1_status"];
						$module2=$row["module2_status"];
						$module3=$row["module3_status"];
						$team=$row["team"];
           echo"     <tr>";
                    echo"    <td> $project_ID </td>";
                    echo"    <td> $name</td>";
                    echo"    <td> $DEADLINE </td>";
                    echo"    <td> $module1 </td>";
                    echo"    <td> $module2 </td>";
                    echo"    <td> $module3</td>";
					echo"    <td> $team </td>";
          echo"  </tr>";
						}//while
									}//if
?>					
                    
        </table>

  


<br><br><br><br><br>

	<h1 class="head2">NOTIFICATIONS</h1><BR><br>
	<textarea class="text1" name="comment" rows="5" cols="40"><?php echo "SENT BY:".$sent_by;echo "        MESSAGE:"; echo $message; echo "         DAY_TIME:"; echo $time;?></textarea>




    </div>


    <!--DIV ON WHICH WE ARE WORKING-->
    
    <div class="layer2">

        <input type="submit" onclick="logout()" value="lOGOUT" id="lg">
    </div>




</section>
</body>


<script>
function logout()
{
    
    window.location.replace("Home.php");
}
function give_task()
{
    
    window.location.replace("givetaskmanager.php");
}
function give_order()
{
    
    window.location.replace("order_manager.php");
}
function end_project()
{
    
    window.location.replace("end_project.php");
}
</script>


</html>