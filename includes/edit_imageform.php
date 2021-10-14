<h3>Image Uploads</h3>

<fieldset>

 <b>Thumb Image</b> <br />



<?php 



if($template == 1){
echo "<font color=\"red\"> This section is using a 3 column template. Thumb image must be 162px x 216px. Leave blank to keep the same. </font><br>";
$src = "http://thatsnice.com/upload/sm_images/";
} 

if($template == 2){
echo "<font color=\"red\"> This section is using a 2 column template. Thumb image must be 260px x 216px </font><br>";
$src = "http://thatsnice.com/upload/mg_images/";
} 



?>
<p><?php echo "<img src=\"".$src."".$sm_image."\"><br>"; ?></p>
<p><input name="thumb" type="file" id="asdfsda2" />
</p>




<p> <b>Image 1</b> <br /><br />


  <?php if ($lg_image !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$lg_image\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=lg_image&i=$lg_image&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>

     
<input name="image1" type="file" id="asdfsda2" />
</p>



<p> <b>Image 2</b> <br /><br />

  <?php if ($image2 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image2\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image2&i=$image2&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image2" type="file" id="asdfsda2" />
</p>



<p> <b>Image 3</b> <br /><br />

  <?php if ($image3 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image3\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image3&i=$image3&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image3" type="file" id="asdfsda3" />
</p>


<p> <b>Image 4</b> <br /><br />

  <?php if ($image4 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image4\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image4&i=$image4&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image4" type="file" id="asdfsda4" />
</p>


<p> <b>Image 5</b> <br /><br />

  <?php if ($image5 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image5\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image5&i=$image5&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image5" type="file" id="asdfsda5" />
</p>


<p> <b>Image 6</b> <br /><br />

  <?php if ($image6 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image6\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image6&i=$image6&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image6" type="file" id="asdfsda6" />
</p>


<p> <b>Image 7</b> <br /><br />

  <?php if ($image7 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image7\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image7&i=$image7&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image7" type="file" id="asdfsda7" />
</p>


<p> <b>Image 8</b> <br /><br />

  <?php if ($image8 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image8\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image8&i=$image8&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image8" type="file" id="asdfsda8" />
</p>


<p> <b>Image 9</b> <br /><br />

  <?php if ($image9 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image9\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image9&i=$image9&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image9" type="file" id="asdfsda9" />
</p>


<p> <b>Image 10</b> <br /><br />

  <?php if ($image10 !== "") { 
     echo "<img src=\"http://thatsnice.com/upload/lg_images/$image10\" /><br />
     <br />To keep the image the same, leave the field below blank or click <a href=\"delete_workimage.php?s=image10&i=$image10&id=$id\">here </a>to delete image.<br />"; } else
	 { echo "No Image Exists in this slot<br>"; } ?>
<input name="image10" type="file" id="asdfsda10" />
</p>



</fieldset>