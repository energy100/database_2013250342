<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');

  $sql = "INSERT INTO teacher (teacherID, teacherName) VALUES('".$_POST['teacherID']."','" .$_POST['teacherName']."')";
  $result = mysqli_query($conn, $sql);
  header('Location: http://localhost:8080/php_study/teacherInfo.php')
  ?>
  <!--courseID : en014, studentName : John, TeacherID : 8-->
