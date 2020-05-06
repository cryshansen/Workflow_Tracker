<?
require_once("conn_function.php");

class hoursClass{

	//constructor
	function hoursClass()
	{}
	function getHoursById($id)
	{
		$sql = " Select * from Hours where id=".$id;
		$result = getconn($sql);
		return $result;
	}
	
	function insert_hours( $time_in, $time_out, $add_comments,$username, $pid)
	{
		$result=1;
		//$m_user->getUserid($username);
		$rowid=$this->getRowid($result);
		$sql = "Insert into Hours (time_in, time_out, work_completed ,user, project) Values('" .$time_in."','". $time_out."','".$add_comments."','".$rowid."','".$pid."')";
		$result = getconn($sql);
		return $result;
	}
	function get_hours_Project($projectid)
	{
		$sql = " Select * from Hours where project=".$projectid;
		$result = getconn($sql);
		return $result;
	}
	
	function getRowid($result)
	{
		//$row = mysql_fetch_array($result);
		//$rowid=$row['id'];
		$rowid=$result;
		return $rowid;
	}
}
?>
