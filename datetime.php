<?php

date_default_timezone_set('Europe/Riga');

//to know current date and time
$currentDate = date('l, F j, Y'); 

$currentTime = date('h:i A'); 

//to dispay the time and the date
echo "<p>Date: $currentDate</p>";
echo "<p>Time: $currentTime</p>";
echo "Today is $currentDate and the correct time is $currentTime.";

?>

