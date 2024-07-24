<?php
include_once("user.php");

$email = $_POST ['email'];
$password = $_POST ['password'];

if(empty($email) || empty($password)){
echo "Fields cannot be empty";
die();
}

$user = new User();

$result = $user->login($email,$password);

if($result == true){
echo " Login successful";
header("Location: dashboard.php");
}else{
    echo "Error trying to login";
}










?>