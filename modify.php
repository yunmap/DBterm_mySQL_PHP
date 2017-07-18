<?php
	include "config.php";
	include "lock.php";

	$pID1 = $_GET['pID'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    	$type=addslashes($_POST['type']); 
		$pID=addslashes($_POST['pID']);
		$money=addslashes($_POST['money']);
		$count=addslashes($_POST['count']);
		if ($pID < 50000) {
			$sql1="UPDATE 2017dbterm.pfood SET type='$type' WHERE pID='$pID1'";
			mysql_query($sql1); 
			$sql2="UPDATE 2017dbterm.pfood SET money='$money' WHERE pID='$pID1'";
			mysql_query($sql2); 
			$sql3="UPDATE 2017dbterm.pfood SET count='$count' WHERE pID='$pID1'";
			mysql_query($sql3); 
			$sql="UPDATE 2017dbterm.pfood SET pID='$pID' WHERE pID='$pID1'";
			mysql_query($sql); 
			echo "<script>alert(\"수정이 완료되었습니다.\");</script>";
			header("location: food_admin.php");
		}
		else {
			$sql1="UPDATE 2017dbterm.pflower SET type='$type' WHERE pID='$pID1'";
			mysql_query($sql1); 
			$sql2="UPDATE 2017dbterm.pflower SET money='$money' WHERE pID='$pID1'";
			mysql_query($sql2); 
			$sql3="UPDATE 2017dbterm.pflower SET count='$count' WHERE pID='$pID1'";
			mysql_query($sql3); 
			$sql="UPDATE 2017dbterm.pflower SET pID='$pID' WHERE pID='$pID1'";
			mysql_query($sql); 
			echo "<script>alert(\"수정이 완료되었습니다.\");</script>";
			header("location: flower_admin.php");
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
<CENTER>
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>
<br>
<h4>상품을 수정합니다.</h4>
<form action="" method="post">
  <center>
  <table class="tg">
  <thead>
  <tr>
    <th class="tg-huad">
           
    </th>
    <th class="tg-huad">
    상품번호  
    </th>
    <th class="tg-huad">
    이름  
    </th>
    <th class="tg-huad">
    가격
    </th>
    <th class="tg-huad">
    수량 
    </th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <center>수정전</center>
    </td>
   <?php
   if ($pID1 < 50000) {
	   $sql = mysql_query("select * from 2017dbterm.pfood where pID='$pID1'");
	   //echo $sql;
	   $a = mysql_fetch_array($sql);
	   echo '<td><center>'.$a['pID'].'</td>';
	   echo '<td><center>'.$a['type'].'</td>';
	   echo '<td><center>'.$a['money'].'</td>';
	   echo '<td><center>'.$a['count'].'</td>';
	   echo "</tr>";
   } else {
	   $sql = mysql_query("select * from 2017dbterm.pflower where pID='$pID1'");
	   //echo $sql;
	   $a = mysql_fetch_array($sql);
	   echo '<td><center>'.$a['pID'].'</td>';
	   echo '<td><center>'.$a['type'].'</td>';
	   echo '<td><center>'.$a['money'].'</td>';
	   echo '<td><center>'.$a['count'].'</td>';
	   echo "</tr>";
   }
   ?>
  </tr>
  <tr>
  	<td>
      <center>수정후</center>
    </td>
    <td>
      <input type="text" name="pID" class="box"/>
    </td>
    <td>
      <input type="text" name="type" class="box"/>
    </td>
    <td>
      <input type="text" name="money" class="box"/>
    </td>
    <td>
      <input type="text" name="count" class="box"/>
    </td>
  </tr>
</table>
<br>
  		<center><input type="submit" value="수정"/>

</form>

</body>
 