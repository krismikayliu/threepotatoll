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
<script type="text/javascript">
<!--topbar js-->
$(function(){
　$(window).load(function(){
　　$(window).bind('scroll resize', function(){
　　var $this = $(this);
　　var $this_Top=$this.scrollTop();

　　//當高度小於200時，關閉區塊 (滾動超過200時)
　　if($this_Top < 200){
　　　$('#top-bar').stop().animate({top:"-65px"});
　　　}
　　　　if($this_Top > 200){
　　　　$('#top-bar').stop().animate({top:"0px"});
　　　 }
　　}).scroll();
　});
});
</script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="totnew.css">
</head>
<body>
	<div class="container"><!--全版面-->
		<div class="nav"><!--網頁最上方navbar-->
			<div class="logo">
				<a href="ToT.html"><img src="images/tealogo.png"></a>
			</div>
            <div class="navbar" id="bt2">
                <ul class="menu">
                    <li><a href="ToT.html"><img src="images/home2.png"><br/>Home</a></li>
                    <li><a href=""><img src="images/teach2.png"><br/>茶葉辨識</a></li>
                    <li><a href=""><img src="images/video2.png"><br/>影片教材</a>
                        <ul class="menu2">
                        <li><a href="">第一站</a></li>
                        <li><a href="">第二站</a></li>
                        <li><a href="">第三站</a></li>
                        </ul>
                    </li>
                    <li><a href=""><img src="images/teach2.png"><br/>主任資訊</a></li>
                    <li><a href="login.php"><img src="images/logout.png"><br/>Logout</a></li>
                </ul>
            </div>
		</div>
        <div class="teapart" id="teapart"><!--茶葉辨識的部分-->
        <h1>茶葉辨識</h1>
            <div class="row" id="tea1"><!--茶葉1-->
                <div class="tea11" id="photo">
                    <img src="images/tea1.jpg" alt="紅茶">
                </div>
                <div class="tea12" id="description">
                    <h2>茶葉品種 - 紅茶</h2>
                    品質特色：<br/>外觀色澤宜烏黑油潤泛紫光，條型紅茶條鎖緊結勻齊，湯色艷紅，澄清明亮泛油光，以清純濃郁為佳；滋味醇和回甘、濃強鮮爽；葉底肥軟鮮活，紅勻明亮
                </div>
            </div>
            <div class="row" id="tea2"><!--茶葉2-->
                <div class="tea21" id="photo">
                    <img src="images/tea2.jpg" alt="綠茶(三峽碧螺春)">
                </div>
                <div class="tes22" id="description">
                    <h2>茶葉品種 - 綠茶(三峽碧螺春)</h2>
                    品質特色：<br/>因茶葉滿身披毫，銀綠隱翠，捲曲成螺而著稱，顏色濃綠、香氣凜冽、滋味甘醇、形狀優美
                </div>
            </div>
            <div class="row" id="tea3"><!--茶葉3-->
                <div class="tea31" id="photo">
                    <img src="images/tea3.jpg" alt="清香型烏龍茶">
                </div>
                <div class="tea32" id="description">
                    <h2>茶葉品種 - 清香型烏龍茶</h2>
                    品質特色：<br/>色澤翠綠鮮活，滋味甘醇滑軟厚重帶活性，香氣淡雅，水色蜜綠顯黃，耐沖泡
                </div>
            </div>
            <div class="row" id="tea4"><!--茶葉4-->
                <div class="tea41" id="photo">
                    <img src="images/tea4.jpg" alt="鐵觀音">
                </div>
                <div class="tea42" id="description">
                    <h2>茶葉品種 - 鐵觀音</h2>
                    品質特色：<br/>水色橙黃顯紅，味濃而醇厚，微澀中帶甘潤，並有純和的弱果酸味，以鐵觀音品種製造者為上品(俗稱正欉鐵觀音)
                </div>
            </div>
            <div class="row" id="tea5"><!--茶葉5-->
                <div class="tea51" id="photo">
                    <img src="images/tea5.jpg" alt="文山包種茶">
                </div>
                <div class="tea52" id="description">
                    <h2>茶葉品種 - 文山包種茶</h2>
                    品質特色：<br/>外觀條索彎曲，色澤鮮豔墨綠，水色蜜綠或蜜黃明亮，香氣清香幽雅似花香，滋味甘醇滑潤帶活性。重香氣，香氣越濃郁品質越高級
                </div>
            </div>
            <div class="row" id="tea6"><!--茶葉6-->
                <div class="tea61" id="photo">
                    <img src="images/tea6.jpg" alt="白毫烏龍茶">
                </div>
                <div class="tea62" id="description">
                    <h2>茶葉品種 - 白毫烏龍茶</h2>
                    品質特色：<br/>外觀艷麗，白、綠、黃、紅、褐相間如朵花，高級者帶白毫，茶湯水色呈橙紅色，滋味濃醇甘潤帶天然的蜜香或熟果香
                </div>
            </div>
            <div class="row" id="tea7"><!--茶葉7-->
                <div class="tea71" id="photo">
                    <img src="images/tea7.jpg" alt="凍頂烏龍茶">
                </div>
                <div class="tea72" id="description">
                    <h2>茶葉品種 - 凍頂烏龍茶</h2>
                    品質特色：<br/>以凍頂烏龍茶最有名，外觀緊結，色澤墨綠，水色金黃亮麗，香氣濃郁，滋味醇厚甘韻足，香氣與滋味並重
                </div>
            </div>
        </div>
        <div class="videopart" id="videopart"><!--影片部分-->
        <h1>教學影片</h1>
            <div class="row" id="videoall">
                <div class="row" id="left">
                    <div class="video1" id="video">
                        <div class="embed-responsive embed-responsive-16by9" >
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EcpZSALxkHc?rel=0&amp;showinfo=0"></iframe>
                        </div>
                    </div>
                    <div class="info" id="info">
                        <!--影片資訊-->
                        第一站：炒菁機操作<br/>
                        first step.....
                    </div>
                    <div class="info2" id="info">
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
                    <div class="info3" id="info">
                        <!--牛刀小試ANS-->
                        練習1:<br/>
                        ANS：A<br/>
                        練習2:<br/>
                        ANS：B<br/>
                    </div>
                </div>
                <div class="row" id="right">
                    <div class="button1" id="button">
                        <a href=""><img src="images/home2.png"><br/>Home</a>
                    </div>
                    <div class="button2" id="button">
                        <a href=""><img src="images/home2.png"><br/>Home</a>
                    </div>
                    <div class="button3" id="button">
                        <a href=""><img src="images/home2.png"><br/>Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="infopart" id="infopart"><!--主任資訊-->
        <h1>資訊</h1>
        </div>
        <hr>
		<div class="bottom"><!--頁尾-->
			國立暨南國際大學 茶理王專題小組<br/>
            Mail：threepotatoll@gmail.com<br/>
            地址：南投縣埔里鎮大學路1號
		</div>
    </div>
    <div id="top-bar">
        <ul class="menu3">
            <li><a href="ToT.html">Home</a></li>
            <li><a href="#teapart">茶葉辨識</a></li>
            <li><a href="">影片教材</a></li>
            <li><a href="">主任資訊</a></li>
        </ul>
    </div>
</body>
</html>