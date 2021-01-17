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


<table>

            <tr>
                 <th> PROJECT ID </th>
				 <th> PROJECT NAME </th>
                 <th> DEADLINE </th>
                 <th> COST </th>
           
                </tr>
               
<?PHP				
		$sql = "SELECT * FROM project ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
						while($row = $result->fetch_assoc())
						{
         echo"       <tr>";
						$project_ID=$row["project_id"];	
						$DEADLINE=$row["dead_line"];
						$cost=$row["price"];
						$name=$row["project_name"];
				
         echo"   <td> $project_ID </td> ";
		 echo"   <td> $name  </td> ";
		 echo"   <td> $DEADLINE </td> ";	
		 echo"   <td> $cost </td> ";
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