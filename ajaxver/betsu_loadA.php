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
function RandomQuestions(cid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: cid},
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
<font size="4pt" face="微軟正黑體">
<?php
    $id=$_SESSION['uID'];
    $cid=$_SESSION['cID'];
    $qid=$_SESSION['qID'];    
    if ($rs['answer']==1){
        $sqls = "select * from `question`,`options` 
        where question.qid=options.qid and `options`.qid='$qid' and answer=1";
        if($result=mysqli_query($conn,$sqls)) {
            $rss=mysqli_fetch_array($result);
            echo "<img class='slideExpandUp' src='images/goodjob.png' width='150px'><br/>";
            echo "答對了！<br/>NO.",$rss['qid'],$rss['question'],"<br/>正解為：",$rss['woption'];
        }
        else{
            echo "sql wrong";
        }
        /*
        $sqlplus = "update `user` set correct=correct+1 where `id`='$id';";
        mysqli_query($conn,$sqlplus) or die ("MySQL query error plus");
        $sqltin = "insert into `log`(`id`,`qid`,`truefalse`) values ('$id','$qid','1');";
        mysqli_query($conn,$sqltin) or die ("MySQL query error tin");
        */
    }
    else{
        echo "<img class='slideExpandUp' src='images/ohno.png' width='150px'><br/>";
        echo "答錯了！<br/>";
        $sqls = "select * from `question`,`options` 
        where question.qid=options.qid and `options`.qid='$qid' and answer=1";
        if($result=mysqli_query($conn,$sqls)) {
            $rss=mysqli_fetch_array($result);
            echo "NO.",$rss['qid']," ",$rss['question'];
        }
        $sqlss = "select * from options where oid=" . $oid;
        if($resultss=mysqli_query($conn,$sqlss)) {
            $rsss=mysqli_fetch_array($resultss);
            echo "<br/>你答的選項為：",$rsss['woption'];
        }
        $sqls = "select * from `question`,`options` 
        where question.qid=options.qid and `options`.qid='$qid' and answer=1";
        if($result=mysqli_query($conn,$sqls)) {
            $rss=mysqli_fetch_array($result);
            echo "<br/>正解為：",$rss['woption'];
        }
        else{
            echo "sql wrong";
        }
        /*
        $sqlfin = "insert into `log`(`id`,`qid`,`truefalse`) values ('$id','$qid','0');";
        mysqli_query($conn,$sqlfin) or die ("MySQL query error fin");
        */
    }
    echo "<br/><br/><input type='button' onclick='RandomQuestions(",$cid,")' value='下一題'>";   
}
?>
</font>
</body>
</html>

