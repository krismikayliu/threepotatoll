<?php
	require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
</head>

<body>

<p>update user account</p>
<hr />
<?php

$uid=(int)$_POST["uid"];
$id=mysqli_real_escape_string($conn,$_POST['id']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);

if ($uid>0) {
	$sql = "update `user` set `id`='$id', `password`='$password', `nickname`='$nickname' where `uid`=$uid;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	echo "acoount updated";
} else echo "empty user id.";
?>
<p><a href="accountManage.php">回清單</a> </p>
</body>
</html>
