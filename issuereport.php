<?php
$conn = mysqli_connect("localhost", "root", "", "library");
if ($conn === false) {
    die("Connection Error: " . mysqli_connect_error());
}
$sql = "select * from issuebook";
$result = $conn->query($sql);

echo "<html><head><title>SQL Table in HTML</title><style>th, td, tr {width: 370px; height: 50px; font-weight: bolder; font-size: large;} h2 {background-color: orange}</style></head><body>";
echo "<center><table border='1' style='background-color: orange; padding: 5px 2px 2px;'>";
echo "<tr><center><h2>ISSUED BOOK</h2></center><th>ISSUENAME</th><th>BOOK ID</th><th>STUDENT ID</th><th>ISSUE TYPE</th><th>ISSUE DATE</th><th>RETURN DATE</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["issuename"] . "</td><td>" . $row["bookid"] . "</td><td>" . $row["studentid"] . "</td><td>" . $row["issuetype"] . "</td><td>" . $row["issuedate"] . "</td><td>" . $row["returndate"] . "</td>";
}

echo "</table></center><br/>";
echo "<div style='background-color: orange; padding: 5px 2px 2px;'><form method='post' action='returnbook.php'>

<center><h1>Book Return</h1><input type='text' placeholder='Book Id'name='bookid'/><br/><br/>
<input type='submit' style='background-color: darkkhaki; font-weight: bolder;'value='Return Book'></form></center></div>";
echo "</body></html>";
$conn->close();
?>