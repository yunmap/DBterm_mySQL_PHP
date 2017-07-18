<?php
include "config.php";
include "lock.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
      $key=addslashes($_POST['search']); 
      //echo $key;
      $sql="SELECT * FROM 2017dbterm.pflower WHERE type LIKE '%$key%' or pID like '%$key%'";
      $result = mysql_query($sql);
      echo '<center><table class="tg"><thead><tr><th class="tg-huad">선물 번호</th><th class="tg-huad">꽃 이름</th><th class="tg-huad">가격</th><th class="tg-huad">남은 수량</th></tr></thead><tbody>';
      if ($result != false) {
        while ($a=mysql_fetch_array($result)) {
          echo '<tr>';
          echo '<td>'.$a['pID'].'</td>';
          echo '<td>'.$a['type'].'</td>';
          echo '<td>'.$a['money'].'</td>';
          echo '<td>'.$a['count'].'</td>';
          echo '</tr>';
        }
      }
    }
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
<title>보낼 꽃을 선택하세요.</title>
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
<br>
<br>
</body>
 
</html>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>
<center>

<table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">검색</th>
    </tr>
  </thead>
  <tbody>
    <form action="" method="post">
    <tr>
      <td><center>
      <input type="text" name="search" class="box"/></a>
    </td>
    <tr><td><center>
      <input type="submit" value="검색"/>
    </td>
  </form>
  </tbody>
</table>
<br><br>

<center>
<table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">선물 번호</th>
      <th class="tg-huad">꽃 이름</th>
      <th class="tg-huad">가격</th>
      <th class="tg-huad">남은 수량</th>
      <th class="tg-huad">선물하기</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = mysql_query("select * from 2017dbterm.pflower");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['pID'].'</td>';
        echo '<td>'.$a['type'].'</td>';
        echo '<td>'.$a['money'].'</td>';
        echo '<td>'.$a['count'].'</td>';
        echo "<td width='80'>
            <button onclick='javascript:present()' name='present' class='button primary small'>선물하기</button></a>";
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
    <script>
        function present() {
            if (confirm("정말 선물할까요?") == true)
                   {   window.location = "send.php";}
            else {   return;     }
        }
    </script>
</div>

