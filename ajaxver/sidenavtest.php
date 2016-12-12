<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>teach</title>

<link rel="stylesheet" type="text/css" href="css3.css">
<link rel="stylesheet" href="animations.css">
<link rel="stylesheet" href="hover-min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function calltea() {
	DIV='content';
$.ajax({
		url: 'tea.html',
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
function callvideo() {
	DIV='content';
$.ajax({
		url: 'video.html',
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
function callinfo() {
	DIV='content';
$.ajax({
		url: 'info.html',
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

<body>
    <div class="nav"><!--網頁最上方navbar-->
        <div class="logo">
            <a href="ToT.html" class="hvr-hang"><img src="images/tealogo.png"></a>
        </div>
        <div class="navbar">
            <ul class="menu">
                <li><a href="ToT.html" class="hvr-grow"><img src="images/homehover.png"><br/>Home</a></li>
                <li><a href="aindex.php" class="hvr-grow"><img src="images/testhover.png"><br/>Test</a></li>
                <!--<li><a href="javascript:calltea()" class="hvr-grow"><img src="images/teachhover.png"><br/>茶葉辨識</a></li>
                <li><a href="javascript:callvideo()" class="hvr-grow"><img src="images/videohover.png"><br/>影片教材</a>
                    <ul class="menu2">
                    <li><a href="">第一站</a></li>
                    <li><a href="">第二站</a></li>
                    <li><a href="">第三站</a></li>
                    </ul>
                </li>
                <li><a href="javascript:callinfo()" class="hvr-grow"><img src="images/teachhover.png"><br/>主任資訊</a></li>-->
                <li><a href="login.php" class="hvr-grow"><img src="images/logouthover.png"><br/>Logout</a></li>
            </ul>
        </div>
    </div>
    <div id="sidenav"><!--sidenav-->
        <a href="javascript:calltea()"><div id="sidenavbt" class="hvr-grow">茶葉辨識</div></a>
        <a href="javascript:callvideo()"><div id="sidenavbt" class="hvr-grow">影片教材</div></a>
        <a href="javascript:callinfo()"><div id="sidenavbt" class="hvr-grow">主任資訊</div></a>
    </div>
	<div class="container">
        <div id="content">
            
        </div>
        <div class="teachall">
            <!--<h2>這裡先放課堂總論</h2>-->
            <div class="box1" id="box">
                <div id="zonlun"><img src="images/tea1.jpg"></div>
                <div id="zonlun2">茶葉辨識</div>
            </div>
            <div class="box2" id="box">
                <div id="zonlun"><img src="images/tea2.jpg"></div>
                <div id="zonlun2">影片教學</div>
            </div>
            <div class="box3" id="box">
                <div id="zonlun"><img src="images/tea3.jpg"></div>
                <div id="zonlun2">主任資訊</div>
            </div>
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