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
    <td>題號</td>
    <td>錯誤率</td>
  </tr>
<?php

$sqlque = "select count(*) from `log`";
$query=mysqli_query($conn,$sqlque);
if($sum=mysqli_fetch_array($query)){
    $total=$sum[0];
}
else{
    $total=0;
}
$sql = "select `qid`,ROUND(count(qid)/$total*100,1) AS wrongsum from `log` where `truefalse`='0' group by `qid` order by wrongsum desc";
$results=mysqli_query($conn,$sql);
$rank=1;

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td>" , $rank ,"</td>
	<td>NO." , $rs['qid'] ,"</td>
	<td>" , $rs['wrongsum'],"%</td>
    </tr>";
    
    $rank=$rank+1;
}
?>
</table>
</div>

</body>
</html>
