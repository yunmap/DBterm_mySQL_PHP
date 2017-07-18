<?php
 
include('lock.php');
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
</head>
 
<body>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>

<center><br><br><br><br>
<table class="tg">

  <thead>
    <tr>
      <th class="tg-huad"><center>어서오세요! <?php echo $login_session; ?> 님</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><center><a href="index2.php">홈페이지로 이동</a></td>
    </tr>
    <tr>
      <td><center><a href="logout.php">로그아웃</a></td>
    </tr>
  </tbody>
</table><br>
</body>
 
</html>