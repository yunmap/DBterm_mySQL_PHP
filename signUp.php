<doctype html>
<html>
<head>
<title>sign up page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>input your information</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="userID"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="PW"></td>
  </tr>
  <tr>
   <td>Confirm Password</td>
   <td><input type="password" size="30" name="PW1"></td>
  </tr>
  <tr>
   <td>name</td>
   <td><input type="text" size="12" maxlength="10" name="name"></td>
  </tr>
  <tr>
   <td>address</td>
   <td><input type="text" size="40" name="address"></td>
  </tr>
    <tr>
   <td>phone</td>
   <td><input type="text" size="40" name="phone"></td>
  </tr>
 </table>
 <button type="submit" class="btn btn-info" onclick="RegisterUser()">회원가입<i class="fa fa-check spaceLeft"></i></button>
<input type=reset value="rewrite">
</form>
</body>
</html>

<script>
    function RegisterUser() {
        if (document.getElementById("PW").value == document.getElementById("PW1").value) {
            var request = new XMLHttpRequest();
            var params = "?userID=" + document.getElementById("userID").value + "&PW=" + document.getElementById("PW").value
                + "&name=" + document.getElementById("name").value + "&address=" + document.getElementById("address").value
                + "&phone=" + document.getElementById("phone").value;
 
            request.open("GET", "register_user.php" + params, true);
            request.onreadystatechange = function () {
                if (request.readyState == 4) { //서버로부터 응답상태
                    if (request.status == 200 || request.status == 0) {//200 : 웹 서버의 응답처리상태
                        var str = request.responseText;
                        if (str == "1") {
                            alert("Success!!");
                        }
                        else {
                            alert("Fail!!");
                        }
                    }
                }
            }
            request.send(null);
        }
        else {
            alert("Passwords not same");
        }
    }
</script>