<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('Location: SignIn.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reddit Clone</title>
    <style>
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

        .container {
            display: flex;
        }

    
        .forum {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .forum-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            text-align: center;
        }

        .forum-buttons button {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .post {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            width: 400px;
        }

        .post-username {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .post-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .post-content {
            font-size: 14px;
        }
        h2 {
            text-align: center;
        }
        .post {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .post form {
            max-width: 600px;
            margin: 0 auto; 
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .post form label {
            display: inline-block;
            margin-bottom: 5px;
            font-weight: bold;
            margin-right: 10px;
        }

        .post form input[type="radio"] {
            margin-right: 5px;
        }

        .post form input[type="text"],
        .post form textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            margin-right: 10px;
        }

        .post form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
            display: block;
        }
    </style>
</head>

<body>
    <div class="heading">
        <h1>Reddit Clone</h1>
    </div>
    <div class="container">
        <?php include 'menu.php'; ?>
        <div class="post">
            <h1>Make a post</h1>
            <form action="post.php" method="POST"> 
                <div>
                <label for="forum">Choose a forum:</label>
                    <br>
                    <input type="radio" id="sports" name="forum" value="sports">
                    <label for="sports">Sports</label>

                    <input type="radio" id="anime" name="forum" value="anime">
                    <label for="anime">Anime</label>

                    <input type="radio" id="coding" name="forum" value="coding">
                    <label for="coding">Coding</label>

                    <input type="radio" id="shopping" name="forum" value="shopping">
                    <label for="shopping">Shopping</label>
                </div>
                <div>
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title">
                </div>
                <div>
                    <label for="content">Post Content:</label><br>
                    <textarea id="content" name="content" rows="4" cols="50"></textarea>
                </div>
                <div>
                    <button type="submit" name = "postpost">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php
if (isset($_POST["postpost"])) {
  include "dbconnect.php";
  $user = $_SESSION['uname'];
  $forum = $_POST["forum"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  if($forum != "" && $title != "" && $content !=""){
  $sql = "INSERT INTO posts (user, forum, title, content) VALUES ('$user','$forum', '$title', '$content')";
  if ($conn->query($sql) === TRUE) {
    echo 'Post posted Successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error . '';
  }
}
else{
    echo "Enter all three fields";
}
}
?>

</body>

</html>
