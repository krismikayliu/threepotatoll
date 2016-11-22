<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>已完成註冊</p>
<hr />
<p>
<?php
require("config.php");
$id=mysqli_real_escape_string($conn,    $_POST['id']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);

if ($id) {
	$sql = "insert into user (id, password, nickname, correct) values ('$id', '$password','$nickname','0')";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "註冊完成~";
} else {
	echo "empty title, cannot insert.";
}
?>
</p>
<p><a href="login.php">回我所有的工作</a></p>
</body>
</html>
