<?php
require_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function C1(chooseCid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: chooseCid},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function C2(chooseCid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: chooseCid},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function C3(chooseCid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: chooseCid},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function C4(chooseCid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: chooseCid},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
function C5(chooseCid) {
	DIV='div001';
$.ajax({
		url: 'betsu_qna.php',
		dataType: 'html',
		type: 'POST',
        data: { cid: chooseCid},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response); //set the html content of the object msg
			}
	});
}
</script>
<title>TEA Question</title>
</head>

<body>
<input type="button" onclick="C1(1)" value="臺灣茶樹品種與特色茶認識">
<input type="button" onclick="C2(2)" value="茶葉製造">
<input type="button" onclick="C3(3)" value="茶葉品質管理">
<input type="button" onclick="C4(4)" value="食品衛生與工業安全">
<input type="button" onclick="C5(5)" value="製茶職業道德">
<br/>
<hr/>
</body>
</html>