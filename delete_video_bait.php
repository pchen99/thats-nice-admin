<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_misc_bait WHERE id='$id'");
$error = "<font color=\"red\">Bait Deleted</font><br><br>";

include "tn_video_bait.php";

?>