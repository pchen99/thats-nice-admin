<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$id = $_POST["id"];
$catty = $_POST["catty"];
$cat = $_POST["cat"];
$subcat = $_POST["subcat"];
$copy = $_POST["copy"];
$template = $_POST["template"];
$landing_image = basename( $_FILES['landing_image']['name']);

$catty = mysql_escape_string($catty);
$cat = mysql_escape_string($cat);
$subcat = mysql_escape_string($subcat);
$copy = mysql_escape_string($copy);
$landing_image = mysql_escape_string($landing_image);

// Get Parent cat id ========================= //

$find = '/ /';
$repace = '_';
$subcat_alpha = preg_replace ($find, $replace, $subcat); 

// ============================== Image Upload =================================================//
$grab = mysql_query("SELECT * FROM TN_parent_work_sections WHERE parent_sections = '$catty'");
while($r=mysql_fetch_array($grab))	
{	
   $catty_id=$r["id"];
}

$target_path = "../upload/work_landing/";
$target_path = $target_path . basename( $_FILES['landing_image']['name']); 
if(move_uploaded_file($_FILES['landing_image']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================//
$insert_data = "UPDATE TN_work_path SET cat = '$catty', subcat = '$subcat', cat_id = '$catty_id', subcat_alpha = '$subcat_alpha', main_cat = '$cat', top_copy = '$copy', template = '$template' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if($landing_image !== ""){
$insert_data = "UPDATE TN_work_path SET image = '$landing_image'  WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

}

$error = "<font color=\"red\">Section Updated</font><br><br>";
include "manage_sections.php";
?>