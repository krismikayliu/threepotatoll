
<?php
require_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function practice() {
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
</script>
</head>
<body>
<?php
    $id=$_SESSION['uID'];
    $tid=$_SESSION['tid'];
    
    
    $sql = "select * from test where id='$id' and tid='$tid';";
    $results=mysqli_query($conn,$sql);
    if($rs=mysqli_fetch_array($results)){    
        echo "名字：",$rs['id'],"<br/>分數：",$rs['score'];
    }

    $sql = "select * from `log` where id='$id' and truefalse='0' and tid='$tid';";
    $results=mysqli_query($conn,$sql);
    echo "<br/>答錯的題目：";
    while($rs=mysqli_fetch_array($results)){    
        echo "No.",$rs['qid']," ";
    }       
?>

<br/><br/><input type="button" onclick="practice()" value="重新練習">
</body>
</html>

