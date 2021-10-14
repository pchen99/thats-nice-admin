<?php



//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$id = $_POST["id"];
$headline = $_POST["headline"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];
$copy = $_POST["copy"];
$np_img = basename( $_FILES['np_img']['name']);

$headline = mysql_escape_string($headline);
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


$target_path = "../upload/news_images/";
$target_path = $target_path . basename( $_FILES['np_img']['name']); 
if(move_uploaded_file($_FILES['np_img']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================//
$insert_data = "UPDATE TN_latest_news SET copy = '$copy', headline = '$headline', m = '$m', d = '$d', y = '$y', datestamp = '$date' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if ($np_img !== "") {
$insert_data = "UPDATE TN_latest_news SET image = '$np_img' WHERE id = '$id'";
}
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">News Updated</font><br><br>";
include "latest_news.php";


?>