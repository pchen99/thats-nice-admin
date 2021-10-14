<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$title = $_POST["title"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];
$copy = $_POST["copy"];
$np_img = basename( $_FILES['np_img']['name']);

$title = mysql_escape_string($title);
$m = mysql_escape_string($m);
$d = mysql_escape_string($d);
$y = mysql_escape_string($y);
$copy = mysql_escape_string($copy);

if ($m == "" or $d == "" or $y == "")
{
$m = date(n);
$d = date(j);
$y = date(Y);
}


$date = '';
$date .="$y";
$date .="-";
$date .="$m";
$date .="-";
$date .="$d";


$target_path = "../upload/news_images/";
$target_path = $target_path . basename( $_FILES['np_img']['name']); 
if(move_uploaded_file($_FILES['np_img']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================//
$insert_data = "INSERT INTO TN_latest_news VALUES (NULL, '$title', '$copy', '', '$m', '$d', '$y', '$date', '', '$np_img' )";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">News Added</font><br><br>";
include "latest_news.php";
?>