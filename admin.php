<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="admin.css" rel="stylesheet">

    <script type="text/javascript">
        function display1()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="addbook.php"/>';}
        function display2()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="request.php"/>';}
        function display3()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="bookreport.php"/>';}
        function display4()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="addstudent.php"/>';}
        function display5()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="addperson.php"/>';}
        function display6()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="issuebook.php"/>';}
        function display7()
        {const add=document.getElementById("output");add.innerHTML='<embed width=100% height=100% type="text/php" src="issuereport.php"/>';}
    </script>
</head>
<body>
    <form method="post">
    <center><img src="image/librarylogo.jpg" width="30%" height="100px"/></center>
    <div class="list">
        <input type="button" value="ADD BOOK" onclick="display1();"></input><br/><br/>
        <input type="button" value="BOOK REPORT"onclick="display3();"/><br/><br/>
        <input type="button" value="ADD STUDENT" onclick="display4();"/><br/><br/>
        <input type="button" value="STUDENT REPORT" onclick="display5();"/><br/><br/>
        <input type="button" value="ISSUE BOOK"onclick="display6();"/><br/><br/>
        <input type="button" value="ISSUE REPORT" onclick="display7();"/><br/><br/>
        <input type="button" value="REQUEST" onclick="display2();"/><br/><br/>
        <input type="button" value="LOG OUT"onclick="history.back()"/><br/> <br/>  
    </div>
    <div id="output">
        <embed width="100%" height="100%" type="text/html" src="addbook.php"/>;
    </div>
</form></body>
</html>