<?php
$conn= new mysqli("localhost","root","","library");
if($conn->connect_error)
{  echo "Connection Error".$conn->connect_error;}
$sql="SELECT * FROM book";
$result= $conn->query($sql);
echo "<html><head><title>SQL Table in HTML</title><style>th,td,tr{width:350px;height:50px;font-weight:bolder;
font-size:large;}h2{background-color:orange}</style>
<script type='text/javascript'>
 function display()
 {
   alert('Request sent!');
 }
</script>
</head><body>";
echo "<center><table border='1'style='background-color:orange;padding:5px 2px 2px;' >";
echo "<tr><center><h2>REQUEST BOOK</h2></center><th>BookId</th><th>BookName</th><th>Category</th><th>Publication</th><th>Price</th></tr>"; // Add more headers as needed
while ($row = $result->fetch_assoc()) {
    echo "<tr><td >" . $row["bookid"]."</td><td >" . $row["bookname"]."</td><td>" . $row["category"]."</td><td>".$row["publication"]."</td><td>" .$row["price"]."</td><td>"."<button type='button'value='Request Book' style='background-color:darkkhaki;font-weight:bolder;' onclick='display();'>Request Book</button>"."</td>";} // Add more columns as needed
echo "</table></center><br/>";
echo "</body></html>";
$conn->close();
?>