<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");   
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_Group3_數學學習網_檔案上傳</title>
</head>

<body bgcolor="BLACK" text="WHITE" link="#FF00CC" vlink="#FFCC33" alink="FF9900">
<div id="HEADER">
	<p align="center"><img src="design/titlefig.jpg"></p>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li>
		<li><b>檔案上傳</b></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p align="center"><img src="design/uploadtitle.jpg"></p>  
    <p align="center">
      歡迎使用檔案上傳服務，您可以一次上傳多個檔案。
    </p> 
    <p align="center">
	<center>
    <form method="post" action="upload_connect.php" enctype="multipart/form-data">
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br><br>
      <input type="submit" value="上傳"> <!--按上傳之後，剛剛選擇的檔案就會上傳至資料庫-->
      <input type="reset" value="重新設定"> <!--按重新設定之後，剛剛選擇的檔案會全部清空，顯示未選擇檔案-->
    </form>
    </P>
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>GROUP THREE</i> </center></h2>
	</p>
</div>
</body>
