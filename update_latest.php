<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$cat = $_POST["cat"];
$copy = $_POST["copy"];

$copy = mysql_escape_string($copy);


// =============Insert Everything into the database==================================//
$insert_data = "UPDATE TN_latest_news SET copy = '$copy' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );

if ($cat == "hd") {
$error1 = "<font color=\"red\">News Updated</font><br><br>";
} else if ($cat == "sm") {
$error2 = "<font color=\"red\">News Updated</font><br><br>";
}

include "latest_news.php";
?>