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
<div class="divh2">錯誤題目</div>
<div id="wq">
<table id="wqtable">
  <tr>
    <td width="100px" height="50px" background="images/rankbubble-01.png">題號</td>
    <td width="300px" background="images/rankbubble-02.png">題目</td>
    <td width="200px" background="images/rankbubble-03.png">正確答案</td>
  </tr>
<?php

$id=$_SESSION['uID'];
$exitar = array();

$sql = "select * from `log`,`question`,`options` 
where question.qid=log.qid and question.qid=options.qid and id='$id' and answer=1 and truefalse=0
order by logid desc limit 30";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

    $qid=$rs['qid'];
    echo "<tr>
        <td height='50px' background='images/rankbubble-01.png'>NO." , $rs['qid'] ,"</td>
        <td height='50px' background='images/rankbubble-02.png'>" , $rs['question'] ,"</td>
        <td height='50px' background='images/rankbubble-03.png'>" , $rs['woption'],"</td>
        </tr>";
    /*
    if(!in_array($qid,$exitar)){
        array_push($exitar,$qid);
        echo "<tr>
        <td>NO." , $rs['qid'] ,"</td>
        <td>" , $rs['question'] ,"</td>
        <td>" , $rs['woption'],"</td>
        </tr>";
        $qid="";
    }
    */
}
?>
</table>
</div>
</body>
</html>
