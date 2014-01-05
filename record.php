<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_Group3_數學學習網_歷史紀錄</title>
</head>

<body bgcolor="BLACK" text="WHITE" link="#FF00CC" vlink="#FFCC33" alink="FF9900">
<div id="HEADER">
	<p align="center"><img src="design/titlefig.jpg"></p>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li> <!--點選即跳到reading頁面-->
		<li><a href="upload.php">檔案上傳</a></li> <!--點選即跳到upload頁面-->
		<li><a href="message.php">留言板</a></li> <!--點選即跳到message頁面-->
		<li><b>歷史紀錄</b></li> <!--此頁面即為歷史紀錄因此直接印出-->
		<li><a href="login.php">會員資料修改</a></li> <!--點選即跳到login頁面-->
		<li><a href="group.php">管理團隊</a></li> <!--點選即跳到group頁面-->
		<li><a href="manager_login.php">管理者專區</a></li> <!--點選即跳到manager_login頁面-->
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li> <!--點選即跳到index頁面-->
	</ul>
</div>
<div id="CONTENT">
	<p>
		<center>  
		<h2>閱讀紀錄查詢<br/></h2>
		<br/>
		<br/>
		<h3>

		<form name="form" method="post" action=" record_connect.php"> <!--帳號及密碼正確即跳到record_connect頁面-->
			<p>
			<table border=1 cellspacing="2">
			<td align=left>帳號：<input type="text" name="id" /> <br></td> <!--讓使用者輸入帳號-->
			<tr>
			<td align=left>密碼：</h1><input type="password" name="pw" /> <br></td> <!--讓使用者輸入密碼-->
			</table> 
			</p>
			<input type="submit" name="button" value="送出" /> <!--點選即送出所輸帳密-->
			<p>
			</p>
		</form>
		
		</center>
		</h3>
	</p>
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>GROUP THREE</i> </center></h2>
	</p>
</div>
</body>
</html>
