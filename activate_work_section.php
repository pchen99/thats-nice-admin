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
<?php include "share/admin_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Manage Sections</a></h2>
                
                <div id="main">

<h3>Work Section Admin</h3>
 <?php echo $error; ?>
 <p style="line-height:140%;">Below is a list of all the work categories. Click 'view' to manage work within each category. Click 'edit' to change basic information about that category.</p> <br />

 <br>
 <table width="375" border="0" cellspacing="0" cellpadding="0">
    <tr>

      <td width="215"><span style="font-weight: bold">Category</span></td>
      <td width="303"><span style="font-weight: bold">Sub Category</span></td>
      <td><span style="font-weight: bold">Industry</span></td>
      <td class="action" width="30"><span style="font-weight: bold">Status</span></td>
       <td class="action" width="30"><span style="font-weight: bold">Switch</span></td>
      <td class="action" width="30"><span style="font-weight: bold">Delete</span></td>
	 
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_work_path order by main_cat");
while($r=mysql_fetch_array($grab))
{	
   $subcat=$r["subcat"];
$subcat_alpha=$r["subcat_alpha"];
$catty=$r["cat"];
$active=$r["active"];
$main_cat=$r["main_cat"];
$id=$r["id"];

 
 if ($active == "1") {
 $active_text ="<td class=\"action\"><a href=\"disable_worksection.php?id=$id\" class=\"delete\">Disable</a></td>";
 $active_2 ="<td class=\"action\"><font color=\"green\">Active</font></td>";
 } else {
 $active_2 ="<td class=\"action\"><font color=\"red\">Disabled</font></td>";
 $active_text ="<td class=\"action\"><a href=\"enable_worksection.php?id=$id\" class=\"view\">Enable</a></td>";
 }
 
echo "
  <tr>
      <td>$catty</td>
      <td>$subcat</td>
	  <td>$main_cat</td>
	  $active_2
	  $active_text
	  <td class=\"action\"><a href=\"delete_work_section.php?id=$id\" class=\"delete\">delete</a></td>
    </tr>  
  ";
  
} 
 
 ?>

 
   </table>
 
 
   
   <h3> Parent Sections </h3>
   
    <table width="375" border="0" cellspacing="0" cellpadding="0">
    <tr>

      <td width="215"><span style="font-weight: bold">Name</span></td>

      <td class="action"><span style="font-weight: bold">Delete</span></td>
	 
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_parent_work_sections Order By parent_sections ASC");
while($r=mysql_fetch_array($grab))
{	
$id=$r["id"];
$parent_sections=$r["parent_sections"];

 
echo "
  <tr>
      <td>$parent_sections</td>
	  <td class=\"action\"><a href=\"delete_parent_section.php?id=$id\" class=\"delete\">Delete</a></td>
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