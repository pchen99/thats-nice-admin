<?php include "../share/db.php"; ?>
<?php

$id = $_GET['id'];

$grab = mysql_query("SELECT * FROM TN_casestudy WHERE id LIKE '$id' ORDER BY title ASC");
while($r=mysql_fetch_array($grab))
{	
$name=$r["name"];
$title=$r["title"];
$copy=$r["copy"];
$category=$r["category"];
$company=$r["company"];
$id=$r["id"];
$color=$r["color"];
$avail=$r["published"];
$landing_image=$r["landing_image"];
}

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    $uploaddir = "../upload/case_study_landing";
    /*== setup final file location and name ==*/
    /*== change spaces to underscores in filename  ==*/
    $final_filename = $imgfile_name;//str_replace(" ", "_", $imgfile_name);
    $newfile = $uploaddir . "/$final_filename";
    
    /*== do extra security check to prevent malicious abuse==*/
    if (is_uploaded_file($imgfile))
    {

       /*== move file to proper directory ==*/
       if (!copy($imgfile,"$newfile")) 
       {
          /*== if an error occurs the file could not
               be written, read or possibly does not exist ==*/
          print "Error Uploading File.";
          exit();
       }
     }

    /*== delete the temporary uploaded file ==*/
    //unlink($imgfile);

    
    //print("<img src=\"$final_filename\">");

    /*== DO WHATEVER ELSE YOU WANT
         SUCH AS INSERT DATA INTO A DATABASE  ==*/

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
<!--[if IE 7]><link rel="stylesheet" tycpe="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Create Case Study</a></h2>
                
                <div id="main">
<div class="slider_form">
<h3>Create Case Study </h3>
    <p><?php echo "$error"; ?><br>
      Use the form below to Setup a Case Study.<br>
      </p><br />
<form action="update_casestudy.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><fieldset>
    
    <p>Category<br>
   
      <select name="cat" >
        <option value="<?php echo $category; ?>" selected><?php echo $category; ?></option>
        <option value="hd">Home Decor</option>
        <option value="sm">Specialty Materials</option>
      </select>
      <br>
      <br>
      Company<br>
      <input type="text" name="company" value="<?php echo $company; ?>" id="company" />
        <br>
      <br>
   
      Case Study Name
    
<br />
  <input type="text" name="name" id="name" value="<?php echo $name; ?>" /><input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />

    <br />
    <br />
    Case Study Name Image <span class="smaller_font">(max width 200px) - only upload image if you want to change it.</span><br />
    <input name="case_image" type="file" id="asdfsda" />
    
    <br />
       Color<br>
      <input type="text" name="color" value="<?php echo $color; ?>" id="color" />
        <br>
    <br>
    
       Status<br>
        <select name="avail">
          <option value="0" <?php if($avail==0) echo ' selected="yes"'; ?>>inactive</option>
          <option value="1" <?php if($avail==1) echo ' selected="yes"'; ?>>active</option>
          <option value="2" <?php if($avail==2) echo ' selected="yes"'; ?>>archive</option>
        </select>
        <br>
    <br>
    
       Current Landing Image<br>
       <?php $landing_path = '"../upload/case_study_landing/' . $landing_image . '"'; ?>
       <?php if($landing_image!=""){ ?>
       <img src=<?php echo $landing_path; ?>><br />
       <?php 
              }
              else{
                echo "Image not yet set";
               }
         ?>

     <input type="file" name="upload_image">
     <input name="button" type="submit" class="button-submit" id="button" value="Upload Image" />

        <br>
    <br>
    
    
    
    Headline Copy<br>

    <textarea name="copy" cols="30" rows="4" id="copy"><?php echo $copy; ?></textarea>
    </p>
    
    
    
    <input name="button2" type="reset" class="button-submit" id="button2" value="Clear" />
     <input name="button" type="submit" class="button-submit" id="button" value="Submit" />
    
  </p></fieldset>
</form>
<img src="images/case_study_instruction.jpg" width="395" height="872">
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
