<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
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
  <th>team</th>
  <th>FIRE</th>
  

 </tr>
      <?php
       if (isset($_GET['del'])) {
$del = $_GET['del'];
$conn = mysqli_connect("localhost", "root", "", "erp_system");
$sql ="delete from employee where employee_id=$del";
$result = $conn->query($sql);
//SQL query for deletion.
//$query1 = mysql_query("delete from employee where employee_id=$del", $connection);
}
$conn = mysqli_connect("localhost", "root", "", "erp_system");
$sql = "SELECT *from employee";
  $result = $conn->query($sql);
   while($row = $result->fetch_array()) 
   {
    echo "<tr>
    <td>" . $row["employee_id"]. "</td><td>" . $row["employee_name"] . "</td><td>"
. $row["team"]. "</td> 
<td><a href='fire_employee.php?del=$row[employee_id]'>FIRE</a></li></td>;
</tr>";

 
            
   
    }
$conn->close();

            ?>
              </table> 
              
      <a href="hr.php"> go back </a>

   </body>
</html>