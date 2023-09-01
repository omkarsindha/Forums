<!DOCTYPE html>
<head>
<title>Sign Up Page</title>
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
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 90%;
  }

  .login-form input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    font-weight: bold;
    cursor: pointer;
  }

  .login-form input[type="submit"]:hover {
    background-color:  #3399ff;
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
        a {
          text-decoration: none;
        }
</style>
</head>
<body>
<div class="heading">
        <h1>Reddit Clone</h1>
</div>
<div class="content">
<form class="login-form" action="SignUp.php" method="post">
  <h2>Sign Up</h2>
  Username:<input type="text" id="username" name="uname" placeholder="Enter your username">
  <br>
  Password:<input type="password" id="password" name="upassword" placeholder="Enter your password">
  <br>
  <input type="submit" name="signup" value="Sign Up">
  <a href = "SignIn.php">Already have an account?</a>
</form>
</div>


<?php
if (isset($_POST["signup"])) {
  include "dbconnect.php";

  $uName = $_POST["uname"];
  $upassWord = $_POST["upassword"];
  $sql = "SELECT * FROM users WHERE uname = '$uName'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
        echo"Username is already taken!!!";
  } else {
        $sql = "INSERT INTO users (uname, upassword) VALUES ('$uName', '$upassWord')";
        if ($conn->query($sql) === TRUE) {
          echo 'User Signed Up Successfully';
        } else {
          echo 'Error: ' . $sql . '<br>' . $conn->error ;
        }
  }
  $conn->close();
}
?>

</body>
</html>
