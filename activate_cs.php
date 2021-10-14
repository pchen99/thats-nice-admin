<?php
$pass = $_POST['pass'];

$pass = md5($pass);




if ($pass == md5("7orange7"))
{ include "admin_home.php"; } else {
$error ="<font color=\"red\"> Wrong Key </font><br><br>";
include "key_activate.php";
}
?>