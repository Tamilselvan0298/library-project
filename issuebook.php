<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSUEBOOK</title>
    <style>
        .issuebook{
            width: 500px;
            height:460px;
            background-color: chocolate;
        }
        .text
        {width: 200px;
            border-radius: 5px;
            border-style:inset;
            border-width: 1px;}
         h2{border-style: none;
                background-color: darkolivegreen;
                font-size: large;
        border-width: 0px;}
    </style>
</head>
<body>
    <form method="post" action="bookissue.php">
        <div class="issuebook">
            <center><h2 align="center">ISSUE BOOK</h2></center>
            <h4>Issue Name : <input type="text" name="issuename" class="text"/><br/><br/></h4>
            <h4>Book Id: <input type="text" name="bookid" class="text"/><br/><br/></h4>
            <h4>Student Id : <input type="text" name="studentid" class="text"/><br/><br/></h4>
            <h4>Quantity : <input type="number" name="quantity" max='1' class="text"/><br/><br/></h4>
            <h4>Issue Type: <select class="text" name="issuetype"><option>Student</option><option>Teacher</option></select><br/><br/></h4>
            <h4>Issue Date: <input type="date" class="text" name="issuedate"/><br/><br/></h4>
            <h4>Return Date : <input type="date" class="text"name="returndate"/><br/></h4>
            <center><input type="submit" value="Submit"/> </center>
        </div>
    </form>
</body>
</html>