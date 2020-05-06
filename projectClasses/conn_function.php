<?php global $results;
 function getConn($sql)
      {
        global $results;
		//this is production site access
        /*$db=DB::connect("mysql://servername:username@localhost/dabasename");*/
		
		//This is my local machine access driver=mysql,username=root,passwd = some password host = localhost db=test
/*		$db=DB::connect("mysql://databasename:username@localhost/");
        $results = $db->query($sql);

        echo "<br/><div id='debug'><div>Debugging Info</div><b>SQL:</b><blockquote>".$sql."</blockquote><b>Affected Rows:</b> [". DB_OK ."]&nbsp;&nbsp;&nbsp;<b>Result: </b>[".$results."]</div>";

         $db->disconnect();*/
       //HOME
		 		 $dbh = mysql_connect( "localhost", "root", "root" );
				  mysql_select_db( "database name" ) or die ( mysql_error() . "\n" );


//ONLINE
		 //$dbh = mysql_connect( "localhost", "database", "password" );
		 //$dbh = mysql_connect( "localhost", "root", "root" );
		 //mysql_select_db( "database" ) or die ( mysql_error() . "\n" );
		  $result = mysql_query( $sql, $dbh );
		return $result;
		  
      }
?>

		