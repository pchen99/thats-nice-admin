<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$template = $_GET['t'];
$template_id = $_GET['tid'];
$case_id = $_GET['id'];
$slider_id = $_GET['slider'];
$col = $_GET['img'];



mysql_query("UPDATE TN_slider SET $col = '' WHERE id = '$slider_id'");

$error = "<font color=\"red\">Image Removed</font><br><br>";

include "edit_case_study_page.php";

?>