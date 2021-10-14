<?php

//------------------------Connect to Database -------------//
include "../share/db.php";

$id = $_POST["id"];

$template = $_POST["template"];

//=== Vars =====================================================================================================//
$cat = $_POST["cat"];
$subcat_alpha = $_POST["subcat_alpha"];
$type = $_POST["type"];
$rating = $_POST["rating"];

$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$case_study = $_POST["case_study"];
$ind_rec = $_POST["ind_rec"];
$copy = $_POST["copy"];

$title = mysql_escape_string($title);
$rating = mysql_escape_string($rating);
$subtitle = mysql_escape_string($subtitle);
$case_study = mysql_escape_string($case_study);
$ind_rec = mysql_escape_string($ind_rec);
$copy = mysql_escape_string($copy);

$thumb = basename( $_FILES['thumb']['name']);

$image1 = basename( $_FILES['image1']['name']);
$image2 = basename( $_FILES['image2']['name']);
$image3 = basename( $_FILES['image3']['name']);
$image4 = basename( $_FILES['image4']['name']);
$image5 = basename( $_FILES['image5']['name']);
$image6 = basename( $_FILES['image6']['name']);
$image7 = basename( $_FILES['image7']['name']);
$image8 = basename( $_FILES['image8']['name']);
$image9 = basename( $_FILES['image9']['name']);
$image10 = basename( $_FILES['image10']['name']);

$popup = $_POST["popup"];
$h = $_POST["h"];
$w = $_POST["w"];



// ========================================================== Image Upload =============================================================//

if ($template == "1") {

$target_path = "../upload/sm_images/";
$target_path = $target_path . basename( $_FILES['thumb']['name']); 
if(move_uploaded_file($_FILES['thumb']['tmp_name'], $target_path)) {
} else{
}
}

if($template == "2") {

$target_path = "../upload/mg_images/";
$target_path = $target_path . basename( $_FILES['thumb']['name']); 
if(move_uploaded_file($_FILES['thumb']['tmp_name'], $target_path)) {
} else{
}
}


$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image1']['name']); 
if(move_uploaded_file($_FILES['image1']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image2']['name']); 
if(move_uploaded_file($_FILES['image2']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image3']['name']); 
if(move_uploaded_file($_FILES['image3']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image4']['name']); 
if(move_uploaded_file($_FILES['image4']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image5']['name']); 
if(move_uploaded_file($_FILES['image5']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image6']['name']); 
if(move_uploaded_file($_FILES['image6']['tmp_name'], $target_path)) {
} else{
}


$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image7']['name']); 
if(move_uploaded_file($_FILES['image7']['tmp_name'], $target_path)) {
} else{
}


$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image8']['name']); 
if(move_uploaded_file($_FILES['image8']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image9']['name']); 
if(move_uploaded_file($_FILES['image9']['tmp_name'], $target_path)) {
} else{
}


$target_path = "../upload/lg_images/";
$target_path = $target_path . basename( $_FILES['image10']['name']); 
if(move_uploaded_file($_FILES['image10']['tmp_name'], $target_path)) {
} else{
}


$blank = "";

// =============Insert Everything into the database==================================//

// Update Main data
$insert_data = "UPDATE TN_work SET category = '$cat', title = '$title', copy = '$copy', cs_key = '$case_study',  sub_category = '$subcat_alpha', ind_rec = '$ind_rec', sub_title = '$subtitle', rating = '$rating' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if($thumb !== "") {
$insert_data = "UPDATE TN_work SET sm_image = '$thumb' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}


if ($type == 3){

$insert_data = "UPDATE TN_work SET popup = '$popup', h = '$h', w = '$w' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}


if ($type == 2){

$insert_data = "UPDATE TN_work SET popup = '$popup', h = '$h', w = '$w' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($type == 0){

if($image1 !== ""){
$insert_data = "UPDATE TN_work SET lg_image = '$image1' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if($image2 !== ""){
$insert_data = "UPDATE TN_work SET image2 = '$image2' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

if($image3 !== ""){
$insert_data = "UPDATE TN_work SET image3 = '$image3' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image4 !== ""){
$insert_data = "UPDATE TN_work SET image4 = '$image4' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image5 !== ""){
$insert_data = "UPDATE TN_work SET image5 = '$image5' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image6 !== ""){
$insert_data = "UPDATE TN_work SET image6 = '$image6' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image7 !== ""){
$insert_data = "UPDATE TN_work SET image7 = '$image7' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image8 !== ""){
$insert_data = "UPDATE TN_work SET image8 = '$image8' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image9 !== ""){
$insert_data = "UPDATE TN_work SET image9 = '$image9' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}
if($image10 !== ""){
$insert_data = "UPDATE TN_work SET image10 = '$image10' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );
}

}

$cat = $cat;
$subcat = $subcat_alpha;
$error="Work Updated<br><br>";
include "view_workcat.php";
?>