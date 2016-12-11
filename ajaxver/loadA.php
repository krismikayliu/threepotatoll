<?php
require_once("config.php");
    
$id=(int)$_REQUEST['aid'];

$sql = "select * from options where oid=" . $id;
if($results=mysqli_query($conn,$sql)) {
    $rs=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function RandomQuestions() {
	DIV='div001';
$.ajax({
		url: 'qna.php',
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
<tr><!--<td><font size="14pt">answer：</font></td>-->
<td><font size="14pt">
<?php
    $id=$_SESSION['uID'];
    $qid=$_SESSION['qID'];    
    if ($rs['answer']==1){
        echo "答對了！";
        $sqlplus = "update `user` set correct=correct+1 where `id`='$id';";
        mysqli_query($conn,$sqlplus) or die ("MySQL query error plus");
        $sqltin = "insert into `log`(`id`,`qid`,`truefalse`) values ('$id','$qid','1');";
        mysqli_query($conn,$sqltin) or die ("MySQL query error tin");
      }
    else{
        echo "答錯了！";
        $sqlfin = "insert into `log`(`id`,`qid`,`truefalse`) values ('$id','$qid','0');";
        mysqli_query($conn,$sqlfin) or die ("MySQL query error fin");
    }        
?>
</font></td></tr>
<?php
}
?>
<br/><br/><input type="button" onclick="RandomQuestions()" value="下一題">
</body>
</html>

