<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>ToT</title>

<link rel="stylesheet" type="text/css" href="css3.css">
<link rel="stylesheet" href="animations.css">
<link rel="stylesheet" href="hover-min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript"></script>
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
                <li><a href="login.php"><img src="images/logout.png"><br/>登出</a></li>
            </ul>
        </div>
        <div id="name">
        <span style="color:#cedddd">|</span>&nbsp<?php echo $_SESSION["nName"];?>&nbsp<span style="color:#cedddd">|</span>
        </div>
	</div>
	<div class="container">
        <div class="row" id="choose">
            <div class="teach slideRight" id="choosebt">
                <a href="teach.php"><img src="images/totbuttons-01.png" ></a><br/>
            </div>
            <div class="test slideLeft" id="choosebt">
            <a href="aindex.php"><img src="images/totbuttons-02.png"></a><br/>
            </div>
        </div>
        <hr>
		<div class="bottom"><!--頁尾-->
			國立暨南國際大學 Schooling Fish專題小組<br/>
            Mail：threepotatoll@gmail.com<br/>
            地址：南投縣埔里鎮大學路1號
		</div>
    </div>
</body>
</html>