<?php session_start(); ?>
<!DOCTYPE HTML>  
<html>
<title> TASK ASSIGNING</title>
<head>
</head>
<body>

<h1>GIVE TASK</h1>
<form method="POST" action="hr.php">
    ENTER Employee Name:
  <input type="text" name="employee_name"> <br>
    ENTER Employee password:
  <input type="text" name="employee_password"><br>
    ENTER Employee Salary:
  <input type="text" name="employee_salary"><br>
	ENTER TEAM NAME:<br>
  <input type="radio" name="team_name" value="A" > A<br>
  <input type="radio" name="team_name" value="B"> B
  <?php 

$_SESSION['add employee']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>

</body>

</html>