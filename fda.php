<?php
$f=0;
//$v=3;
$harry = array();
set_time_limit(0);
$mysqli = new mysqli("localhost", "angry_monster", "goblins33","recallspi");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml
//$alala = 'http://www.fda.gov/Safety/Recalls/default.htm';

//get the name and date here once, since we are in the foreach loop and $onefile in our content

// also, do all the preg matches at the same time, then itterate through one function of the foreach loop
$get = "SELECT `id`,`url` FROM fdaurl WHERE `flag` = 0 ORDER by id ASC LIMIT 1";
$tree = $mysqli->query($get);
$high = $tree->fetch_row();
//print_r($high);
//$get = mysql_query('SELECT `url` FROM fdaurl WHERE `flag` = 0');
//while($row = mysql_fetch_array($get)) {
$updateid = $high[0];
$thisurl = $high[1];
echo $thisurl.'<br>';
echo $updateid.'<br>';
$one=1;
if ($mysqli->query("UPDATE fdaurl SET `flag` = '$one' WHERE `id` = '$updateid'") === TRUE) {
    //printf("Table myCity successfully created.\n");
}
//mysql_query("UPDATE fdaurl SET `flag` = '$one' WHERE `id` = '$updateid'");
//echo $high[1].'<br>';
$onefile = file_get_contents($thisurl);
$larray = array();

$query = "SELECT `pat` FROM pattern";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    	$larray[] = $row["pat"];
    	//echo $matcher.'<br>';

    	}

    /* free result set */
    $result->free();
}
//print_r($larray);
        //printf ("%s (%s)\n", $row["pat"], $row["pat"]);

        //printf ("%s (%s)\n", $row[0], $row[1]);

/*if ($result = $mysqli->query($kquery)) {

     fetch associative array 
    while ($row = $result->fetch_assoc()) {
        printf ($row['pat']);*/
//echo $v .'<br>';
//print_r($farray);
//$result_bro = mysql_query('SELECT `pat` FROM pattern');
//while($row = mysqli_fetch_array($result_bro)) {
//$y++;
//print_r($result);
        //echo $row['pat'];
		//$matcher = $row['pat'];
		//$matcher = "'" . $matcher . "'";
		//echo $matcher . '<br>';
		//$moonriver = "'~" . $matcher  . "~'";
		//echo $moonriver . '<br>';
foreach ($larray as $key => $xvalue) {
	//echo $xvalue . '<br>';


		preg_match_all($xvalue,$onefile,$onedata);
		//print_r($onedata);

		foreach ($onedata as $key => $value) {
			//print_r($value);
			foreach ($value as $key => $value) {
				echo $value . '<br>';
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
					echo $i . '<br>';
				}
				if ($i >= 1) {
					echo 'double fuck' . '<br>';
					//$goodlookin = $value;
					//strip out characters
					$pattern = '/[^0-9]{1}/';
					$goodlookin = preg_replace($pattern,'', $value);
					$goodlookin = preg_replace($pattern,'', $goodlookin);
					$y=0;
					//$x=0;
					$m=0;
					$wcheck = 'fuckqqqqqq';
					$query = "SELECT `code` FROM codes WHERE `code` = '$goodlookin'";
					if ($result = $mysqli->query($query)) {

					    /* fetch associative array */
					    while ($row = $result->fetch_assoc()) {
					    	$wcheck = $row["code"];
					    	echo $row["code"];
					    	//echo $matcher.'<br>';
					    	$m++;
					    echo 'mmm' . $m . '<br>';

					    }

					    /* free result set */
					    $result->free();
					}
/*					$trees = $mysqli->query($query);
					$smoke = $trees->fetch_row();
					$yellow = $smoke[0];*/
					echo 'wcheck ' . $wcheck . '<br>' . 'goodlookin ' . $goodlookin . '<br>';
		  			if ($wcheck == "fuckqqqqqq") {
		  					if ($mysqli->query("INSERT INTO codes (`code`) VALUES ('".$goodlookin."')") === TRUE) {
									   //echo 'wtf sqql'; 
							}
		  							echo 'wtf sqql<br>';
		  							$f++;
		  			}

/*					    }

					     free result set 
					    $result->close();
					}*/

					//$checkin = mysql_query('SELECT `code` FROM codes WHERE `code` = "$goodlookin"');
  					//while($row = mysql_fetch_row($checkin)) {

					}
/*					if ($y == 0) {
						mysql_query("INSERT INTO codes (`code`) VALUES ('$goodlookin')");
						//echo $value . '<br>';
					}*/
				
		} //end foreach
		}

//}// end select while

	//}
//}//end super while


}//end foreach

$mysqli->close();
?>