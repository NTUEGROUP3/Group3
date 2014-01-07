<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_Group3_數學學習網_留言版</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.author.value.length == 0)
          alert("作者欄位不可以空白哦！"); //若使用者沒填姓名會顯示此題示
        else if (document.myForm.country.value.length == 0)
          alert("所在地欄位不可以空白哦！"); //若使用者沒填所在地會顯示此題示
        else if (document.myForm.subject.value.length == 0)
          alert("主題欄位不可以空白哦！"); //若使用者沒填主題會顯示此題示
        else if (document.myForm.content.value.length == 0)
          alert("內容欄位不可以空白哦！"); //若使用者沒填內容會顯示此題示
        else
          myForm.submit();
      }
    </script>

</head>

<body bgcolor="BLACK" text="BLACK" link="#FF00CC" vlink="#FFCC33" alink="FF9900">
<div id="HEADER">
    <p align="center"><img src="design/titlefig.jpg">
</div>
<div id="MAIN_NAV">
    <ul>
        <li><a href="reading.php">開始閱讀</a></li> <!--點選即跳到reading頁面-->
        <li><a href="upload.php">檔案上傳</a></li> <!--點選即跳到upload頁面-->
        <li><b>留言板</b></li> <!--此頁面即為留言版因此直接印出-->
        <li><a href="record.php">歷史紀錄</a></li> <!--點選即跳到record頁面-->
        <li><a href="login.php">會員資料修改</a></li> <!--點選即跳到login頁面-->
        <li><a href="group.php">管理團隊</a></li> <!--點選即跳到group頁面-->
        <li><a href="manager_login.php">管理者專區</a></li> <!--點選即跳到manager_login頁面-->
        <li><a href="index.php" style="color:#FF99FF">回首頁</a></li> <!--點選即跳到index頁面-->
    </ul>
</div>
<div id="CONTENT">
    <p align="center"><img src="messagepicture/fig.jpg"></p>
    <?php
      require_once("dbtools.inc.php");
                        
      
      $records_per_page = 5;

      
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      
      $link = create_connection();
                        
      
      $sql = "SELECT * FROM message ORDER BY date DESC";
      $result = execute_sql("group3", $sql, $link);

      
      $total_records = mysql_num_rows($result);

      
      $total_pages = ceil($total_records / $records_per_page);

      
      $started_record = $records_per_page * ($page - 1);

      
      mysql_data_seek($result, $started_record);

      
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";

      echo "<table width='800' align='center' cellspacing='3'>";

      
      $j = 1;
      while ($row = mysql_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<tr bgcolor='" . $bg[$j - 1] . "'>";
        echo "<td width='120' align='center'>
              <img src='messagepicture/" . mt_rand(0, 9) . ".gif'></td>";
        echo "<td>作者：" . $row["author"] . "<br>"; //顯示使用者所填姓名
        echo "所在地：" . $row["country"] . "<br>"; //顯示使用者所填所在地
        echo "時間：" . $row["date"] . "<br>"; //顯示使用者留言時間
        echo "主題：" . $row["subject"] . "<hr>"; //顯示使用者所填主題
        echo "內容：<br>" . $row["content"] . "</td></tr>"; //顯示使用者所填內容
        $j++;
      }
      echo "</table>" ;

      
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='message.php?page=". ($page - 1) . "'>上一頁</a> ";

      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='message.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='message.php?page=". ($page + 1) . "'>下一頁</a> ";
      echo "</p>";

      
      mysql_free_result($result);
      mysql_close($link);
    ?>
    <form name="myForm" method="post" action="post.php">
    <table border="0" width="800" align="center" cellspacing="0">
    <tr bgcolor="#0084CA" align="center">
    <td colspan="2">
    <font color="#FFFFFF">請在此輸入新的留言</font></td>
    </tr>
    <tr bgcolor="#D9F2FF">
    <td width="15%">作者</td>
    <td width="85%"><input name="author" type="text" size="50"></td>
    </tr> <!--引導使用者填入姓名-->
    <tr bgcolor="#84D7FF">
    <td width="15%">所在地</td>
    <td width="85%"><input name="country" type="text" size="50"></td>
    </tr> <!--引導使用者填入所在地-->
    <tr bgcolor="#D9F2FF">
    <td width="15%">主題</td>
    <td width="85%"><input name="subject" type="text" size="50"></td>
    </tr> <!--引導使用者填入主題-->
    <tr bgcolor="#84D7FF">
    <td width="15%">內容</td>
    <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
    </tr> <!--引導使用者填入內容-->
    <tr>
    <td colspan="2" align="center">
    <input type="button" value="張貼留言" onClick="check_data()"> <!--點選即送出留言-->
    <input type="reset" value="重新輸入"> <!--點選即清空表格-->
    </td>
    </tr>
    </table>
    </form>
</div>
<div id="FOOTER">        
    <p>
        <br/><br/><br/><br/><br/><br/>
        <h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Gung-Si Chen</i> </center></h2>
    </p>
</div>
</body>
