<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$name = $_POST["name"];
$company = $_POST["company"];
$cat = $_POST["cat"];
$copy = $_POST["copy"];
$color = $_POST["color"];

$bimage1 = basename( $_FILES['bimage1']['name']);
$bimage2 = basename( $_FILES['bimage2']['name']);
$bimage3 = basename( $_FILES['bimage3']['name']);

$burl1 = $_POST["burl1"];
$burl2 = $_POST["burl2"];
$burl3 = $_POST["burl3"];

$case_image = basename( $_FILES['case_image']['name']);

$name = mysql_escape_string($name);
$company = mysql_escape_string($company);
$cat = mysql_escape_string($cat);
$copy = mysql_escape_string($copy);
$bimage1 = mysql_escape_string($bimage1);
$bimage2 = mysql_escape_string($bimage2);
$bimage3 = mysql_escape_string($bimage3);
$burl1 = mysql_escape_string($burl1);
$burl2 = mysql_escape_string($burl2);
$burl3 = mysql_escape_string($burl3);
$case_image = mysql_escape_string($case_image);
$color = mysql_escape_string($color);


$current_image=$_FILES['upload_image']['name'];
$extension = substr(strrchr($current_image, '.'), 1);
if (($extension!= "jpg") && ($extension != "gif"))
{
die('Unknown extension');
}
$time = date("fYhis");
//$new_image = $time . "." . $extension;
$destination="../upload/case_study_landing/".$current_image;
$action = copy($_FILES['upload_image']['tmp_name'], $destination);
if (!$action)
{
die('File copy failed');
}else{
//echo "File copy successful";
//$query = "UPDATE TN_casestudy SET landing_image = '$current_image' WHERE id LIKE '$id'";
//mysql_query($query) or die ( mysql_error() );
//header("Location:edit_casestudy.php?id=$id");
//exit();
}



//============= Make sure nothing is blank ===========
if ($name == "") {
$error = "<font color=\"red\">Please Fill in all Fields</font><br>";
include "create_casestudy.php";
exit();
}

if ($company == "") {
$error = "<font color=\"red\">Please Fill in all Fields</font><br>";
include "create_casestudy.php";
exit();
}

if ($cat == "") {
$error = "<font color=\"red\">Please Fill in all Fields</font><br>";
include "create_casestudy.php";
exit();
}

if ($copy == "") {
$error = "<font color=\"red\">Please Fill in all Fields</font><br>";
include "create_casestudy.php";
exit();
}

//======= See if the name exsists already -- ===================================================================//
$name_check = mysql_query("SELECT * FROM TN_casestudy WHERE name LIKE '$name'");
$num = mysql_num_rows($name_check);

if ($num > 0) {
$error = "<font color=\"red\">A casestudy with that name already exsists</font><br>";
include "create_casestudy.php";
exit();
}

//======================== See if the bait1 filename exsists -======================================================//
if ($case_image == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_casestudy WHERE image_name LIKE '$case_image'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Case Study Name Image\" is already in use.</font><br>";
include "create_casestudy.php";
exit();
}}

//======================== See if the bait1 filename exsists -======================================================//
if ($bimage1 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_baits WHERE image LIKE '$bimage1'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Bait 1\" is already in use.</font><br>";
include "create_casestudy.php";
exit();
}}

//======================== See if the bait2 filename exsists -======================================================//
if ($bimage2 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_baits WHERE image LIKE '$bimage2'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Bait 2\" is already in use.</font><br>";
include "create_casestudy.php";
exit();
}}

//======================== See if the bait1 filename exsists -======================================================//
if ($bimage3 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_baits WHERE image LIKE '$bimage3'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Bait 3\" is already in use.</font><br>";
include "create_casestudy.php";
exit();
}}


// ========================================================== Image Upload =============================================================//


$target_path = "../upload/baits/";
$target_path = $target_path . basename( $_FILES['bimage1']['name']); 
if(move_uploaded_file($_FILES['bimage1']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/baits/";
$target_path = $target_path . basename( $_FILES['bimage2']['name']); 
if(move_uploaded_file($_FILES['bimage2']['tmp_name'], $target_path)) {
} else{
}


$target_path = "../upload/baits/";
$target_path = $target_path . basename( $_FILES['bimage3']['name']); 
if(move_uploaded_file($_FILES['bimage3']['tmp_name'], $target_path)) {
} else{
}

$target_path = "../upload/case_study_names/";
$target_path = $target_path . basename( $_FILES['case_image']['name']); 
if(move_uploaded_file($_FILES['case_image']['tmp_name'], $target_path)) {
} else {
}



// =============Insert Everything into the database==================================//

$insert_data = "INSERT INTO TN_casestudy VALUES (NULL, '$name', '$name', '$copy', '$cat',  '$company', '0', '$case_image', '$color','$current_image')";
mysql_query($insert_data) or die ( mysql_error() );
$case_id = mysql_insert_id();

$insert_data = "INSERT INTO TN_baits VALUES (NULL, '$bimage1', '$burl1', '$case_id', '$cat', 'none')";
mysql_query($insert_data) or die ( mysql_error() );

$insert_data = "INSERT INTO TN_baits VALUES (NULL, '$bimage2', '$burl2', '$case_id', '$cat', 'none')";
mysql_query($insert_data) or die ( mysql_error() );

$insert_data = "INSERT INTO TN_baits VALUES (NULL, '$bimage3', '$burl3', '$case_id', '$cat', 'none')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">Case Study Created</font><br><br>";
include "manage_casestudy.php";
?>
