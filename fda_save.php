<?php
set_time_limit(0);
require 'connectz.php';

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
foreach ($urldata as $key => $value) {
	foreach ($value as $key => $value) {
		//echo $value . '<br>';
		
		$test = substr($value, 1, 4);
		if ($test == "link") {
			$gogo = substr($value, 6, -7);
		}
		//echo $gogo . '<br>';
		$onefile = file_get_contents($gogo);

		$m0 = 'null';
		$m1 = '[0-9]{1}';
		$m2 = '[0-9]{1}[0-9]{1}';
		$m3 = '[0-9]{1}[0-9]{1}[0-9]{1}';
		$m4 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m5 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m6 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m7 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m8 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m9 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m10 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m11 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m12 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m13 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		$m14 = '[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}';
		//two digit
		$g=0;
		while ($g <= 13) {
			$digittwo = 14 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
			//echo $concat . '<br>';
			preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
		
		}
		echo '1314 finish';
		$g=0;
		while ($g <= 12) {
			$digittwo = 13 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		$g=0;
		while ($g <= 11) {
			$digittwo = 12 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		$g=0;
		while ($g <= 10) {
			$digittwo = 11 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		$g=0;
		while ($g <= 9) {
			$digittwo = 10 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		$g=0;
		while ($g <= 8) {
			$digittwo = 9 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "." . $$concattwor . "~'";
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}

		//three digit conbinations
		$g=0;
		while ($g <= 13) {
			$digittwo = 14 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
		$g=0;
		while ($g <= 12) {
			$digittwo = 13 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
				$g=0;
		while ($g <= 11) {
			$digittwo = 12 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
				$g=0;
		while ($g <= 10) {
			$digittwo = 11 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
				$g=0;
		while ($g <= 9) {
			$digittwo = 10 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
				$g=0;
		while ($g <= 8) {
			$digittwo = 9 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}
				$g=0;
		while ($g <= 7) {
			$digittwo = 8 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "." . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "." . $concat . "~'";
			$k++;
						preg_match_all($concat,$onefile,$onebdata);
			foreach ($onebdata as $key => $valuea) {
			foreach ($valuea as $key => $value) {
				
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = $value");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		}} //end foreachs
			
		}
		}


}}//end foreach

?>