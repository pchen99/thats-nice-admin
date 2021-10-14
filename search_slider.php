<?php 
include "share/header.php"; ?>
<?php
include "share/nav.php"; ?>
<div class="slider_form">
  <h3><br /> 
    Manage Sliders</h3>
  <br>
    Search Sliders:<br>
    <br><form method="post" action="search_slider.php"><input type="text" name="keyword" id="textfield"><input type="submit" name="button" id="button" value="Submit"></form>
   <br>
   

 <?php
//---- Connect to the database --------------//
include "../share/db.php";

$keyword = $_POST['keyword'];

// -- Fetch the data --------//
$grab = mysql_query("SELECT * FROM TN_slider WHERE slidername LIKE '%$keyword%' ORDER BY id");
$num = mysql_num_rows($grab);


if ($num < 1) { 

echo " <br><br><br><center> <h2> No Results </h2> </center> <br><br><br>";

} else

{ 
   
  echo " <br>
  <table width=\"425\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td width=\"393\"><span style=\"font-weight: bold\">Name</span></td>
      <td width=\"51\"><span style=\"font-weight: bold\">View</span></td>
      <td width=\"56\"><span style=\"font-weight: bold\">Delete</span></td>
    </tr> ";

while($r=mysql_fetch_array($grab))
{	
   $name=$r["slidername"];
   $id=$r["id"];
  
  echo "
    <tr>
      <td>$name</td>
      <td><a href=\"http://thatsnice.com/cs_slider.php?id=$id\" target=\"_blank\">View</a></td>
      <td><a href=\"delete_slider.php?id=$id\">Delete</a></td>
    </tr>  
  ";
  
} }
 
 ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
 
   </table>
  <p>   <br />
      <br />
    <a href="http://thatsnice.com/admin/create_slider.php">Create New Slider</a> </p>
</div>
<br /><br />
<?php include "share/footer.php" ?>