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

  public function registerUser($fname, $lname,$email,$phoneno)
  {
$sql = "INSERT INTO user set fname='$fname', lname='$lname', email='$email', phoneno='$phoneno'";
$dbcon = $this->dbcon->query($sql);
if($this->dbcon->affected_rows == 1){
	return true;
}
else{
	return false;
}
  }

}
?>