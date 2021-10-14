<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//
$name = $_POST["name"];
$name = mysql_escape_string($name);


// =============Insert Everything into the database==================================//
$insert_data = "INSERT INTO TN_cs_pagenames VALUES (NULL, '$name')";
mysql_query($insert_data) or die ( mysql_error() );

$error = "<font color=\"red\">Pagename Created.</font><br><br>";

include "cs_pages.php";


?>