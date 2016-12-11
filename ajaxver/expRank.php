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
<div class="divh2">排行榜</div>
<div id="exp">
<table id="exptable"><!--排行榜table-->
  <tr>
    <td width="100px" height="50px" background="images/rankbubble-01.png">名次</td>
    <td width="300px" background="images/rankbubble-02.png">暱稱</td>
    <td width="200px" background="images/rankbubble-03.png">經驗值</td>
  </tr>
<?php

$sql = "select * from `user` order by exp desc";
$results=mysqli_query($conn,$sql);
$rank=1;

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td height='50px' background='images/rankbubble-01.png'>" , $rank ,"</td>
	<td background='images/rankbubble-02.png'>" , $rs['nickname'] ,"</td>
	<td background='images/rankbubble-03.png'>" , $rs['exp'],"</td>
    </tr>";
    $rank=$rank+1;
}
?>
</table>
</div>

</body>
</html>
