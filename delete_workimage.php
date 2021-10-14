<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];
$col = $_GET['s'];


mysql_query("UPDATE TN_work SET $col = '' WHERE id = '$id'");

$error = "<font color=\"red\">Image Removed</font><br><br>";

include "edit_work.php";

?>