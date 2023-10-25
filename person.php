<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBook</title>
    <style>
        body{
            background-color: orange;
            color: white;
            width: 100%;
            height:200px;
        }
        h2{color:black;}
        #content{
            position: relative;
            left: 10px;
            top:10px;
        }

    </style>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","library");
if($conn===false)
{
    die("ERROR: connect to server ".mysqli_connect_error());
}
$studentid= $_REQUEST['Studentid'];
$name= $_REQUEST['Name'];
$password= $_REQUEST['Password'];
$email= $_REQUEST['Email'];
$category= $_REQUEST['Category'];
$sql="INSERT INTO student VALUES ('$studentid','$name','$password','$email','$category')";
if(mysqli_query($conn,$sql))
{
    echo "<center><h2>Data Stored In a Database Successfully</h2></center>";
    echo nl2br("<div id='content'><h3>STUDENT ID  : $studentid</h3><h3>NAME  :  $name</h3> <h3> PASSWORD  :  $password </h3> <h3>EMAIL  :  $email </h3><h3> CATEGORY : $category </h3></div>");
}
else{
    echo "ERROR: Hush! Sorry $sql".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>