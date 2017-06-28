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

    <form action "searchProcess.php" method = "post">
      <p>희망하는 기간은 얼마인가요?</p>
      <select multiple name="month">
        <option value="1"> "1 month" </option>
        <option value="2"> "2 month" </option>
        <option value="3"> "3 month" </option>
      </select> <br />

      <p>희망하는 시작시간은 얼마인가요?</p>
      <select multiple name="month">
        <option value="1"> "1 month" </option>
        <option value="2"> "2 month" </option>
        <option value="3"> "3 month" </option>
      </select> <br />

      <p>희망하는 레벨은 얼마인가요?</p>
      <select multiple name="month">
        <option value="1"> "Level 1" </option>
        <option value="2"> "Level 2" </option>
        <option value="3"> "Level 3" </option>
        <option value="4"> "Level 4" </option>
        <option value="5"> "Level 5" </option>
      </select> <br />

      <p>희망하는 언어는 무엇인가요?</p>
      <select multiple name="month">
        <option value="en"> "English" </option>
        <option value="jp"> "Japanese" </option>
        <option value="ch"> "Chinese" </option>
      </select> <br />
      <input type="submit" name="name" value="search">

    </form>

      <p><a href ="http://localhost:8080/php_study/courseInfo.php"> about course </a></p>
    </form>

  </body>
</html>
<!--하고싶은건 SELECT courseID, teacherName, startTime, courseTypeID
  FROM course LEFT JOIN teacher
  ON course.teacherID = teacher.teacherID
  WHERE courseTypeID == input AND startTime == input || startTime == input... -->
