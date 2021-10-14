<h3>Popup Form</h3>
<fieldset>

<p> <b>Thumb Image</b> <br /><br />




<?php 



if($template == 1){
echo "<font color=\"red\"> This section is using a 3 column template. Thumb image must be 162px x 216px. Leave blank to keep the same. </font><br>";
$src = "http://thatsnice.com/upload/sm_images/";
} 

if($template == 2){
echo "<font color=\"red\"> This section is using a 2 column template. Thumb image must be 260px x 216px. Leave blank to keep the same.  </font><br>";
$src = "http://thatsnice.com/upload/mg_images/";
} 



?>
<p><?php echo "<img src=\"".$src."".$sm_image."\"><br>"; ?></p>

<input name="thumb" type="file" id="asdfsda2" />
</p>

    <br /><p>
    <strong>Popup Location</strong> <br /><br />
      <input class="text-long" type="text" name="popup" id="popup" value="<?php echo $popup; ?>">
    </p>
    
     <p><strong>Popup Height</strong><br /><br />
      <input class="text-long" type="text" name="h" id="h" value="<?php echo $h; ?>">
    </p>


     <p><strong>Popup Width</strong><br /><br />
      <input class="text-long" type="text" name="w" id="w" value="<?php echo $w; ?>">
    </p>

</fieldset>

