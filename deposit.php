<?php
 
    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.
    include("lock.php");
 
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
      $money=addslashes($_POST['money']); 
      $insql="INSERT INTO 2017dbterm.foraccount (receiptID, userID, account) VALUES (NULL, '$login_session', '$money')";
      mysql_query($insql);
      $sql="UPDATE 2017dbterm.user SET account=account+$money WHERE userID='$login_session'";
      mysql_query($sql);
      echo "<script>alert(\"충전이 완료되었습니다.\");</script>";

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
<title>돈을 충전합니다.</title>
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
<CENTER>
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>
<form action="" method="post">
  <center>
  <table class="tg">
  <thead>
  <tr>
    <th class="tg-huad">
    충전할 금액   
    </th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <input type="text" name="money" class="box"/>
    </td>
  </tr>
  <tr>
    <td>
      <center><input type="submit" value="충전"/>
    </td>
  </tr>

</form>
</body>
 
</html>
