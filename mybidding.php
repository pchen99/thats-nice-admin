<?php
//------------------------Connect to Database -------------//
include "../share/db.php";



//----- I use this page to write and run queries against the database, this has nothing to do with anything and can be deleted.

$grab = mysql_query("SELECT * FROM TN_events_beta");

while($r2=mysql_fetch_array($grab))
{	
   $y=$r2["end_year"];
   $m=$r2["end_month"];
   $d=$r2["end_day"];
   $id=$r2["id"];
 
$date = '';
$date .="$y";
$date .="-";
$date .="$m";
$date .="-";
$date .="$d";

$insert_data = "UPDATE TN_events_beta SET end_datestamp = '$date' WHERE id = '$id'";
mysql_query($insert_data) or die ( mysql_error() );

}

echo "it's done";
?>