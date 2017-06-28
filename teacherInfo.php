<!-- 화면 하단 우측, 등록을 위한 php-->
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
	<title>teacherInfo</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
<body id = target>

<header>
	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
	<h6><a href="http://localhost:8080/php_study/">logout</a></h6>
	<h5>강사정보확인 가능한 관리페이지</h5>
	<h2><a href="http://localhost:8080/php_study/studentInfo.php">Student Admin</a></h2>
	<h2><a href="http://localhost:8080/php_study/teacherInfo.php">Teacher Admin</a></h2></header>

	<nav>
		<ol>
			<h3> teacher list </h3>

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
		<a href="http://localhost:8080/php_study/teacherRegister.php">register teacher</a>
		<input type="button" name="" value="white" onclick="document.getElementById('target').className = 'white'" />
		<input type="button" name="" value="black" onclick="document.getElementById('target').className = 'black'" />
	</div>

<article>
	<?php
	if(empty($_GET['id']) === false){
		$sql = 'SELECT * FROM teacher WHERE teacherID='.$_GET['id'];
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		echo '<h2>'.$row['teacherName'].'</h2>';
		echo '<p> ID : ' .$row['teacherID'].'</p>';

	}
		 	?>
</article>
</body>

</html>
