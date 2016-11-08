<?php
require_once("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>teach</title>

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
        margin-bottom:50px;
    }
    
</style>
</head>
<body>

	<div class="container"><!--全版面-->
		<div class="row"><!--logo 4個欄位-->
			<div class="col-md-4 col_border header">
				<a href="home.php"><img src="images/tealogo.png" style="width:50%"></a>
			</div>
            <div class="col-md-8 col_border" id="nav"><!--nav bar-->
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
                                <li class="dropdown">
                                    <a id="drop5" href="login.php" class="dropdown-toggle">登出</a>
                                </li>
                                <li class="dropdown">
                                    <a id="drop6" href="ToT.html" class="dropdown-toggle">ToT</a>
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
        <div class="teapart"><!--茶葉辨識的部分-->
        <h1>茶葉辨識</h1>
		<div class="row"><!--茶葉的row--><!--茶葉1-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea1.jpg" alt="紅茶" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea1敘述<br/>
                品質特色：<br/>外觀色澤宜烏黑油潤泛紫光，條型紅茶條鎖緊結勻齊，湯色艷紅，澄清明亮泛油光，以清純濃郁為佳；滋味醇和回甘、濃強鮮爽；葉底肥軟鮮活，紅勻明亮
			</div>
		</div>
        <div class="row"><!--茶葉2-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea2.jpg" alt="綠茶(三峽碧螺春)" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea2敘述<br/>
                品質特色：<br/>因茶葉滿身披毫，銀綠隱翠，捲曲成螺而著稱，顏色濃綠、香氣凜冽、滋味甘醇、形狀優美
			</div>
		</div>
        <div class="row"><!--茶葉3-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea3.jpg" alt="清香型烏龍茶" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea3敘述<br/>
                品質特色：<br/>色澤翠綠鮮活，滋味甘醇滑軟厚重帶活性，香氣淡雅，水色蜜綠顯黃，耐沖泡
			</div>
		</div>
        <div class="row"><!--茶葉4-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea4.jpg" alt="鐵觀音" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea4敘述<br/>
                品質特色：<br/>水色橙黃顯紅，味濃而醇厚，微澀中帶甘潤，並有純和的弱果酸味，以鐵觀音品種製造者為上品(俗稱正欉鐵觀音)
			</div>
		</div>
        <div class="row"><!--茶葉5-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea5.jpg" alt="文山包種茶" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea5敘述<br/>
                品質特色：<br/>外觀條索彎曲，色澤鮮豔墨綠，水色蜜綠或蜜黃明亮，香氣清香幽雅似花香，滋味甘醇滑潤帶活性。重香氣，香氣越濃郁品質越高級
			</div>
		</div>
        <div class="row"><!--茶葉6-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea6.jpg" alt="白毫烏龍茶" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea6敘述<br/>
                品質特色：<br/>外觀艷麗，白、綠、黃、紅、褐相間如朵花，高級者帶白毫，茶湯水色呈橙紅色，滋味濃醇甘潤帶天然的蜜香或熟果香
			</div>
		</div>
        <div class="row"><!--茶葉7-->
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border">
						<img src="images/tea7.jpg" alt="凍頂烏龍茶" width="500">
					</div>
				</div>
			</div>
            <div class="col-md-4 col_border">
				tea7敘述<br/>
                品質特色：<br/>以凍頂烏龍茶最有名，外觀緊結，色澤墨綠，水色金黃亮麗，香氣濃郁，滋味醇厚甘韻足，香氣與滋味並重
			</div>
		</div>
        </div>
        <div class="videopart"><!--影片部分-->
        <h1>教學影片</h1>
		<div class="row">
			<div class="col-md-10 col_border">
				<div class="row">
					<div class="col-md-12 col_border"><!--插入影片-->
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EcpZSALxkHc?rel=0&amp;showinfo=0"></iframe>
                    </div>
                    <!--<iframe width="853" height="480" src="https://www.youtube.com/embed/EcpZSALxkHc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
					</div>
				</div>
			</div>
            <div class="col-md-2 col_border">
            <a href="tea.html"><img src="images/teapot.png" style="width:100%"></a>
            
			</div>
		</div>
        <div class="row">
			<div class="col-md-8 col_border">
                <!--牛刀小試-->
                練習1:<br/>
                A.<br/>
                B.<br/>
                C.<br/>
                練習2:<br/>
                A.<br/>
                B.<br/>
                C.<br/>
            </div>
        </div>
        <div class="row">
			<div class="col-md-8 col_border">
				<div class="row">
					<div class="col-md-12 col_border"><!--影片資訊-->
                    第一站：炒菁機操作<br/>
                    first step.....

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
			<div class="col-md-8 col_border">
                <!--牛刀小試ANS-->
                練習1:<br/>
                ANS：A<br/>
                練習2:<br/>
                ANS：B<br/>
            </div>
        </div>
        </div>
        <hr>
		<div class="row"><!--頁尾-->
			<div class="col-md-12 col_border" style="text-align:center">
                國立暨南國際大學 茶理王專題小組<br/>
                Mail：threepotatoll@gmail.com<br/>
                地址：南投縣埔里鎮大學路1號
			</div>
		</div>
    </div>

</body>
</html>