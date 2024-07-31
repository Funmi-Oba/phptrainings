<?php
include_once ("constant.php");
class User{

    public $dbcon;

	//connecting to Db

	function __construct()
	{
		$this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
		if ($this->dbcon->connect_error) {
			die("Connection Not Successful" . $this->dbcon->connect_error);
		} else {
			echo "Connection Successful";
		}
	}

  public function registerUser($fname, $lname,$email,$phoneno,$password)
  {
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user set fname='$fname', lname='$lname', email='$email', phoneno='$phoneno', password='$hashedPassword'";
$dbcon = $this->dbcon->query($sql);
if($this->dbcon->affected_rows == 1){
	return true;
}
else{
	return false;
}
  }

  public function checkEmail($email){
$sql = "select * from user where email='$email'";
$dbcon = $this->dbcon->query($sql);
if($this->dbcon->affected_rows == 1){
	return true;
}
else{
	return false;
}
  }

  public function updateUser($fname, $lname, $phoneno, $id){
	$sql = "update user set fname='$fname', lname ='$lname', phoneno='$phoneno' where id ='$id'";
	$dbcon = $this->dbcon->query($sql);
	if($this->dbcon->affected_rows == 1){
		return true;
	}
	else{
		return false;
	}
	  }
	
	  public function getUserByEmail(){
		$sql = "select * from user where email='$email'";
$dbcon = $this->dbcon->query($sql);
if($this->dbcon->affected_rows == 1){
	return true;
}
else{
	return false;
}
	  }

public function login($email, $password){
	$sql = "select * from user where email='$email'";
	$dbcon = $this->dbcon->query($sql);
	if($this->dbcon->affected_rows == 1){
		$row = $dbcon->fetch_assoc();
		$hashedPassword = $row ['password'];
		$confirmPassword = password_verify($password,$hashedPassword);
		session_start();
		$_SESSION['fname'] = $row ['fname'];
		$_SESSION['id'] = $row ['id'];
		if ($confirmPassword){
return true;
		}
		else{
			return false;
		}
	}
	
}

public function getAllUsers(){
	$sql = "Select * from user";
	$dbcon = $this->dbcon->query($sql);
	$result = array();
	if($this->dbcon->affected_rows > 0)
	{
		while($row = $dbcon->fetch_assoc()){
			$result[] = $row;
		}
	
		return $result;
	}else{
		return $result;
	}
}

public function getSingleUser($id){
	$sql = "select * from user where id='$id'";
	$dbcon = $this->dbcon->query($sql);
	if($this->dbcon->affected_rows == 1){
		$row = $dbcon->fetch_assoc();
		return $row;
	}
	else{
		return false;
	}
}

}
?>