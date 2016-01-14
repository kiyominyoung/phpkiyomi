<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];
$urls['facebook'] = " http://www.facebook.com";
$urls['pikicast'] = " http://www.pikicast.com";
$urls['naver'] = " http://www.naver.com";

if(array_key_exists($url,$urls)){
   header("Location : ".$urls[$url]);
   exit();
   break;
}else{
   echo $url."는 등록되어 있지 않습니다.";
}

