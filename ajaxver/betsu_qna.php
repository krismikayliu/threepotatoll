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
		url: 'betsu_loadA.php',
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
<table id="qtable">
<?php
$_SESSION['cID']="";
$cid=(int)$_REQUEST['cid'];
$_SESSION['cID']=$cid;
$sqlque = "select count(*) from `question` where `cid`=$cid";
$query=mysqli_query($conn,$sqlque);
if($sum=mysqli_fetch_array($query)){
    $total=$sum[0];
}
else{
    $total=0;
}
$_SESSION['qID']="";
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
<table id="opttable">
<?php
$sql = "select * from `options` where qid=$random";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr>
    <td width='450px' background='images/testans-01.png' class='tdfont'>" , $rs['woption'],"</td>
    <td width='100px' background='images/testans-02.png'>", "<input type='button' value='選擇' onclick='getA(" , $rs['oid'] ,")'>","</td>
    </tr>";
}
?>
</table>
</div>
</body>
</html>
