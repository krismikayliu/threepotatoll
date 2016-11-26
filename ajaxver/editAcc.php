<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
<p>茶理王</p>
</head>

<body>

<hr />
<table width="450" border="1">
  <tr>
    <td>id</td>
    <td>password</td>
    <td>nickname</td>
  </tr>
<?php

$uid=(int)$_GET['uid'];
if ($uid <=0) {
	echo "empty ID";
	exit(0);
} 
$sql = "select * from user where uid=$uid;";
$results=mysqli_query($conn,$sql);
if ($rs=mysqli_fetch_array($results)) {
?>
<table>
  <tr><form method="post" action="edit.php">
    <td><label>
      <input type="hidden" name="uid" value="<?php echo $rs['uid']; ?>" />
    </label></td>
    <td><label>
      <input name="id" type="text" id="id" value=<?php echo $rs['id']; ?>>
    </label></td>
    <td><label>
      <input name="password" type="text" id="password" value=<?php echo $rs['password']; ?>>
    </label></td>
    <td><label>
      <input name="nickname" type="text" id="nickname" value=<?php echo $rs['nickname']; ?>>
    </label></td>
    
	<td>
	  <input type="submit" name="Submit" value="送出" />
	</td>
  </tr>
</table>

<?php
} else echo "cannot find the user to edit.";
?>
</body>
</html>
