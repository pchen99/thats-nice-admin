<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_news WHERE id='$id'");
$error = "<font color=\"red\">News Deleted</font><br><br>";

include "manage_news.php";

?>