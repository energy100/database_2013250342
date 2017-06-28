<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
  </head>

  <body>
    <h1 id = 'intro'> Please Log in </h1>
    <div id="frm">
      <form class="" action = "main.php" action="myProfile.php" action="login.php" method="post">

        <p>
          <label>StudentID : </label>
          <input type="text" name="user" value="1">
        </p>
        <p>
          <label>Password :</label>
          <input type="password" name="pass" value="0219"></p>
        <p> <input id= 'btn' type="submit" name="" value="Log in"></p>
        <p> <a href="http://localhost:8080/php_study/signIn.php">sign in</a></p>
        <p> <a href="http://localhost:8080/php_study/studentInfo.php">start with administrator</a></p>

      </form>
    </div>


  </body>
</html>
