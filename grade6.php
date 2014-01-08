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
		<li><a href="grade1.php">一年級</a></li>
		<li><a href="grade2.php">二年級</a></li>
		<li><a href="grade3.php">三年級</a></li>
		<li><a href="grade4.php">四年級</a></li>
		<li><a href="grade5.php">五年級</a></li>
		<li><b>六年級</b></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p>
		<center>
				
		<?php
				echo $id;
				echo '<img src="design\titlefig6.jpg">';
				echo "<br/><h2>請選擇閱讀材料<br/></h2><br/><br/>";
				$sql = "SELECT * FROM grade6";//FROM資料庫grade6
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='form' method='post' action='reading_start.php'>"; 
				echo "<input type='hidden' name='id' value=".$id." />";
				echo "<input type='hidden' name='pw' value=".$pw." />";
								
				echo "<table width=800 border=1>";            
				echo "<tr align=center><td>選取</td><td>編號</td><td>類型</td><td>資料名</td></tr>";		
					
				while($row = mysql_fetch_array($result)){     
					
					echo "<tr align=center><td><input name='select' type='radio' value=".$row['serial']."+".$row['type']."></td>"; //radio屬性，value輸出的內容				
					echo "<td>".$row['serial']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<input type='submit' name='button' value='開始閱讀' />";	
				echo "</form>";
		?>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<form name="form" method="post" action=" reading.php">
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
