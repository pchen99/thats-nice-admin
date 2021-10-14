<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_cs_pagenames WHERE id='$id'");

$error = "<font color=\"red\">Pagename Deleted.</font><br><br>";

include "cs_pages.php";

?>