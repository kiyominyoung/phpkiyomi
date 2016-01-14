<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<form method = "post" action = "postResult.php">
   <h1>봉봉서비스</h1>
   이름 : <br >
   <input type = "text" name = "name" id = "name" value = " "> </br>
   생일 : <br >
    <input type = "text" name = "year" id = "year" value = " ">
    <input type = "text" name = "mon" id = "mon" value = " ">
    <input type = "text" name = "day" id = "day" value = " ">\
   <br>
   <input type = "submit" value = "확인">
</form>
