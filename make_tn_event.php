<?php

//------------------------Connect to Database -------------//
include "../share/db.php";
//======== Vars =================//
$headline = $_POST["headline"];
$location = $_POST["location"];
$m = $_POST["m"];
$d = $_POST["d"];
$y = $_POST["y"];
$end_m = $_POST["end_m"];
$end_d = $_POST["end_d"];
$end_y = $_POST["end_y"];

$cn = $_POST["cn"];

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
$active = $_POST["active"];
$url = $_POST["url"];
$blank="";

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
$cn = mysql_escape_string($cn);


// required information

/* ERROR CHECKING */


    $error_level=0;
    $error='';

    if($headline == "") {
    $error = "<font color=\"red\">Headline is a required field</font><br>";
    $error_level = 1;
    }

    if($location == "") {
    $error = $error."<font color=\"red\">Location is a required field</font><br>";
    $error_level = 1;
    }

    if($m == "" or $d == "" or $y == "") {
    $error = $error."<font color=\"red\">Date is a required field</font><br>";
    $error_level = 1;
    }


    if($img =="") {
    $error = $error."<font color=\"red\">Home Page Image is a required Field</font><br>";
    $error_level = 1;
    }

    if($img2 =="") {
    $error = $error."<font color=\"red\">Events Page Image is a required Field</font><br>";
    $error_level = 1;
    }

    if ($error_level > 0)   {
    $error = $error."<br />";
    include "tn_events.php";
    exit();

    }


/* END ERROR CHECKING */




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

$insert_data = "INSERT INTO TN_events_beta VALUES (NULL, '$headline', '$location', '$type', '$date', '$d', '$m', '$y', '$end_date', '$end_d', '$end_m', '$end_y', '$email', '$phone', '$src', '$link_text', '$copy', '$blank', '$img', '$cat', '$cn', '$active', '$copy2', '$img2', '$url')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">Events Added</font><br><br>";
include "tn_events.php";
?>