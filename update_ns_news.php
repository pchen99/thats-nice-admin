<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$img = basename( $_FILES['img']['name']);

$headline = $_POST["headline"];
$id = $_POST["id"];
$copy = $_POST["copy"];
$link_text = $_POST["link_text"];
$src = $_POST["src"];
$link_type = $_POST["link_type"];
$h = $_POST["h"];
$w = $_POST["w"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];
$np_img = basename( $_FILES['np_img']['name']);

$headline = mysql_escape_string($headline);
$copy = mysql_escape_string($copy);
$link_text = mysql_escape_string($link_text);
$src = mysql_escape_string($src);
$link_type = mysql_escape_string($link_type);
$h = mysql_escape_string($h);
$w = mysql_escape_string($w);
$m = mysql_escape_string($m);
$d = mysql_escape_string($d);
$y = mysql_escape_string($y);

$date = '';
$date .="$y";
$date .="-";
$date .="$m";
$date .="-";
$date .="$d";


//upload Image

$target_path = "../upload/homepage_images/";
$target_path = $target_path . basename( $_FILES['img']['name']); 
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/news_images/";
$target_path = $target_path . basename( $_FILES['np_img']['name']); 
if(move_uploaded_file($_FILES['np_img']['tmp_name'], $target_path)) {
} else{
}

// =============Insert Everything into the database==================================//

$insert_data = "UPDATE TN_ns_news SET headline = '$headline', copy = '$copy', link_text = '$link_text', h = '$h', w = '$w', src = '$src', m = '$m', d = '$d', y = '$y', datestamp = '$date' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if($link_type !== "") {
$insert_data = "UPDATE TN_ns_news SET link_type = '$link_type' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if($img !== "") {
$insert_data = "UPDATE TN_ns_news SET img = '$img' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if($np_img !== "") {
$insert_data = "UPDATE TN_ns_news SET image = '$np_img' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

$error = "<font color=\"red\">News Updated</font><br><br>";
include "ns_news.php";
?>