<?php
//------------------------Connect to Database -------------/
include "../share/db.php";

//=== Vars =====================================================================================================
$name = $_POST["name"];
$slider_1 = basename( $_FILES['slider_1']['name']);
$slider_2 = basename( $_FILES['slider_2']['name']);
$slider_3 = basename( $_FILES['slider_3']['name']);
$slider_4 = basename( $_FILES['slider_4']['name']);
$slider_5 = basename( $_FILES['slider_5']['name']);
$slider_6 = basename( $_FILES['slider_6']['name']);
$slider_7 = basename( $_FILES['slider_7']['name']);
$slider_8 = basename( $_FILES['slider_8']['name']);
$slider_9 = basename( $_FILES['slider_9']['name']);
$slider_10 = basename( $_FILES['slider_10']['name']);
$slider_11 = basename( $_FILES['slider_11']['name']);
$slider_12 = basename( $_FILES['slider_12']['name']);


//======= See if the slider name exsists already -- ====================================================================
$name_check = mysql_query("SELECT * FROM TN_slider WHERE slidername LIKE '$name'");
$num = mysql_num_rows($name_check);

if ($num > 0) {
$error = "<font color=\"red\">A slider with that name already exsists</font><br>";
include "create_slider.php";
exit();
}


//======================== See if the slider1 filename exsists -======================================================
if ($slider_1 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_1' OR image2 LIKE '$slider_1' OR image3 LIKE '$slider_1' OR image4 LIKE '$slider_1' OR image5 LIKE '$slider_1' OR image6 LIKE '$slider_1' OR image7 LIKE '$slider_1' OR image8 LIKE '$slider_1' OR image9 LIKE '$slider_1' OR image10 LIKE '$slider_1' OR image11 LIKE '$slider_1' OR image12 LIKE '$slider_1'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slider 1\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_2 filename exsists -======================================================
if ($slider_2 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_2' OR image2 LIKE '$slider_2' OR image3 LIKE '$slider_2' OR image4 LIKE '$slider_2' OR image5 LIKE '$slider_2' OR image6 LIKE '$slider_2' OR image7 LIKE '$slider_2' OR image8 LIKE '$slider_2' OR image9 LIKE '$slider_2' OR image10 LIKE '$slider_2' OR image11 LIKE '$slider_2' OR image12 LIKE '$slider_2'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 2\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_3 filename exsists -======================================================
if ($slider_3 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_3' OR image2 LIKE '$slider_3' OR image3 LIKE '$slider_3' OR image4 LIKE '$slider_3' OR image5 LIKE '$slider_3' OR image6 LIKE '$slider_3' OR image7 LIKE '$slider_3' OR image8 LIKE '$slider_3' OR image9 LIKE '$slider_3' OR image10 LIKE '$slider_3' OR image11 LIKE '$slider_3' OR image12 LIKE '$slider_3'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 3\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_4 filename exsists -======================================================
if ($slider_4 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_4' OR image2 LIKE '$slider_4' OR image3 LIKE '$slider_4' OR image4 LIKE '$slider_4' OR image5 LIKE '$slider_4' OR image6 LIKE '$slider_4' OR image7 LIKE '$slider_4' OR image8 LIKE '$slider_4' OR image9 LIKE '$slider_4' OR image10 LIKE '$slider_4' OR image11 LIKE '$slider_4' OR image12 LIKE '$slider_4'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 4\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_5 filename exsists -======================================================
if ($slider_5 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_5' OR image2 LIKE '$slider_5' OR image3 LIKE '$slider_5' OR image4 LIKE '$slider_5' OR image5 LIKE '$slider_5' OR image6 LIKE '$slider_5' OR image7 LIKE '$slider_5' OR image8 LIKE '$slider_5' OR image9 LIKE '$slider_5' OR image10 LIKE '$slider_5' OR image11 LIKE '$slider_5' OR image12 LIKE '$slider_5'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 5\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_6 filename exsists -======================================================
if ($slider_6 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_6' OR image2 LIKE '$slider_6' OR image3 LIKE '$slider_6' OR image4 LIKE '$slider_6' OR image5 LIKE '$slider_6' OR image6 LIKE '$slider_6' OR image7 LIKE '$slider_6' OR image8 LIKE '$slider_6' OR image9 LIKE '$slider_6' OR image10 LIKE '$slider_6' OR image11 LIKE '$slider_6' OR image12 LIKE '$slider_6'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 6\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_7 filename exsists -======================================================
if ($slider_7 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_7' OR image2 LIKE '$slider_7' OR image3 LIKE '$slider_7' OR image4 LIKE '$slider_7' OR image5 LIKE '$slider_7' OR image6 LIKE '$slider_7' OR image7 LIKE '$slider_7' OR image8 LIKE '$slider_7' OR image9 LIKE '$slider_7' OR image10 LIKE '$slider_7' OR image11 LIKE '$slider_7' OR image12 LIKE '$slider_7'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 7\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_8 filename exsists -======================================================
if ($slider_8 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_8' OR image2 LIKE '$slider_8' OR image3 LIKE '$slider_8' OR image4 LIKE '$slider_8' OR image5 LIKE '$slider_8' OR image6 LIKE '$slider_8' OR image7 LIKE '$slider_8' OR image8 LIKE '$slider_8' OR image9 LIKE '$slider_8' OR image10 LIKE '$slider_8' OR image11 LIKE '$slider_8' OR image12 LIKE '$slider_8'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 8\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_9 filename exsists -======================================================
if ($slider_9 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_9' OR image2 LIKE '$slider_9' OR image3 LIKE '$slider_9' OR image4 LIKE '$slider_9' OR image5 LIKE '$slider_9' OR image6 LIKE '$slider_9' OR image7 LIKE '$slider_9' OR image8 LIKE '$slider_9' OR image9 LIKE '$slider_9' OR image10 LIKE '$slider_9' OR image11 LIKE '$slider_9' OR image12 LIKE '$slider_9'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 9\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_10 filename exsists -======================================================
if ($slider_10 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_10' OR image2 LIKE '$slider_10' OR image3 LIKE '$slider_10' OR image4 LIKE '$slider_10' OR image5 LIKE '$slider_10' OR image6 LIKE '$slider_10' OR image7 LIKE '$slider_10' OR image8 LIKE '$slider_10' OR image9 LIKE '$slider_10' OR image10 LIKE '$slider_10' OR image11 LIKE '$slider_10' OR image12 LIKE '$slider_10'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 10\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_11 filename exsists -======================================================
if ($slider_11 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_11' OR image2 LIKE '$slider_11' OR image3 LIKE '$slider_11' OR image4 LIKE '$slider_11' OR image5 LIKE '$slider_11' OR image6 LIKE '$slider_11' OR image7 LIKE '$slider_11' OR image8 LIKE '$slider_11' OR image9 LIKE '$slider_11' OR image10 LIKE '$slider_11' OR image11 LIKE '$slider_11' OR image12 LIKE '$slider_11'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 11\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

//======================== See if the slider_12 filename exsists -======================================================================
if ($slider_12 == "") {} else {
$name_check = mysql_query("SELECT * FROM TN_slider WHERE image1 LIKE '$slider_12' OR image2 LIKE '$slider_12' OR image3 LIKE '$slider_12' OR image4 LIKE '$slider_12' OR image5 LIKE '$slider_12' OR image6 LIKE '$slider_12' OR image7 LIKE '$slider_12' OR image8 LIKE '$slider_12' OR image9 LIKE '$slider_12' OR image10 LIKE '$slider_12' OR image11 LIKE '$slider_12' OR image12 LIKE '$slider_12'");
$num2 = mysql_num_rows($name_check);


if ($num2 == 0) {} else {
$error = "<font color=\"red\">The image name selected in \"Slide 12\" is already in use.</font><br>";
include "create_slider.php";
exit();
}}

// ========================================================== Image Upload =============================================================

// Slider_1
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_1']['name']); 
if(move_uploaded_file($_FILES['slider_1']['tmp_name'], $target_path)) {
} else{
}

// slider_2
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_2']['name']); 
if(move_uploaded_file($_FILES['slider_2']['tmp_name'], $target_path)) {
} else{
}

// slider_3
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_3']['name']); 
if(move_uploaded_file($_FILES['slider_3']['tmp_name'], $target_path)) {
} else{
}

// slider_4
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_4']['name']); 
if(move_uploaded_file($_FILES['slider_4']['tmp_name'], $target_path)) {
} else{
}

// slider_5
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_5']['name']); 
if(move_uploaded_file($_FILES['slider_5']['tmp_name'], $target_path)) {
} else{
}

// slider_6
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_6']['name']); 
if(move_uploaded_file($_FILES['slider_6']['tmp_name'], $target_path)) {
} else{
}


// slider_7
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_7']['name']); 
if(move_uploaded_file($_FILES['slider_7']['tmp_name'], $target_path)) {
} else{
}

// slider_8
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_8']['name']); 
if(move_uploaded_file($_FILES['slider_8']['tmp_name'], $target_path)) {
} else{
}


// slider_9
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_9']['name']); 
if(move_uploaded_file($_FILES['slider_9']['tmp_name'], $target_path)) {
} else{
}


// slider_10
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_10']['name']); 
if(move_uploaded_file($_FILES['slider_10']['tmp_name'], $target_path)) {
} else{
}

// slider_11
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_11']['name']); 
if(move_uploaded_file($_FILES['slider_11']['tmp_name'], $target_path)) {
} else{
}

// slider_12
$target_path = "../upload/slider_images/";
$target_path = $target_path . basename( $_FILES['slider_12']['name']); 
if(move_uploaded_file($_FILES['slider_12']['tmp_name'], $target_path)) {
} else{
}


// =============Insert Everything into the database==================================
$insert_data = "INSERT INTO TN_slider VALUES (NULL, '$slider_1', '$slider_2', '$slider_3', '$slider_4',  '$slider_5', '$slider_6', '$slider_7', '$slider_8', '$slider_9', '$slider_10', '$slider_11', '$slider_12',  '$name')";
mysql_query($insert_data) or die ( mysql_error() );

$insert_id = mysql_insert_id();

include "finish_slider.php";
?>