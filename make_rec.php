<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$project = $_POST["project"];
$client = $_POST["client"];
$publication = $_POST["publication"];
$publisher = $_POST["publisher"];
$Award = $_POST["Award"];
$section = $_POST["section"];
$custom_field = $_POST["custom_field"];
$custom_data = $_POST["custom_data"];
$year = $_POST["year"];
$link = $_POST["link"];

$project = mysql_escape_string($project);
$client = mysql_escape_string($client);
$publication = mysql_escape_string($publication);
$publisher = mysql_escape_string($publisher);
$Award = mysql_escape_string($Award);
$section = mysql_escape_string($section);
$custom_field = mysql_escape_string($custom_field);
$custom_data = mysql_escape_string($custom_data);
$year = mysql_escape_string($year);
$link = mysql_escape_string($link);

$image = basename( $_FILES['image']['name']);


$target_path = "../upload/indrec/";
$target_path = $target_path . basename( $_FILES['image']['name']); 
if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
} else{
}



// =============Insert Everything into the database==================================//
$insert_data = "INSERT INTO TN_ind_rec VALUES (NULL, '$project', '$client', '$publication', '$publisher', '$Award', '$section', '$custom_field', '$custom_data', '$year', '$link', '$image')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">Industry Recognition Added</font><br><br>";
include "manage_rec.php";
?>