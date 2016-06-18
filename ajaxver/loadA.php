
<?php
require_once("config.php");
    
$id=(int)$_REQUEST['id'];

$sql = "select * from options where oid=" . $id;
if($results=mysqli_query($conn,$sql)) {
    $rs=mysqli_fetch_array($results);
?>
<tr><td>answer:</td>
<td>
<?php if ($rs['answer']==1)
        echo "yes";
    else
        echo "no"; ?>
</td></tr>
<?php
}
?>

