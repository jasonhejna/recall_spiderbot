<?php
set_time_limit(0);
require 'connectz.php';
//http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml
//$alala = 'http://www.fda.gov/Safety/Recalls/default.htm';
$file = file_get_contents('http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml');
//echo $file;
//preg_match_all('~<pubDate>(.*?)</pubDate>~',$file,$datedata);
preg_match_all('~<link>(.*?)</link>~',$file,$urldata);
//print_r($urldata);
/*foreach ($datedata as $key => $value) {
	foreach ($value as $key => $value) {
		//echo $value . '<br>';
	}
}*/
foreach ($urldata as $key => $bvalue) {
	//print_r($bvalue);
	foreach ($bvalue as $key => $avalue) {
		
		
		$test = substr($avalue, 1, 4);
		if ($test == "link") {
			$gogo = substr($avalue, 6, -7);
		}
		//echo $gogo . '<br>';
		$onefile = file_get_contents($gogo);
//get the name and date here once, since we are in the foreach loop and $onefile in our content

// also, do all the preg matches at the same time, then itterate through one function of the foreach loop


$result_bro = mysql_query("SELECT `pat` FROM pattern WHERE `did` < 1009");
while($row = mysql_fetch_array($result_bro)) {
//$y++;
		$matcher = $row['pat'];
		$moonriver = "'~" . $matcher  . "~'";
		echo $moonriver . '<br>';
		preg_match_all($moonriver,$onefile,$onedata);
		//print_r($onedata);
		foreach ($onedata as $key => $value) {
			foreach ($value as $key => $value) {
				echo $value . '<br>';
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					//strip out characters
					$pattern = '/[^0-9]*/';
					$goodlookin = preg_replace($pattern,'', $value);
					$y=0;
					$checkin = mysql_query("SELECT `code` FROM codes WHERE `code` = $goodlookin");
  					while($row = mysql_fetch_array($chekin)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO codes (`code`) VALUES ('$goodlookin')");
						//echo $value . '<br>';
					}
				}
		} //end foreach
		}
}// end select while

	}
}

?>