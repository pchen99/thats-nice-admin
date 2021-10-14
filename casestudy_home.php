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
<?php include "share/cs_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Case Studies</a></h2>
                
                <div id="main">



  <h3>Case Study Tools</h3>
  
<p><strong>Manage Case Studies</strong><br />
- View "enabled / disabled" status <br />
- Click "View" to manage case study pages<br />
- Edit case study details</p>
<br />

<p><strong>Create Case Study</strong><br />
Creates an empty case study. Case studies need to me filled with pages and "enabled" to become live on the website. <br /></p>

<br />

<p><strong>Case Study Baits</strong><br />
Add / Remove baits from casestudies on the website.<br /></p>

<br />

<p><strong>Case Study Page Names</strong><br />
Add and remove from the case study name drop down. <br /></p><br /><br /><br /><br /><br />


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