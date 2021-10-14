<?php include "../share/db.php"; 

if($cat == ""){
$cat = $_POST['cat'];
}

$grab = mysql_query("SELECT * FROM TN_slider_homepage WHERE cat LIKE '$cat'");
while($r=mysql_fetch_array($grab))
{	

   $landing=$r["slidername"];

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
   
   $src1=$r["src1"];
   $src2=$r["src2"];
   $src3=$r["src3"];
   $src4=$r["src4"];
   $src5=$r["src5"];
   $src6=$r["src6"];
   $src7=$r["src7"];
   $src8=$r["src8"];
   $src9=$r["src9"];
   $src10=$r["src10"];
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
<?php include "share/home_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Home Page Slider</a></h2>
                
                <div id="main">
<h3>Edit Slider</h3>
<?php echo $error; ?>
      
<form action="update_hp_slider.php" class="jNice" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
     <p><strong>Landing Image for "<?php echo $cat; ?>"<br /> </strong>
     <br />
     <?php if ($landing !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/home_slide1/$landing\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=slidername&i=$landing&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="landing" id="landing" class="text-long" type="file"><br /><br />
 
     </p>
</fieldset>


<fieldset>
    <input type="hidden" name="cat" value="<?php echo $cat; ?>" />
     <p><strong>Image 1<br /> </strong>
     <br />
     <?php if ($image1 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image1\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image1&i=$image1&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image1" id="image1" class="text-long" type="file"><br /><br />
  <p>   Url<Br />
     <input name="src1" type="text" value="<?php echo $src1; ?>"  size="80"/></p>
     </p>
     
     <br />
          <p><strong>Image 2<br /> </strong>
     <br />
     <?php if ($image2 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image2\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image2&i=$image2&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image2" id="image2" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src2" type="text" value="<?php echo $src2; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 3<br /> </strong>
     <br />
     <?php if ($image3 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image3\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image3&i=$image3&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image3" id="image3" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src3" type="text" value="<?php echo $src3; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 4<br /></strong> 
     <br />
     <?php if ($image4 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image4\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image4&i=$image4&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image4" id="image4" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src4" type="text" value="<?php echo $src4; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 5<br /> </strong>
     <br />
     <?php if ($image5 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image5\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image5&i=$image5&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image5" id="image5" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src5" type="text" value="<?php echo $src5; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 6<br /></strong> 
     <br />
     <?php if ($image6 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image6\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image6&i=$image6&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image6" id="image6" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src6" type="text" value="<?php echo $src6; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 7<br /> </strong>
     <br />
     <?php if ($image7 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image7\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image7&i=$image7&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image7" id="image7" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src7" type="text" value="<?php echo $src7; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 8<br /> </strong>
     <br />
     <?php if ($image8 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image8\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image8&i=$image8&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image8" id="image8" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src8" type="text" value="<?php echo $src8; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 9<br /> </strong>
     <br />
     <?php if ($image9 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image9\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image9&i=$image9&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image9" id="image9" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src9" type="text" value="<?php echo $src9; ?>"  size="80"/></p>
     </p>
          
     <br />
          <p><strong>Image 10<br /></strong> 
     <br />
     <?php if ($image10 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/homepage_slider/$image10\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_sliderimage.php?s=image10&i=$image10&c=$cat\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exsists in this slot"; } ?>
     <input name="image10" id="image10" class="text-long" type="file"><br /><br />
<p>     Url<Br />
     <input name="src10" type="text" value="<?php echo $src10; ?>"  size="80"/></p>
     </p>

     <p><input name="button" type="submit" class="button-submit" id="button" value="Update" /></p>
    

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