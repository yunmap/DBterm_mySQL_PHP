<?php
include "config.php";
include "lock.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	  $sID=addslashes($_POST['sID']); 
	  $pID=addslashes($_POST['pID']);
	  $msg=addslashes($_POST['msg']);
	  if ($pID>0) {
	  	$acc = mysql_query("SELECT * FROM 2017dbterm.user WHERE userID='$login_session'");
	  	$acco = mysql_fetch_array($acc);
	  	$account = $acco['account'];
	  	//echo $account;
	  	  //echo "선물전송";
		  if ($pID<50000) {
		  	$sql="UPDATE 2017dbterm.pfood SET count=count-1 WHERE pID='$pID'";
		  	$money = mysql_query("SELECT * FROM 2017dbterm.pfood WHERE pID='$pID'");
	  		$a = mysql_fetch_array($money);
	  		$money1=$a['money'];
	  	  } else {
	  	  	$sql="UPDATE 2017dbterm.pflower SET count=count-1 WHERE pID='$pID'";
		  	$money = mysql_query("SELECT * FROM 2017dbterm.pflower WHERE pID='$pID'");
	  		$a = mysql_fetch_array($money);
	  		$money1=$a['money'];
	  	  }
	  	  if ($money1<=$account) {
	  		mysql_query($sql); 
	  		$sql1="INSERT INTO 2017dbterm.receipt (receiptID, rID, money, paid, pID1, sID) VALUES (NULL, '$sID', '$money1', 1, '$pID', '$login_session')";
	        mysql_query($sql1);
	        //echo "영수증 생성 완료";
	        $sql2="UPDATE 2017dbterm.user SET account=account-$money1 WHERE userID='$login_session'";
	        mysql_query($sql2);
	        //echo "돈 빼는것도 완료";
	        echo "<script>alert(\"선물 전송이 완료되었습니다.\");</script>";
	      } else {
	      	echo "<script>alert(\"잔액이 부족합니다. 충전 후 이용해주세요.\");</script>";
	      }

	  } else {
	  	  //echo "메세지전송";
	  	  $sql1="INSERT INTO 2017dbterm.message (mID, rID, sID, post) VALUES (NULL, '$sID', '$login_session', '$msg')";
	      mysql_query($sql1);
	      echo "<script>alert(\"메세지 전송이 완료되었습니다.\");</script>";
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
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<!--utf-8설정-->
<title>선물을 보냅니다..</title>
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
<form action="" method="post">
	<center>
	<table class="tg">
	<thead>
	<tr>
		<th class="tg-huad">
			정보
		</th>
		<th class="tg-huad">
			입력
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
			<label>받는 사람 아이디</label>
		</td>
		<td>
			<input type="text" name="sID" class="box"/>
		</td>
	</tr>
	<tr>
		<td>
			<label>선물 번호</label>
		</td>
		<td>
			<input type="text" name="pID" class="box"/>
		</td>
	</tr>
	<tr>
		<td>
			<label>메세지</label>
		</td>
		<td>
			<input type="text" name="msg" class="box"/>
		</td>
	</tr>
	<tr>
		<td>
			<label>선물하기</label>
		</td>
		<td>
			<center><input type="submit" value="선물"/>
		</td>
	</tr>
	</tbody>
	</table>
</form>
<br>
<br>

	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>
<center><table class="tg">
  <thead>
    <tr>
      <th class="tg-huad">선물 번호</th>
      <th class="tg-huad">선물 이름</th>
      <th class="tg-huad">가격</th>
      <th class="tg-huad">남은 수량</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = mysql_query("select * from 2017dbterm.pfood");
   while ($a = mysql_fetch_array($sql)) {
        echo '<tr>';
        echo '<td>'.$a['pID'].'</td>';
        echo '<td>'.$a['type'].'</td>';
        echo '<td>'.$a['money'].'</td>';
        echo '<td>'.$a['count'].'</td>';
        echo "</tr>";
   }
   $sql1 = mysql_query("select * from 2017dbterm.pflower");
   while ($a1 = mysql_fetch_array($sql1)) {
        echo '<tr>';
        echo '<td>'.$a1['pID'].'</td>';
        echo '<td>'.$a1['type'].'</td>';
        echo '<td>'.$a1['money'].'</td>';
        echo '<td>'.$a1['count'].'</td>';
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
</div>