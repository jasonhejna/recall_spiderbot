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


?>