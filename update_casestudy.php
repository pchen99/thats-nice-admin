<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

$id = $_POST["id"];

if(($_FILES['upload_image']['name'])!="")
{
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
echo "File copy successful";
$query = "UPDATE TN_casestudy SET landing_image = '$current_image' WHERE id LIKE '$id'";
mysql_query($query) or die ( mysql_error() );
header("Location:edit_casestudy.php?id=$id");
exit();
}
}



//=== Vars =====================================================================================================//
$name = $_POST["name"];
$company = $_POST["company"];
$cat = $_POST["cat"];
$copy = $_POST["copy"];

$color = $_POST["color"];
$avail = $_POST["avail"];

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





// ========================================================== Image Upload =============================================================//


$target_path = "../upload/case_study_names/";
$target_path = $target_path . basename( $_FILES['case_image']['name']); 
if(move_uploaded_file($_FILES['case_image']['tmp_name'], $target_path)) {
} else {
}



// =============Insert Everything into the database==================================//

$insert_data = "UPDATE TN_casestudy SET name = '$name', color = '$color', title = '$name', copy = '$copy', category = '$cat',  company = '$company', published='$avail' WHERE id LIKE '$id'";
mysql_query($insert_data) or die ( mysql_error() );

if ($case_image == "") {} else
{ 
$insert_data = "UPDATE TN_casestudy SET name_image = '$case_image' WHERE id LIKE '$id'";
mysql_query($insert_data) or die ( mysql_error() );
 }


$error = "<font color=\"red\">Case Study Updated</font><br><br>";
include "manage_casestudy.php";
?>
