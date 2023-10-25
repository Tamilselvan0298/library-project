function admin()
{   var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    if(email ==="" && password==="")
    {
        alert("Enter the  Admin Email Id and Password");
        return false;
    }
    else if (email ==="tamilselvan@gmail.com" && password ==="tamilselvan02")
    {
    }
    else{
        alert("Entered UserName or Password is Incorrect");
        return false;
    }
}