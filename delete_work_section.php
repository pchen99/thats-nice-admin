<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_work_path WHERE id='$id'");
$error = "<font color=\"red\">Section Deleted</font><br><br>";

include "activate_work_section.php";

?>