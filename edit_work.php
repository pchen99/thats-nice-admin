<?php include "../share/db.php"; 

if ($id !== "") {
$id = $_GET['id'];
}


$grab = mysql_query("SELECT * FROM TN_work WHERE id LIKE '$id'");

while($r=mysql_fetch_array($grab))
{	
   $category=$r["category"];
   $title=$r["title"];
   $copy=$r["copy"];
   $cs_key=$r["cs_key"];
   $sub_category=$r["sub_category"];
   $ind_rec=$r["ind_rec"];
   $sub_title=$r["sub_title"];
   $sm_image=$r["sm_image"];
   $lg_image=$r["lg_image"];
   $image2=$r["image2"];
   $image3=$r["image3"];
   $image4=$r["image4"];
   $image5=$r["image5"];
   $image6=$r["image6"];
   $image7=$r["image7"];
   $image8=$r["image8"];
   $image9=$r["image9"];
   $image10=$r["image10"];
   $popup=$r["popup"];
   $h=$r["h"];
   $w=$r["w"];
   $type=$r["type"];
   $rating=$r["rating"];
   
   
}

$grab = mysql_query("SELECT * FROM TN_work_path WHERE subcat_alpha LIKE '$sub_category' AND main_cat LIKE '$category'");

while($r=mysql_fetch_array($grab))
{	
   $template=$r["template"];
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
<?php include "share/work_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Add Work</a></h2>
                
                <div id="main">
      <form class="jNice" action="update_work.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    
    
    <?php echo "$error"; ?>
    

      
<fieldset>

    <p>Sub Category<br />
	  <select name="subcat_alpha">
      
<?php 

echo " <option value=\"$sub_category\" selected>$sub_category</option>";

$grab2 = mysql_query("SELECT DISTINCT subcat, subcat_alpha FROM TN_work_path");
while($r2=mysql_fetch_array($grab2))
{	
$subcat2=$r2["subcat"];
$subcat_alpha=$r2["subcat_alpha"];


echo " <option value=\"$subcat_alpha\">$subcat2</option>";

}

?>
</select>
</p>

</fieldset>


<h3>Rating</h3>
<fieldset>
      <p><strong>Rating</strong><br /><br />
      <input class="text-long" type="text" name="rating" value="<?php echo $rating; ?>" id="rating">
      </p>

</fieldset>
<input type="hidden" name="id" id="type" value="<?php echo $id; ?>">
<input type="hidden" name="type" id="type" value="<?php echo $type; ?>">
<input type="hidden" name="template" id="subcat_alpha" value="<?php echo $template; ?>">


<h3>Work Information </h3>
<fieldset>

  <p><strong>Category</strong><br><br />
      <select name="cat" >
        <option value="<?php echo $category; ?>" selected><?php echo $category; ?></option>
        <option value="hd">Home Decor</option>
        <option value="sm">Specialty Materials</option>
        <option value="2m">Secondary</option>
      </select>
      </p>
      
      <p><strong>Title</strong><br /><br />
      <input class="text-long" type="text" name="title" value="<?php echo $title; ?>" id="title">
      </p>

		<p><strong>Sub Title</strong><br /><br />
      <input class="text-long" type="text" name="subtitle" value="<?php echo $sub_title; ?>" id="title">
      </p>
      
      	<p><strong>Copy</strong><br /><br />
      <textarea name="copy" cols="30" rows="4" id="copy"><?php echo $copy; ?></textarea>
      </p>
      
      <p><strong>Case Study Link</strong> - if none leave blank <br /><br />
	  <select name="case_study">


<?php 

$grab2 = mysql_query("SELECT * FROM TN_casestudy WHERE id ='$cs_key' ");
while($r2=mysql_fetch_array($grab2))
{	
$cid=$r2["id"];
$c_name=$r2["company"];

 echo " <option value=\"$cid\" selected>$c_name</option>";
}
?>
<option value="">&nbsp;</option>

<?php 

$grab2 = mysql_query("SELECT * FROM TN_casestudy");
while($r2=mysql_fetch_array($grab2))
{	
$cid=$r2["id"];
$c_name=$r2["company"];

 echo " <option value=\"$cid\">$c_name</option>";
}
?>


</select>
	  </p>
	  
	        <p><strong>Industry Recognition Link</strong> - if none leave blank<br /><br />
	  <select name="ind_rec">


<?php 

$grab2 = mysql_query("SELECT * FROM TN_ind_rec WHERE id = '$ind_rec' ");
while($r2=mysql_fetch_array($grab2))
{	
$inid=$r2["id"];
$in_name=$r2["project"];

 echo " <option value=\"$inid\" selected>$in_name</option>";
}
?>

<option value="">&nbsp;</option>
<?php 

$grab2 = mysql_query("SELECT * FROM TN_ind_rec");
while($r2=mysql_fetch_array($grab2))
{	
$inid=$r2["id"];
$in_name=$r2["project"];

 echo " <option value=\"$inid\">$in_name</option>";
}
?>


</select>
	  </p>



</fieldset>

<?php


switch($type) {

case 0:
include "includes/edit_imageform.php";
break;

case 2:
include "includes/edit_popup_form.php";
break;

case 3:
include "includes/edit_video_form.php";
break;

}



?>
<fieldset>
<input type="submit" class="button-submit" value="Update Work" />
  </fieldset>
  
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