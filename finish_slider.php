<?php 
include "share/header.php"; ?>
<?php
include "share/nav.php"; ?>
<div class="slider_form"><br />
The slider has now been completed.<br />
<br />
<br /><strong>Title:</strong><?php echo $name; ?><BR />
<strong>Preview:</strong><br /><BR />
<?php
echo "
<center><iframe src=\"../cs_slider.php?id=$insert_id\" width=\"500\" height=\"350\" scrolling=\"no\" frameborder=\"0\"></iframe></center>
";
?>
<BR />
<a href="http://thatsnice.com/admin/create_slider.php">Make Another?</a> </div>
<br /><br />
<?php include "share/footer.php" ?>