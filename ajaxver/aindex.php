<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>test</title>

<link rel="stylesheet" type="text/css" href="css3.css">
<link rel="stylesheet" href="animations.css">
<link rel="stylesheet" href="hover-min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function loadQuestions() {
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
function wrongques() {
	DIV='div001';
$.ajax({
		url: 'wrongQues.php',
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
function wrongrank() {
	DIV='div001';
$.ajax({
		url: 'wrongRank.php',
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
function exprank() {
	DIV='div001';
$.ajax({
		url: 'expRank.php',
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
	DIV='div002';
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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
    <div class="nav"><!--網頁最上方navbar-->
        <div class="logo">
            <a href="ToT.php" class="hvr-hang"><img src="images/tealogo.png"></a>
        </div>
        <div class="navbar">
            <ul class="menu">
                <!--<li><a href="editAcc.php"><br/>帳號管理(還沒寫好)</a></li>-->
                <li><a href="teach.php" class="hvr-grow"><img src="images/teach.png"><br/>學習</a></li>
                <li><a href="javascript:info()" class="hvr-grow"><img src="images/personal_info.png"><br/>個人資料</a></li>
                <li><a href="login.php" class="hvr-grow"><img src="images/logout.png"><br/>登出</a></li>
            </ul>
        </div>
        <div id="name">|&nbsp<?php echo $_SESSION["nName"];?>&nbsp|</div>
	</div>
    <div id="sidenav"><!--sidenav-->
        <a href="javascript:exprank()"><div id="sidenavbt" class="hvr-grow">排行榜</div></a>
        <a href="javascript:wrongques()"><div id="sidenavbt" class="hvr-grow">錯誤題目</div></a>
        <a href="javascript:wrongrank()"><div id="sidenavbt" class="hvr-grow">錯題榜</div></a>
        <a href="javascript:practice()"><div id="sidenavbt" class="hvr-grow">題目練習</div></a>
        <div id='div002'></div>
    </div>
    <div class="container"><!--全版面-->
        <div class="question">
        <!--<div class="divh1">Tea Question</div>-->
            <!--<p>您現在是以 <?php echo $_SESSION["nName"];?> 的身分登入</p>-->
            <br/>
            <!--<div class="practice">
                <ul class="pmenu">
                    <li><a href="javascript:wrongques()"><img src="images/home2.png"><br/>錯誤題目</a></li>
                    <li><a href="javascript:practice()"><img src="images/teach.png"><br/>題目練習</a></li>
                </ul>
                <div id='div002'></div>
            </div>-->
            <div id='div001'></div>
        </div>
        <hr>
		<div class="bottom"><!--頁尾-->
			國立暨南國際大學 茶理王專題小組<br/>
            Mail：threepotatoll@gmail.com<br/>
            地址：南投縣埔里鎮大學路1號
		</div>
    </div>
</body>
</html>
