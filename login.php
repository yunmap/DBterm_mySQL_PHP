<?php
 
    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.
    session_start();   //세션의 시작
 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $myusername=addslashes($_POST['username']); 
    $mypassword=addslashes($_POST['password']); 

    

    if ($myusername=='admin' && $mypassword=='pass') {
        $_SESSION['login_user']=$myusername;
     
        header("location: index3.php");
    }
    else {
        $sql="SELECT userID FROM 2017dbterm.user WHERE userID='$myusername' and PW='$mypassword'";
    //echo $sql;
        $result=mysql_query($sql);

        $count=mysql_num_rows($result);
        //echo $count;

        if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다. 
        {
            $_SESSION['login_user']=$myusername;
     
            header("location: welcome.php");  // welcome.php 페이지로 넘깁니다.
        }
        else 
        {
            echo "<script>alert(\"아이디 또는 비밀번호가 잘못되었습니다.\");</script>";
        }
    }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> <!--utf-8설정-->
<title>로그인</title>
</head>
 
<br>
<br>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:나눔고딕, sans-serif;font-size:14px;padding:20px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:나눔고딕, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-huad{background-color:#ffccc9}
</style>

<center><h4>아이디와 비밀번호를 입력해주세요.</h4>
<table class="tg">
  <form action="" method="post">
  <thead>
    <tr>
      <th class="tg-huad">아이디</th>
      <th class="tg-huad">패스워드</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="username" class="box"/></td>
      <td><input type="password" name="password" class="box" /></td>
    </tr>
  </tbody>
</table><br>
<center><input type="submit" value="로그인"/>
</form>



</div>
</body>
 
</html>



