<?php
$conn = mysqli_connect("localhost", "root", "alsehdrb1");
mysqli_select_db($conn, "min_db");
$result = mysqli_query($conn, "SELECT * FROM Board");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/php_study/style.css">
</head>
<body id="target">
    <header>
      <img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/c0.134.1080.1080/16229427_1800718186919529_5501871067729231872_n.jpg?ig_cache_key=MTQzMjM1OTA4MjMyMDQwMDY3Mw%3D%3D.2.c" alt="고먐미">
      <h6><a href="http://localhost:8080/php_study/studentInfo.php">Goto admin</a></h6>
      <h1><a href="http://localhost:8080/php_study/main.php">Language Study</h2>
      <h1><a href="http://localhost:8080/php_study/Board.php">Board</a></h1>
  </header>

    <nav>
        <ol>
    <?php
    while( $row = mysqli_fetch_assoc($result)){
      echo '<li><a href="http://localhost:8080/php_study/Board.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
    }
    ?>
        </ol>
    </nav>

  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
    <a href="http://localhost:8080/php_study/write.php">쓰기</a>
  </div>
  <article>
  <?php
  if(empty($_GET['id']) === false ) {
      $sql = 'SELECT * FROM Board WHERE id='.$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo '<h2>'.$row['title'].'</h2>';
      echo $row['description'];
  }
  ?>
  </article>
</body>
</html>
