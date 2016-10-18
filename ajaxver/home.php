<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>indexsample</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style type="text/css">
	/*
	col_border:名稱;
	border-style:邊框的形式;
	border-width:邊框的寬度;
	*/
	.col_border{
		
	}
	.header{
		margin-top:30px;
	}
	.row{
        margin-bottom: 15px;
	}
    #nav{
        margin-top:50px;
    }
    
</style>
</head>
<body>

	<div class="container">
		<div class="row"><!--logo 4個欄位-->
			<div class="col-md-4 col_border header">
				<a href="home.php"><img src="images/tealogo.png" style="width:50%"></a>
			</div>
            <div class="col-md-8 col_border" id="nav">
				<nav id="navbar-example" class="navbar navbar-default navbar-static">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教材<span class="caret"></span> </a>
                                    <ul class="dropdown-menu" aria-labelledby="drop1">
                                        <li><a href="video.html">影片教材</a></li>
                                        <li><a href="tea.html">茶葉辨識</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a id="drop2" href="aindex.php" class="dropdown-toggle">考試</a>
                                </li>
                                <li class="dropdown">
                                    <a id="drop4" href="acountManage.php" class="dropdown-toggle">帳號管理</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li id="fat-menu" class="dropdown">
                                    <a id="drop3" href="quesManage.php" class="dropdown-toggle"> 題庫管理 </a>
                                    </ul>
                                    <!--<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </a>
                                    <ul class="dropdown-menu" aria-labelledby="drop3">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
			</div>
		</div>
		<div class="row">
        <div class="col-md-2 col_border">
        
        </div>
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<!--圖片輪播-->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/photo1.jpg" alt="工廠">
      <div class="carousel-caption">
        工廠
      </div>
    </div>
    <div class="item">
      <img src="images/photo2.jpg" alt="樹樹">
      <div class="carousel-caption">
        樹樹
      </div>
    </div>
    <div class="item 3">
      <img src="images/photo3.jpg" alt="氣球球">
      <div class="carousel-caption">
        氣球球
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
					</div>
				</div>
			</div>
            <div class="col-md-2 col_border">

			</div>
		</div>
        <hr>
		<div class="row">
			<div class="col-md-12 col_border" style="text-align:center">
                國立暨南國際大學 茶理王專題小組<br/>
                Mail：threepotatoll@gmail.com<br/>
                地址：南投縣埔里鎮大學路1號
			</div>
		</div>
    </div>
</body>
</html>