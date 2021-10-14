<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("UPDATE TN_casestudy SET published = '0' WHERE id='$id'");

$error = "<font color=\"red\">Case Study Disabled</font><br><br>";

include "activate_casestudy.php";

?>