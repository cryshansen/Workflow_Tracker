<?php
$round_numerator = 60 * 15 // 60 seconds per minute * 15 minutes equals 900 seconds
//$round_numerator = 60 * 60 or to the nearest hour
//$round_numerator = 60 * 60 * 24 or to the nearest day

// Calculate time to nearest 15 minutes!
$rounded_time = ( round ( time() / $round_numerator ) * $round_numerator );

//If it was 12:40 this would return the timestamp for 12:45;
//3:04, 3:00; etc.


//-----------------------------------------------------------
    $pds = array('second','minute','hour','day','week','month','year','decade');
    $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);

?>