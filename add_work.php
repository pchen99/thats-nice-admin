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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active"> Add Work </a></h2>
                
                <div id="main">
                	<form action="make_work.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="jNice">
					   <Br />	Use the form below to add content to the work section. <br />
                    
                    <h3>Add Work Form</h3>
                 
                    	<?php echo "$error"; ?>
    
      <fieldset>
    <p>Category<br>
   
      <select name="cat" >
        <option value="none" selected>-- Choose ---</option>
        <option value="hd">Home Decor</option>
        <option value="sm">Specialty Materials</option>
        <option value="2m">Secondary</option>
      </select>
      <br>
      <br />
      <br>
      Sub Category<br>
      <select name="subcat" id="subcat" >
       <option value="none" selected>-- Choose ---</option>
      <?php
	  $grab = mysql_query("SELECT DISTINCT subcat From TN_work_path ORDER BY subcat ASC");
while($r=mysql_fetch_array($grab))
{	
   $subcat=$r["subcat"];
	 
	echo "  <option value=\"$subcat\">$subcat</option>";
	}  
	  
	  ?>
       
        
                        </select>
      <br>
      <p><span style="font-weight: bold">Ajax Popup Images</span><br />
        <br />        
          Image 1 <br>
         <input name="image1" type="file" class="text-long" id="asdfsda2" />
      
      <p>Image 2<br />
        <input name="image2" type="file" class="text-long" id="image2" />
      <p>Image 3<br />
        <input name="image3" type="file" class="text-long" id="asdfsda4" />
      <p>Image 4<br />
        <input name="image4" type="file" class="text-long" id="asdfsda5" />
      <p>Image 5<br />
        <input name="image5" type="file" class="text-long" id="asdfsda6" />
<br>
          <p><br>
            
            Thumb Image -<span style="font-style: italic"> (162px × 216px)</span><span style="font-style: italic"><br />
              Image names cannot have spaces</span><br />
              <p><input name="thumb" type="file" class="text-long" id="asdfsda3" /></p>
              <br />
              <br>
            <p>Title<br />
            <input name="title" type="text" class="text-long" id="title"></p>
            <br>
            <br>
            <p>Sub Title<br>
            <input name="subtitle" type="text" class="text-long" id="subtitle">
            </p>
            <p>Copy<span class="smaller_font"></span><br />
      <p><textarea name="copy" cols="30" rows="3" id="copy"></textarea></p>

 <p>Case Study URL - <span style="font-style: italic">If none leave blank</span><br>

<input name="case_study_url" type="text" class="text-long" id="case_study_url">
 </p>


<p>Industry Recognition URL - <span style="font-style: italic">If none leave blank</span><br>
<input name="industry_rec_url" type="text" class="text-long" id="industry_rec_url">
</p>



    
    <p><input type="reset" name="button2" id="button2" value="Clear" />
     <input type="submit" name="button" id="button" value="Submit" /></p>
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
