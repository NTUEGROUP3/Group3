<?php
  require_once("dbtools.inc.php");
	
  $author = $_POST["author"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];
  $country = $_POST["country"];
  $current_time = date("Y-m-d H:i:s");

  
  $link = create_connection();

  
  $sql = "INSERT INTO message(author, subject, content, date, country)
          VALUES('$author', '$subject', '$content', '$current_time', '$country')";
  $result = execute_sql("Group3", $sql, $link);

  
  mysql_close($link);

  
  header("location:message.php");
  exit();
?>
