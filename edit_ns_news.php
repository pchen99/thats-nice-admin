<?php include "../share/db.php"; 
$did = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_ns_news WHERE id LIKE '$did'");
while($r=mysql_fetch_array($grab))
{	
   $hd_img=$r["img"];
   $hd_headline=$r["headline"];
   $hd_copy=$r["copy"];
   $hd_link_type=$r["link_type"];
   $hd_h=$r["h"];
   $hd_w=$r["w"];
   $hd_src=$r["src"];
   $hd_link_text=$r["link_text"];
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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Nice Exhibit News</a></h2>
                
                <div id="main">
<h3>Edit News</h3>
<?php echo $error; ?>
      
<form action="update_ns_news.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
    
      <p>Headline<br>
      <input type="text" name="headline" id="headline" value="<?php echo $hd_headline; ?>" class="text-long" />
      <input type="hidden" name="id" id="id" value="<?php echo $did; ?>" class="text-long" /></p>
      
            <p>Date <em>mm/dd/yyyy</em><br>
      <input name="m" class="text-small" id="m" maxlength="2" value="<?php echo $m; ?>" type="text"> 
      <input name="d" class="text-small" id="d" maxlength="2" value="<?php echo $d; ?>" type="text"> 
      <input name="y" class="text-small" id="y" maxlength="4" value="<?php echo $y; ?>" type="text">
      </p>
    
      <p>Copy<br>
      <textarea name="copy" cols="30" rows="4" id="copy"><?php echo $hd_copy; ?></textarea></p>
     
     <p>Image<br />
     <img src="http://thatsnice.com/upload/homepage_images/<?php echo $hd_img; ?>" /><br />
     <br />To keep the image the same, leave the field below blank.<br />
     <input name="img" id="img" type="file">
     </p>
     
     <p>Link Text<br />
      <input type="text" name="link_text" id="link_text" value="<?php echo $hd_link_text; ?>" class="text-long" />
     </p>
     
     <p>Link Src<br />
      <input type="text" name="src" id="src" value="<?php echo $hd_src; ?>" class="text-long" />
     </p>
     
     <p>Link Type<br />
     <i> Leave this blank to keep current settings</i><br />
     <select name="link_type">
       <option value=""> ----- </option>
       <option value="1">Same Window Link</option>
       <option value="2">Sized Popup Window</option>
       <option value="3">New Window Link</option>
       <option value="4">Flash Video Link</option>
     </select>
     </p>
     
      <p> Popup or Video size<br /><i> Same Window and New Window Links will not be effected by these settings.</i></p>
      
    <p>Height<br />
     <input type="text" name="h" id="h" value="<?php echo $hd_h; ?>" class="text-small" /></p>
   	
    <p>Witdh<br />
     <input type="text" name="w" id="w" value="<?php echo $hd_w; ?>" class="text-small" />
     </p>

      <p>News Page Image<br>
      <?php if($image == "") {
	 echo "No Image has been added.<br>"; } else {
	 echo "<img src=\"http://thatsnice.com/upload/news_images/$image\"><br>
	 <i> select another image to replace </i><br>"; } ?>
     <input name="np_img" id="np_img" type="file">
     </p>

     <p><input name="button" type="submit" class="button-submit" id="button" value="Update" /></p>
    

</fieldset>

</form>

<h3>Manage Nice Exhibit News</h3>
      

   <br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="325"><span style="font-weight: bold">Headline</span></td>
      <td width="300"><span style="font-weight: bold">Copy</span></td>
      <td class="action"><span style="font-weight: bold">Edit</span></td>
	  <td class="action"><span style="font-weight: bold">Delete</span></td>
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_ns_news ORDER BY id ASC");
while($r=mysql_fetch_array($grab))
{	
   $headline=$r["headline"];
   $id=$r["id"];
   $copy=$r["copy"];

   
  // clear special chars 
  $copy = htmlentities($copy, ENT_QUOTES);
  
  // Cut the text down to 40 chars 
  $substr_title = substr($copy,0,40);
   
  // add some dots after the text
  $title2 = "$substr_title &hellip;";
   
  echo "
    <tr>
      <td>$headline</td>
	  <td>$title2</td>
	  <td class=\"action\"><a href=\"edit_ns_news.php?id=$id\" class=\"view\">Edit</a></td>
	  <td class=\"action\"><a href=\"delete_ns_news.php?id=$id\" class=\"delete\">Delete</a></td>
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