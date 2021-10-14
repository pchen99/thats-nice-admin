<?php
//---- Connect to the database --------------//
include "../share/db.php";

include "share/header.php";
include "share/nav.php"; 


// -- and now presenting - The vars!
$template = $_GET['t'];
$template_id = $_GET['tid'];
$case_id = $_GET['id'];


// -- form switch
switch ($template){

$grab = mysql_query("SELECT * FROM TN_template1 WHERE id LIKE '$template_id'");

while($r=mysql_fetch_array($grab))
{	
   $case_id=$r["case_id"];
   $copy=$r["copy"];
   $template=$r["template"];
   $template_id=$r["id"];
}

	case "template1":
		echo '
		<div class="slider_form">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="46%" align="left" valign="top"><form action="edit_template1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <h3>Create Page - Template 1</h3>
	<p> This template should be the most used template. It is a simple image on top, with copy on the bottom. </p>
    '; echo $error; echo '
	<p>
      select page name<br>';
       include "share/page_names.php"; 
	   echo'
            <br><input name="template" type="hidden" value="template1">
            <br><input name="template_id" type="hidden" value="$template_id">
   
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
    
  </p>
</form></td>
    <td width="54%"><img src="images/into_instruction.jpg" width="314" height="343"></td>
  </tr>
</table>

</div>
<br /><br />
		';
		break;
		
		
	case "template2":
		echo '
		
		<div class="slider_form">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%"><form action="edit_template2.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
          <textarea name="copy" cols="30" rows="5" id="copy"></textarea>
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
        </p>
      </form></td>
      <td width="50%" align="left" valign="top"><img src="images/template2_instructions.jpg"  /></td>
    </tr>
  </table>
</div>
<br /><br />
		
		';
		break;	
		
		
	case "template3":
		echo '
		
		<div class="slider_form">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%"><form action="edit_template3.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
          <textarea name="copy" cols="30" rows="5" id="copy"></textarea>
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
        </p>
          <p>&nbsp;</p>
        <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
      </form></td>
      <td width="50%" align="left" valign="top"><img src="images/template3_instructions.jpg" /></td>
    </tr>
  </table>
</div>
<br /><br />
		
		';
		break;	
		
		
		
	case "template4":
		echo '
	<div class="slider_form">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="46%" align="left" valign="top"><form action="edit_template4.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
    
  </p>
</form></td>
    <td width="54%"><img src="images/brand_instructions.jpg" width="418" height="464"></td>
  </tr>
</table>
</div>
		';
		break;

}

include "share/footer.php";
?>