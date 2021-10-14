<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("UPDATE TN_latest_news SET active = '1' WHERE id='$id'");

$error = "<font color=\"red\">News Enabled</font><br><br>";

include "latest_news.php";

?>