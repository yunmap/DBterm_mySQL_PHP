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
<title>개인정보</title>
</head>
 <body>
    <div id='cssmenu'>
<ul>
   <li class='active'><a href="index2.php">홈</a></li>
   <li><a href='flower.php'>선물(꽃)</a></li>
   <li><a href='food.php'>선물(음식)</a></li>
   <li><a href='deposit.php'>충전하기</a></li>
   <li><a href='send.php'>선물하기</a></li>
   <li><a href='myinfo.php'>내 정보</a></li>
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
  <h4>로그인정보</h4>
  <table class="tg">
 
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">정보</th>
      <th class="tg-huad">내 정보</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = mysql_query("select * from 2017dbterm.user where userID='$login_session'");
   //echo $sql;
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>아이디</td>';
        echo '<td>'.$a['userID'].'</td>';
        echo "</tr>";
        echo '<tr>';
        echo '<td>이름</td>';
        echo '<td>'.$a['name'].'</td>';
        echo "</tr>";
        echo '<tr>';
        echo '<td>주소</td>';
        echo '<td>'.$a['address'].'</td>';
        echo "</tr>";
        echo '<tr>';
        echo '<td>연락처</td>';
        echo '<td>'.$a['phone'].'</td>';
        echo "</tr>";
        echo '<tr>';
        echo '<td>계좌</td>';
        echo '<td>'.$a['account'].'</td>';
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
</div>
 
<br>
<br>
<h4>받은 메세지</h4>
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">받은 날짜</th>
      <th class="tg-huad">내용</th>
      <th class="tg-huad">보낸 사람</th>
    </tr>
  </thead>
  <tbody>
<?php
   $sql = mysql_query("select * from 2017dbterm.message where rID='$login_session'");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['post'].'</td>';
        echo '<td>'.$a['sID'].'</td>';
        echo "</tr>";
   }
?>
  </tbody>
</table>
</div>
<br>
<br>
<h4>보낸 메세지</h4>
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">보낸 날짜</th>
      <th class="tg-huad">내용</th>
      <th class="tg-huad">받는 사람</th>
    </tr>
  </thead>
  <tbody>
<?php
   $sql = mysql_query("select * from 2017dbterm.message where sID='$login_session'");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['post'].'</td>';
        echo '<td>'.$a['rID'].'</td>';
        echo "</tr>";
   }
?>
  </tbody>
</table>
</div>
<br>
<br>
<h4>받은 선물함</h4>
 

<br>
<br>

 
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">받은 날짜</th>
      <th class="tg-huad">받은 선물</th>
 
 
      <th class="tg-huad">수량</th>
 
      <th class="tg-huad">가격</th>
      <th class="tg-huad">보낸 사람</th>
    </tr>
  </thead>
  <tbody>
<?php
   $sql = mysql_query("select * from 2017dbterm.user U inner join (2017dbterm.receipt R inner join 2017dbterm.pfood F on R.pID1=F.pID) on U.userID=R.rID where U.userID='$login_session'");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['type'].'</td>';
 
 
        echo '<td>'.$a['count'].'</td>';
 
        echo '<td>'.$a['money'].'</td>';
        echo '<td>'.$a['sID'].'</td>';
        echo "</tr>";
   }
      $sql1 = mysql_query("select * from 2017dbterm.user U inner join (2017dbterm.receipt R inner join 2017dbterm.pflower F on R.pID1=F.pID) on U.userID=R.rID where U.userID='$login_session'");
   while ($a1 = mysql_fetch_array($sql1)) {
        echo '<tr>';
        echo '<td>'.$a1['date'].'</td>';
        echo '<td>'.$a1['type'].'</td>';
 
 
        echo '<td>'.$a1['count'].'</td>';
 
        echo '<td>'.$a1['money'].'</td>';
        echo '<td>'.$a1['sID'].'</td>';
        echo "</tr>";
   }
?>
 

  </tbody>
</table>
<br>
<br>
<h4>보낸 선물함</h4>
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">보낸 날짜</th>
      <th class="tg-huad">보낸 선물</th>
      <th class="tg-huad">가격</th>
      <th class="tg-huad">받는 사람</th>
    </tr>
  </thead>
  <tbody>
<?php
   $sql = mysql_query("select * from 2017dbterm.user U inner join (2017dbterm.receipt R inner join 2017dbterm.pfood F on R.pID1=F.pID) on U.userID=R.sID where U.userID='$login_session'");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['type'].'</td>';
        echo '<td>'.$a['money'].'</td>';
        echo '<td>'.$a['rID'].'</td>';
        echo "</tr>";
   }
      $sql1 = mysql_query("select * from 2017dbterm.user U inner join (2017dbterm.receipt R inner join 2017dbterm.pflower F on R.pID1=F.pID) on U.userID=R.sID where U.userID='$login_session'");
   while ($a1 = mysql_fetch_array($sql1)) {
        echo '<tr>';
        echo '<td>'.$a1['date'].'</td>';
        echo '<td>'.$a1['type'].'</td>';
        echo '<td>'.$a1['money'].'</td>';
        echo '<td>'.$a1['rID'].'</td>';
        echo "</tr>";
   }
?>

  </tbody>
</table>
<br><br>
<h4>충전내역</h4>
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">날짜</th>
      <th class="tg-huad">금액</th>
    </tr>
  </thead>
  <tbody>
<?php
   $sql = mysql_query("select * from 2017dbterm.foraccount where userID='$login_session'");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['date'].'</td>';
        echo '<td>'.$a['account'].'</td>';
        echo "</tr>";
   }
?>

 
 
  </tbody>
</table>
</div>

