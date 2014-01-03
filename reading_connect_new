<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php"); 
$id = $_POST['id']; 
$pw = $_POST['pw'];

$sql = "SELECT * FROM member where account='$id' and password='$pw'";
$row = mysql_fetch_array(mysql_query($sql));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_Group3_數學學習網_開始閱讀</title>
</head>

<body bgcolor="BLACK" text="WHITE" link="#FF00CC" vlink="#FFCC33" alink="FF9900">
<div id="HEADER">
	<p align="center"><img src="design\titlefig.jpg">
</div>
<div id="MAIN_NAV">
	<ul>
		<li><b>開始閱讀</b></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p>
		<center>
				
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=reading.php>';
			}
			else {
			echo
				'<p>
				<table border=1 cellspacing="2">
				<caption>請選擇年級</caption><br/><br/>
				<td align=left><a href="grade1.php"> ☆ 一年級 ☆ </a><br></td>
				<tr>
				<td align=left><a href="grade2.php"> ☆ 二年級 ☆ </a><br></td>
				<tr>
				<td align=left><a href="grade3.php"> ☆ 三年級 ☆ </a><br></td>
				<tr>
				<td align=left><a href="grade4.php"> ☆ 四年級 ☆ </a><br></td>
				<tr>
				<td align=left><a href="grade5.php"> ☆ 五年級 ☆ </a><br></td>
				<tr>
				<td align=left><a href="grade6.php"> ☆ 六年級 ☆ </a><br></td>
				<tr>
				</table>
				</p>';
			}
		?>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<form name="form" method="post" action=" reading.php">
			<input type="submit" name="button" value="回上一頁" />	 
		</form>
		
		</center>
		<br/>
		<br/>
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
