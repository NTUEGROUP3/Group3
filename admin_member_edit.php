<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$account = $_POST['select1']; 
	$button = $_POST['button1'];  
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_Group3_數學學習網_管理者專區</title>
</head>

<body bgcolor="BLACK" text="WHITE" link="#FF00CC" vlink="#FFCC33" alink="FF9900">
<div id="HEADER">
	<p align="center"><img src="design/titlefig.jpg"></p>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</li>
		<li><a href="group.php">管理團隊</a></li>
		<li><b>管理者專區</b></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<center>
		<h2>使用者資料修改<br/></h2>
		<br/>
		<br/>
		
		<?php
			//若按了新增，可新增帳號、密碼、使用者姓名、Email、城市、年齡
			if($button === "新增"){　
		?>
				<form name="form" method="post" action="admin_member_done.php">
					<p>
					<table border=1 cellspacing="2">
					<td align=left>帳號：<input type="text" name="account" /> <br></td>
					<tr>
					<td align=left>密碼：</h1><input type="text" name="pw" /> <br></td>
					<tr>
					<td align=left>使用者姓名：</h1><input type="text" name="username" /> <br></td>
					<tr>
					<td align=left>Email：</h1><input type="text" name="email" /> <br></td>
					<tr>
					<td align=left>城市：</h1><input type="text" name="country" /> <br></td>
					<tr>
					<td align=left>年齡：</h1><input type="text" name="age" /> <br></td>
					</table>
					</p>
					<input type="submit" name="button" value="新增" /> <!--若按了新增，剛剛新增的資料會輸入資料庫-->
				</form>
				
		<?php
			}
			//若按了修改，可修改帳號、密碼、使用者姓名、Email、城市、年齡
			else if($button === "修改"){
				$sql = "SELECT * FROM member WHERE account='$account'";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error()); 
				}
				else{
				$row = mysql_fetch_array(mysql_query($sql)); 
		?>
					<form name="form" method="post" action="admin_member_done.php"> 
						<p>
						<table border=1 cellspacing="2">
						<td align=left>帳號：<input type="text" name="account" value="<?php echo $row['account']; ?>" /> <br></td>
						<tr>
						<td align=left>密碼：</h1><input type="text" name="pw" value="<?php echo $row['password']; ?>"/> <br></td>
						<tr>
						<td align=left>使用者姓名：</h1><input type="text" name="username" value="<?php echo $row['username']; ?>" /> <br></td>
						<tr>
						<td align=left>Email：</h1><input type="text" name="email" value="<?php echo $row['email']; ?>" /> <br></td>
						<tr>
						<td align=left>城市：</h1><input type="text" name="country" value="<?php echo $row['country']; ?>" /> <br></td>
						<tr>
						<td align=left>年齡：</h1><input type="text" name="age" value="<?php echo $row['age']; ?>" /> <br></td>
						</table>
						</p>
						<input type="submit" name="button" value="修改" /> <!--若按了修改，剛剛修改的資料會輸入資料庫-->
					</form>
		<?php
				}
			}
			//若按了刪除，可修改帳號、密碼、使用者姓名、Email、城市、年齡
			else if($button === "刪除"){ 
				$sql = "DELETE FROM member WHERE account='$account'"; 
				$result = mysql_query($sql);
											
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				else{
					echo "<h3>資料已刪除.....</h3>";//會顯示資料已刪除
				}
			}
		?>
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
