function ceovalid()
{
    var pass=document.getElementById("ceopass").value;

    if(pass==="ceo")
    {
        window.location.replace("ceo.php")

    }
    else
    {
        alert("enter correct password")

    }
}


function managervalid()
{
    var name=document.getElementById("mname").value;
    var pass=document.getElementById("mpass").value;

    if(name="manager" && pass==="manager")
    {
        window.location.replace("managerview.php")

    }else if(name="manager1" && pass==="manager1")
    {
        window.location.replace("teamleadA.php")

    }else if(name="manager2" && pass==="manager2")
    {
        window.location.replace("teamleadB.php")

    }else if(name="hr" && pass==="hr")
    {
        window.location.replace("hr.php")

    }
    else
    {
        alert("enter correct password")

    }
}


function valid()
{
    var name=document.getElementById("ename").value;
    var pass=document.getElementById("epass").value;

    if(name="manager1" && pass==="manager1")
    {
        window.location.replace("teamleadA.php")

    }else if(name="manager2" && pass==="manager2")
    {
        window.location.replace("teamleadB.php")

    }
    else
    {
        alert("enter correct password")

    }
}

