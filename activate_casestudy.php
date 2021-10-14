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
<?php include "share/admin_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Case Study Admin</a></h2>
                
                <div id="main">
<div class="slider_form">
  <h3><br /> 
    Admin Tools</h3>
 <?php echo $error; ?>
    This tool allows you to Enable and delete case studies. <br>
   <br>
  <table width="450" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="40"><span style="font-weight: bold">ID</span></td>
      <td width="400"><span style="font-weight: bold">Name</span></td>
       <td width="80"><span style="font-weight: bold">Status</span></td>
      <td width="80"><span style="font-weight: bold">Option</span></td>
      <td width="80"><span style="font-weight: bold">Archive</span></td>
      <td width="80"><span style="font-weight: bold">Delete</span></td>
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_casestudy WHERE title LIKE '%%' ORDER BY title ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["title"];
   $id=$r["id"];
   $pub=$r["published"];
   
   if ($pub == 1) {
   $option = "<a href=\"disable_casestudy.php?id=$id\">Disable</a>";
   } else { 
   $option = "<a href=\"enable_casestudy.php?id=$id\">Enable</a>";
   }
   
      if ($pub == 1) {
   $status = "<font color=\"green\">Active</font>";
   } else { 
   $status = "<font color=\"gray\">Inactive</font>";
   }
   
         if ($pub == 2) {
   $status2 = "<a href=\"unarchive_casestudy.php?id=$id\">Archived</a>";
   } else { 
   $status2 = "<a href=\"archive_casestudy.php?id=$id\"><font color=\"gray\">N A</a>";
   }
  
  echo "
    <tr>
	  <td>$id</td>
      <td>$name</td>
  	  <td>$status</td>
	  <td>$option</td>
	  <td>$status2</td>
	  <td><a href=\"delete_casestudy.php?id=$id\">Delete</a></td>
    </tr>  
  ";
  
} 
 
 ?>
 
   </table>
  <p>   <br />
      <br />
  </p>
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