<html>
<title>Log In</title>

<head>


    <link rel="stylesheet" href="clientlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

<form  action="" method="post">

    <div class="l1">
        

        <h1 > LOG IN</h1>
        <form method="POST"  action="https://www.yahoo.com/?guccounter=1">
        
        <input type="text" id="liname" name="username" placeholder="Username" onFocus="this.style.backgroundColor='rgb(204, 255, 204)';" onblur="this.style.backgroundColor='rgba(242, 242, 242,0.9);';">
        
        <input type="password" id="lipass" name="password" placeholder="Password" onFocus="this.style.backgroundColor='rgb(204, 255, 204)';" onblur="this.style.backgroundColor='rgba(242, 242, 242,0.9);';" ><br/>
        <br/>
    
        <input class="l1a" type="button" onclick="valid()" name="Log In" value="Log In">
       <p>Don't Have a Account?<a href="sign.html"> Register Here</a></p>

</form>
    </div>








</form>


<script>
var u=document.getElementById("liname").Value;
var p=document.getElementById("lipass").Value;



function valid()
{
    if(u!=="maaz" && p!=="1234")
    {
        alert("incorrect password")
    }
    else
    {
        window.location.href="userview.html"
    }

   
}


</script>
</body>


</html>