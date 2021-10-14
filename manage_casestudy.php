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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Case Study</a></h2>
                
                <div id="main">

<h3>Manage Case Studies</h3>
 <p>Click "View" on the case study that you want to manage.</p> <br />
 <?php echo $error; ?>
 
 
   <br>
  <table width="375" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="40"><span style="font-weight: bold">ID</span></td>
      <td width="303"><span style="font-weight: bold">Name</span></td>
      <td class="action" width="40"><span style="font-weight: bold">View</span></td>
      <td class="action" width="30"><span style="font-weight: bold">Edit</span></td>
	 <td width="80"><span style="font-weight: bold">Status</span></td>
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
   $status = "<font color=\"green\">active</font>";
   } 
   else if ($pub == 2){
   $status = "<font color=\"green\">archive</font>";
   }
   else { 
   $status = "<font color=\"gray\">inactive</font>";
   }
  
  echo "
    <tr>
	  <td>$id</td>
      <td>$name</td>
      <td class=\"action\"><a href=\"view_casestudy.php?id=$id\" class=\"view\">View</a></td>
	  <td class=\"action\"><a href=\"edit_casestudy.php?id=$id\" class=\"view\">Edit</a></td>
	  <td>$status</td>
    </tr>  
  ";
  
} 
 
 ?>

 
   </table>
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