<?php include "../share/db.php"; 

$eid = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_latest_news WHERE id LIKE '$eid'");
while($r=mysql_fetch_array($grab))
{	
   $id=$r["id"];
   $headline=$r["headline"];
   $copy=$r["copy"];
   $m=$r["m"];
   $d=$r["d"];
   $y=$r["y"];
   $image=$r["image"];
   
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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Manage News</a></h2>
                
                <div id="main">
<h3>Edit Latest News</h3>
      <br />
<form action="update_latest_news.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
      
      
      <p>Title<br>
      <input type="text" name="headline" id="headline" value="<?php echo $headline; ?>" class="text-long" /></p>
      
      <input name="id" type="hidden"   value="<?php echo $id; ?>" /> 
      
      <p>Date <em>mm/dd/yyyy</em><br>
      <input name="m" type="text"  class="text-small" id="m" value="<?php echo $m; ?>" maxlength="2"/> 
      <input name="d" type="text"  class="text-small" id="d" value="<?php echo $d; ?>" maxlength="2"/> 
      <input name="y" type="text"  class="text-small" id="y" value="<?php echo $y; ?>" maxlength="4"/>
      </p>
       
      <p>Copy<br>
      <textarea name="copy" cols="30" rows="4" id="copy"> <?php echo $copy; ?></textarea></p>
      
      <p>News Page Image<br>
      <?php if($image == "") {
	 echo "No Image has been added.<br>"; } else {
	 echo "<img src=\"http://thatsnice.com/upload/news_images/$image\"><br>
	 <i> select another image to replace </i><br>"; } ?>
     <input name="np_img" id="np_img" type="file">
     </p>
      
      <input name="button" type="submit" class="button-submit" id="button" value="Submit" />
      
</fieldset>
  
</form>
<h3>Manage Latest News</h3>
 <?php echo $error; ?>

   <br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td ><span style="font-weight: bold">Blurb</span></td>
      <td class="action"><span style="font-weight: bold">Edit</span></td>
	  <td class="action"><span style="font-weight: bold">Delete</span></td>
        <td class="action"><span style="font-weight: bold">Status</span></td>
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_latest_news WHERE copy LIKE '%%' ORDER BY id ASC");
while($r=mysql_fetch_array($grab))
{	
   $id=$r["id"];
   $copy=$r["copy"];
    $active=$r["active"];
   
  // clear special chars 
  $copy = htmlentities($copy, ENT_QUOTES);
  
  // Cut the text down to 40 chars 
  $substr_title = substr($copy,0,60);
   
  // add some dots after the text
  $title2 = "$substr_title &hellip;";
   
  echo "
    <tr>
      <td>$title2</td>
	  <td class=\"action\"><a href=\"edit_latest_news.php?id=$id\" class=\"edit\">Edit</a></td>
	  <td class=\"action\"><a href=\"delete_latest_news.php?id=$id\" class=\"delete\">Delete</a></td>";
	  
	      if ($active == 1) {
	echo "<td class=\"action\"><a href=\"disable_latest_news.php?id=$id&cat=$cat\"><font color=\"green\">Enabled</font></td>";
	} else { 
	echo "<td class=\"action\"><a href=\"activate_latest_news.php?id=$id&cat=$cat\">Disabled</a></td>";
	}
	  
    echo "</tr>  
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