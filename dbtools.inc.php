<?php
  function create_connection()
  {
    $link = mysql_connect("localhost", "root", "NTUE")
      or die("無法建立資料連接<br><br>" . mysql_error());//若未成功建立資料連接會顯示
     
	  
    mysql_query("SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($database, $sql, $link)
  {
    $db_selected = mysql_select_db($database, $link)
      or die("開啟資料庫失敗<br><br>" . mysql_error($link));//開啟資料庫連接失敗
						 
    $result = mysql_query($sql, $link);
		
    return $result;
  }
?>
