<?php
require("config.php");
    
$oid=(int)$_POST["oid"];

if($oid>0){
	$sql = "select answer from optionans where oid=$oid";
    $answer=mysqli_query($conn,$sql) or die("MySQL query error");
    $rs=mysqli_fetch_array($answer);
    if ($rs['answer']==1)
        echo "你答對ㄖ";
    else
        echo "你答錯摟";
}
?>
<p><a href="qna.php">繼續答題</a></p>