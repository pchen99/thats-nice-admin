<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("UPDATE TN_work_path SET active = '0' WHERE id='$id'");
$error = "<font color=\"red\">Section Disabled</font><br><br>";

include "activate_work_section.php";

?>