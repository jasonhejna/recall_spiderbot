<?php
//fda new link storeage.
//run often
$timenow = time();
set_time_limit(28);
require 'connectz.php';
//http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml
//$alala = 'http://www.fda.gov/Safety/Recalls/default.htm';
$file = file_get_contents('http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml');
//echo $file;
//preg_match_all('~<pubDate>(.*?)</pubDate>~',$file,$datedata);
preg_match_all('~<link>(.*?)</link>~',$file,$urldata);
$f=0;
foreach ($urldata as $key => $bvalue) {
	//print_r($bvalue);
	foreach ($bvalue as $key => $avalue) {
/*		if ($f=0){
		$starter = mysql_query("SELECT `id` FROM fdaurl ORDER BY id DESC LIMIT 1");
  		$row = mysql_fetch_row($starter);
  		$startid = $row['0'];
		}*/
		
		$test = substr($avalue, 1, 4);
		if ($test == "link") {
			$avalue = substr($avalue, 6, -7);
		}
		//echo $gogo.'<br>';

		$coolbro = substr($avalue, -7);
		$j=0;
		$checkin = mysql_query("SELECT `id` FROM fdaurl WHERE `url` = '$avalue'");
  		while($row = mysql_fetch_array($checkin)) {
  			$j++;
  		}
  			
  		//$chcheck = $row[0];
		if ($coolbro != "rss.xml" && $f > 0 && $j == 0) {
			echo $avalue.'<br>';

			mysql_query("INSERT INTO fdaurl (`url`,`date`,`flag`) VALUES ('$avalue','$timenow','0')");
		}
		$f++;
		//echo $coolbro .'<br>';
		


	}}

		$starter = mysql_query("SELECT `id` FROM fdaurl WHERE `date` = '$timenow' ORDER BY id ASC LIMIT 1");
  		$row = mysql_fetch_row($starter);
  		echo $row[0].'<br>';

preg_match_all('~<title>(.*?)</title>~',$file,$loldata);
$q=9999999;
$q = $row[0];
//$q=$id;
echo $q.'<br>';
foreach ($loldata as $key => $bvalue) {

foreach ($bvalue as $key => $avalue) {
	
			$test = substr($avalue, 1, 5);
			//echo $test.'<br>';
		if ($test == "title") {
			$avalue = substr($avalue, 7, -8);
		}
		//echo $avalue.'<br>';
		$coolbro = substr($avalue, -6);
		//echo $coolbro.'<br>';
		if ($coolbro != "Alerts") {
			//echo $avalue.'<br>';
			
			mysql_query("UPDATE fdaurl SET title='$avalue' WHERE id='$q'");
			$q++;
		}

	}}//end foreach


?>