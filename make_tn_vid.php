<?php


//------------------------Connect to Database -------------//
include "../share/db.php";

//=== Vars =====================================================================================================//

$img = basename( $_FILES['img']['name']);

$title = $_POST["title"];
$headline = $_POST["headline"];
$copy = $_POST["copy"];
$src = $_POST["src"];
$h = $_POST["h"];
$w = $_POST["w"];
$link_text = $_POST["link_text"];
$gal = $_POST["gal"];
$blank="";
$v_swtich = $_POST["v_swtich"];
$emb_src = $_POST["emb_src"];




$title = mysql_escape_string($title);
$headline = mysql_escape_string($headline);
$copy = mysql_escape_string($copy);
$link_text = mysql_escape_string($link_text);
$src = mysql_escape_string($src);
$h = mysql_escape_string($h);
$w = mysql_escape_string($w);


//upload Image

$target_path = "../upload/homepage_images/";
$target_path = $target_path . basename( $_FILES['img']['name']); 
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
} else{
}

// =============Insert Everything into the database==================================//

$insert_data = "INSERT INTO TN_misc_bait VALUES (NULL, '$img', '$title', '$headline', '$copy', '$link_text', '$src', '$h', '$w', '$gal', '$active', '$v_swtich', '$emb_src')";
mysql_query($insert_data) or die ( mysql_error() );



$error = "<font color=\"red\">Bait Added</font><br><br>";
include "tn_video_bait.php";
?>