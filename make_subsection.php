<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
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

// ADD CONDITIONS

if($catty == "" or $cat == "" or $subcat == "" or $copy == "" or $template == "" or $landing_image == "") {
$error = "<font color=\"red\">All Fields are Required to create a subsection. </font><br><br>";
include "manage_sections.php";
exit();
}

//ALL FIELDS

$grab = mysql_query("SELECT * FROM TN_parent_work_sections WHERE parent_sections = '$catty'  ");
while($r=mysql_fetch_array($grab))	
{	
   $catty_id=$r["id"];
}

$find = '/ /';
$repace = '_';
$subcat_alpha = preg_replace ($find, $replace, $subcat); 

// stop duplicates from being made.
$grab5 = mysql_query("SELECT * FROM TN_work_path WHERE subcat_alpha = '$subcat' AND main_cat = '$cat'");
$num5 = mysql_num_rows($grab5);

if ($num5 > 0)
{
$error = "<font color=\"red\">Subcat Already Exists</font><br><br>";
include "manage_sections.php";
exit();
}

// ============================== Image Upload =================================================//


$target_path = "../upload/work_landing/";
$target_path = $target_path . basename( $_FILES['landing_image']['name']); 
if(move_uploaded_file($_FILES['landing_image']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================//
$insert_data = "INSERT INTO TN_work_path VALUES (NULL, '$catty', '$subcat', '$catty_id', '10',  '$subcat_alpha', '$landing_image', '$cat', '$copy', '$template', '0')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">Section Created</font><br><br>";
include "manage_sections.php";
?>