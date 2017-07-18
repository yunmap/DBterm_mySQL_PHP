<?php
include "config.php";
include "lock.php";
?>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> <!--utf-8설정-->
<title>입금내역관리</title>
</head>
 <body>
    <div id='cssmenu'>
<ul>
   <li class='active'><a href="index3.php">홈</a></li>
   <li><a href='user_admin.php'>유저관리</a></li>
   <li><a href='flower_admin.php'>상품관리(꽃)</a></li>
   <li><a href='food_admin.php'>상품관리(음식)</a></li>
   <li><a href='send_admin.php'>전송내역관리</a></li>
   <li><a href='deposit_admin.php'>입금내역관리</a></li>
</ul>
</div>
</body>
 
</html>
<br>
  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>
<center>
  <h4>입금내역</h4>
  <table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">영수증번호</th>
      <th class="tg-huad">날짜</th>
      <th class="tg-huad">입금인</th>
      <th class="tg-huad">입금액</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = mysql_query("select * from 2017dbterm.foraccount");
   //echo $sql;
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['receiptID'].'</td>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['userID'].'</td>';
        echo '<td>'.$a['account'].'</td>';
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
</div>