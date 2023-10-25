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
            height:400px;
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
$bookid= $_REQUEST['bookid'];
$bookname= $_REQUEST['bookname'];
$category= $_REQUEST['category'];
$author= $_REQUEST['author'];
$publication= $_REQUEST['publication'];
$price= $_REQUEST['price'];
$quantity= $_REQUEST['quantity'];
$bookphoto= $_REQUEST['bookphoto'];
$sql="INSERT INTO book VALUES ('$bookid','$bookname','$category','$author','$publication','$price','$quantity','$bookphoto')";

if(mysqli_query($conn,$sql))
{
    echo "<center><h2>Data Stored In a Database Successfully</h2></center>";
    echo nl2br("<div id='content'><h3>bookid  : $bookid</h3><h3>bookname  : $bookname</h3><h3>category  :  $category</h3> <h3> author  :  $author </h3> <h3>publication  :  $publication </h3><h3> price : $price </h3><h3> quantity  :  $quantity</h3><h3>bookphoto  :</h3>  $bookphoto </div>");
}
else{
    echo "ERROR: Hush! Sorry $sql".mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>