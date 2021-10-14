<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("UPDATE TN_misc_bait SET active = '0' WHERE id='$id'");

$error = "<font color=\"red\">Bait Disabled</font><br><br>";

include "tn_video_bait.php";

?>