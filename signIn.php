<!-- 화면 하단 우측, 등록을 위한 php-->
<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');
	$result = mysqli_query($conn, 'SELECT * FROM student');

?>

</DOCTYPE html>
<html>

<head>
	<meta charset = meta charset= "utf-8">
	<title>welcome user!</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
	<!--style.css를 가져와서 적용-->
</head>

<body id = target>

	<header>
		<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
		<h5>회원가입페이지</h5>
		<h5><a href="http://localhost:8080/php_study/">Back to Login state</a></h5></header>
		<!--화면상단 제목-->

<signTemplate>
	<form action = "signInProcess.php" method = "POST">
		<p>
			studentID : <input type = "text" name = "studentID">
		</p>

		<p>
			studentName : <input type = "text" name = "studentName">
		</p>

		<p>
			password : <input type = "password" name = "password">
		</p>

		<input type="submit" name="name" value="제출">
		</form>
</signTemplate>
</body>

</html>
