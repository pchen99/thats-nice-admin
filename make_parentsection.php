<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$name = $_POST["name"];
$name = mysql_escape_string($name);


// =============Insert Everything into the database==================================//
$insert_data = "INSERT INTO TN_parent_work_sections VALUES (NULL, '$name')";
mysql_query($insert_data) or die ( mysql_error() );

$error= "Parent Section added";

include "manage_sections.php";


?>