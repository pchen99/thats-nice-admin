<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_casestudy_pages WHERE id LIKE '$id'");
while($r=mysql_fetch_array($grab))
{	
   $template_id=$r["template_id"];
   $template=$r["template"];
   $case_id=$r["case_id"];
} 

mysql_query("DELETE FROM TN_casestudy_pages WHERE id='$id'");

mysql_query("DELETE FROM TN_$template WHERE id='$template_id'");



$error = "<font color=\"red\">Page Deleted</font><br><br>";

include "finish_case_studypage.php";

?>