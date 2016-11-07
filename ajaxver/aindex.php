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

function loadQuestions() {
	DIV='div002';
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
function info() {
	DIV='div001';
$.ajax({
		url: 'information.php',
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
function practice() {
	DIV='div001';
$.ajax({
		url: 'practiceKind.php',
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
<div id='allPage'>
<p>Tea Question</p>
<p>您現在是以 <?php echo $_SESSION["nName"];?> 的身分登入 [<a href=login.php>想要登出？</a>]</p>
<br/>
<input type="button" onclick="info()" value="個人資料">
<input type="button" onclick="wrongques()" value="錯誤題目">
<input type="button" onclick="practice()" value="題目練習">
<hr>
<div id='div001'></div>
<div id='div002'></div>
</div>
</body>
</html>
