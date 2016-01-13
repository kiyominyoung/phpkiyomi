<style>
 b{/*css는 c스타일의 주석을 사용*/
   color:red;
   font-weight:normal;
   background-color:#000000;
   }
 .nicename{
  font-weight:bold;
  font-size:20px;
  text-decoration:underline;
  cursor:pointer;
 }
  

 #hellobox{
   width:500px;height:300px;
   border:1px solid #ff0000;
   padding:10px;
   margin:10px;
   position:absolute; top:20px; right:20px;
 }
</style>

<div id="hellobox">
kiyomi!
</div>

<?php

for( $i = 0; $i < 10000 ; $i++){
 echo $i. ",<b> Hello</b> !! kiyomi!<br>,
<span class='nicename'>Minyoung!</span>!!<br>";
}
?>

