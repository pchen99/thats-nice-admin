<?php include "../share/db.php"; 

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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">That's Nice Video Bait</a></h2>
                
                <div id="main">
<h3>Add To Video Bait pool</h3>
For "Click to launch video" make sure all fields are filled in. <br />
For "Embedded Video" Make sure that the video src is a html file with flash video embedded in it. The flash video should be aligned top:0px left:0px. <br /><br />
<?php echo $error; ?>
      
<form action="make_tn_vid.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
        
      <p>Bait title <em> Originally "Nice Hamster"  </em><br>
      <input type="text" name="title" id="title"  class="text-long" /></p>
      
      <p>Headline<br>
      <input type="text" name="headline" id="headline"  class="text-long" /></p>
          
      <p>Copy<br>
      <textarea name="copy" cols="30" rows="4" id="copy"></textarea></p>
     
     <p>Image<br />
     <input name="img" id="img" type="file">
     </p>
     
     <p>Link Text<br />
      <input type="text" name="link_text" id="link_text" class="text-long" />
     </p>
     
     <p>Video Type<br />
     <i> Embedded Video needs to have a width of 162px </i><br />
         <select class="text-long" name="v_swtich" >
        <option value="1">Click to Launch Video</option>
        <option value="2">Embedded Video</option>
      </select>
     </p>
     
     
     <p>Video Src<br />
      <input type="text" name="src" id="src" class="text-long" />
     </p>
     
      <p>Embedded Src<br />
      <input type="text" name="emb_src" id="emb_src" class="text-long" />
     </p>
             
    <p>Height<br />
     <input type="text" name="h" id="h" class="text-small" /></p>
   	
    <p>Witdh<br />
     <input type="text" name="w" id="w" class="text-small" />
     </p>
     
         <p>Gal Number<br />
     <input type="text" name="gal" id="gal" class="text-small" /></p>

     <p><input name="button" type="submit" class="button-submit" id="button" value="Add" /></p>
    

</fieldset>

</form>

<h3>Manage That's Nice News</h3>
      

   <br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="325"><span style="font-weight: bold">Headline</span></td>
      <td width="300"><span style="font-weight: bold">Copy</span></td>
      <td class="action"><span style="font-weight: bold">Edit</span></td>
	  <td class="action"><span style="font-weight: bold">Delete</span></td>
      	  <td class="action"><span style="font-weight: bold">Status</span></td>
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_misc_bait ORDER BY id ASC");
while($r=mysql_fetch_array($grab))
{	
   $headline=$r["title"];
   $id=$r["id"];
   $copy=$r["copy"];
   $active=$r["active"];

   
  // clear special chars 
  $copy = htmlentities($copy, ENT_QUOTES);
  
  // Cut the text down to 40 chars 
  $substr_title = substr($copy,0,35);
   
  // add some dots after the text
  $title2 = "$substr_title &hellip;";
   
  echo "
    <tr>
      <td>$headline</td>
	  <td>$title2</td>
	  <td class=\"action\"><a href=\"edit_video_bait.php?id=$id\" class=\"view\">Edit</a></td>
	  <td class=\"action\"><a href=\"delete_video_bait.php?id=$id\" class=\"delete\">Delete</a></td>";
  if ($active == 0) {
  echo "<td class=\"action\"><a href=\"enable_video_bait.php?id=$id\" class=\"edit\">Disabled</a></td>";
  }
   if ($active == 1) {
  echo "<td class=\"action\"><a href=\"disable_video_bait.php?id=$id\" class=\"edit\">Enabled</a></td>";
  }
  
  
  echo  "</tr> 
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