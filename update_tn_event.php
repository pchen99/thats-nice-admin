<?php

//------------------------Connect to Database -------------//
include "../share/db.php";

//======== Vars =================//

$id = $_POST["id"];

$headline = $_POST["headline"];
$location = $_POST["location"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];
$end_m = $_POST["end_m"];
$end_d = $_POST["end_d"];
$end_y = $_POST["end_y"];

$copy = $_POST["copy"];
$copy2 = $_POST["copy2"];
$img = basename( $_FILES['img']['name']);
$img2 = basename( $_FILES['img2']['name']);
$cat = $_POST["cat"];
$type = $_POST["type"];
$link_text = $_POST["link_text"];
$src = $_POST["src"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$blank="";

$cn = $_POST["cn"];

// ==  Escape is all
$location = mysql_escape_string($location);
$email = mysql_escape_string($email);
$phone = mysql_escape_string($phone);
$headline = mysql_escape_string($headline);
$cat = mysql_escape_string($cat);
$copy = mysql_escape_string($copy);
$copy2 = mysql_escape_string($copy2);
$link_text = mysql_escape_string($link_text);
$src = mysql_escape_string($src);
$type = mysql_escape_string($type);


$date = '';
$date .="$y";
$date .="-";
$date .="$m";
$date .="-";
$date .="$d";

$end_date = '';
$end_date .="$end_y";
$end_date .="-";
$end_date .="$end_m";
$end_date .="-";
$end_date .="$end_d";

//upload Image

$target_path = "../upload/TN_events/";
$target_path = $target_path . basename( $_FILES['img']['name']); 
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/TN2_events/";
$target_path = $target_path . basename( $_FILES['img2']['name']); 
if(move_uploaded_file($_FILES['img2']['tmp_name'], $target_path)) {
} else{
}

// =============Insert Everything into the database==================================//

$insert_data = "UPDATE TN_events_beta SET name = '$headline', location = '$location', type = '$type', start_datestamp = '$date', day = '$d', month = '$m', year = '$y', end_datestamp = '$end_date', end_day = '$end_d', end_month = '$end_m', end_year = '$end_y', email = '$email', phone = '$phone', src = '$src', link_text = '$link_text', description = '$copy', cat = '$cat', contact_name = '$cn', copy2 = '$copy2' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if ($img !== ""){ 
$insert_data = "UPDATE TN_events_beta SET img = '$img' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($img2 !== ""){ 
$insert_data = "UPDATE TN_events_beta SET event_img = '$img2' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

$error = "<font color=\"red\">Events Updated</font><br><br>";
include "tn_events.php";
?>