<?php
	require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
<title>TEA Question</title>
</head>
<body>
<div id="q">
<table id="qtable"><!--題目table-->
  <tr>
    <td>名次</td>
    <td>user</td>
    <td>經驗值</td>
  </tr>
<?php

$sql = "select * from `user` order by exp desc";
$results=mysqli_query($conn,$sql);
$rank=1;

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td>" , $rank ,"</td>
	<td>" , $rs['id'] ,"</td>
	<td>" , $rs['exp'],"</td>
    </tr>";
    $rank=$rank+1;
}
?>
</table>
</div>

</body>
</html>
