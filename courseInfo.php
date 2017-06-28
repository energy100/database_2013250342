<!-- 화면 하단 우측, 등록을 위한 php-->

<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');
	$result = mysqli_query($conn, 'SELECT * FROM coursetype');

?>

</DOCTYPE html>
<html>

<head>
	<meta charset = meta charset= "utf-8">
	<title>courseInfo</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
<body id = target>

<header>
	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">

	<h2><a href="http://localhost:8080/php_study/courseInfo.php">course Information</a></h2>

	<nav>
	<ol>
		<h3> Course List </h3>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			echo '<li><a href = "http://localhost:8080/php_study/courseInfo.php?id='.$row['courseTypeID'].'">'.$row['courseTypeID'].'</a></li>'."\n";
			}
		 ?>
	</ol>
</nav>

<article>
	<?php
		if(empty($_GET['id']) === false){
			$sql = 'SELECT * FROM coursetype WHERE courseTypeID='.$_GET['id'];
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			echo '<h2>'.$row['courseTypeID'].'</h2>';
			echo '<p>month : ' .$row['month'].'</p>';
			echo '<p>language : '.$row['language'].'</p>';
			echo '<p>fee : '.$row['fee'].'</p>';
			}
	?>
</article>

</body>

</html>
