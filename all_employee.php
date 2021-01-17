<html>
   
   <head>
      <title>Employee Record</title>
      <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
   </head>
   
   <body>
      <table>
 <tr>
  <th>employee_id</th> 
  <th>employee_name</th> 
  <th>password</th>
 <th>salary</th> 
  <th>task</th> 
  <th>team</th>
  

 </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "erp_system");
$sql = "SELECT *from employee";
  $result = $conn->query($sql);
   while($row = $result->fetch_array()) 
   {
    echo "<tr>
    <td>" . $row["employee_id"]. "</td><td>" . $row["employee_name"] . "</td><td>"
. $row["password"]. "</td><td>" . $row["salary"]. "</td><td>" . $row["task"] . "</td><td>"
. $row["team"]. "</td> 
</tr>";

 
            
   
    }
$conn->close();

            ?>
              </table> 
              
      <a href="ceo.php"> go back </a>

   </body>
</html>