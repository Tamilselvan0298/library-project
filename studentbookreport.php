<?php
$studentid=$_REQUEST['studentid'];
$conn=mysqli_connect("localhost","root","","library");
if($conn===false)
{
    die("Connection Error".mysqli_connect_error());
}
$sql="select * from issuebook where studentid= '$studentid' ";
$result= $conn->query($sql);

echo "<html><head><title>SQL Table in HTML</title><style>th,td,tr{width:370px;height:50px;font-weight:bolder;
font-size:large;}h2{background-color:orange}</style></head><body>";
echo "<center><table border='1'style='background-color:orange;padding:5px 2px 2px;' >";
echo "<tr><center><h2>ISSUED BOOK</h2></center><th>ISSUENAME</th><th>BOOK ID</th><th>STUDENT ID</th><th>ISSUE TYPE</th><th>ISSUE DATE</th><th>RETURN DATE</th><th>RETURN</th></tr>"; // Add more headers as needed
while ($row = $result->fetch_assoc()) 
{
    echo "<center><tr><td >" . $row["issuename"]."</td><td>" . $row["bookid"]."</td><td>".$row["studentid"]."</td><td>" .$row["issuetype"]."</td><td>".$row["issuedate"]."</td><td>".$row["returndate"]."</td><td>"."<button type='button'value='Return' style='background-color:darkkhaki;font-weight:bolder;' onclick='display();'>Return</button>"."</td>"; // Add more columns as needed
}
echo "</table></center><br/>";
echo "</body></html>";
$conn->close();
?>