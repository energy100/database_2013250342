<?php
  $studentID = $_POST['user'];
  $password = $_POST['pass'];
/*
  $studentID = stripcslashes($studentID);
  $password = stripcslashes($password);
  $studentID = mysql_real_escape_string($studentID);
  $password = mysql_real_escape_string($password);
*/

  //서버 연결하고 database가져옴
  mysql_connect("localhost", "root", "alsehdrb1");
  mysql_select_db("min_db"); //min_db는 server내의 schema이름

  //user한테 database 쿼리
  $result = mysql_query("SELECT studentID, password, studentName FROM student WHERE studentID = '$studentID' and password = '$password'")
    or die("Failed to query database".mysql_error());

  $row = mysql_fetch_array($result);
  if ($row['studentID'] == $studentID && $row['password'] == $password){
    echo "Login success!! Welcome!! ".$row['studentName'];
    header('Location: http://localhost:8080/php_study/main.php?id='.$row['studentID']'');

  } else echo "Failed to Login..TT";

 ?>
