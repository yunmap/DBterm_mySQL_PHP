<?php
include "config.php";
include "lock.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $pID1=addslashes($_POST['pID1']);
    $name1=addslashes($_POST['name1']);
    $money1=addslashes($_POST['money1']);
    $count1=addslashes($_POST['count1']);
    //echo $pID1, $name1, $money1, $count1;
    if ($pID1>=50000) {
      $sql1="INSERT INTO 2017dbterm.pflower (pID, money, count, type) VALUES ('$pID1', '$money1', '$count1', '$name1')";
      mysql_query($sql1);
      echo "<script>alert(\"추가가 완료되었습니다.\");</script>";
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
<title>상품관리(꽃)</title>
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
<br>
</body>
 
</html>


<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>

<center><h4>상품(꽃) 등록</h4>
<table class="tg">
  <form action="" method="post">
  <thead>
    <tr>
      <th class="tg-huad">꽃 번호</th>
      <th class="tg-huad">꽃 이름</th>
      <th class="tg-huad">가격</th>
      <th class="tg-huad">남은 수량</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="pID1" class="box"/></td>
      <td><input type="text" name="name1" class="box"/></td>
      <td><input type="text" name="money1" class="box"/></td>
      <td><input type="text" name="count1" class="box"/></td>
    </tr>
  </tbody>
</table><br>
<center><input type="submit" value="추가"/>
</form>



</div>
<br><br>

<center><h4>상품(꽃) 수정</h4>
<table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">선물 번호</th>
      <th class="tg-huad">음식 이름</th>
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
        echo "<td width='48'>
            <button onclick='javascript:tem_delete({$a['pID']})' name='delete' class='button primary small'>삭제</button></a>
            <button onclick='javascript:tem_modify({$a['pID']})' name='modify' class='button primary small'>수정</button></a>";
        echo "</tr>";
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
    <script>
        function tem_delete(pID) {
            if (confirm("정말 삭제할까요?") == true)
                   {   window.location = "delete.php?pID="+pID;}
            else {   return;     }
        }
        function tem_modify(pID) {
            if (confirm("정말 수정할까요?") == true)
                   {   window.location = "modify.php?pID="+pID;}
            else {   return;     }
        }
    </script>
</div>

