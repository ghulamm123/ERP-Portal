<?php session_start(); ?>
<!DOCTYPE HTML>  
<html>
<title> TASK ASSIGNING</title>
<head>
</head>
<body>

<h1>GIVE TASK</h1>
<form method="POST" action="managerview.php">
    ENTER PROJECT ID :
  <input type="text" name="project_id"> <br>
  ENTER TEAM NAME:<br>
  <input type="radio" name="team_name" value="A" > A<br>
  <input type="radio" name="team_name" value="B"> B<br>
  <input type="radio" name="team_name" value="AB"> AB
  <?php 

$_SESSION['give_task']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>

</body>

</html>