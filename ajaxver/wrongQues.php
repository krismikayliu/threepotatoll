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
<div id="wq">
<table id="wqtable">
  <tr>
    <td>題號</td>
    <td>題目</td>
    <td>正確答案</td>
  </tr>
<?php

$id=$_SESSION['uID'];
$exitar = array();

$sql = "select * from `log`,`question`,`options` 
where question.qid=log.qid and question.qid=options.qid and id='$id' and answer=1 order by logid desc limit 30";
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
