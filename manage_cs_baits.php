<?php include "../share/db.php"; 

if($case_id == "") {
$case_id = $_POST['cs'];
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
<?php include "share/cs_nav.php"; ?>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active">Case Study Baits</a></h2>
                
                <div id="main">
<h3>Add Bait</h3>
<?php echo $error; ?>
      
<form action="make_cs_bait.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<fieldset>
    
 <p>Image<span class="smaller_font">(width 225px)</span><br />
    <input name="bimage1" type="file" id="slide_1" />
    <br>
    <br>
    Bait URL<br>
    <input type="text" name="burl1" id="burl1">
    <br>
        </p>
       <input type="hidden" name="case_id" value="<?php echo $case_id; ?>">
       <input name="gfd" type="submit" value="add" />

</fieldset>

</form>

<h3>Manage Baits</h3>
      
<?php
// grabs the baits depending on the case_id
$getbaits = mysql_query("SELECT * FROM TN_baits WHERE case_id LIKE '$case_id'");
$baitnum = mysql_num_rows($getbaits);

if($baitnum == 0) {

echo "No baits exist for this case study.<br><br>";

} else {

while($r=mysql_fetch_array($getbaits))
{	
   $image=$r["image"];
   $id=$r["id"];
   $url=$r["url"];
   echo "<a href=\"deletebait.php?id=$id&case_id=$case_id\" style=\"color:#ff0000\"> Delete Bait </a><br><a href=\"$url\" target=\"_blank\"><img  style=\"padding:0px; margin:0px;\" src=\"../upload/baits/$image\" border=\"0\"></a><br><img src=\"spacer.gif\" height=\"15\"><br>";
}

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