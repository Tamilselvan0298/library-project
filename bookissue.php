<?php
$issuename = $_REQUEST["issuename"];
$bookid = $_REQUEST["bookid"];
$studentid = $_REQUEST["studentid"];
$quantity = $_REQUEST["quantity"];
$issuetype = $_REQUEST["issuetype"];
$issuedate = $_REQUEST["issuedate"];
$returndate = $_REQUEST["returndate"];

$conn = mysqli_connect("localhost", "root", "", "library");
if ($conn === false) {
    die("Connection Error: " . mysqli_connect_error());
}

// Remove single quotes around 'quantity'
$sql = "INSERT INTO issuebook (issuename, bookid, studentid, quantity, issuetype, issuedate, returndate) 
        VALUES ('$issuename', '$bookid', '$studentid', $quantity, '$issuetype', '$issuedate', '$returndate')";

if (mysqli_query($conn, $sql)) {
    echo "<center><h1>Book Issued Successfully</h1></center>";
    echo nl2br("<div id='content' style='background-color:chocolate;'><h3>Issuename: $issuename</h3><h3>Bookid: $bookid</h3><h3>Student id: $studentid</h3> <h3>Issuetype: $issuetype</h3> <h3>Issue date: $issuedate</h3><h3>Return date: $returndate</h3></div>");
    
    // Update the book's quantity
    $sql1 = "UPDATE book SET quantity = quantity - 1 WHERE bookid = '$bookid'";
    if (mysqli_query($conn, $sql1)) {
    }
} else {
    echo "ERROR: Sorry, $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>