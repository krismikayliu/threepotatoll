<?php
require_once("config.php");
   
$oid=(int)$_REQUEST['aid'];

$sql = "select * from options where oid=" . $oid;
if($results=mysqli_query($conn,$sql)) {
    $rs=mysqli_fetch_array($results);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="animations.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function RandomQuestions() {
    DIV='div001';
$.ajax({
		url: 'newqna.php',
		dataType: 'html',
		type: 'POST',
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function TestResult() {
    DIV='div001';
$.ajax({
		url: 'result.php',
		dataType: 'html',
		type: 'POST',
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
</script>
</head>
<body>
<tr>
<td><font size="6pt" face="微軟正黑體">
<?php
    $id=$_SESSION['uID'];
    $qid=$_SESSION['qID']; 
    $i=$_SESSION['i'];
    $tid=$_SESSION['tid'];
    
    if ($rs['answer']==1){
        echo "<img class='slideExpandUp' src='images/goodjob.png' width='150px'><br/>";
        echo "答對了！獲得經驗值+20";
        $sqlplus = "update `user` set correct=correct+1 where `id`='$id';";
        mysqli_query($conn,$sqlplus) or die ("MySQL query error plus");
        $sqlexp = "update `user` set exp=exp+20 where `id`='$id';";
        mysqli_query($conn,$sqlexp) or die ("MySQL query error exp");
        $sqltin = "insert into `log`(`id`,`qid`,`truefalse`,`tid`) values ('$id','$qid','1','$tid');";
        mysqli_query($conn,$sqltin) or die ("MySQL query error tin");
        $sqlsco = "update `test` set score=score+20 where `id`='$id' and tid='$tid';";
        mysqli_query($conn,$sqlsco) or die ("MySQL query error score");
        
      }
    else{
        echo "<img class='slideExpandUp' src='images/ohno.png' width='150px'><br/>";
        echo "答錯了！獲得經驗值+5";
        $sqlexp = "update `user` set exp=exp+5 where `id`='$id';";
        mysqli_query($conn,$sqlexp) or die ("MySQL query error exp");
        $sqlfin = "insert into `log`(`id`,`qid`,`truefalse`,`tid`) values ('$id','$qid','0','$tid');";
        mysqli_query($conn,$sqlfin) or die ("MySQL query error fin");
    }   
    $i++;
    $_SESSION['i']=$i;
    
?>
</font></td></tr>
<br/>
<?php
}
if($i<5){
    echo "<br/><input type='button' onclick='RandomQuestions()' value='下一題'>";
}
else{
    echo "<input type='button' onclick='TestResult()' value='結束作答'>";
    $start=false;
    $_SESSION['start']=$start;
}
?>
</body>
</html>

