<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_casestudy WHERE id='$id'");

$error = "<font color=\"red\">Case Study Deleted</font><br><br>";

include "activate_casestudy.php";

?>