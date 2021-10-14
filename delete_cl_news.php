<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];
$cat = $_GET['cat'];

mysql_query("DELETE FROM TN_cl_news WHERE id='$id'");
$error = "<font color=\"red\">News Deleted</font><br><br>";

include "manage_cl_news.php";

?>