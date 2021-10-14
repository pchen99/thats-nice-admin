 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- and now presenting - The vars!
$pageid = $_POST['pageid'];
$order = $_POST['order'];
$id = $_POST['caseid'];

mysql_query("UPDATE TN_casestudy_pages SET page_order='$order' WHERE id='$pageid'");

$error = "<font color=\"red\">Page Order Updated</font><br><br>";

include "view_casestudy.php";

?>