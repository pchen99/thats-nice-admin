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
<style type="text/css">
<!--
a:link {
	color: #646464;
	text-decoration: none;
}
a:visited {
	color: #646464;
	text-decoration: none;
}
a:hover {
	color: #646464;
	text-decoration: underline;
}
a:active {
	color: #646464;
	text-decoration: none;
}
-->
</style></head>

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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Manage Casestudy Pagenames</a></h2>
                
                <div id="main">
<div class="slider_form">
<h3>Add Page Name</h3>
      
<form action="make_cspage.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
      
      <p> Add Page Name <input name="name" type="text" /> <input name="button" type="submit" class="button-submit" id="button" value="add	" /> </p>
      
      </fieldset>
      </form>
     
 <h3>Manage Page Names</h3>
 <?php echo $error; ?>
   <br>
  <table width="375" border="0" cellspacing="0" cellpadding="0">
    <tr>

      <td width="215"><span style="font-weight: bold">Name</span></td>
      <td class="action" width="30"><span style="font-weight: bold">Delete</span></td>
	 
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"];
   $id=$r["id"];

 
  echo "
    <tr>
      <td>$name</td>
	  <td class=\"action\"><a href=\"delete_pagename.php?id=$id\" class=\"delete\">Delete</a></td>
    </tr>  
  ";
  
} 
 
 ?>

 
   </table>
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