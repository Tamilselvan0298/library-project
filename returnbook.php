<?php
$bookid = $_REQUEST["bookid"];

$conn = mysqli_connect("localhost", "root", "", "library");
if ($conn === false) {
    die("Connection Error: " . mysqli_connect_error());
}

// Remove single quotes around 'quantity'
$sql = "delete from issuebook where bookid = '$bookid'";

if (mysqli_query($conn, $sql)) {
        
    // Update the book's quantity
    $sql1 = "UPDATE book SET quantity = quantity + 1 WHERE bookid = '$bookid'";
    if (mysqli_query($conn, $sql1)) {
        echo "<script>alert ('book return successfully');</script>";
    }
} else {
    echo "ERROR: Sorry, $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>