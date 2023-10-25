<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKRECORD</title>
    <style>
        .issuebook{
            width: 500px;
            height:350px;
            background-color: chocolate;
        }
        #text
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
    <form method="post">
        <div class="issuebook">
            <center><h2 align="center">ISSUE BOOK</h2></center>
            <h4>Choose Book : <select id="text"><option>The Godfather</option><option>scott Galagher</option></select><br/><br/></h4>
            <h4>Student Id : <input type="number" id="text"/><br/><br/></h4>
            <h4>Select Student : <input type="text" id="text/"><br/><br/></h4>
            <h4>Days : <input type="number" id="text"/><br/><br/></h4>
            <center><input type="submit" value="submit"/> </center>
        </div>
    </form>
</body>
</html>