<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];
$cat = $_GET['cat'];
$action = $_GET['action'];

if($action=="activate"){
 $query = "SELECT id FROM TN_cl_news WHERE active = '1' ORDER BY id DESC";
 mysql_query($query);
 if(mysql_affected_rows()==7){  
    $error = "<font color='red'>6 News are activated already, please deactivate one of them before activating a new one</font>";    
  }
  else{
  mysql_query("UPDATE TN_cl_news SET active = '1' WHERE id='$id'");
  $error = "<font color=\"green\">Home Page News Set</font><br><br>";
  }
}

if($action=="deactivate"){
mysql_query("UPDATE TN_cl_news SET active = '0' WHERE id=$id");
$error = "<font color=\"green\">News Deactivated</font><br><br>";
}











include "manage_cl_news.php";

?>