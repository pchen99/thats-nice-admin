<h3>Popup Form</h3>

<fieldset>

<p> <b>Thumb Image</b> <br /><br /><?php 

if($template == 1){
echo "<font color=\"red\"> This section is using a 3 column template. Thumb image must be 162px x 216px </font><br>";
} 

if($template == 2){
echo "<font color=\"red\"> This section is using a 2 column template. Thumb image must be 260px x 216px </font><br>";
} 



?>
<input name="thumb" type="file" id="asdfsda2" />
</p>

    <p><strong>Popup Location</strong> <br /><br />
      <input class="text-long" type="text" name="popup" id="popup">
    </p>
    
     <p><strong>Popup Height</strong><br /><br />
      <input class="text-long" type="text" name="h" id="h">
    </p>


     <p><strong>Popup Width</strong><br /><br />
      <input class="text-long" type="text" name="w" id="w">
    </p>

</fieldset>