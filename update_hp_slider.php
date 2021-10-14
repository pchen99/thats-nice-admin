<?php
//------------------------Connect to Database -------------/
include "../share/db.php";

//=== Vars =====================================================================================================
error_reporting(E_ALL);
ini_set('display_errors', '1');

$landing = basename( $_FILES['landing']['name']);
$image1 = basename( $_FILES['image1']['name']);
$image2 = basename( $_FILES['image2']['name']);
$image3 = basename( $_FILES['image3']['name']);
$image4 = basename( $_FILES['image4']['name']);
$image5 = basename( $_FILES['image5']['name']);
$image6 = basename( $_FILES['image6']['name']);
$image7 = basename( $_FILES['image7']['name']);
$image8 = basename( $_FILES['image8']['name']);
$image9 = basename( $_FILES['image9']['name']);
$image10 = basename( $_FILES['image10']['name']);

   $src1=$_POST["src1"];
   $src2=$_POST["src2"];
   $src3=$_POST["src3"];
   $src4=$_POST["src4"];
   $src5=$_POST["src5"];
   $src6=$_POST["src6"];
   $src7=$_POST["src7"];
   $src8=$_POST["src8"];
   $src9=$_POST["src9"];
   $src10=$_POST["src10"];
   
   $cat=$_POST["cat"];



// ========================================================== Image Upload =============================================================

// image1
$target_path = "../upload/home_slide1/";
$target_path = $target_path . basename( $_FILES['landing']['name']); 
if(move_uploaded_file($_FILES['landing']['tmp_name'], $target_path)) {
} else{
}

// image1
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image1']['name']); 
if(move_uploaded_file($_FILES['image1']['tmp_name'], $target_path)) {
} else{
}

// image2
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image2']['name']); 
if(move_uploaded_file($_FILES['image2']['tmp_name'], $target_path)) {
} else{
}

// image3
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image3']['name']); 
if(move_uploaded_file($_FILES['image3']['tmp_name'], $target_path)) {
} else{
}

// image4
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image4']['name']); 
if(move_uploaded_file($_FILES['image4']['tmp_name'], $target_path)) {
} else{
}

// image5
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image5']['name']); 
if(move_uploaded_file($_FILES['image5']['tmp_name'], $target_path)) {
} else{
}

// image6
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image6']['name']); 
if(move_uploaded_file($_FILES['image6']['tmp_name'], $target_path)) {
} else{
}


// image7
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image7']['name']); 
if(move_uploaded_file($_FILES['image7']['tmp_name'], $target_path)) {
} else{
}

// image8
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image8']['name']); 
if(move_uploaded_file($_FILES['image8']['tmp_name'], $target_path)) {
} else{
}


// image9
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image9']['name']); 
if(move_uploaded_file($_FILES['image9']['tmp_name'], $target_path)) {
} else{
}


// image10
$target_path = "../upload/homepage_slider/";
$target_path = $target_path . basename( $_FILES['image10']['name']); 
if(move_uploaded_file($_FILES['image10']['tmp_name'], $target_path)) {
} else{
}

// =============Insert Everything into the database==================================
$insert_data = "UPDATE TN_slider_homepage SET  src1 = '$src1', src2 = '$src2', src3 = '$src3', src4 = '$src4', src5 = '$src5', src6 =  '$src6', src7 = '$src7', src8 = '$src8', src9 = '$src9', src10 = '$src10' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );

if ($landing  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  slidername = '$landing' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image1  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image1 = '$image1' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image2  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image2 = '$image2' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image3  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image3 = '$image3' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image4  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image4 = '$image4' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image5  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image5 = '$image5' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image6  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image6 = '$image6' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image7  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image7 = '$image7' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image8  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image8 = '$image8' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image9  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image9 = '$image9' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

if ($image10  !== "") {
$insert_data = "UPDATE TN_slider_homepage SET  image10 = '$image10' WHERE cat = '$cat'";
mysql_query($insert_data) or die ( mysql_error() );
}

$error = "<font color=\"red\">Slider Updated</font><br>";

include "show_sliderform.php";
?>