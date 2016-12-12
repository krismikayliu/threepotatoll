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
<table width="400" border="1">
  <tr>
    <td>名稱</td>
    <td>身分</td>
    <td>答對題數</td>
    <td>經驗值</td>
  </tr>
<?php
require_once("config.php");
    
//$uid=$_SESSION['id'];
$id=$_SESSION['uID'];

//$sql = "select * from user where uid='$uid';";
$sql = "select * from user where id='$id';";

    $results=mysqli_query($conn,$sql);
    if ($rs=mysqli_fetch_array($results)) {
        if($rs['priority']==0){
            echo "<tr>
            <td>" , $rs['nickname'],"</td>
            <td>學生</td>
            <td>", $rs['correct'],"</td>
            <td>", $rs['exp'],"</td>
            </tr>";
        }
        else if($rs['priority']==1){
            echo "<tr>
            <td>" , $rs['nickname'],"</td>
            <td>老師</td>
            <td>null</td>
            <td>null</td>
            </tr>";
        }
        else if($rs['priority']==2){
            echo "<tr>
            <td>" , $rs['nickname'],"</td>
            <td>yoooooooo</td>
            <td>null</td>
            <td>null</td>
            </tr>";
        }
    }
?>
</table>
<br/>
<p>近五次作答紀錄</p>
<table width="400" border="1">
  <tr>
    <td>分數</td>
    <td>作答時間</td>
  </tr>
<?php

$sql = "select * from test where id='$id' order by tid desc limit 5;";

    $results=mysqli_query($conn,$sql);
    while ($rs=mysqli_fetch_array($results)) {
    
        echo "<tr>
        <td>" , $rs['score'],"</td>
        <td>", $rs['time'],"</td>
        </tr>";
    }
?>
</table>

</body>
</html>

