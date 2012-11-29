<?php
set_time_limit(0);
require 'connectz.php';
//http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml
//$alala = 'http://www.fda.gov/Safety/Recalls/default.htm';
$file = file_get_contents('http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Recalls/rss.xml');
//echo $file;
preg_match_all('~<pubDate>(.*?)</pubDate>~',$file,$datedata);
preg_match_all('~<link>(.*?)</link>~',$file,$urldata);
//print_r($urldata);
foreach ($datedata as $key => $value) {
	foreach ($value as $key => $value) {
		//echo $value . '<br>';
	}
}
foreach ($urldata as $key => $value) {
	foreach ($value as $key => $value) {
		//echo $value . '<br>';
		
		$test = substr($value, 1, 4);
		if ($test == "link") {
			$gogo = substr($value, 6, -7);
		}
		//echo $gogo . '<br>';
		$onefile = file_get_contents($gogo);


		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$onedata);
		foreach ($onedata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}

		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$oneadata);
		foreach ($oneadata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$onebdata);
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
		} //end foreach
		}
		
		
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$onecdata);
		foreach ($onecdata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}~',$onefile,$twodata);
		foreach ($twodata as $key => $value) {
			foreach ($value as $key => $value) {
				$i=0;
				preg_match('~[2-9]{1}~', $value, $result);
				foreach ($result as $keyer => $valueer) {
					$i++;
				}
				if ($i >= 1) {
					$y=0;
					$result_bro = mysql_query("SELECT `code` FROM fda WHERE `code` = '".$value."'");
  					while($row = mysql_fetch_array($result_bro)) {
  						$y++;
					}
					if ($y <= 0) {
						mysql_query("INSERT INTO fda (`code`) VALUES ('$value')");
						echo $value . '<br>';
					}
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$threedata);
		foreach ($threedata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$fourdata);
		foreach ($fourdata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$fivedata);
		foreach ($fivedata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$sixdata);
		foreach ($sixdata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$eandata);
		foreach ($eandata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}
		preg_match_all('~[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$eanbdata);
		foreach ($eanbdata as $key => $value) {
			foreach ($value as $key => $value) {
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
		} //end foreach
		}

	}
}

?>