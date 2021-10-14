<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$img = basename( $_FILES['img']['name']);
$np_img = basename( $_FILES['np_img']['name']);

$headline = $_POST["headline"];
$cat = $_POST["cat"];
$copy = $_POST["copy"];
$link_text = $_POST["link_text"];
$src = $_POST["src"];
$link_type = $_POST["link_type"];
$h = $_POST["h"];
$w = $_POST["w"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];

$headline = mysql_escape_string($headline);
$cat = mysql_escape_string($cat);
$copy = mysql_escape_string($copy);
$link_text = mysql_escape_string($link_text);
$src = mysql_escape_string($src);
$link_type = mysql_escape_string($link_type);
$h = mysql_escape_string($h);
$w = mysql_escape_string($w);

if($link_type == "2" or $link_type == "4") {
if($h == "") {
$error = "<font color=\"red\">Height and Width is Required for this Link Type</font><br><br>";
include "tn_news.php";
exit();
}

if($w == "") {
$error = "<font color=\"red\">Height and Width is Required for this Link Type</font><br><br>";
include "tn_news.php";
exit();
}
}

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

$insert_data = "INSERT INTO TN_cl_news VALUES (NULL, '$img', '$headline', '$copy', '$link_type', '$h', '$w', '$src', '$cat', '$link_text', '0', '$m', '$d', '$y', '$date', '$np_img')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">News Added</font><br><br>";
include "manage_cl_news.php";
?>