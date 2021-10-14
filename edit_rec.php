<?php include "../share/db.php"; 

$eid = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_ind_rec WHERE id LIKE '$eid'");
while($r=mysql_fetch_array($grab))
{	
   $project=$r["project"];
   $client=$r["client"];
   $publication=$r["publication"];
   
   $publisher=$r["publisher"];
   $award=$r["award"];
   $section=$r["section"];
   $custom_field=$r["custom_field"];
   $custom_data=$r["custom_data"];
   $year=$r["year"];
   $link=$r["link"];
   $image=$r["image"];


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
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
<?php include "share/comp_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Company</a></h2>
                
                <div id="main">
<h3>Manage Industry Recognition</h3>
<p> Use the form below to add to the industry recognition section. </p>
<?php echo $error; ?>
      
<form action="update_rec.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
<input type="hidden" name="id" id="id" value="<?php echo $eid; ?>"/>
    
      <p>Project<br>
      <input type="text" name="project" id="project"  class="text-long" value="<?php echo $project; ?>"/></p>
      
      <p>Client<br>
      <input type="text" name="client" id="client"  class="text-long" value="<?php echo $client; ?>"/></p>
      
      <p>Publication<br>
      <input name="publication"  type="text" class="text-long" value="<?php echo $publication; ?>" > 
      </p>
        
     <p>Publisher<br />
      <input type="text" name="publisher" id="publisher" class="text-long" value="<?php echo $publisher; ?>"/>
     </p>
     
     <p>Award<br />
      <input type="text" name="Award" id="Award" class="text-long" value="<?php echo $award; ?>" />
     </p>
     
     <p>Section<br />
     <select name="section" class="text-long">
     <option value="<?php echo $section; ?>"><?php echo $section; ?></option>
       <option value="Advertising">Advertising</option>
       <option value="Brand Identity">Brand Identity</option>
       <option value="Exhibit">Exhibit</option>
       <option value="Icons">Icons</option>
       <option value="Motion Graphics">Motion Graphics</option>
       <option value="Packaging">Packaging</option>
       <option value="Print Literature">Print Literature</option>
       <option value="Signage">Signage</option>
       <option value="Websites">Websites</option>    
     </select></p>
     
     
     <p>Custom Field<br />
     <input type="text" name="custom_field" id="custom_field" class="text-long" value="<?php echo $custom_field; ?>" />
     </p>
     
     <p>Custom Data<br />
     <input type="text" name="custom_data" id="custom_data" class="text-long" value="<?php echo $custom_data; ?>" />
     </p>
     
     <p>Year<br />
     <input name="year" type="text" class="text-small" id="year" size="4" maxlength="4" value="<?php echo $year; ?>" />
     </p>
     
     <p>Link<br />
     <input name="link" type="text" class="text-long" id="link" value="<?php echo $link; ?>" />
     </p>
     
     
     <p><?php if($image == "") {echo "no image<br>"; } else { ?> <img src="http://thatsnice.com/upload/indrec/<?php echo $image; ?>" /> <br /> <?php } ?>
     <i> leave the field below blank to keep existing</i>
     Image <span class="smaller_font">75 x 51</span><br>
    <input name="image" id="asdfsda" type="file"> </p>

     <p><input name="button" type="submit" class="button-submit" id="button" value="Add" /></p>
    
</fieldset>

</form>

<h3>Manage That's Nice News</h3>
 <br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="325"><span style="font-weight: bold">Project</span></td>
      <td width="300"><span style="font-weight: bold">Client</span></td>
      <td class="action"><span style="font-weight: bold">Edit</span></td>
      <td class="action"><span style="font-weight: bold">Delete</span></td>
    </tr>
 <?php
//---- Connect to the database --------------//
include "../share/db.php";

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_ind_rec ORDER BY id ASC");
while($r=mysql_fetch_array($grab))
{	
   $headline=$r["project"];
   $id=$r["id"];
   $copy=$r["client"];
      
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
	  <td class=\"action\"><a href=\"edit_rec.php?id=$id\" class=\"view\">Edit</a></td>
	  <td class=\"action\"><a href=\"delete_rec.php?id=$id\" class=\"delete\">Delete</a></td>
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
