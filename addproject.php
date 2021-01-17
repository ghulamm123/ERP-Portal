<?php session_start(); ?>
<html>
    <head>
<title>
    PROJECT

</title>

<link rel="stylesheet" href="addproject.css">
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
            <h1>ADD PROJECT
            </h1>
        <form method="POST"     action="ceo.php">
            <input type="text" id="proname"  name="project_name" placeholder="Enter project name"> <br>
             <textarea> Enter Project details</textarea><br>
             <input type="date" id="prodeadline" name="deadline"><br>
             <input type="text" id="procost" name="cost" placeholder="Enter project cost"><br>
			 <br><br><br><br><br><br><br><br>
			 <p>RECHECK THE GIVEN DATA  </p>  <input type="radio" name="Check" value="1"> YES  <input type="radio" name="Check" value="0"> NO
<?php 

$_SESSION['check']=1;			 
      
?>
 <input type="submit" name="ADD PROJECT" onclick="details();">

        </form>
        </div><!--MAIN DIV-->



    </body>
</html>