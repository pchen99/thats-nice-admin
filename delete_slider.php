<?php
// This page deletes the selected slider

//---- Connect to the database --------------//
include "../share/db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM TN_slider WHERE id='$id'");

$error = "<font color=\"red\">Slider Deleted.</font><br><br>";

include "manage_slider.php";

/*
Two men debate whether Hawaii is pronounced "HaVaii" or "HaWaii."

They ask a passerby, who answers "Havaii."

"Thank you," says the satisfied first man.

"You're velcome," replies the passerby.*/
?>