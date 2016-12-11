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

<?php
    $id=$_SESSION['uID'];
    $cid=$_SESSION['cID'];
    $qid=$_SESSION['qID'];    
    if ($rs['answer']==1){
        $sql = "select * from `question`,`options` 
        where question.qid=options.qid and `options`.qid='$qid' and answer=1";
        $results=mysqli_query($conn,$sql);
        if($results=mysqli_query($conn,$sql)) {
            $rs=mysqli_fetch_array($results);
            echo "答對了^^！<br/>NO.",$rs['qid'],$rs['question'],"<br/>正解為：",$rs['woption'];
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
        $sql = "select * from `question`,`options` 
        where question.qid=options.qid and `options`.qid='$qid' and answer=1";
        $results=mysqli_query($conn,$sql);
        if($results=mysqli_query($conn,$sql)) {
            $rs=mysqli_fetch_array($results);
            echo "答錯了nono<br/>NO.",$rs['qid']," ",$rs['question'],"<br/>正解為：",$rs['woption'];
        }
        else{
            echo "sql wrong";
        }
        /*
        $sqlfin = "insert into `log`(`id`,`qid`,`truefalse`) values ('$id','$qid','0');";
        mysqli_query($conn,$sqlfin) or die ("MySQL query error fin");
        */
    }
    echo "<br/><input type='button' onclick='RandomQuestions(",$cid,")' value='下一題'>";   
}
?>

</body>
</html>

