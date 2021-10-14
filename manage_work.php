<?php include "../share/db.php"; 

$cat = $_POST['cat'];

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
<?php include "share/work_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Work</a></h2>
                
                <div id="main">

<h3>Manage Work Section</h3>
 <p style="line-height:140%;">Below is a list of all the work categories. Click 'view' to manage work within each category. Click 'edit' to change basic information about that category.</p> <br />
 <?php echo $error; ?>
 
 
   <br>
  <table width="375" border="0" cellspacing="0" cellpadding="0">
    <tr>

      <td width="215"><span style="font-weight: bold">Category</span></td>
      <td width="303"><span style="font-weight: bold">Sub Category</span></td>
      <td class="action" width="40"><span style="font-weight: bold">View</span></td>

	 
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT DISTINCT subcat From TN_work_path WHERE main_cat LIKE '$cat' ORDER BY main_cat ASC");
while($r=mysql_fetch_array($grab))
{	
   $subcat=$r["subcat"];

$grab2 = mysql_query("SELECT * FROM TN_work_path WHERE subcat LIKE '$subcat'");
while($r2=mysql_fetch_array($grab2))
{	
$subcat_alpha=$r2["subcat_alpha"];
$catty=$r2["cat"];
}
 
  echo "
    <tr>
      <td>$catty</td>
      <td>$subcat</td>
      <td class=\"action\"><a href=\"view_workcat.php?subcat=$subcat_alpha&cat=$cat\" class=\"view\">View</a></td>
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