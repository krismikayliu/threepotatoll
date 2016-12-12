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
<div id="information">
<table id="informationtable">
  <tr>
    <td width="90px" height="50px" background="images/rankbubble-01.png">名稱</td>
    <td width="80px" background="images/rankbubble-02.png">身分</td>
    <td width="80px" background="images/rankbubble-02.png">答對題數</td>
    <td width="200px" background="images/rankbubble-03.png">經驗值</td>
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
            <td height='50px' background='images/rankbubble-01.png'>" , $rs['nickname'],"</td>
            <td height='50px' background='images/rankbubble-02.png'>學生</td>
            <td height='50px' background='images/rankbubble-02.png'>", $rs['correct'],"</td>
            <td height='50px' background='images/rankbubble-03.png'>", $rs['exp'],"</td>
            </tr>";
        }
        else if($rs['priority']==1){
            echo "<tr>
            <td height='50px' background='images/rankbubble-01.png'>" , $rs['nickname'],"</td>
            <td height='50px' background='images/rankbubble-02.png'>老師</td>
            <td height='50px' background='images/rankbubble-02.png'>null</td>
            <td height='50px' background='images/rankbubble-03.png'>null</td>
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
</div>
<div id="log">
<p style="color:ivory;font-size:12pt;font-family:微軟正黑體;">近五次作答紀錄</p>
<table id="logtable">
  <tr>
    <td width="100px" height="50px" background="images/rankbubble-01.png">分數</td>
    <td width="200px" background="images/rankbubble-03.png">作答時間</td>
  </tr>
<?php

$sql = "select * from test where id='$id' order by tid desc limit 5;";

    $results=mysqli_query($conn,$sql);
    while ($rs=mysqli_fetch_array($results)) {
    
        echo "<tr>
        <td height='50px' background='images/rankbubble-01.png'>" , $rs['score'],"</td>
        <td height='50px' background='images/rankbubble-03.png'>", $rs['time'],"</td>
        </tr>";
    }
?>
</table>
</div>
</body>
</html>

