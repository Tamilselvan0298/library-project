<?php
$conn= new mysqli("localhost","root","","library");
if($conn->connect_error)
{
    echo "Connection Error".$conn->connect_error;
}
$sql="SELECT * FROM student";
$result= $conn->query($sql);

echo "<html><head><title>SQL Table in HTML</title><style>th,td,tr{width:350px;height:50px;font-weight:bolder;
font-size:large;}h2{background-color:orange}</style></head><body>";
echo "<center><table border='1'style='background-color:orange;padding:5px 2px 2px;' >";
echo "<tr><center><h2>ADD PERSON</h2></center><th>STUDENT ID</th><th>NAME</th><th>PASSWORD</th><th>EMAIL</th><th>CATEGORY</th></tr>"; // Add more headers as needed
while ($row = $result->fetch_assoc()) {
    echo "<tr><td >" . $row["Studentid"]."</td><td>" . $row["Name"]."</td><td>".$row["Password"]."</td><td>" .$row["Email"]."</td><td>".$row["Category"]."</td>"; // Add more columns as needed
}

echo "</table></center><br/>";
echo "</body></html>";


$conn->close();



?>