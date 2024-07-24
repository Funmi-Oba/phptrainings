<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin: auto; width: 50%; background-color: rgb(231, 188, 109); padding: 10px 100px 79px 100px; color: white;">
    <form action="processUpdate.php" method="post">
        <h1 style="color: brown; text-align: center;"> Update Form</h1>
        <div style="text-align: left;">
<label> First Name: </label> 
<input type="text" required placeholder="Enter first name" name="fname"> <br><br>


<label> Last Name: </label>
<input type="text" required placeholder="Enter last name" name="lname"><br><br>


<label> Phone number: </label>
<input type="text" required placeholder="Enter phone no" name="phoneno"><br><br>

<input type="hidden" name="id" value ="3"><br><br>



<button>Update</button>

</div>
    </form>
    </div>
</body>
</html>