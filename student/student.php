<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
    <style>
        .list{
    position: relative;
    left: 200px;
    top: 50px;
    width: 50%;
    height: 50%;
}
#output{
    position: relative;
    left: 400px;
    bottom: 140px;
    background-color:white;
    width: 50%;
    height: 500px;
    border-style: none;
    border-color: white;
}
input[type=button]
{
border-color: sienna;
background-color:peru;
width: 150px;
height: 25px;
font-size:small;
font-weight: bolder;
}
    </style>
    <script type="text/javascript">
        function display(){
        const account=document.getElementById("output");account.innerHTML= '<embed width="100%" height="300px" type="text/php" src="account.php">';}
        function display1()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="requestbook.php"/>';}
        function display2()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="studentbookreport.php"/>';}
    </script>
</head>
<body><form method="post">
    <center><img src="image/librarylogo.jpg" width="30%" height="100px"/></center>
    StudentId <input type="text" name="Studentid" placeholder="studentid"/><input type="submit" value="submit"/><br/>
</form>
    <div class="list">
            <input type="button" value="ACCOUNT" onclick="display();"></input><br/><br/>
            <input type="button" value="REQUEST BOOK" onclick="display1()"/><br/><br/>
            <input type="button" value="BOOK REPORT"onclick="display2()"/><br/><br/>
            <input type="button" value="LOG OUT" onclick="history.back()"/>
    </div>
    <div id="output">
        <embed width="100%" height="300px" type="text/php" src="account.php">;
    </div>
        </body>
<?php
$studentid=$_REQUEST["Studentid"];
$conn=mysqli_connect("localhost","root","","library");
if($conn===false)
{
    die("Connection Error".mysqli_connect_error());
}
$sql="select Name,Email,Category from student where Studentid='$studentid'";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
  echo "<div class='account'>
  <center><h2>MY ACCOUNT</h2></center><b><h3 id='name'>Acount name : ".$row ['Name']."</b></h3>" ."<b><h3>Person EmailId :".$row ['Email'].'</b></h3>'.'<b><h3>Account Type :'.$row ['Category'].'</b></h3>'.'</div>';
}

$conn->close();
?>
</html>