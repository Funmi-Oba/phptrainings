<?php

include_once("user.php");


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];


if(empty($fname)|| empty($lname)|| empty($email)|| empty($phoneno))
{
echo "Please complete the fields";
}
else{
$user = new User();
$reg = $user->registerUser($fname, $lname,$email,$phoneno);
if($reg==true)
{
echo "Registration successful";
}
else{
    echo "Error, while registering";
}

}















?>