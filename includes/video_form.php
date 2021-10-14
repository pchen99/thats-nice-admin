<h3>Video Light Box</h3>

<fieldset>

<p> <b>Thumb Image</b> <br /><br />
<?php 

if($template == 1){
echo "<font color=\"red\"> This section is using a 3 column template. Thumb image must be 162px x 216px </font><br>";
} 

if($template == 2){
echo "<font color=\"red\"> This section is using a 2 column template. Thumb image must be 260px x 216px </font><br>";
} 



?>

<input name="thumb" type="file" id="asdfsda2" />
</p>

    <p><strong>Video "swf" Location</strong> <em>Example: hamster/index.swf</em><br /><br />
      <input class="text-long" type="text" name="popup" id="popup">
    </p>
    
     <p><strong>Video Height</strong><br /><br />
      <input class="text-long" type="text" name="h" id="h">
    </p>


     <p><strong>Video Width</strong><br /><br />
      <input class="text-long" type="text" name="w" id="w">
    </p>

</fieldset>