<?php
include_once("user.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phoneno = $_POST['phoneno'];
$id =$_POST['id'];


$user = new User();
$update = $user->updateUser($fname, $lname, $phoneno, $id);
if($update==true)
{
echo "Update successful";
}
else{
    echo "Error while updating... pls try again";
}




?>