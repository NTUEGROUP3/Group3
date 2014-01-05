<?php
  require_once("dbtools.inc.php");
	
  $author = $_POST["author"]; //將使用者輸入的姓名存入變數author中
  $subject = $_POST["subject"]; //將使用者輸入的主題存入變數subject中
  $content = $_POST["content"]; //將使用者輸入的內容存入變數content中
  $country = $_POST["country"]; //將使用者輸入的所在地存入變數country中
  $current_time = date("Y-m-d H:i:s"); //將使用者留言的時間存入變數current_time中

  
  $link = create_connection();

  
  $sql = "INSERT INTO message(author, subject, content, date, country)
          VALUES('$author', '$subject', '$content', '$current_time', '$country')";
  $result = execute_sql("Group3", $sql, $link);

  
  mysql_close($link);

  
  header("location:message.php");
  exit();
?>
