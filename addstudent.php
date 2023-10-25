<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDSTUDENT</title>
    <style>
        .addbook
        {
            width: 500px;
            height:400px;
            background-color: chocolate;
        }
        h1{
            background-color: darkolivegreen;
            border-style: none;
            border-width: 0px;
            font-size: large;}
        #text{
            width: 200px;
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
            alert("fill the data ");
            return false;
            }
        }
    </script>
</head>
<body> 
    <form method="post" action='person.php' onsubmit="return display();" >
        <div class="addbook" >
            <h1 align="center" >ADD PERSON</h1>
            <h4>Student Id: <input type="varchar" name='Studentid' id="text"><br/><br/></h4>
            <h4>Name :<input type="text" name='Name' id="text"><br/><br/></h4>
            <h4>Password : <input type="password" name='Password' id="text"><br/><br/></h4>
            <h4>Email : <input type="email" name='Email' id="text"><br/><br/></h4>
            <h4>Category : <select id="text" name='Category'><option>student</option><option>admin</option><option>teacher</option></select></h4>
            <center><input type="submit"></center>
</form></body>
</html>