<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$case_id = $_GET['case_id'];
$id = $_GET['id'];

mysql_query("DELETE FROM TN_baits WHERE id = '$id'");

$error = "<font color=\"red\">Bait Removed.</font><br><br>";

include "manage_cs_baits.php";

?>