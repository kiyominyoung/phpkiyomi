<?php
session_start();
$_SESSION['islogin'] = '0';
$_SESSION['name']= ' ';
$url = './postForm.php';
header("Location: ".$url);
?>
