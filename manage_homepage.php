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
<?php include "share/home_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Manage Homepage</a></h2>
                
                <div id="main">

<h3>Homepage</h3>
 <p><strong>Latest News</strong><br />You can add to the lastest news pool. News marked as "Enabled" will be randomly displayed on the homepage. </p> <br />
 <p><strong>That's Nice News</strong><br />You can add to the That's Nice news pool. News marked as "Enabled" will be randomly displayed on the homepage. </p> <br />
 <p><strong>Client New</strong><br />You can manage the client news pool. Only one row can be active at once, per industry. </p> <br />
  <p><strong>Project News</strong><br />You can manage the Project news pool. Only one row can be active at once, per industry. </p> <br />
  <p><strong>That's Nice Events</strong><br />You can add, edit and remove from the events section of the website. Events are arranged on the website automaticly based on date.</p> <br />
    <p><strong>Home Page Slider</strong><br />You can add, edit and Images and links from the home page slider. </p> <br />
 <?php echo $error; ?>
 <br />
 <br />
 <br />
 <Br />
 
 
  
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