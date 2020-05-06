<?
require_once("conn_function.php");

class userClass{

	//constructor
	function userClass()
	{}

	function user_create($username,$pass,$f_name,$l_name,$email)
	{
		$sql = "INSERT  INTO userTable( username,password ,f_name,l_name, email) VALUES ('" .$username."','".$pass."','".$f_name."','".$l_name."','".$email."')";
		$result = getconn($sql);
		return $result;
	}
	
	function get_Password($username){
		$sql = "SELECT password FROM userTable WHERE username  = '".$username."'" ;
		$result = getconn($sql);
		return $result;

	}
	function check_Username($username){
		$sql = "SELECT username FROM userTable WHERE username  = '".$username."'" ;
		$result = getconn($sql);
		return $result;
	}
	// User Read
	function user_read($user_id )
	{
		$sql = "SELECT * FROM userTable WHERE username  = ".$user_id ;
		$result = getconn($sql);
		return $result;
	}
	// User Update with out updating password
	function user_update_without_password($user_id ,$accessid,$institution_id)
	{
		$sql = "UPDATE userTable SET access_level = '".$accessid."', institution_id ='". $institution_id."' WHERE user_id  =".$user_id ;
		$result = getconn($sql);
		return $result;
	}
	// User Update
	function user_update($user_id ,$password,$accessid,$institution_id)
	{
		$sql = "UPDATE userTable SET password = '".$password."', access_level = '".$accessid."' WHERE user_id  =".$user_id ;
		$result = getconn($sql);
		return $result;
	}
	// User Delete
	function user_delete($user_id )
	{
		$sql = "DELETE FROM userTable WHERE user_id  = ".$user_id ;
		$result = getconn($sql);
		return $result;
	}
	// User List
	function user_list()
	{
		$sql = "SELECT user_id , user_name FROM userTable ORDER BY user_name";
		$result = getconn($sql);
		return $result;
	}
	// Change User Password
	function userpassword_update($user_id ,$password)
	{
		$sql = "UPDATE userTable SET password = '".$password."' WHERE user_id  = ".$user_id ;
		$result = getconn($sql);
		return $result;
	}
	// User Login Check
	function userlogin_read($user_name)
	{
		$sql = "SELECT user_id , user_name, password, access_level FROM userTable WHERE user_name = '".$user_name."'";
		$result = getconn($sql);
		return $result;
	}









}

?>
