<?php include "../share/db.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">View Work</a></h2>
                
                <div id="main">

<?php

$id = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_work WHERE id LIKE '$id' ");
while($r=mysql_fetch_array($grab))
{	
   $cat=$r["category"];
   $subcat=$r["sub_category"];
   $title=$r["title"];
   $subtitle=$r["sub_title"];
   $copy=$r["copy"];
   $thumb=$r["sm_image"];
   $popup=$r["lg_image"];
}
?>
<div class="slider_form"><br /><strong>Category:</strong> <?php echo $cat; ?><BR />
<br /><strong>Sub Category:</strong> <?php echo $subcat; ?><BR />
<br /><strong>Title:</strong> <?php echo $title; ?><BR />
<br /><strong>Sub Title:</strong> <?php echo $subtitle; ?><BR />
<br /><strong>Copy:</strong> <?php echo $copy; ?><BR />
<br /><strong>Thumb Image:</strong> <br /><img src="../upload/sm_images/<?php echo $thumb; ?>" /><BR /><br />
<br /><strong>Popup Image:</strong> <br /><img src="../upload/lg_images/<?php echo $popup; ?>" /><BR /><br />
</div>
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