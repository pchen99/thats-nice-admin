<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];
$cat = $_GET['cat'];

mysql_query("UPDATE TN_pr_news SET active = '0' WHERE cat='$cat'");
mysql_query("UPDATE TN_pr_news SET active = '1' WHERE id='$id'");

$error = "<font color=\"red\">Home Page News Set</font><br><br>";

include "manage_pr_news.php";

?>