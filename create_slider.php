<?php 
include "share/header.php"; ?>
<?php
include "share/nav.php"; ?>
<div style="padding-left:5px;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%"><form target="_self" action="make_slider.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <p>&nbsp;</p>
          <p><?php echo "$error"; ?></p>
          <p>&nbsp;</p>
          <p><span style="width:450px;">Sliders can be attached to case study pages. Image file size should be as low as possible. Use <span style="font-weight: bold">gifs</span>, <span style="font-weight: bold">jpgs</span>, or <span style="font-weight: bold">pngs</span>.</span><br />
              <br />
          Slide 1 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_1" type="file" id="slide_1" />
        </p>
          <p>Slide 2 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_2" type="file" id="slide_2" />
        </p>
        <p>Slide 3 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_3" type="file" id="slide_3" />
        </p>
        <p>Slide 4 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_4" type="file" id="slide_4" />
        </p>
        <p>Slide 5 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_5" type="file" id="slide_5" />
        </p>
        <p>Slide 6 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_6" type="file" id="slide_6" />
        </p>
        <p>Slide 7 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_7" type="file" id="slide_7" />
        </p>
        <p>Slide 8 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_8" type="file" id="slide_8" />
        </p>
        <p>Slide 9 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_9" type="file" id="slide_9" />
        </p>
        <p>Slide 10 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_10" type="file" id="slide_10" />
        </p>
        <p>Slide 11 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_11" type="file" id="slide_11" />
        </p>
        <p>Slide 12 <span class="smaller_font">(max size 445x430)</span><br />
            <input name="slider_12" type="file" id="slide_12" />
        </p>
        <p>
          <label>
          <input type="reset" name="button2" id="button2" value="Clear" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
      </form></td>
      <td width="50%" align="left" valign="top"><img src="images/template2_instructions.jpg" width="462" height="404" /></td>
    </tr>
  </table>
</div>
<br /><br />
<?php include "share/footer.php" ?>