
<?php
require_once("config.php");
    
$id=$_SESSION['uID'];

$sql = "select * from user where id='$id';";
$results=mysqli_query($conn,$sql);
if($rs=mysqli_fetch_array($results)){    
    echo "名稱：",$rs['nickname'],"<br/>",
    "答對題數：",$rs['correct'];
}
?>

