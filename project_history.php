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
  <th>PROJECT ID</th> 
  <th>PROJECT NAME</th> 
  <th>END DATE</th>
 <th>COST</th>  

 </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "erp_system");
$sql = "SELECT *from projects_history";
  $result = $conn->query($sql);
   while($row = $result->fetch_array()) 
   {
    echo "<tr>
    <td>" . $row["project_id"]. "</td><td>" . $row["project_name"] . "</td><td>"
. $row["end_date"]. "</td><td>" . $row["cost"]. "</td></tr>"; 
            
   
    }
$conn->close();

            ?>
              </table> 
              
      <a href="ceo.php"> go back </a>

   </body>
</html>