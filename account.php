<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <style>
        .account{
            width: 500px;
            height:200px;
            background-color: chocolate;}
        h2{border-style: solid;
            background-color: darkolivegreen;
            font-size: large;
            border-color: black;
        border-width: 1px;}
        h3{
            padding-left: 50px;
          }
        
    </style>
    <script src="index.js"></script>
</head>
<body>
<?php
$email=$_REQUEST["email"];
$conn=mysqli_connect("localhost","root","","library");
if($conn===false)
{
    die("Connection Error".mysqli_connect_error());
}
$sql="select name,email,category from student where Email='$email'";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
  echo "<div class='account'>
  <center><h2>MY ACCOUNT</h2></center><b><h3 id='name'>Acount name : ".$row ['Name']."</b></h3>" ."<b><h3>Person EmailId :".$row ['Email'].'</b></h3>'.'<b><h3>Account Type :'.$row ['Category'].'</b></h3>'.'</div>';
}

$conn->close();
?>
</body>
</html>