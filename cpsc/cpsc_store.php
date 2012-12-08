<?php

$link = mysql_connect('localhost', 'angry_monster', 'goblins33');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make recallspi the current db
$db_selected = mysql_select_db('recallspi', $link);
if (!$db_selected) {
    die ('fuuuuuu : ' . mysql_error());
}

//fda new link storeage.
//run often
$timenow = time();
set_time_limit(28);
//require 'connectz.php';
//http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml
//$alala = 'http://www.fda.gov/Safety/Recalls/default.htm';
$file = file_get_contents('http://www.cpsc.gov/cpscpub/prerel/prerel.xml');
//echo $file;
//preg_match_all('~<pubDate>(.*?)</pubDate>~',$file,$datedata);
preg_match_all('~<link>(.*?)</link>~',$file,$urldata);
//$f=0;
foreach ($urldata as $key => $bvalue) {
	//print_r($bvalue);
	foreach ($bvalue as $key => $avalue) {
/*		if ($f=0){
		$starter = mysql_query("SELECT `id` FROM cpscurl ORDER BY id DESC LIMIT 1");
  		$row = mysql_fetch_row($starter);
  		$startid = $row['0'];
		}*/
		echo 'btest' . $avalue . '<br>';
		$test = substr($avalue, 1, 4);
		if ($test == "link") {
			$avalue = substr($avalue, 6, -7);
		}
		//echo $gogo.'<br>';

		//$coolbro = substr($avalue, -7);
		//$dudebro = substr($avalue, 0, 11);
		//echo $dudebro . '<br>';
		$j=0;
		$checkin = mysql_query("SELECT `id` FROM cpscurl WHERE `url` = '$avalue'");
  		while($row = mysql_fetch_array($checkin)) {
  			$j++;
  		}
  		echo $j .'<br>';
  		//$chcheck = $row[0];
		if ($j == 0) {
			echo $avalue.'<br>';

			mysql_query("INSERT INTO cpscurl (`url`,`date`,`flag`) VALUES ('$avalue','$timenow','0')");
		}
		//$f++;
		//echo $coolbro .'<br>';
		
}}

	

		$starter = mysql_query("SELECT `id` FROM cpscurl WHERE `date` = '$timenow' ORDER BY id ASC LIMIT 1");
  		$row = mysql_fetch_row($starter);
  		echo 'rowid' . $row[0].'<br>';

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
		//$coolbro = substr($avalue, 0, 11);
		//echo $coolbro.'<br>';
		
			//echo $avalue.'<br>';
			
			mysql_query("UPDATE cpscurl SET title='$avalue' WHERE id='$q'");
			
			$q++;
		

	}}//end foreach

preg_match_all('~<description>(.*?)</description>~',$file,$voldata);
$r=9999999;
$r = $row[0];
//$q=$id;
echo $r.'<br>';
foreach ($voldata as $key => $hvalue) {

foreach ($hvalue as $key => $dvalue) {
	
			$test = substr($dvalue, 1, 11);
			//echo $test.'<br>';
		if ($test == "description") {
			$dvalue = substr($dvalue, 13, -14);
		}
		//echo $avalue.'<br>';
		//$coolbro = substr($dvalue, 0, 11);

			echo $dvalue.'<br>';
			
			mysql_query("UPDATE cpscurl SET descr='$dvalue' WHERE id='$r'");
			
			$r++;
		

	}}//end foreach

?>