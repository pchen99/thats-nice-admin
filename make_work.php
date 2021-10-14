<?php

//------------------------Connect to Database -------------//
include "../share/db.php";

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
$insert_data = "INSERT INTO TN_work VALUES (NULL, '$cat', '$title', '$copy', '$thumb', '$image1', '$case_study',  '$subcat_alpha', '$ind_rec', '$subtitle', '$image2', '$image3', '$image4', '$image5' ,'$popup' ,'$h' , '$w', '$type', '$image6', '$image7', '$image8', '$image9', '$image10', '$rating', '0'  )";
mysql_query($insert_data) or die ( mysql_error() );
$case_id = mysql_insert_id();


$cat = $cat;
$subcat = $subcat_alpha;

include "view_workcat.php";
?>