<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDBOOK</title>
    <style>
        .addbook
        {
            width: 500px;
            height:480px;
            background-color: chocolate;
        }
        #h1{
            background-color: darkolivegreen;
            border-style: none;
            border-width: 0px;
            font-size: large;}
        #text{
            width: 300px;
            border-radius: 5px;
            border-style:inset;
            border-width: 1px;}
    </style>
    <script type="text/javascript">
        function display()
        {
            const student=document.getElementById("text").value;
            if(student=="")
            {
            alert("Fill the Area ");
            return false;
            }
        }
        </script>
</head>
<body>
    <form action="book.php" method="post" onsubmit="return display();">
    <div class="addbook" >
        <h1 align="center" id="h1" >ADD BOOK</h1>
        <h4>Book Id :<input name="bookid" type="text" id="text"><br/><br/></h4>
        <h4>Book Name :<input name="bookname" type="text" id="text"><br/><br/></h4>
        <h4>Category  : <input name="category"type="text" id="text"><br/><br/></h4>
        <h4>Author : <input name="author" type="text" id="text"><br/><br/></h4>
        <h4>Publication : <input name="publication" type="number" id="text"><br/><br/></h4>
        <h4>Price : <input name="price" type="number" id="text"><br/><br/></h4>
        <h4>Quantity : <input name="quantity" type="number" id="text"><br/><br/></h4>
        <h4>Book Photo : <input  name="bookphoto" type="file" width="300px" height="300px" alt="none">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit"><br/></h4>
    </div>
</form></body>
</html>