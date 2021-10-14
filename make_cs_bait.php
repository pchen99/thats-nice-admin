<?php

//------------------------Connect to Database -------------//
include "../share/db.php";


$bimage1 = basename( $_FILES['bimage1']['name']);
$burl1 = $_POST["burl1"];
$case_id = $_POST["case_id"];


$target_path = "../upload/baits/";
$target_path = $target_path . basename( $_FILES['bimage1']['name']); 
if(move_uploaded_file($_FILES['bimage1']['tmp_name'], $target_path)) {
} else{
}

$insert_data = "INSERT INTO TN_baits VALUES (NULL, '$bimage1', '$burl1', '$case_id', '$cat', 'none')";
mysql_query($insert_data) or die ( mysql_error() );

include "manage_cs_baits.php";

?>