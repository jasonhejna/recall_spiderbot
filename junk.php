<?php
set_time_limit(0);
$link = mysql_connect('localhost', 'angry_monster', 'goblins33');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make recallspi the current db
$db_selected = mysql_select_db('recallspi', $link);
if (!$db_selected) {
    die ('fuuuuuu : ' . mysql_error());
}

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

		//array
		$harry = array();
		//two digit
		$g=0;
		while ($g <= 13) {
			$digittwo = 14 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			//echo $concat . '<br>';
			$harry[] = $concat;
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}
		$g=0;
		while ($g <= 12) {
			$digittwo = 13 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			//echo $concat . '<br>';
			$harry[] = $concat;
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}
		$g=0;
		while ($g <= 11) {
			$digittwo = 12 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			//echo $concat . '<br>';
			$harry[] = $concat;
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}
		$g=0;
		while ($g <= 10) {
			$digittwo = 11 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			//echo $concat . '<br>';
			$harry[] = $concat;
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}
		$g=0;
		while ($g <= 9) {
			$digittwo = 10 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			$harry[] = $concat;
			//echo $concat . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}
		$g=0;
		while ($g <= 8) {
			$digittwo = 9 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = "'~" . $$concattwo . "[^0-9]{1}" . $$concattwor . "~'";
			$harry[] = $concat;
			//echo $concat . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$concat')");
		}

		//three digit conbinations
		$g=0;
		while ($g <= 13) {
			$digittwo = 14 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
		$g=0;
		while ($g <= 12) {
			$digittwo = 13 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
				$g=0;
		while ($g <= 11) {
			$digittwo = 12 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
				$g=0;
		while ($g <= 10) {
			$digittwo = 11 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
				$g=0;
		while ($g <= 9) {
			$digittwo = 10 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
				$g=0;
		while ($g <= 8) {
			$digittwo = 9 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}
				$g=0;
		while ($g <= 7) {
			$digittwo = 8 - $g;
			$g++;
			$concattwo = 'm' . $digittwo;
			$concattwor = 'm' . $g;
			$concat = $$concattwo . "[^0-9]{1}" . $$concattwor;
			//echo $concat . '<br>';
		$k=0;
		while ($k <= 12) {
			$scooter = 'm' . $k;
			$rawr = "'~" . $$scooter . "[^0-9]{1}" . $concat . "~'";
			$k++;
			$harry[] = $rawr;
			//echo $rawr . '<br>';
			//mysql_query("INSERT INTO pattern (pat)
			//VALUES ('$rawr')");
		}
		}


//print_r($harry);
foreach ($harry as $key => $value) {
	echo $value.'<br>';
	mysql_query('INSERT INTO pattern (pat) VALUES ('.$value.')');
}
?>