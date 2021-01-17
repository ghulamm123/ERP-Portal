<?php session_start(); ?>
<!DOCTYPE HTML>  
<html>
<title> TASK ASSIGNING</title>
<head>
</head>
<body>

<h1>COMPLETE TASK</h1>
<form method="POST" action="employeeview.php">
  ENTER EMPLOYEE ID :
  <?php $id=$_SESSION["employee_id"]; ?>
 <input type="text" name="username" value=<?php echo "$id"?>> <br>
  
  ENTER PROJECT ID :
  <input type="text" name="project_id"> <br>
  ENTER MODULE NUMBER:<br>
  <input type="radio" name="module_number" value="1" > MODULE 1<br>
  <input type="radio" name="module_number" value="2"> MODULE 2<br>
  <input type="radio" name="module_number" value="3"> MODULE 3
  <?php 

$_SESSION['complete_task']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>

</body>

</html>