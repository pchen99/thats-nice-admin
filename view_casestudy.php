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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Case Study Details</a></h2>
                
                <div id="main">
<?php
if (isset($id)) {} else {
$id = $_GET['id']; }

$grab = mysql_query("SELECT * FROM TN_casestudy WHERE id LIKE '$id' ");
while($r=mysql_fetch_array($grab))
{	
	$id=$r["id"];
   $name=$r["name"];
   $copy=$r["copy"];
   $category=$r["category"];
   $company=$r["company"];
   $published=$r["published"];
   $name_image=$r["name_image"];
}
?>


  <br />
  <h3><span style="font-weight: bold">Case Study Information</span></h3>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    
    
    <tr>
      <td width="68%"><span style="font-weight: bold">Name: </span> <?php echo $name; ?></td>
      <td width="23%">&nbsp;</td>
    </tr>
    
    <tr>
      <td><span style="font-weight: bold">Name Image:</span> <a href="../upload/case_study_names/<?php echo $name_image; ?>" target="_blank">View Image</a></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td><span style="font-weight: bold">Category:</span> <?php echo $category; ?></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td><span style="font-weight: bold">Company:</span> <?php echo $company; ?></td>
      <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td><span style="font-weight: bold">Copy: </span> <?php echo $copy; ?></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td><span style="font-weight: bold">Published:</span> <?php if ($published == "0") { echo "No"; } else { echo "Yes"; } ?></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td align="left" valign="middle"><span style="font-weight: bold">Preview:</span>
          <a href="<?php echo "../case_study.php?case_id=$id"; ?>">view </a>      </td>
      <td>&nbsp;</td>
    </tr>
   </table> 
   
   <p><br />
     <br />
   </p>
   <h3><span style="font-weight: bold">Case Study Page Manager</span></h3>
   <?php echo $error; ?>
   <table width="500" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="300"><span style="font-weight: bold">Name</span></td>
       <td width="51"><span style="font-weight: bold">View</span></td>
       <td width="51"><span style="font-weight: bold">Edit</span></td>
       <td width="56"><span style="font-weight: bold">Delete</span></td>
       <td width="143"><span style="font-weight: bold">Page Order</span></td>
     </tr>
     <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_casestudy_pages WHERE title LIKE '%%' and case_id LIKE '$id' ORDER BY page_order ASC");
$g_nums = mysql_num_rows($grab);



while($r=mysql_fetch_array($grab))
{	
   $name=$r["title"];
   $page_order=$r["page_order"];
   $template=$r["template"];
   $template_id=$r["template_id"];
   $case_id=$r["case_id"];
   $page_id=$r["id"];
 
  echo "
    <tr>
      <td>$name</td>
      <td><a href=\"../case_study.php?case_id=$case_id&t=$template&tid=$template_id\" target=\"_blank\">View</a></td>
      <td><a href=\"edit_case_study_page.php?tid=$template_id&t=$template&id=$id\">Edit</a></td>
	  <td><a href=\"delete_case_study_page.php?id=$page_id\">Delete</a></td>
	  <td><form method=\"post\" action=\"update_pageorder.php\"><input type=\"hidden\" value=\"$page_id\" name=\"pageid\"><input type=\"hidden\" value=\"$case_id\" name=\"caseid\"><input name=\"order\" type=\"text\" size=\"1\" value=\"$page_order\"> &nbsp; <input type=\"submit\" name=\"button\" id=\"button\" value=\"update\" /></form></td>
    </tr>  
  ";

} 
 
 

 ?>
   </table>
   <?php if ($g_nums < 1) { echo "<br> <font color=\"red\"> No pages have been created for this case study. Please add them now. </font> <br><br><br>"; } ?>
   <br />
   <br />
   <br />
   <h3><span style="font-weight: bold">Create Case Study Page</span></h3>Select a template below and click &quot;Create Page&quot; <br />
   <br>
    <form id="form1" name="form1" method="post" action="create_page.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%"><div align="center">
              <label>
              <input type="radio" name="template" id="radio" value="1" />
              </label>
            </div></td>
            <td width="55%">Template 1 - Introduction Template</td>
            <td width="37%"><a href="images/template1.jpg" target="_blank">view example</a></td>
          </tr>
          <tr>
            <td><div align="center">
              <input type="radio" name="template" id="radio2" value="2" />
</div></td>
            <td>Template 2 - An ajax slider</td>
            <td><a href="images/template2.jpg" target="_blank">view example</a></td>
          </tr>
          <tr>
            <td><div align="center">
              <input type="radio" name="template" id="radio3" value="3" />
</div></td>
            <td>Template 3 - Video page</td>
            <td><a href="images/template3.jpg" target="_blank">view example</a></td>
          </tr>
          <tr>
            <td><div align="center">
              <input type="radio" name="template" id="radio4" value="4" />
            </div></td>
            <td>Template 4 - Brand Strategy Template</td>
            <td><a href="images/template4.jpg" target="_blank">view example</a></td>
          </tr>
        </table>
                  <br />
                  </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" value="<?php echo $id; ?>" name="caseid" />
  <input name="button" type="submit" class="button-submit" id="button" value="Create Page &gt;&gt;" />
  <br />
  <br />
  <br />
    <br />
    </form>
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