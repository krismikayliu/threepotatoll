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
		url: 'newloadA.php',
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
<!--題目table-->
<?php
$start=$_SESSION['start'];
if(!$start){

$start=true;
$id=$_SESSION['uID'];

$_SESSION['start']=$start;
$_SESSION['tid']="";
$_SESSION['qID']="";
$_SESSION['i']="";
$_SESSION['qarr']=array();
$i=0;
$_SESSION['i']=$i;
$exitques = array();
//$exitques = array("71","567","644","353","50");

$sqltin = "insert into `test`(`id`) values ('$id');";
mysqli_query($conn,$sqltin) or die ("MySQL query error tin");
$sqltid = "select * from test where id='$id' order by tid desc limit 1;";
$query=mysqli_query($conn,$sqltid);
if($tt=mysqli_fetch_array($query)){
    $_SESSION['tid']=$tt['tid'];
}

$sqlque = "select count(*) from `question`";
$query=mysqli_query($conn,$sqlque);
if($sum=mysqli_fetch_array($query)){
    $total=$sum[0];
}
else{
    $total=0;
}

while(count($exitques)<=5){
    $random=rand(1,$total);
    $sql = "select * from `question` where qid=$random";
    $results=mysqli_query($conn,$sql);

    while (	$rs=mysqli_fetch_array($results)) {
    
        $qid=$rs['qid'];
        
        if(!in_array($qid,$exitques)){
            array_push($exitques,$qid);
        }

    }
}

$_SESSION['qarr']=$exitques;
}
//print_r($exitques);
?>

<div id="q">
<table id="qtable"><!--題目table-->
<?php

$i=$_SESSION['i'];
if($i<5){
    $num=$i+1;
    $quesNum=$_SESSION['qarr'][$i];
    //$quesNum=$exitques[$i];
    //echo $quesNum;
    
    $_SESSION['qID']=$quesNum;
    $sql = "select * from `question` where qid=$quesNum";
    $results=mysqli_query($conn,$sql);
    while (	$rs=mysqli_fetch_array($results)) {

        echo "<tr>
        <td width='100px' align='center' background='images/testq-01.png'>" , $num ,"</td>
        <td background='images/testq-02.png'>" , $rs['question'],"</td>
        </tr>";
    }
    

?>
</table>
</div>
<div id="opt">
<table id="opttable"><!--選項table-->
<?php
    
    $sql = "select * from `options` where qid=$quesNum";
    $results=mysqli_query($conn,$sql);

    while (	$rs=mysqli_fetch_array($results)) {

        echo "<tr>
        <td width='450px' background='images/testans-01.png' class='tdfont'>" , $rs['woption'],"</td>
        <td width='100px' background='images/testans-02.png'>", "<input type='button' value='選擇' onclick='getA(" , $rs['oid'] ,")'></td>
        </tr>";
    }
}
else{
    echo "結束作答";
    $start=false;
    $_SESSION['start']=$start;
}

?>
</table>
</div>
<script type="text/javascript">
</script>
</body>
</html>
