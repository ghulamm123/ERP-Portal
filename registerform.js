


var userdata=[];

var user;
var password;
var n=document.getElementById("liname").value;
var p=document.getElementById("lipass").value;
var p2=document.getElementById("spass2").value; 




function valid()
{
 if (n==="maaz" && p==="1234")
      {
       window.location.href="userview.html"

    //inner else
      }
else (n!=="maaz" && p!=="1234")
    {
        alert("incorrect password")

    }
}//function valid

function data()
{
    for(var i=0;i<10000;i++)
    {
      username=document.getElementById("name").value;
      username.toLowerCase();
      userdata.push(username);

      password=document.getElementById("pass").value;
      userdata.push(password);

    }
    
    
    }//function data


