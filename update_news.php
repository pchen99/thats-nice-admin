<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$id = $_POST["id"];
$title = $_POST["title"];
$copy = $_POST["copy"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];

$title = mysql_escape_string($title);
$copy = mysql_escape_string($copy);
$m = mysql_escape_string($m);
$d = mysql_escape_string($d);
$y = mysql_escape_string($y);

$date = '';
$date .="$y";
$date .="-";
$date .="$m";
$date .="-";
$date .="$d";

// =============Insert Everything into the database==================================//
$insert_data = "UPDATE TN_news SET title = '$title', copy = '$copy', month = '$m', day = '$d', year = '$y', datestamp = '$date' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">News Updated</font><br><br>";
include "manage_news.php";
?>