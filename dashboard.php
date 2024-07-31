<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("user.php");
    $user = new User();
    $allUsers = $user ->getAllUsers();


session_start();
$name = $_SESSION['fname'];
    ?>
    <h1> Good night <?php echo $name ?> !!!</h1>
<table>
    <thead>
        <th>S/N</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PHONE NO</th>
        <th colspan ="2">ACTION</th>
</thead>
<tbody>
    <?php
    $number = 1;
        foreach($allUsers as $users)
        {

        
    ?>
    <tr>
        <td><?php echo $number++ ?></td>
        <td><?php echo $users ['fname'] ?></td>
        <td><?php echo $users ['lname'] ?></td>
        <td><?php echo $users ['email'] ?></td>
        <td><?php echo $users ['phoneno'] ?></td>
        <td><a href="editUser.php?id=<?php echo $users['id']?>">EDIT</a></td>
        <td><a href="deleteUser.php?id=<?php echo $users['id']?>">DELETE</a></td>
    </tr>
    <?php
        }
    ?>
</tbody>
</table>


</body>
</html>