<?php
    include("config.php");
    include("lock.php");
?>
<html>
	<head>
		<title>2017DBTERM FOR JIYUN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1><?php echo $login_session; ?>님 반갑습니다.</h1>
								<p>♥지윤톡입니다♥<br />
								<!--[-->사랑하는 사람과 선물과 메세지를 주고받으세요.<!--]--></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="flower.php">선물(꽃)</a></li>
								<li><a href="food.php">선물(음식)</a></li>
								<li><a href="deposit.php">충전하기</a></li>
								<li><a href="send.php">선물하기</a></li>
								<li><a href="myinfo.php">내 정보</a></li>
								<li><a href="logout.php">로그아웃</a></li>
							</ul>
						</nav>
					</header>

				

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
