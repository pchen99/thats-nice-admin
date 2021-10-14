<h3>Video Light Box</h3>

<fieldset>

<p> <b>Thumb Image</b> <br /><br />




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

<input name="thumb" type="file" id="asdfsda2" />
</p>

    <br /><p>
    <strong>Video "swf" Location</strong> <br /><br />
      <input class="text-long" type="text" name="popup" id="popup" value="<?php echo $popup; ?>">
    </p>
    
     <p><strong>Video Height</strong><br /><br />
      <input class="text-long" type="text" name="h" id="h" value="<?php echo $h; ?>">
    </p>


     <p><strong>Video Width</strong><br /><br />
      <input class="text-long" type="text" name="w" id="w" value="<?php echo $w; ?>">
    </p>

</fieldset>