<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php"); 
$id = $_POST['id'];
$pw = $_POST['pw'];
$serial = $_POST['select'];
$name = $_POST['name'];

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
		<li><a href="grade1.php">一年級</a></li>
		<li><a href="grade2.php">二年級</a></li>
		<li><a href="grade3.php">三年級</a></li>
		<li><a href="grade4.php">四年級</a></li>
		<li><a href="grade5.php">五年級</a></li>
		<li><a href="grade6.php">六年級</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
	
		<center>
		<h2>開始閱讀<br/></h2>  
		<br/>
		<br/>
		
		<?php
			echo $name;
			$serial_array = explode("+",$serial); 
			$serial_number = $serial_array[0];  
			$type = $serial_array[1];
			
			$sql = "SELECT content FROM reading WHERE serial=".$serial_number.""; 
			$result = mysql_query($sql);
										
			if (!$result) {
				die('Invalid query: ' . mysql_error());//當沒有選擇檔案時，網頁錯誤
			}		
			
			$f = mysql_fetch_array($result);
			echo "<table width=800 border=1>";
			echo "<tr><td>";
			
			//當資料型態為article時，印出文章
			if($type === "article"){                                   
				$arrText = file ("meterial/".$f['content']);
				//由meterial資料夾找出檔名對應的檔案                             
				for ($i = 0 ; $i < count($arrText) ; $i++){              
					echo "$arrText[$i]"."<br/>";
					}
			}
			//當資料型態為figure時，印出圖片
			else if ($type === "figure"){
				echo "<img src='meterial/".$f['content']."' alt='Figure not found'>";
				//由meterial資料夾找出檔名對應的檔案   
			}
			echo "</td></tr></table>";
		
		?>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<form name="form" method="post" action="reading.php">
			<input type="submit" name="button" value="回 開始閱讀首頁" />	
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
