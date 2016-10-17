
<?php
require_once("config.php");
    
$id=(int)$_REQUEST['id'];

$sql = "select * from user where id=" . $id;
if($results=mysqli_query($conn,$sql)) {
    $rs=mysqli_fetch_array($results);
?>

<?php
}
?>

