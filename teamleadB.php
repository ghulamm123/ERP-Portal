<?php session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="managerview.css">


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

if($_SESSION['teamlead_B_order']==1)
	{
	echo"in quary ORDERS";	
	$sent_to=$_POST["reciver"];
	$message=$_POST["message"];
	echo $message;
	$sent_by="TEAMLEAD B";
	$module1_status="in progress";
	$sql="INSERT INTO `orders`(`sender_ID`, `reciver_ID`, `message`, `date_time`) VALUES ('$sent_by','$sent_to','$message',SYSDATE())";
	//$conn->query($sql);
	//$conn->query($sql);
				$result = $conn->query($sql);	
	$_SESSION['teamlead_B_order']=0;
	}
$message="--";
$sent_by="--";
$time="--";
$sql = "SELECT * FROM `orders` WHERE reciver_ID='teamlead_B' ";
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


if($_SESSION['give_task']==1)
	{
	
	$employee_id=$_POST["employee_id"];
	$project_id=$_POST["project_id"];
	$module_number=$_POST["module_number"];
	$sql="UPDATE `employee` SET `task`='P:$project_id M:$module_number' WHERE employee_id=$employee_id ;";
	$result = $conn->query($sql);	

	$_SESSION['give_task']=0;
	}
	
?>

<section>

    <div class="layer1">
  
        <h2> "B" TEAM LEAD VIEW </h2>
        <input type="submit" id="gt" value="GIVE TASK" onclick="give_task()"> 
		<input type="submit" id="gt" value="MESSAGE"onclick="order()">
        <input type="submit" id="gt" value="EMP:TASK" onclick="see_task()"> 
       
        <table>

            <tr>
                 <th> PROJECT ID</th>
                 <th> PROJECT NAME</th>
				 <th> DEADLINE </th>
                 <th> MODULE 1  STATUS </th>
                 <th> MODULE 2  STATUS </th>
                 <th> MODULE 3  STATUS </th>
				 
                </tr>
<?PHP				
		$sql = "SELECT * FROM project where team='B' or team='AB'";
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
           echo"     <tr>";
                    echo"    <td> $project_ID </td>";
                    echo"    <td> $name</td>";
                    echo"    <td> $DEADLINE </td>";
                    echo"    <td> $module1 </td>";
                    echo"    <td> $module2 </td>";
                    echo"    <td> $module3</td>";
          echo"  </tr>";
						}//while
									}//if
?>					
              
        </table>

  <br><br>
<br><br>
<br><br>


	NOTIFICATIONS:<BR><br>
	<textarea name="comment" rows="5" cols="40"><?php echo "SENT BY:".$sent_by;echo "        MESSAGE:"; echo $message; echo "         DAY_TIME:"; echo $time;?></textarea>









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
    
    window.location.replace("givetaskteamleadB.php");
}
function see_task()
{
    
    window.location.replace("teamBemployess.php");
}
function order()
{
    
    window.location.replace("order_teamleadB.php");
}
</script>


</html>