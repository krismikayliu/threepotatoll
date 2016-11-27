<?php
	require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function getA(answerID) {
	DIV='div001';
$.ajax({
		url: 'loadA.php',
		dataType: 'html',
		type: 'POST',
		data: { aid: answerID},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
</script>
<title>TEA Question</title>
</head>
<body>
<div id="q">
<table id="qtable"><!--題目table-->
<?php
$_SESSION['qID']="";
$sqlque = "select count(*) from `question`";
$query=mysqli_query($conn,$sqlque);
if($sum=mysqli_fetch_array($query)){
    $total=$sum[0];
}
else{
    $total=0;
}
$random=rand(1,$total);
$_SESSION['qID']=$random;
$sql = "select * from `question` where qid=$random";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
	<td width='100px' align='center' background='images/testq-01.png'>" , $rs['qid'] ,"</td>
	<td background='images/testq-02.png'>" , $rs['question'],"</td>
    </tr>";
}
?>
</table>
</div>
<div id="opt">
<table id="opttable"><!--選項table-->
<?php
$sql = "select * from `options` where qid=$random";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td width='450px' background='images/testans-01.png'>" , $rs['woption'],"</td>
    <td>", "<input type='button' value='選擇' onclick='getA(" , $rs['oid'] ,")'>","</td>
    </tr>";
}
?>
</table>
</div>
</body>
</html>
