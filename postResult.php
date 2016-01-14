<?php
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$year = $_POST['year'];
$mon = $_POST['mon'];
$day = $_POST['day'];
$age = 2016-$year+1;
?>

<h1>WoW!</h1>
I know you, <?=$name?>!!<br>
Your birthday is <?=$year?>-<?=$mon?>-<?=$day?><br>
your age : <?=$age?> years old.
