<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("UPDATE TN_casestudy SET published = '1' WHERE id='$id'");

$error = "<font color=\"red\">Case Study Enabled</font><br><br>";

include "activate_casestudy.php";

?>