<?php
	$conn = mysqli_connect('localhost', 'root', 'alsehdrb1');
	//서버에 접속하겠다.
	mysqli_select_db($conn, 'min_db');
  //db선택
  $startTime = $_POST['startTime'];
  $language = $_POST['language'];
  $month = $_POST['month'];
  //search.php에서 넘어온 변수 각각 할당

  header('Location: http://localhost:8080/php_study/searchResult.php');

  $sql = 'SELECT courseID, courseTypeID, teacherID, startTime, language, month
  FROM course LEFT JOIN coursetype
  ON course.courseTypeID = coursetype.courseTypeID
  WHERE startTime='.$startTime AND
  language = $language AND
  month = $month;
  //course + coursetype에서 startTime이랑 language랑 month가 input이랑 똑같은 애들 select;


  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

while (empty($_GET['id']) === false){
  echo 'course ID : '.$row['courseID'];
  echo 'course TYPE ID : '.$row['courseTypeID'];
  echo 'MONTH : '.$row['month'];
  echo 'Start Time : '.$row['startTime'];
  echo 'Language : '.$row['language'];
  echo 'Teacher ID : '.$row['teacherID'];
  <br/>

}

?>
