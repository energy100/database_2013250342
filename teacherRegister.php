<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');
	$result = mysqli_query($conn, 'SELECT * FROM teacher');

?>

</DOCTYPE html>
<html>

<head>
	<meta charset = meta charset= "utf-8">
	<title>HELLO WORLD!!</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
	<!--style.css를 가져와서 적용-->


<body id = target>

	<header>
		<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
		<h6><a href="http://localhost:8080/php_study/">logout</a></h6>
		<h5>강사 추가 가능한 관리페이지</h5>
		<h2><a href="http://localhost:8080/php_study/studentInfo.php">Student Admin</h2>
		<h2><a href="http://localhost:8080/php_study/teacherInfo.php">Teacher Admin</h2>
		<!--화면상단 제목-->

	</header>
	<nav>
		<ol>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			echo '<li><a href = "http://localhost:8080/php_study/teacherInfo.php?id='.$row['teacherID'].'">'.$row['teacherName'].'</a></li>'."\n";
			/*
			echo $row['studentID'];
			echo $row['studentName'];
			echo $row['password'];
			echo $row['level'];
			echo $row['skypeID'];
			echo $row['courseID'];
			echo $row['phoneNumber'];
			*/
		}
		 ?>
	</ol>
	</nav>

	<div id = "control">
		<a href="http://localhost:8080/php_study/registerProcessTeacher.php">sign in</a>
		<input type="button" name="" value="white" onclick="document.getElementById('target').className = 'white'" />
		<input type="button" name="" value="black" onclick="document.getElementById('target').className = 'black'" />
	</div>

<article>
	<form action = "registerProcessTeacher.php" method = "POST">
		<p>
			teacherID : <input type = "text" name = "teacherID">
		</p>

		<p>
			teacherName : <input type = "text" name = "teacherName">
		</p>

		<input type="submit" name="name" value="선생님등록">
		</form>
</article>
</body>

</html>
