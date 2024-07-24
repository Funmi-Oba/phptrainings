<?php

include_once("user.php");


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];


if(empty($fname)|| empty($lname)|| empty($email)|| empty($phoneno)|| empty($password))
{
echo "Please complete the fields";
}
else{
$user = new User();
$reg = $user->registerUser($fname, $lname,$email,$phoneno,$password);
if($reg==true)
{
echo "Registration successful";
header("Location: login.php");
}
else{
    echo "Error while registering... pls try again";
}

}















?>