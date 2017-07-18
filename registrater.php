<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIGN-UP for JIYUN's DB!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


      <article class="container">
        <div class="page-header">
          <h1>회원가입 <small>Sign up</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="userID">아이디</label>
              <input type="text" class="form-control" id="userID" placeholder="아이디">
            </div>
			
            <div class="form-group">
              <label for="PW">비밀번호</label>
              <input type="password" class="form-control" id="PW" placeholder="비밀번호">
            </div>
			
            <div class="form-group">
              <label for="PW1">비밀번호 확인</label>
              <input type="password" class="form-control" id="PW1" placeholder="비밀번호 확인">
              <p class="help-block">비밀번호 확인을 위해 다시 한번 입력 해 주세요.</p>
            </div>
            <div class="form-group">
              <label for="name">이름</label>
              <input type="text" class="form-control" id="name" placeholder="이름을 입력해 주세요">
            </div>
            <div class="form-group">
              <label for="address">주소</label>
              <input type="text" class="form-control" id="address" placeholder="주소를 입력해 주세요">
            </div>
            <div class="form-group">
              <label for="phone">전화 번호</label>
              <input type="text" class="form-control" id="phone" placeholder="-를 제외한 전화 번호를 입력해 주세요">
             </div>
			
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info" onclick="RegisterUser()">회원가입<i class="fa fa-check spaceLeft"></i></button>
              <button type="submit" class="btn btn-warning" onclick="Return()">가입취소<i class="fa fa-times spaceLeft"></i></button>
            </div>
        </div>

      </article>

    <script>
    function Return() {
            if (confirm("회원가입을 취소할까요?") == true)
                   {   window.location = "index.php";}
            else {   return;     }
        }
    function RegisterUser() {
        if (document.getElementById("PW").value == document.getElementById("PW1").value) {
            var request = new XMLHttpRequest();
            var params = "?userID=" + document.getElementById("userID").value + "&PW=" + document.getElementById("PW").value
                + "&name=" + document.getElementById("name").value + "&address=" + document.getElementById("address").value
                + "&phone=" + document.getElementById("phone").value;
 
            request.open("GET", "memberSave.php" + params, true);

            request.send(null);

            alert("Success!");
            location.replace("index.php");
        }
        else {
            alert("Passwords not same");
        }
    }
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
