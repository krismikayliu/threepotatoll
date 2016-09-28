<?php
require("config.php");
    
$oid=(int)$_POST["oid"];

if($oid>0){
	$sql = "select answer from options where oid=$oid";
    $results=mysqli_query($conn,$sql) or die("MySQL query error");
    $rs=mysqli_fetch_array($results);
    if ($rs['answer']==1)
        echo "yes";
    else
        echo "no";
}
?>
<p><a href="list.php">繼續答題</a></p>