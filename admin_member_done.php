<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");  
	$account = $_POST['account']; 
	$password = $_POST['pw'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$age = $_POST['age'];
	$button = $_POST['button'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_學習網</title> <!--這是網頁的標題-->
</head>

<body>
<div id="HEADER">
	<h2>電腦科學學習網</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li>  <!--按了後開始閱讀-->
		<li><a href="upload.php">檔案上傳</a></li>  <!--按了可以上傳檔案-->
		<li><a href="message.php">留言板</a></li>   <!--按了能到留言板-->
		<li><a href="record.php">歷史紀錄</a></li>   <!--按了可以看歷史紀錄-->
		<li><a href="login.php">會員資料修改</li>  <!--按了可以做資料修改-->
		<li><a href="group.php">管理團隊</a></li>  <!--按了可以去修改團隊-->
		<li><b>管理者專區</b></li>  <!--按了會到管理者專區-->
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li> <!--按了會回首頁-->
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>管理者專區<br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if($button === "新增"){ 
				$sql = "INSERT INTO member (account, password, username, email, country, age) VALUES ('$account', '$password', '$username', '$email', '$country', '$age')"; //要insert的value值
				$result = mysql_query($sql);
				if (!$result) { /
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已新增.....</h3>"; //顯示已新增的資料
			}
			else if($button === "修改"){  
				$sql = "UPDATE member SET account='$account', password='$password', username='$username', email='$email', country='$country', age='$age' WHERE account='$account'";//要update的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已修改.....</h3>";  //顯示修改的資料
			}	
						
		?>
		</center>
	</p>	
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Kung-Si Cheng</i> </center></h2>
	</p>
</div>
</body>
</html>
