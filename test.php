<div class="slider_form">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="46%" align="left" valign="top"><form action="make3_casestudy.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <h3>Create Page - Template 3</h3>
    $error
    <br>
    <br>
    select page name<br>
    include "share/page_names.php";
    </p>
    <p>Logo<br />
    <input name="logo" type="file" id="slide_1" />
    <br />
    <br />
    <label>
    Headline<br />
    <input type="text" name="headline" id="headline" />
    </label>
    <br>
    <br>
      Copy<br>
<textarea name="copy" cols="30" rows="6" id="copy"></textarea>
<br>
<br>
        </p>
    </p>
    <input name="id" type="hidden" value="<?php echo $id; ?>">
    <input type="reset" name="button2" id="button2" value="Clear" />
     <input type="submit" name="button" id="button" value="Submit" />
    
  </p>
</form></td>
    <td width="54%"><img src="images/brand_instructions.jpg" width="418" height="464"></td>
  </tr>
</table>


</div>