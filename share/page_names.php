<select name="name" size="5" id="name">
<?php
$grab = mysql_query("SELECT * FROM TN_cs_pagenames ORDER BY name ASC");
while($r=mysql_fetch_array($grab))
{	
   $name=$r["name"]; 
  echo "
      <option value=\"$name\">$name</option>
  ";
  
} 

?>
            </select>