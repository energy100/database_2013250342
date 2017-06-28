<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');

  $sql = "INSERT INTO student (studentID, password, studentName) VALUES('".$_POST['studentID']."','" .$_POST['password']."','" .$_POST['studentName']."')";
  $result = mysqli_query($conn, $sql);
  header('Location: http://localhost:8080/php_study/')
  ?>
  <!--courseID : en014, studentName : John, TeacherID : 8-->
