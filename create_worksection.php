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
<?php include "share/work_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Add Section</a></h2>
                
                <div id="main">
<div class="slider_form">
<h3>Add Parent Section</h3>
      
<form action="make_parentsection.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
      
      <p> Add Parent Section: <input name="name" type="text" /> <input name="button" type="submit" class="button-submit" id="button" value="add	" /> </p>
      
      </fieldset>
      </form>
     
      
      <h3>Add Sub Section</h3>
<form action="make_subsection.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
    
<p> Parent Section <br />
<select name="catty">

<?php $grab = mysql_query("SELECT * FROM TN_parent_work_sections ORDER BY parent_sections ASC");
while($r=mysql_fetch_array($grab))	
{	
   $catty=$r["parent_sections"];
   $catty_id=$r["id"];

 echo " <option value=\"$catty\">$catty</option>";

}
?>
</select> </p>
   
    <p>Category<br>
   
      <select name="cat" >
        <option value="" selected>-- Choose ---</option>
        <option value="hd">Home Decor</option>
        <option value="sm">Specialty Materials</option>
        <option value="2m">Historical Markets</option>
      </select> </p>
      <br>
      <br>
      <p>Sub Section Name<br>
      <input type="text" name="subcat" id="subcat" /></p>
      <br>
      <br>
      <p>Section Copy<br>
      <textarea name="copy" cols="30" rows="4" id="copy"></textarea></p>
      <p>Landing Page Image <span class="smaller_font">(162px ?? 162px)</span><br />
    <input name="landing_image" type="file" id="asdfsda" /></p>
    <br><br />
         <input name="button2" type="reset" class="button-submit" id="button2" value="Clear" />
     <input name="button" type="submit" class="button-submit" id="button" value="Submit" />
    

</fieldset>
  

</form>
</div>
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