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
		
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>"; //若帳號或密碼輸入錯誤會顯示此題示
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=record.php>';
			}
			else {
				$sql = "SELECT record.account, reading.name, record.time, record.comments FROM record JOIN reading ON reading.serial=record.serial WHERE record.account='$id'";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<table width=800 border=1>";
				echo "<tr align=center><td>姓名</td><td>資料名</td><td>時間</td><td>評論</td></tr>";		
					
				while($row = mysql_fetch_array($result)){ 
					echo "<tr align=center><td>".$row['account']."</td>"; //顯示使用者姓名
					echo "<td>".$row['name']."</td>"; //顯示歷史紀錄資料名
					echo "<td>".$row['time']."</td>"; //顯示歷史紀錄時間
					echo "<td>".$row['comments']."</td>"; //顯示歷史紀錄評論
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
		<form name="form" method="post" action=" record.php">
			<input type="submit" name="button" value="回上一頁" />	<!--點選即跳到record頁面-->
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
