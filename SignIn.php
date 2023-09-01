<!DOCTYPE html>
<head>
<title>Sign In Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }

  .login-form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  .login-form input[type="text"],
  .login-form input[type="password"],
  .login-form input[type="submit"] {
    display: block;
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .login-form input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    font-weight: bold;
    cursor: pointer;
  }

  .login-form input[type="submit"]:hover {
    background-color: #3399ff;
  }

  .content{
    padding-top: 100px;
  }
  .heading {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      padding: 20px;
  }

  .heading h1 {
      margin: 0;
      font-size: 28px;
  }
  a{
    text-decoration: none;
  }

</style>
</head>
<body>
<div class="heading">
        <h1>Reddit Clone</h1>
    </div>
<div class="content">
<form class="login-form" action="SignIn.php" method="post">
  <h2>Sign In</h2>
  Username:<input type="text" id="username" name="uname" placeholder="Enter your username">
  <br>
  Password:<input type="password" id="password" name="upassword" placeholder="Enter your password">
  <br>
  <input type="submit" name="signin" value="Sign In">
  <a href = "SignUp.php">Dont have an account?</a>
</form>


<?php
if (isset($_POST["signin"])) {
  include "dbconnect.php";
  $uName = $_POST["uname"];
  $upassWord = $_POST["upassword"];
  $sql = "SELECT * FROM users WHERE uname = '$uName' AND upassword = '$upassWord'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
        session_start();
        $_SESSION['uname'] = $uName;
        $_SESSION['upassword'] = $upassWord;
        header('Location: forum.php');
  } else {
    echo 'Username or password incorrect' ;
  }
  $conn->close();
}
?>

</body>
</html>
