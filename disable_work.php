<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

$grab2 = mysql_query("SELECT * FROM TN_work WHERE id LIKE '$id'");
while($r2=mysql_fetch_array($grab2))
{	
$subcat = $r2['sub_category'];
$cat = $r2['category'];
}

mysql_query("UPDATE TN_work SET active = '0' WHERE id='$id'");
$error = "<font color=\"red\">Section Enabled</font><br><br>";

$error = "Work Disabled<br>";

include "view_workcat.php";

?>