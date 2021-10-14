<?php include "../share/db.php"; 

if($cat == ""){
$cat = $_GET['cat'];
}

if($subcat == "") {
$subcat = $_GET['subcat'];
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>That's Nice Admin</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="index.php"><span>That's Nice Admin</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
      <?php include "share/nav2.php"; ?>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
<?php include "share/work_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Work</a></h2>
                
                <div id="main">

<h3>Manage Work Section: <?php echo $subcat; ?></h3>
 <?php echo $error; ?>
 
 
   <br>

 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//


$grab2 = mysql_query("SELECT * FROM TN_work_path WHERE subcat_alpha LIKE '$subcat' AND main_cat LIKE '$cat'");
while($r2=mysql_fetch_array($grab2))
{	
$template=$r2["template"];
}

if ($template == 1) {
$w = "200";
$loc ="http://thatsnice.com/upload/sm_images/";
}

if ($template == 2) {
$w = "300";
$loc ="http://thatsnice.com/upload/mg_images/";
}


$grab2 = mysql_query("SELECT * FROM TN_work WHERE sub_category LIKE '$subcat' AND category LIKE '$cat'");
while($r2=mysql_fetch_array($grab2))
{	
$id=$r2["id"];
$title=$r2["title"];
$copy=$r2["copy"];
$sub_title=$r2["sub_title"];
$sm_image=$r2["sm_image"];
$active=$r2["active"];

if($active == 1) {
$status = "<a style=\"color:red;\" href=\"disable_work.php?id=$id\">Disable</a>";
}

if($active == 0) {
$status = "<a style=\"color:red;\" href=\"enable_work.php?id=$id\">Enable</a>";
}


 
  echo "
<div style=\"float:left; width:".$w."px; height:315px; padding-right:30px; padding-bottom:15px;\">
<p> <a style=\"color:orange;\" href=\"edit_work.php?id=$id\">Edit</a> - ".$status." - <a href=\"delete_work2.php?id=$id\" style=\"color:black;\">Delete</a> </p>
<p><img src=\"".$loc."$sm_image\"></p>
<p><strong>$title</strong></p>
<p><em>$sub_title</em></p>
<p>$copy</p>
</div>
  ";
  
} 
 
 ?>

 

  <p> 
<br /><br />
 </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        <p id="footer"><?php include "share/footer.php"; ?></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>
