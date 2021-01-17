<?php session_start(); ?>

<html>
<title> ERP SYSTEM</title>
<head>
        
<link rel="stylesheet" href="Home1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
//use these sessions to avoid errors on differen pages
$_SESSION['check']=0;
$_SESSION['complete_task']=0;//use in employees complete_task
$_SESSION['give_task']=0;
$_SESSION['add employee']=0;
$_SESSION['ceo_order']=0;	
$_SESSION['manager_order']=0;	
$_SESSION['teamlead_A_order']=0;	 
$_SESSION['teamlead_B_order']=0;
$_SESSION['end_project']=0;	
			 
?>
    <div class="nav1">

        <ul>
            
            <li><a href="clientlogin.html">LOG IN</a></li>
            <li class="active"><a href="sign.html">SIGN UP</a></li>
            
        </ul>
    </div>

    
        <h1 class="header"> <span class="header1a">E R P</span> SYSTEM</h1>
    






        <h1 id="contc"> TEAM</h1>
<div class="wrapper"><!--MAIN BOX-->

	<div class="container" id="c0"><!--BOX ON THE LEFT-->
		<div id="i1">
			
			
		</div><!--UPPER BOX-->
		<div class="story" id="s0">
			<div class="info">
			<h3 id="head1">C<span class="hea1i">EO</span></h3>
			<input type="password" id="ceopass" name="Password"   placeholder="  PASSWORD">
			<input type="button" id="ceosubmit" name="SUBMIT" value="SUBMIT" onclick="ceovalid()">
		
			</div>
        </div><!--LOWER BOX-->
        
    </div><!-- CEO BOX	-->
    


	<div class="container" id="c1"><!--BOX ON THE MIDDLE-->
		<div class="image">
			
        </div><!--UPPER BOX-->
        
		<div class="story" id="s1">
			<div class="info">
				<h3>Manager / HR / Team Lead</h3>
				
			
				
				<!--<h3>Team Lead</h3>-->
				<input type="text" id="mname" name="username" placeholder="    Username">
        
				<input type="password" id="mpass" name="password" placeholder="   Password"><br/>
				<br/>
				<input class="lia" type="button" onclick="managervalid()" name="Log In" value="Log In">
	
			</div>
        </div><!--LOWER BOX-->
        
    </div><!--MANAGER  BOX-->
    
    
    
    <div class="container" id="c2"><!--BOX ON THE RIGHT-->
		<div class="image">
			
        </div><!--UPPER BOX-->
        
		<div class="story" id="s2">
			<div class="info">
			<h3>Employee</h3>
		<form method="POST" action="employeeview.php">
			<input type="text" id="ename" name="username" placeholder="    Username">
        
			<input type="password" id="epass" name="password" placeholder="   Password"><br/>
			<br/>
		<!--	<input class="lia" type="button" onclick="valid()" name="Log In" value="Log In">   -->
		<input class="lia" type="submit">
		</form>
			</div>
		</div><!--LOWER BOX-->
	</div><!--EMPLOYEE BOX-->

  
</div>

<div class="d3">
  <h1> WHAT WE VALUE MOST</h1>

  <div class="img1"></div>
    <br/>
        <div class="head1">
        <h1> HELPFULNESS</h1>
        <p> Looking for opportuinities to<br> drop everything and help</p>
        </div><!--heading1-->
        <div class="img2"></div>
        <br>
        <div class="head2">

            <h1> PASSION</h1>
            <p> Caring deeply about our mission, team, and customers</p>
            </div><!--heading2-->



</div>

<div class="div4">
  
  <div class="stick">
    <h1>
      HEADING
    </h1>
<p>
    Many of us joined after already being members of the Plex community—a community very near and dear to our hearts.<br>
     Some of us are movie buffs. Some are news junkies. Some are addicted to podcasts.<br>
    making it easier than ever to discover, enjoy, and share all of your media on all of your devices.
</p>
  </div>
  <div class="stick2">
<h1> HEADING</h1>

<p>
    Many of us joined after already being members of the Plex community—a community very near and dear to our hearts.<br>
     Some of us are movie buffs. Some are news junkies. Some are addicted to podcasts.<br>
    making it easier than ever to discover, enjoy, and share all of your media on all of your devices.
</p>

    </div>
  

  </div><!--swe-->
  








  <div class="aboutus">
	<h1><bold>ABOUT US</bold></h1>


<!--ABOUT US DIV-->




   
    </body>

    <script src="home1.js"> </script>

</html>
