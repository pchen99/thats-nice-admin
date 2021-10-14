<?php include "../share/db.php"; ?>

<?php
$grab = mysql_query("SELECT * FROM TN_slider_homepage WHERE cat LIKE 'la'");
while($r=mysql_fetch_array($grab))
{	
   $landing=$r["slidername"];
}
?>

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
<?php include "share/home_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Home Page Slider</a></h2>
                
                <div id="main">

<h3>Select Slider</h3>
 <p style="line-height:140%;">Select Category:</p> <br />
 <form method="post" action="show_sliderform.php">
 
<select name="cat">
<option value="hd"> Home Decor </option>
<option value="sm"> Specialty Materials </option>

</select> <input name="go" value="go" type="submit" />
 </form>
 <br /> <br /> 
 <form action="update_hp_slider2.php" class="jNice" method="post" enctype="multipart/form-data" name="form1" id="form1">

<h3> Landing Image </h3>
<fieldset>
     <p><strong>Landing Image for "no cat selected"<br /> </strong>
     <br />
     <?php if ($landing !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/home_slide1/$landing\" /><br />
     <br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="landing" id="landing" class="text-long" type="file"><br /><br />
     <input type="hidden" name="cat" value="la" />
 
     </p>
     <input name="replace" value="replace" type="submit" />
</fieldset>
</form>  
 <br /> <br /> <br />
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