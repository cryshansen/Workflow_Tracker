<?
	require_once("projectClasses/users.php");
	
		//set variables
		
		$m_user = new userClass();

	if (isset($_REQUEST['logout'])){
		//echo" you are here!";
		session_destroy();
		echo "<script>redirect('index.php');</script>\n";
	}
	
	if(isset($_REQUEST['login'])){

		$password = $_REQUEST['pass'];			
		$username=$_REQUEST['username'];
		if (($username !='username...') and ($password !='password...'))
		{
			echo "True";
			$password = $_REQUEST['pass'];			
			$username=$_REQUEST['username'];
			echo "Username is:".$username;
			$results=$m_user->get_Password($username);
			if($results){
				
			  while ($row = mysql_fetch_array($results) )   // $result->fetchRow(DB_FETCHMODE_ASSOC))php5
			  {
				$row_password=$row['password'];
				//echo "Made it here";
				if($row_password = md5($password)){

					$_SESSION['username'] = $username;
					$_SESSION['pass']  = $password;
					echo  $_SESSION['username'];
					$valid_user=true;
					echo "Successful password. Redirecting to front page. Please wait....";
					//redirect to front page
					echo "<script>redirect('time.php');</script>\n";
				}
			  
			  }
			 }else{
			 	$msg = 'No Results found! Please create a username by selecting the create user button or re submit your username/login';
				//outputLogin();
				echo "innerif";
				$valid_user=false;
				
			 }
				
		}else{
			$msg = ''; 
			echo "Login incorrect! Please re enter your username/login.";
			$valid_user=false;
		}
		//session_write_close(); Is this necessary?
	}

	


//_________________________________________________________________________//
	function SEFLink($str)
	{
		$result1 =  str_replace('index.php','index',$str);	
		$result1 =  str_replace('?','/',$result1);
		$result1 =  str_replace('=','/',$result1);
		$result1 =  str_replace('&','/',$result1);

		return $result1.'/';
			//http://www.quest-solutions.ca/index.php?page=webpages&menucat=3&id=1&action=displaypage&side=1

			//http://www.quest-solutions.ca/index/page/webpages/menucat/3/id/1/action/displaypage/side/1/
	}
	

?>
