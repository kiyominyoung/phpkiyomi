<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");
include('db.php');

$name = $_POST['name'];
$pw = $_POST['pw'];

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<?php
$link = mysql_connect($db['host'], $db['user'], $db['pw']);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($db['db']);
$sql = "select * from members where id = '$name' and pwd = password('$pw')";
echo $sql;
$result = mysql_query($sql);
$users = mysql_fetch_assoc($result);
echo "<pre>";
print_r($users);
echo "</pre>";
exit();

mysql_close($link);

if( $name == "miny" && $pw == "kiyomi"){

$_SESSION['islogin']='1';
$_SESSION['name']=$name;
?>
<h1>로그인 성공!</h1>

당신의 이름은 <?=$name?>이고, 암호는 <?=$pw?>입니당.
로그인 페이지로 <a href = "./postForm.php">돌아가기 </a>
<?php
}else{
$_SESSION['islogin']='0';
$_SESSION['name'] = '';
?>
잘못된 아이디와 암호입니다. <br>
다시 로그인 해보세요! <br>
<?php
}
?>


