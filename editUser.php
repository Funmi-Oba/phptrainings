<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET["id"];
        include_once("user.php");
        $user = new User();
        $singleUser = $user->getSingleUser($id);
        
?>

<div style="margin: auto; width: 50%; background-color: rgb(231, 188, 109); padding: 10px 100px 79px 100px; color: white;">
    <form action="processform.php" method="post">
        <h1 style="color: brown; text-align: center;"> FILL THE FORM</h1>
        <div style="text-align: left;">
<label> First Name: </label> 
<input type="text" name="fname" value="<?php echo $singleUser['fname'] ?>"> <br><br>


<label> Last Name: </label>
<input type="text" name="lname" value="<?php echo $singleUser['lname'] ?>"><br><br>

<label> Email Address: </label>
<input type="email" name="email" readonly value="<?php echo $singleUser['email'] ?>"><br><br>

<label> Phone number: </label>
<input type="text" name="phoneno" value="<?php echo $singleUser['phoneno'] ?>"><br><br>




<button>Submit</button>

</div>
    </form>
    </div>
</body>
</html>