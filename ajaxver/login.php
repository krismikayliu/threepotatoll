<?php
session_start();
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'blackteasql';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

$_SESSION['uID'] = "";
if(isset($_POST['id'])){
	$userName = $_POST['id'];
	header("Location:login.php");
}else{
	$userName = "";
}
if(isset($_POST['password'])){
	$passWord = $_POST['password'];
}else{
	$passWord = "";
}

		$sql = "SELECT * FROM user WHERE id='" . $userName . "' AND password= '" . $passWord . "'";
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
				$_SESSION['nName'] = $row['nickname'];
				header("Location:ToT.html");
				echo "<a href='ToT.html'>go</a>";
				exit(0);
			} else {
				echo "Invalid Username or Password - Please try again <br />";
			}
		}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<title>indexsample</title>

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
				<a href="home.php"><img src="images/tealogo.png"></a>
			</div>
            <div class="navbar">
                <ul class="menu">
                    <li><a href="login.php"><img src="images/logout.png"><br/>Logout</a></li>
                </ul>
            </div>
	</div>
	<div class="container">
		<div class="row">
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
            <div class="col-md-4" id="login"><!--登入-->
            <h2>登入</h2><hr />
                <form method="post" action="login.php">
                    <div id="loginbox">使用者名稱<br/></div>
                    <input type="text" name="id">
                    <div id="loginbox">密碼<br/></div>
                    <input type="password" name="password"><br/>
                <br/><input type="submit">
                </form>
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