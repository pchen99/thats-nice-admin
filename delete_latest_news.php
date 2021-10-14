<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_latest_news WHERE id='$id'");

$error = "<font color=\"red\">Latest News Deleted</font><br><br>";

include "latest_news.php";

?>