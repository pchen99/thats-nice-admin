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
                <h2><a href="#">Admin</a> &raquo; <a href="#" class="active"> Work </a></h2>
                
                <div id="main">
                	<form action="" class="jNice">
					   <Br />	Use the left navigation to access tools in this section. <br />
                    
                    <h3>Recently Added Work</h3>
                 
                    	<table cellpadding="0" cellspacing="0">
							<?php
		
		$counter = '0';			  
$result = mysql_query("SELECT * FROM TN_work ORDER BY id ASC LIMIT 10"); 

while($r=mysql_fetch_array($result))
{
$id=$r["id"];
$Title=$r["title"];


$counter = $counter++;

if ($counter == '2') {

echo "                   <tr>
                          <td>$Title</td>
                          <td class=\"action\"><a href=\"view_work.php?id=$id\" class=\"view\">View</a><a href=\"delete_work.php?id=$id\" class=\"delete\">Delete</a></td>
                        </tr>";
						
						$counter = '0';

} else { 
echo "                   <tr  class=\"odd\">
                          <td>$Title</td>
                          <td class=\"action\"><a href=\"view_work.php?id=$id\" class=\"view\">View</a><a href=\"delete_work.php?id=$id\" class=\"delete\">Delete</a></td>
                        </tr>";
}
}

?>                  
                        </table>
<br /><br />
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
