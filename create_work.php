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
<?php include "share/work_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Add Work</a></h2>
                
                <div id="main">
      <form class="jNice" action="make_work.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    
    
    <?php echo "$error"; ?>
    
    <h3>Work Categories </h3>
      
<fieldset>
<?php 

$subcat_alpha = $_POST['subcat'];
$type = $_POST['type'];

$grab2 = mysql_query("SELECT * FROM TN_work_path WHERE subcat_alpha LIKE '$subcat_alpha'");
while($r2=mysql_fetch_array($grab2))
{	
$subcat=$r2["subcat"];
$catty=$r2["cat"];
$template=$r2["template"];
}

?>
<p><strong>Work Category:</strong><br /><br /><?php echo $catty; ?>
</p>

<p><strong>Work Sub Category:</strong><br /><br /><?php echo $subcat; ?>
</p>
</fieldset>


<h3>Rating</h3>
<fieldset>
      <p><strong>Rating</strong><br /><br />
      <input class="text-long" type="text" name="rating" id="rating">
      </p>

</fieldset>

<input type="hidden" name="type" id="type" value="<?php echo $type; ?>">
<input type="hidden" name="subcat_alpha" id="subcat_alpha" value="<?php echo $subcat_alpha; ?>">
<input type="hidden" name="template" id="template" value="<?php echo $template; ?>">


<h3>Work Information </h3>
<fieldset>

  <p><strong>Category</strong><br><br />
      <select name="cat" >
 <?php 

$grab2 = mysql_query("SELECT DISTINCT main_cat FROM TN_work_path WHERE subcat_alpha = '$subcat_alpha'");
while($r2=mysql_fetch_array($grab2))
{	
$main_cat=$r2["main_cat"];

 echo " <option value=\"$main_cat\">$main_cat</option>";
}
?>

      </select>
      </p>
      
      <p><strong>Title</strong><br /><br />
      <input class="text-long" type="text" name="title" id="title">
      </p>

		<p><strong>Sub Title</strong><br /><br />
      <input class="text-long" type="text" name="subtitle" id="title">
      </p>
      
      	<p><strong>Copy</strong><br /><br />
      <textarea name="copy" cols="30" rows="4" id="copy"></textarea>
      </p>
      
      <p><strong>Case Study Link</strong> - if none leave blank<br /><br />
	  <select name="case_study">
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
include "includes/imageform.php";
break;

case 2:
include "includes/popup_form.php";
break;

case 3:
include "includes/video_form.php";
break;


}


?>
<fieldset>
<input type="submit" class="button-submit" value="Add Work" />
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