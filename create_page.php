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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Create Case Study Page</a></h2>
                
                <div id="main">

<?php

// -- and now presenting - The vars!
$template = $_POST['template'];

if (isset($case_id)) {} else { $case_id = $_POST['caseid']; }

// -- form switch
switch ($template){
	case "1":
		echo '
		<div class="slider_form">
<form action="make_template1.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
    <h3>Create Page - Template 1</h3>
	<p> This template should be the most used template. It is a simple image on top, with copy on the bottom. </p>
    '; echo $error; echo '
	<p>
      select page name<br>';
       include "share/page_names.php"; 
	   echo'
            <br><input name="template" type="hidden" value="template1">
            <br>
   
    <p>Navigation Rollover<span class="smaller_font"></span><br />
      <input name="nav_roll" type="file" id="slide_2" />
<br />
    </p>
    <p>Image <span class="smaller_font">(width 455px)</span><br />
    <input name="image" type="file" id="slide_1" />
    <br>
    <br>
      Copy<br>
<textarea name="copy" cols="30" rows="4" id="copy"></textarea>
<br>
<br>
        </p>
    </p>
    <input name="id" type="hidden" value="'; echo $case_id; echo '">
    <input type="reset" name="button2" id="button2" value="Clear" />
     <input type="submit" name="button" id="button" value="Submit" />
    
  </p></fieldset>
</form>
<img src="images/into_instruction.jpg" width="314" height="343">
</div>
<br /><br />
		';
		break;
		
		
	case "2":
		echo '
		
		<div class="slider_form">
 <form action="make_template2.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
          <h3>Create Page - Template 2</h3>
          '; echo $error; echo '
    <p>
      select page name<br>';
       include "share/page_names.php"; 
	   echo '
            <br><input  name="template" type="hidden" value="template2">
            <br><input name="id" type="hidden" value="'; echo $case_id; echo '">
          <p>Navigation Rollover<span class="smaller_font"></span><br />
      <input name="nav_roll" type="file" id="slide_2" />
      <br>
      <br></p>
      <p><strong>Basic Information</strong><br><br>
    
          Headline<br>
            <label>
            <input type="text" name="headline" id="headline">
            </label>
            <br>
          </p>
          <p> Copy<br>
          <textarea name="copy" cols="30" rows="5" id="copy"></textarea></p><p>
            <br>
            <br>
            Link URL - <em>Leave Blank if none</em><br>  
            <input type="text" name="url" id="url">
          </p>
          <p><strong>Also See<br>
          </strong>This section can be left blank. Start from the top and work your way down.<br>
          </p>
          <p>1.)<br>
            <br>
            Orange Headline<br>  
            <input type="text" name="alsosee_headline" id="alsosee_headline">
                <br>    
            <br>
            Black text below headline<br>
            <input type="text" name="alsosee_copy" id="alsosee_copy">
            <br>
            <br>
            Link URL<br>    
            <input type="text" name="alsosee_url" id="alsosee_url">
            </p>
          <p>2.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline2" id="alsosee_headline2">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy2" id="alsosee_copy2">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url2" id="alsosee_url2">
</p>
          <p>3.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline3" id="alsosee_headline3">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy3" id="alsosee_copy3">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url3" id="alsosee_url3">
<br>
            </p>
  <p><span style="width:450px;"><strong>Create Slider</strong><br>
              Sliders can be attached to case study pages. Image file size should be as low as possible. Start with the top field and work your way down, do not skip fields. Use <span style="font-weight: bold">gifs</span>, <span style="font-weight: bold">jpgs</span>, or <span style="font-weight: bold">pngs</span>.</span><br />
              <br />
          Slide 1 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_1" type="file" id="slide_1" />
        </p>
          <p>Slide 2 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_2" type="file" id="slide_2" />
        </p>
        <p>Slide 3 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_3" type="file" id="slide_3" />
        </p>
        <p>Slide 4 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_4" type="file" id="slide_4" />
        </p>
        <p>Slide 5 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_5" type="file" id="slide_5" />
        </p>
        <p>Slide 6 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_6" type="file" id="slide_6" />
        </p>
        <p>Slide 7 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_7" type="file" id="slide_7" />
        </p>
        <p>Slide 8 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_8" type="file" id="slide_8" />
        </p>
        <p>Slide 9 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_9" type="file" id="slide_9" />
        </p>
        <p>Slide 10 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_10" type="file" id="slide_10" />
        </p>
        <p>Slide 11 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_11" type="file" id="slide_11" />
        </p>
        <p>Slide 12 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_12" type="file" id="slide_12" />
        </p>
        <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p></fieldset>
      </form><img src="images/template2_instructions.jpg"  />
</div>
<br /><br />
		
		';
		break;	
		
		
	case "3":
		echo '
		
		<div class="slider_form">
  <form action="make_template3.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
          <h3>Create Page - Template 3</h3>';
          echo $error; echo '
    <p>
      select page name<br> ';
       include "share/page_names.php";
	   echo' 
            <br><input name="template" type="hidden" value="template3">
            <br>
          <p>Navigation Rollover<span class="smaller_font"></span><br />
      <input name="nav_roll" type="file" id="slide_2" />
      <br>
      <br>
      <strong>Basic Information</strong><br>
    </p>
          <p>Headline<br>
            <label>
            <input type="text" name="headline" id="headline">
            </label>
            <br>
          </p>
          <p> Copy<br>
          <textarea name="copy" cols="30" rows="5" id="copy"></textarea></p><p>
            <br><input name="id" type="hidden" value="'; echo $case_id; echo '">
            <br>
            Link URL - <em>Leave Blank if none</em><br>  
            <input type="text" name="url" id="url">
          </p>
          <p><strong>Also See<br>
          </strong>This section can be left blank. Start from the top and work your way down.<br>
          </p>
          <p>1.)<br>
            <br>
            Orange Headline<br>  
            <input type="text" name="alsosee_headline" id="alsosee_headline">
                <br>    
            <br>
            Black text below headline<br>
            <input type="text" name="alsosee_copy" id="alsosee_copy">
            <br>
            <br>
            Link URL<br>    
            <input type="text" name="alsosee_url" id="alsosee_url">
            </p>
          <p>2.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline2" id="alsosee_headline2">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy2" id="alsosee_copy2">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url2" id="alsosee_url2">
</p>
          <p>3.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline3" id="alsosee_headline3">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy3" id="alsosee_copy3">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url3" id="alsosee_url3">
<br>
            </p>
  <p><span style="width:450px;"><strong>Video Link</strong><br>
              Use flash to create the flash video, publish the video online and make sure it is in a folder by itself. Paste the url to view to video online in the box below.</span><br />
              <br />
          video location<span class="smaller_font"></span><br />
            <input name="slider_1" type="text" id="slide_1" value="http://" />
			 <br />
          video height<span class="smaller_font"></span><br />
            <input name="vh" type="text" id="vh" value="" />
        </p>
          <p>&nbsp;</p>
        <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
      </form></fieldset>
	  <img src="images/template3_instructions.jpg" />
</div>
<br /><br />
		
		';
		break;	
		
		
		
	case "4":
		echo '
	<div class="slider_form">
<form action="make_template4.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
    <h3>Create Page - Template 4</h3>';
    echo $error;
	echo'
    <br>
    <br>
    select page name<br>';
    include "share/page_names.php";
    echo '</p>
	Navigation Rollover<span class="smaller_font"></span><br />
      <input name="nav_roll" type="file" id="slide_2" />
      <br>
      <br>
    <p>Logo<br />
    <input name="logo" type="file" id="slide_1" />
    <br />
    <br />
    <label>
    Headline<br />
    <input type="text" name="headline" id="headline" />
    </label>
    <br>
    <br><input  name="template" type="hidden" value="template4">
      Copy<br>
<textarea name="copy" cols="30" rows="6" id="copy"></textarea>
<br>
<br>
        </p>
    </p>
    <input name="id" type="hidden" value="'; echo $case_id; echo '">
    <input type="reset" name="button2" id="button2" value="Clear" />
     <input type="submit" name="button" id="button" value="Submit" />
    
  </p></fieldset>
</form><img src="images/brand_instructions.jpg" width="418" height="464">
</div>
		';
		break;

}

?>
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