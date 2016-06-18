<?php
	require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEA Question</title>
</head>

<body>

<p> TEA Question</p>
<hr />
<form action="getans.php" method="POST">
<table width="400" border="1">
    <tr>
    <td>Number</td>
    <td>Question</td>
    </tr>
<?php
$random=rand(1,698);
$sql = "select * from `question` where qid=$random";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
	<td>" , $rs['qid'] ,"</td>
	<td>" , $rs['question'],"</td>
    </tr>";
}
?>
</table>
<table width="400" border="1">
    <tr>
    <td>option</td>
    </tr>
<?php
$sql = "select * from `options` where qid=$random";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td><input type=\"radio\" id=\"oid\" name=\"oid\" value=",$rs['oid'],">" , $rs['woption'],"</td>
    </tr>";
}
?>
</table>
<p><input type='submit' value='送出表單'></p>
</form>
</body>
</html>
