<?php
require_once("config.php");
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
		url: 'startT.php',
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
function BetsuQuestions() {
	DIV='div001';
$.ajax({
		url: 'chooseCate.php',
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
<title>TEA Question</title>
</head>

<body>
<a href="javascript:BetsuQuestions()"><div id="sidenavbt2" class="hvr-grow">分類練習</div></a>
<a href="javascript:RandomQuestions()"><div id="sidenavbt2" class="hvr-grow">隨機練習</div></a>
<!--<div class="practice">
    <ul class="pmenu">
        <li><a href="javascript:BetsuQuestions()"><img src="images/test.png"><br/>分類練習</a></li>
        <li><a href="javascript:RandomQuestions()"><img src="images/test.png"><br/>隨機練習</a></li>
    </ul>
</div>-->
<!--<input type="button" onclick="BetsuQuestions()" value="分類練習">
<input type="button" onclick="RandomQuestions()" value="隨機練習">-->
</body>
</html>