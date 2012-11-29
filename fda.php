<?php
set_time_limit(0);
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
					echo $value .'<br>';
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
					echo $value .'<br>';
				}
		} //end foreach
		}
		/*
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$onebdata);
		foreach ($onebdata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$onecdata);
		foreach ($onecdata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}~',$onefile,$twodata);
		foreach ($twodata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$threedata);
		foreach ($threedata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$fourdata);
		foreach ($fourdata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$fivedata);
		foreach ($fivedata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$sixdata);
		foreach ($sixdata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1} [0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$eandata);
		foreach ($eandata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
		preg_match_all('~[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}-[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}~',$onefile,$eanbdata);
		foreach ($eanbdata as $key => $value) {
			foreach ($value as $key => $value) {
				$kt = substr($value, 0, 1);
				$rt = substr($value, 2);
				$tt = substr($value, 3);
				if ($kt == 00 || $kt == 01 || $kt == 10 || $kt == 11) {
					if ($rt == 0 || $rt == 1) {
						if ($tt == 0 || $tt == 1) {
						//do nothing
						}
						else {
							// do everything
							echo $value;
						}
					}
					else {
						echo $value;
					}
				}
				else {
					echo $value;
				}
		} //end foreach
		}
	*/	
/*		print_r($onedata);
		print_r($oneadata);
		print_r($onebdata);
		print_r($onecdata);
		print_r($twodata);
		print_r($threedata);
		print_r($fourdata);
		print_r($fivedata);
		print_r($sixdata);*/
	}
}
//http://www.fda.gov
?>