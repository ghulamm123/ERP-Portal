<?php session_start(); ?>
<html>

<head>
<title>
    Status
</title>
<link rel="stylesheet" href="status.css">
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
    <div class="maindiv">


<?php

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
<table>

            <tr>
                 <th> EMPLOYEE ID </th>
				 <th> EMPLOYEE NAME </th>
                 <th> TASK </th>           
		   </tr>
               
<?PHP				
		$sql = "SELECT * FROM employee WHERE team='A' ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
						while($row = $result->fetch_assoc())
						{
         echo"       <tr>";
						$employee_id=$row["employee_id"];	
						$employee_name=$row["employee_name"];
						$task=$row["task"];
				
         echo"   <td> $employee_id </td> ";
		 echo"   <td> $employee_name</td> ";
		 echo"   <td> $task </td> ";	
						}									
								
								
									}			
		                 
         echo"      </tr>";
?>

                       <tr>
                            <td> PROJECT </td>
                            <td> DEADLINE </td>
                            <td> COST </td>
                            
                      
                           </tr>
    
                           <tr>
                                <td> PROJECT </td>
                                <td> DEADLINE </td>
                                <td> COST </td>
                          
                               </tr>
        


            </table>


    </div><!--maindiv-->



</body>
</html>