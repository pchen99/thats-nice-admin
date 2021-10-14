<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$img = $_GET['i'];
$cat = $_GET['c'];
$col = $_GET['s'];


mysql_query("UPDATE TN_slider_homepage SET $col = '' WHERE cat = '$cat'");

$error = "<font color=\"red\">Image Removed</font><br><br>";

include "show_sliderform.php";

?>