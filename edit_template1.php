<?php

//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$name = $_POST["name"];
$template_id = $_POST["template_id"];;
$template2 = $_POST["template"];
$case_id = $_POST["id"];
$nav_roll = basename( $_FILES['nav_roll']['name']);
$image = basename( $_FILES['image']['name']);

//=== nl2br adds <BR> after each line ==============
$copy = nl2br($_POST["copy"]);



$copy = mysql_escape_string($copy);
$name = mysql_escape_string($name);




// ========================================================== Image Upload =============================================================//

$target_path = "../upload/case_study_rollovers/";
$target_path = $target_path . basename( $_FILES['nav_roll']['name']); 
if(move_uploaded_file($_FILES['nav_roll']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/template1_images/";
$target_path = $target_path . basename( $_FILES['image']['name']); 
if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================//
$update = "UPDATE TN_template1 SET copy = '$copy' WHERE id = '$template_id'";
mysql_query($update) or die ( mysql_error() );

if ($image == "") {} else {
$update = "UPDATE TN_template1 SET image = '$image' WHERE id = '$template_id'";
mysql_query($update) or die ( mysql_error() );
}

$update = "UPDATE TN_casestudy_pages SET title = '$name' WHERE case_id = '$case_id' AND template_id ='$template_id' AND template = '$template2'";
mysql_query($update) or die ( mysql_error() );

if ($nav_roll == "") {} else {
$update = "UPDATE TN_casestudy_pages SET rollover_image = '$nav_roll' WHERE case_id = '$case_id' AND template_id ='$template_id' AND template = '$template2'";
mysql_query($update) or die ( mysql_error() );
}

$error = "Page Edited";
include "finish_case_studypage.php";
?>