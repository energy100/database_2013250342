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
	<title>HELLO WORLD!!</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
<body id = target>

<header>
	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
	<h5>학생 정보확인 가능한 관리페이지</h5>
	<h2><a href="http://localhost:8080/php_study/studentInfo.php">Student Information</h2>
	<h2><a href="http://localhost:8080/php_study/teacherInfo.php">Teacher Admin</a></h2>

</header>

	<nav>
		<ol>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			echo '<li><a href = "http://localhost:8080/php_study/studentInfo.php?id='.$row['studentID'].'">'.$row['studentName'].'</a></li>'."\n";
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
		<a href="http://localhost:8080/php_study/studentRegister.php">sign in</a>
		<input type="button" name="" value="white" onclick="document.getElementById('target').className = 'white'" />
		<input type="button" name="" value="black" onclick="document.getElementById('target').className = 'black'" />
	</div>

<article>
	<?php
	if(empty($_GET['id']) === false){
		$sql = 'SELECT * FROM student WHERE studentID='.$_GET['id'];
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		echo '<h2>'.$row['studentName'].'</h2>';
		echo '<p> ID : ' .$row['studentID'].'</p>';
		echo '<p>Name : '.$row['studentName'].'</p>';
		echo '<p>Password : '.$row['password'].'</p>';
		echo '<p>Level : ' .$row['level'].'</p>';
	}
		 	?>
</article>
</body>

</html>
