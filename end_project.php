<?php session_start(); ?>
<!DOCTYPE HTML>  
<html>
<title> END PROJECT</title>
<head>
<link rel="stylesheet" href="completetask.css">
</head>
<body>

<h1>COMPLETE TASK</h1>
<form method="POST" action="managerview.php">
  ENTER PROJECT ID :
  <input type="text" name="project_id"> <br>
  ENTER MODULE NUMBER:<br>
  <input type="radio" name="team" value="A" > TEAM A<br>
  <input type="radio" name="team" value="B"> TEAM B<br>
  <input type="radio" name="team" value="AB"> TEAM AB
  <?php 

$_SESSION['end_project']=1;			 
      
?>
  <input type="submit" value="Submit">
  <input type="reset">
</form>

</body>

</html>