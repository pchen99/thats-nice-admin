<?php include "../share/db.php"; 
$did = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_events_beta WHERE id LIKE '$did'");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"];
   $location=$r["location"];
   $type=$r["type"];
   $day=$r["day"];
   $month=$r["month"];
   $year=$r["year"];
   $end_day=$r["end_day"];
   $end_month=$r["end_month"];
   $end_year=$r["end_year"];
   $email=$r["email"];
   $phone=$r["phone"];
   $src=$r["src"];
   $link_text=$r["link_text"];
   $description=$r["description"];
   $img=$r["img"];
   $cat=$r["cat"];
   $cn=$r["contact_name"];
   $active=$r["active"];
   $copy2=$r["copy2"];
   $event_img=$r["event_img"];
   
}

if($active == "0"){
$status = "no"; } else {
$status = "yes"; }

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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">That's Nice Events</a></h2>
                
                <div id="main">
<h3>Add To That's Nice Events</h3>
<?php echo $error; ?>
      
<form action="update_tn_event.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="id" id="id"  value="<?php echo $did; ?>" />
<fieldset>
    
      <p>Headline<br>
      <input type="text" name="headline" id="headline"  value="<?php echo $name; ?>" class="text-long" /></p>
      
      <p>Location <em>Example, "Toms River, NJ"</em><br>
      <input type="text" name="location" id="location"  value="<?php echo $location; ?>" class="text-long" /></p>
      
      <p>Start Date <em>mm/dd/yyyy</em><br>
      <input name="m" class="text-small" id="m" maxlength="2" value="<?php echo $month; ?>" type="text"> 
      <input name="d" class="text-small" id="d" maxlength="2" value="<?php echo $day; ?>" type="text"> 
      <input name="y" class="text-small" id="y" maxlength="4" value="<?php echo $year; ?>" type="text">
      </p>
      
      <p>End Date <em>mm/dd/yyyy</em><br>
      <input name="end_m" class="text-small" id="m" maxlength="2" value="<?php echo $end_month; ?>" type="text"> 
      <input name="end_d" class="text-small" id="d" maxlength="2" value="<?php echo $end_day; ?>" type="text"> 
      <input name="end_y" class="text-small" id="y" maxlength="4" value="<?php echo $end_year; ?>" type="text">
      </p>
    
     <p>Home Page Copy<br>
      <textarea name="copy" cols="30" rows="4" id="copy"><?php echo $description; ?></textarea></p>
      
     <p>Events Page Copy<br>
      <textarea name="copy2" cols="30" rows="4" id="copy"><?php echo $copy2; ?></textarea></p>
     
     <p>Home Page Image<br />
     <?php 
	 if ($img == "") {
	 echo "<strong>No image is assigned to this event.</strong><br>";
	 } else {
	 echo "<img src=\"../upload/TN_events/$img\"><br>";
	 }
	 ?>
     <em>leaving this field blank will keep the image the same.</em><br />
     <input name="img" id="img" type="file">
     </p>
     
     <p>Events Page Image<br />
     <?php 
	 if ($event_img == "") {
	 echo "<strong>No image is assigned to this event.</strong><br>";
	 } else {
	 echo "<img src=\"../upload/TN2_events/$event_img\"><br>";
	 }
	 ?>
     <em>leaving this field blank will keep the image the same.</em><br />
     <input name="img2" id="img" type="file">
     </p>
        
     <p>Industry<br />
     <select name="cat">
       <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
       <option value="hd">Home Decor</option>
       <option value="sm">Specialty Materials</option>
     </select>
     </p>   
         
     <p>Event Type<br />
     <select name="type">
       <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
       <option value="Specialty Materials">Specialty Materials</option>
       <option value="Decorative Home Products">Decorative Home Products</option>
       <option value="Gifts & Premiums / Retail">Gifts & Premiums / Retail</option>
       <option value="Health & Nutrition">Health & Nutrition</option>
       <option value="Information Technology">Information Technology</option>
       <option value="Manufacturing & Military">Manufacturing & Military</option>
     </select>
     </p>
        
     <p>Link Text<br />
      <input type="text" name="link_text" id="link_text" value="<?php echo $link_text; ?>"  class="text-long" />
     </p>
     
     <p>Link Src<br />
      <input type="text" name="src" id="src" value="<?php echo $src; ?>"  class="text-long" />
     </p>
      <p>Contact Name<br />
      <input type="text" name="cn" id="cn" value="<?php echo $cn; ?>" class="text-long" />
     </p>
      <p>Email<br />
      <input type="text" name="email" id="email" value="<?php echo $email; ?>"  class="text-long" />
     </p>
      <p>Phone<br />
      <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>"  class="text-long" />
     </p>
     
              <p>Are We Attending?<br />
     <select name="active">
       <option value="<?php $active; ?>"> <?php echo $status; ?> </option>
       <option value="0">No</option>
       <option value="1">Yes</option>
     </select>
     </p>  

     <p><input name="button" type="submit" class="button-submit" id="button" value="Update" /></p>
    

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
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_events_beta ORDER BY id ASC");
while($r=mysql_fetch_array($grab))
{	
   $headline=$r["name"];
   $id=$r["id"];
   $copy=$r["description"];
      
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
	  <td class=\"action\"><a href=\"edit_tn_events.php?id=$id\" class=\"view\">Edit</a></td>
	  <td class=\"action\"><a href=\"delete_tn_events.php?id=$id\" class=\"delete\">Delete</a></td>
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