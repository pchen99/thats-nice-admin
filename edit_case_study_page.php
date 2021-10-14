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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Edit Case Study Page</a></h2>
                
                <div id="main"><?php


// -- and now presenting - The vars!
if($template == "") {
$template = $_GET['t'];
}

if($template_id == "") {
$template_id = $_GET['tid'];
}

if($case_id == "") {
$case_id = $_GET['id'];
}

// -- form switch
switch ($template){

	case "template1":
	
	$grab = mysql_query("SELECT * FROM TN_template1 WHERE id LIKE '$template_id'");
while($r=mysql_fetch_array($grab))
{	
   $case_id2=$r["case_id"];
   $copy=$r["copy"];
   $template2=$r["template"];
   $template_id2=$r["id"];
}

	$grab2 = mysql_query("SELECT * FROM TN_casestudy_pages WHERE case_id LIKE '$case_id' AND template_id LIKE '$template_id' AND template LIKE '$template'");
while($r=mysql_fetch_array($grab2))
{	
   $title=$r["title"];
   $image=$r["rollover_image"];
}
	
	
		echo '
		<div class="slider_form">
<form action="edit_template1.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
    <h3>Edit Page - '; echo $title; echo'</h3>
	<p> This template should be the most used template. It is a simple image on top, with copy on the bottom. </p>
    '; echo $error; echo '
	<p>
      select page name<br>';
      echo'
	  <select name="name" size="5" id="name">
	  <option value="'; echo $title; echo'" selected="selected">'; echo $title; echo'</option>';
   
$grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"]; 
  echo "
      <option value=\"$name\">$name</option>
  ";
  
} 


           echo ' </select>	  
	  ';
	   echo'
            <br><input name="template" type="hidden" value="template1">
            <br><input name="template_id" type="hidden" value="'; echo $template_id2; echo '">
   
    <p>Navigation Rollover<span class="smaller_font"></span><br />
	<i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
      <input name="nav_roll" type="file" id="slide_2" />
<br />
    </p>
    <p>Image <span class="smaller_font">(width 455px)</span><br />
	<i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
    <input name="image" type="file" id="slide_1" />
    <br>
    <br>
      Copy<br>
<textarea name="copy" cols="35" rows="6" id="copy">'; echo $copy; echo '</textarea>
<br>
<br>
        </p>
    </p>
    <input name="id" type="hidden" value="'; echo $case_id2; echo '">
    <input type="reset" name="button2" id="button2" value="Clear" />
    <input type="submit" name="button" id="button" value="Submit" />
    
  </p></fieldset>
</form>
<img src="images/into_instruction.jpg" width="314" height="343">
</div>
<br /><br />
		';
		
		
		break;
		
		
	case "template2":
	
		$grab = mysql_query("SELECT * FROM TN_template2 WHERE id LIKE '$template_id'");
while($r=mysql_fetch_array($grab))
{	
   $case_id2=$r["case_id"];
   $copy=$r["copy"];
   $link=$r["link"];
   $link_text=$r["link_text"];
   $slider_id=$r["slider_id"];
   $title2=$r["title"];
}
	
		$grab2 = mysql_query("SELECT * FROM TN_casestudy_pages WHERE case_id LIKE '$case_id' AND template_id LIKE '$template_id' AND template LIKE '$template'");
while($r=mysql_fetch_array($grab2))
{	
   $title=$r["title"];
   $image=$r["rollover_image"];
}

		$grab3 = mysql_query("SELECT * FROM TN_seealso WHERE template LIKE '$template' AND template_id LIKE '$template_id'");
while($r=mysql_fetch_array($grab3))
{	
	$counter++;
	
   if ($counter == 1) {
   $sa_id1=$r["id"];
   $sa_title1=$r["title"];
   $sa_location1=$r["location"];
   $sa_copy1=$r["copy"]; 
   }

   if ($counter == 2) {
   $sa_id2=$r["id"];
   $sa_title2=$r["title"];
   $sa_location2=$r["location"];
   $sa_copy2=$r["copy"]; 
   }
   
   if ($counter == 3) {
   $sa_id3=$r["id"];
   $sa_title3=$r["title"];
   $sa_location3=$r["location"];
   $sa_copy3=$r["copy"]; 
   }


}

		$grab4 = mysql_query("SELECT * FROM TN_slider WHERE id LIKE '$slider_id'");
while($r=mysql_fetch_array($grab4))
{	
   $image1=$r["image1"];
   $image2=$r["image2"];
   $image3=$r["image3"];
   $image4=$r["image4"];
   $image5=$r["image5"];
   $image6=$r["image6"];
   $image7=$r["image7"];
   $image8=$r["image8"];
   $image9=$r["image9"];
   $image10=$r["image10"];
   $image11=$r["image11"];
   $image12=$r["image12"];
}
	 
		echo '
			
		<div class="slider_form">
  <form action="edit_template2.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
          <h3>Edit Page - '; echo $title; echo'</h3>
          '; echo $error; echo '
    <p>
      select page name<br>';
         echo'
	  <select name="name" size="5" id="name">
	  <option value="'; echo $title; echo'" selected="selected">'; echo $title; echo'</option>';
       $grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"]; 
  echo "
      <option value=\"$name\">$name</option>
  ";
  
} 
  echo '          </select>	  
	  ';
	   echo '
            <br><input  name="template" type="hidden" value="template2">
            <br><input name="id" type="hidden" value="'; echo $case_id; echo '">
			<br><input name="template_id" type="hidden" value="'; echo $template_id; echo '">
			<input name="sa_id1" type="hidden" value="'; echo $sa_id1; echo '">
			<input name="sa_id2" type="hidden" value="'; echo $sa_id2; echo '">
			<input name="sa_id3" type="hidden" value="'; echo $sa_id3; echo '">
			<input name="slider_id" type="hidden" value="'; echo $slider_id; echo '">
          <p>Navigation Rollover<span class="smaller_font"></span><br />
		  <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
      <input name="nav_roll" type="file" id="slide_2" />
      <br>
      <br></p>
      <p><strong>Basic Information</strong><br><br>
    
          Headline<br>
            <label>
            <input type="text" name="headline" value="'; echo $title2; echo'" id="headline">
            </label>
            <br>
          </p>
          <p> Copy<br>
          <textarea name="copy" cols="30" rows="5" id="copy">'; echo $copy; echo '</textarea>
            <br>
            <br>
            Link URL - <em>Leave Blank if none</em><br>  
            <input type="text" name="url" value="'; echo $link; echo'" id="url">
          </p>
          <p><strong>Also See<br>
          </strong>This section can be left blank. Start from the top and work your way down.<br>
          </p>
          <p>1.)<br>
            <br>
            Orange Headline<br>  
            <input type="text" name="alsosee_headline" value="'; echo $sa_title1; echo'" id="alsosee_headline">
                <br>    
            <br>
            Black text below headline<br>
            <input type="text" name="alsosee_copy" value="'; echo $sa_copy1; echo'" id="alsosee_copy">
            <br>
            <br>
            Link URL<br>    
            <input type="text" name="alsosee_url" value="'; echo $sa_location1; echo'" id="alsosee_url">
            </p>
          <p>2.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline2" value="'; echo $sa_title2; echo'" id="alsosee_headline2">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy2" value="'; echo $sa_copy2; echo'" id="alsosee_copy2">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url2" value="'; echo $sa_location2; echo'" id="alsosee_url2">
</p>
          <p>3.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline3" value="'; echo $sa_title3; echo'" id="alsosee_headline3">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy3" value="'; echo $sa_copy3; echo'" id="alsosee_copy3">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url3" value="'; echo $sa_location3; echo'" id="alsosee_url3">
<br>
            </p>
  <p><span style="width:450px;"><strong>Create Slider</strong><br>
              Sliders can be attached to case study pages. Image file size should be as low as possible. Start with the top field and work your way down, do not skip fields. Use <span style="font-weight: bold">gifs</span>, <span style="font-weight: bold">jpgs</span>, or <span style="font-weight: bold">pngs</span>.</span><br />
      
	  
	        <br />';
	
	
	
	//--1	
		echo '<p>	  
          Slide 1 <span class="smaller_font">(max size 445x430)</span><br />';
		 
		 if($image1 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image1\"> <br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image1&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		  
		 echo' <input name="slider_1" type="file" id="slide_1" />
        </p>';
 
 
 //--2
		 
		echo '<p>Slide 2 <span class="smaller_font">(max size 445x430)</span><br />';
		 
		 	 if($image2 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image2\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		  

		 
		echo '  
            <input name="slider_2" type="file" id="slide_2" />
        </p>';
		
		//--3
        echo '<p>Slide 3 <span class="smaller_font">(max size 445x430)</span><br />';
		
			 if($image3 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image3\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image3&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		
		echo '<br>
            <input name="slider_3" type="file" id="slide_3" />
        </p>';
        
		//--4
		
		echo '<p>Slide 4 <span class="smaller_font">(max size 445x430)</span><br />';
		
			 if($image4 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image4\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image4&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_4" type="file" id="slide_4" />
        </p>';
        
		//--5
		
		echo '<p>Slide 5 <span class="smaller_font">(max size 445x430)</span><br />';
		
			 if($image5 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image5\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image5&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		
		echo ' 
            <input name="slider_5" type="file" id="slide_5" />
        </p>';
        
	
		//--6
		
		echo '<p>Slide 6 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image6 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image6\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image6&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_6" type="file" id="slide_6" />
        </p>';
       
	   //--7
	   
	   echo ' <p>Slide 7 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image7 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image7\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image7&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_7" type="file" id="slide_7" />
        </p>';
        
		
		//--8
		
		echo '<p>Slide 8 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image8 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image8\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image8&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_8" type="file" id="slide_8" />
        </p>';
      
	  //-- 9
	    echo '<p>Slide 9 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image9 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image9\"><br>
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image9&slider=$slider_id\"> here </a> to delete image.</i><br> ";
		  }
		
		echo '
            <input name="slider_9" type="file" id="slide_9" />
        </p>';
       
	   // -- 10
	   
	    echo '<p>Slide 10 <span class="smaller_font">(max size 445x430)</span><br />';
				
				 if($image10 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image10\"><br> 
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image10&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_10" type="file" id="slide_10" />
        </p>';
       
	   // --- 11
	   echo ' <p>Slide 11 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image11 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image11\"><br>
		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image11&slider=$slider_id\"> here </a> to delete image.</i><br> ";
		  }
		
		echo '
            <input name="slider_11" type="file" id="slide_11" />
        </p>';
      
	  
	  // ---- 12
	  
	    echo '<p>Slide 12 <span class="smaller_font">(max size 445x430)</span><br />';
		
				 if($image12 !== "") {
		 echo "<img src=\"http://thatsnice.com/upload/slider_images/$image12\"><br>
		  <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image12&slider=$slider_id\"> here </a> to delete image.</i><br>";
		  }
		
		echo '
            <input name="slider_12" type="file" id="slide_12" />
        </p>';
       
	   
	   echo' <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p></fieldset>
      </form>
	  <img src="images/template2_instructions.jpg"  />
</div>
<br /><br />
		
		';
		break;	
		
		
	case "template3":
	
	$grab = mysql_query("SELECT * FROM TN_template3 WHERE id LIKE '$template_id'");
while($r=mysql_fetch_array($grab))
{	
   $case_id2=$r["case_id"];
   $copy=$r["copy"];
   $link=$r["link"];
   $link_text=$r["link_text"];
   $title2=$r["title"];
   $video_location=$r["video_location"];
   $vh=$r["vh"];
}
	
		$grab2 = mysql_query("SELECT * FROM TN_casestudy_pages WHERE case_id LIKE '$case_id' AND template_id LIKE '$template_id' AND template LIKE '$template'");
while($r=mysql_fetch_array($grab2))
{	
   $title=$r["title"];
   $image=$r["rollover_image"];
}

		$grab3 = mysql_query("SELECT * FROM TN_seealso WHERE template LIKE '$template' AND template_id LIKE '$template_id'");
while($r=mysql_fetch_array($grab3))
{	
	$counter++;
	
   if ($counter == 1) {
   $sa_id1=$r["id"];
   $sa_title1=$r["title"];
   $sa_location1=$r["location"];
   $sa_copy1=$r["copy"]; 
   }

   if ($counter == 2) {
   $sa_id2=$r["id"];
   $sa_title2=$r["title"];
   $sa_location2=$r["location"];
   $sa_copy2=$r["copy"]; 
   }
   
   if ($counter == 3) {
   $sa_id3=$r["id"];
   $sa_title3=$r["title"];
   $sa_location3=$r["location"];
   $sa_copy3=$r["copy"]; 
   }


}
	
		echo '
		
		<div class="slider_form">
	
<form action="edit_template3.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
          <h3>Edit Page - '; echo $title; echo'</h3>';
          echo $error; echo '
    <p>
      select page name<br> ';
         echo'
	  <select name="name" size="5" id="name">
	  <option value="'; echo $title; echo'" selected="selected">'; echo $title; echo'</option>';
       $grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"]; 
  echo "
      <option value=\"$name\">$name</option>
  ";
  
} 
  echo '          </select>	  
	  ';
	   echo' 
            <br><input name="template" type="hidden" value="template3">
            <br>
          <p>Navigation Rollover<span class="smaller_font"></span><br />
		  		 <i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
      <input name="nav_roll" type="file" id="slide_2" />
      <br>
      <br>
      <strong>Basic Information</strong><br>
    </p>
                Headline<br>
            <label>
            <input type="text" name="headline" value="'; echo $title2; echo'" id="headline">
            </label>
            <br>
          </p>
          <p> Copy<br>
          <textarea name="copy" cols="30" rows="5" id="copy">'; echo $copy; echo '</textarea>
            <br></p>
            <br>
            <p>Link URL - <em>Leave Blank if none</em><br>  
            <input type="text" name="url" value="'; echo $link; echo'" id="url">
          </p>
          <p><strong>Also See<br>
          </strong>This section can be left blank. Start from the top and work your way down.<br>
          </p>
		  
		 <input name="template_id" type="hidden" value="'; echo $template_id; echo '">
			<input name="sa_id1" type="hidden" value="'; echo $sa_id1; echo '">
			<input name="sa_id2" type="hidden" value="'; echo $sa_id2; echo '">
			<input name="sa_id3" type="hidden" value="'; echo $sa_id3; echo '">
			<input name="id" type="hidden" value="'; echo $case_id; echo '">
 
          <p>1.)<br>
                       <br>
            Orange Headline<br>  
            <input type="text" name="alsosee_headline" value="'; echo $sa_title1; echo'" id="alsosee_headline">
                <br>    
            <br>
            Black text below headline<br>
            <input type="text" name="alsosee_copy" value="'; echo $sa_copy1; echo'" id="alsosee_copy">
            <br>
            <br>
            Link URL<br>    
            <input type="text" name="alsosee_url" value="'; echo $sa_location1; echo'" id="alsosee_url">
            </p>
          <p>2.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline2" value="'; echo $sa_title2; echo'" id="alsosee_headline2">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy2" value="'; echo $sa_copy2; echo'" id="alsosee_copy2">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url2" value="'; echo $sa_location2; echo'" id="alsosee_url2">
</p>
          <p>3.)<br>
            <br>
Orange Headline<br>
<input type="text" name="alsosee_headline3" value="'; echo $sa_title3; echo'" id="alsosee_headline3">
<br>
<br>
Black text below headline<br>
<input type="text" name="alsosee_copy3" value="'; echo $sa_copy3; echo'" id="alsosee_copy3">
<br>
<br>
Link URL<br>
<input type="text" name="alsosee_url3" value="'; echo $sa_location3; echo'" id="alsosee_url3">
<br>
            </p>
  <p><span style="width:450px;"><strong>Video Link</strong><br>
              Use flash to create the flash video, publish the video online and make sure it is in a folder by itself. Paste the url to view to video online in the box below.</span><br />
              <br />
          video location<span class="smaller_font"></span><br />
            <input name="slider_1" type="text" id="slide_1" value="'; echo $video_location; echo'" />
       	 <br />
          video height<span class="smaller_font"></span><br />
            <input name="vh" type="text" id="vh" value="'; echo $vh; echo '" />
        </p>
		
          <p>&nbsp;</p>
        <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
		
		</fieldset>
      </form>
<img src="images/template3_instructions.jpg" />
</div>
<br /><br />
		
		';
		break;	
		
		
		
	case "template4":
	
			$grab2 = mysql_query("SELECT * FROM TN_template4 WHERE id LIKE '$template_id'");
while($r=mysql_fetch_array($grab2))
{	
   $title2=$r["title"];
   $text=$r["text"];
}
	
		$grab2 = mysql_query("SELECT * FROM TN_casestudy_pages WHERE case_id LIKE '$case_id' AND template_id LIKE '$template_id' AND template LIKE '$template'");
while($r=mysql_fetch_array($grab2))
{	
   $title=$r["title"];
   $image=$r["rollover_image"];
}
	
		echo '
	<div class="slider_form">
	<h3>Edit Page - '; echo $title; echo'</h3>';
	echo $error; echo '
	<form action="edit_template4.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<fieldset>
    <p>select page name<br>';
      echo'
	  <select name="name" size="5" id="name">
	  <option value="'; echo $title; echo'" selected="selected">'; echo $title; echo'</option>';
      $grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"]; 
  echo "
      <option value=\"$name\">$name</option>
  ";
  
} 
      echo '      </select>	  
	  ';
    echo '</p>
	<p>Navigation Rollover<span class="smaller_font"></span><br />
	<i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
      <input name="nav_roll" type="file" id="slide_2" /></p>
   
    <p>Logo<br />
	<i>Leave blank to keep current image or click <a style=\"color:#ff0000\" href=\"delete_slider_image.php?t=$template&tid=$template_id&id=$case_id&img=image2&slider=$slider_id\"> here </a> to delete image.</i><br>
    <input name="logo" type="file" id="slide_1" /></p>
    
    <p><label>
    Headline<br />
    <input type="text" name="headline" value="'; echo $title2; echo '" id="headline" /></p>
    </label>
    <br>
    <br><input  name="template" type="hidden" value="template4">
     <p> Copy<br>
<textarea name="copy" cols="30" rows="6" id="copy">'; echo $text; echo'</textarea>

        </p>
    
    <input name="id" type="hidden" value="'; echo $case_id; echo '">
	<input name="template_id" type="hidden" value="'; echo $template_id; echo '">
    <p><input type="reset" name="button2" id="button2" value="Clear" />
     <input type="submit" name="button" id="button" value="Submit" /></p>
  <fieldset>
</form>
<img src="images/brand_instructions.jpg" width="418" height="464">
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