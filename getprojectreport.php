		<?
				if($_REQUEST['get_report']){
					getlisting($_REQUEST['pid'],$_REQUEST['pname']);
				
				}
	
			function getlisting($projectid,$name)
			{
				$m_hours= new hoursClass();
				echo "Time to date for Project ".$name;
				$results=$m_hours->get_hours_Project( $projectid);
				if($results){
					echo "<ul>";
					while ($row = mysql_fetch_array($results))
					{
						$time_in = $row['time_in'];
						$time_out =$row['time_out'];
						
						echo "<li>".$row['time_in']. " - ".$row['time_out']." <br />
							Work Completed: " .$row['work_completed']."</li>";
					}
					echo "</ul>";
				}else{
				echo "No Time has been added to this Project Yet.";
				}
			}
		?>
