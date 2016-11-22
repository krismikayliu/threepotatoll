<?php
    require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
</head>
<body>
<p>註冊新帳戶</p>
<hr />

<table width="200" border="1">
  <tr>
    <td>Username</td>
    <td>Password</td>
    <td>Nickname</td>
  </tr>
  <tr><form method="post" action="insert.php">
    <td><label>
      <input name="id" type="text" id="id" />
    </label></td>
    <td><label>
      <input name="password" type="text" id="password" />
    </label></td>
    <td><label>
      <input name="nickname" type="text" id="nickname" />
    </label></td>
    <td><label>
      <input type="submit" name="Submit" value="送出" />
    </label></td>
	</form>
  </tr>
</table>
</body>
</html>
