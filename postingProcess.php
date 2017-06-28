<?php
$conn = mysqli_connect("localhost", "root", "alsehdrb1");
mysqli_select_db($conn, "min_db");
$sql = "INSERT INTO Board (title,description,studentName,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['studentName']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost:8080/php_study/Board.php');
?>
