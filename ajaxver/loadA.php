
<?php
require_once("config.php");
    
$id=(int)$_REQUEST['aid'];

$sql = "select * from options where oid=" . $id;
if($results=mysqli_query($conn,$sql)) {
    $rs=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function RandomQuestions() {
	DIV='div001';
$.ajax({
		url: 'qna.php',
		dataType: 'html',
		type: 'POST',
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
</script>
</head>
<body>
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
<input type="button" onclick="RandomQuestions()" value="下一題">
</body>
</html>

