<?php
session_start();
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'blackteasql';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //��MyMSQL�s�u�õn�J
mysqli_query($conn,"SET NAMES utf8"); //��ܽs�X
//mysql_select_db($db, $conn); //��ܸ�Ʈw

$_SESSION['uID'] = "";
if(isset($_POST['id'])){
	$userName = $_POST['id'];
	header("Location:login.php");
}else{
	$userName = "";
}
if(isset($_POST['password'])){
	$passWord = $_POST['password'];
}else{
	$passWord = "";
}

		$sql = "SELECT * FROM user WHERE id='" . $userName . "' AND password= '" . $passWord . "'";
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
				$_SESSION['nName'] = $row['nickname'];
				header("Location:aindex.php");
				echo "<a href='aindex.php'>go</a>";
				exit(0);
			} else {
				echo "Invalid Username or Password - Please try again <br />";
			}
		}


?>
<h1>Login Form</h1><hr />
<form method="post" action="login.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="password"><br />
<input type="submit">
</form>