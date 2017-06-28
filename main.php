</DOCTYPE html>
<html>

<head>
	<meta charset = meta charset= "utf-8">
	<title>welcome student!</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
<body id = target>

<header>
	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
	<h6><a href="http://localhost:8080/php_study/studentInfo.php">Goto admin</a></h6>
	<h5>user를 위한 메인 페이지</h5>
	<h1><a href="http://localhost:8080/php_study/main.php">Language Study</h2>

</header>

	<nav>
		<ol>
			<li><a href = "http://localhost:8080/php_study/MyProfile.php">MyProfile</a></li>
			<li><a href = "http://localhost:8080/php_study/search.php">Search</a></li>
			<li><a href = "http://localhost:8080/php_study/Board.php">Board</a></li>
			<li><a href = "http://localhost:8080/php_study/">LogOut</a></li>
		</ol>
	</nav>

	<article>
		<?php
		if(empty($_POST['user']) === false){
		  $studentID = $_POST['user'];
		  $password = $_POST['pass'];
			//index에서 로그인할때 받아오는 변수들

		  mysql_connect("localhost", "root", "alsehdrb1");
		  mysql_select_db("min_db"); //min_db는 server내의 schema이름

		  //user한테 database 쿼리
		  $result = mysql_query("SELECT studentName, studentID, password FROM student WHERE studentID = '$studentID' and password = '$password'");

		  $row = mysql_fetch_array($result);
		  if ($row['studentID'] == $studentID && $row['password'] == $password){
		    echo "Welcome!! ".$row['studentName'];
			}

}			 	?>
	</article>
</body>

</html>
