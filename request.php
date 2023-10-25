<?php

echo "<html><head><style>div{border-width:1px;border-color:black;width:300px;height:200px;margin:5px 5px;border-style:solid;padding:50px;background-color:chocolate; font-weight:bolder;over-flow:hidden} </style></head><body> <form> ";

echo "<div class='book'><center><h3>Delete Book Or  Student</h3></center><br/><center>Book or Student ID :<br/><br/> <input type='text' min=0 placeholder='Bookid or Studentid' name='bookid'></center><br/><br/><center><input type=submit value='Delete'></center></div><br/>";

$conn=mysqli_connect("localhost","root","","library");
if ($conn===false)
{
    echo "Connection Error ";
}

if (isset($_REQUEST['bookid']))
{
   $bookid=$_REQUEST['bookid'];
   $sql="delete from book where bookid='$bookid' ";
   $result=mysqli_query($conn,$sql);

if($result){
echo "<script> alert('book  or student as deleted successfully')</script>";
}}
if (isset($_REQUEST['bookid']))
{
   $bookid=$_REQUEST['bookid'];
   $sql="delete from student where studentid='$bookid' ";
   $result=mysqli_query($conn,$sql);
}
$conn->close();

?>
