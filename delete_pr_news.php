<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];
$cat = $_GET['cat'];

mysql_query("DELETE FROM TN_pr_news WHERE id='$id'");
$error = "<font color=\"red\">News Deleted</font><br><br>";

include "manage_pr_news.php";

?>