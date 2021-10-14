<?php

//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$name = $_POST["name"];
$template = "1";
$template2 = $_POST["template"];
$case_id = $_POST["id"];
$nav_roll = basename( $_FILES['nav_roll']['name']);
$image = basename( $_FILES['image']['name']);

//=== nl2br adds <BR> after each line ==============
$copy = nl2br($_POST["copy"]);

$copy = mysql_escape_string($copy);

//============= Make sure nothing is blank ===========
if ($case_id == "") {
$error = "<font color=\"red\">No ID Present</font><br>";
include "create_page2.php";
exit();
}



// ==================== Make sure the page doesn't already exsist =====================================//

$name_check = mysql_query("SELECT * FROM TN_casestudy_pages WHERE title LIKE '$name' AND case_id LIKE '$case_id'");
$num = mysql_num_rows($name_check);

if ($num > 0) {
$error = "<font color=\"red\">A page with that name already exsists</font><br>";
include "create_page2.php";
exit();
}

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
$insert_data = "INSERT INTO TN_template1 VALUES (NULL, '$image', '$copy', '$case_id')";
mysql_query($insert_data) or die ( mysql_error() );
$template_id = mysql_insert_id();


$insert_data2 = "INSERT INTO TN_casestudy_pages VALUES (NULL, '$name', 'template1', '$case_id', '$template_id', '$nav_roll', '100')";
mysql_query($insert_data2) or die ( mysql_error() );

$error = "Page Created";
include "finish_case_studypage.php";
?>