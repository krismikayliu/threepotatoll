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
function getA(postID) {
	DIV='answerDiv';
$.ajax({
		url: 'loadQ.php',
		dataType: 'html',
		type: 'POST',
		data: { id: postID},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function loadAllPosts() {
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
Tea Question <input type="button" onclick="loadAllPosts()" value="更新題目">
<hr>
<div id='div001'></div>
<div id='answerDiv'></div>
</body>
</html>
