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
            margin-bottom: 5px;
        }
        .post-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .post-content {
            font-size: 14px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="heading">
        <h1>Reddit Clone</h1>
    </div>
    <div class="container">
        <?php include 'menu.php'; ?>
        <div class="forum">
            <h1>Forums</h1>
            <div class="forum-buttons">
                <form action = 'forum.php' method = 'POST'>
                <button name = "forBtn" value = "sports">Sports</button>
                <button name = "forBtn" value = "anime">Anime</button>
                <button name = "forBtn" value = "coding">Coding</button>
                <button name = "forBtn" value = "shopping">Shopping</button>
                </form>
           </div>
           <div class="posts">
           <?php
            $forum = "sports";
            include "dbconnect.php";
            if (isset($_POST["forBtn"])){
                  $forum = $_POST["forBtn"];
            }
            $sql = "SELECT * FROM posts WHERE forum = '$forum'";
            $resultSet = $conn->query($sql);    
            $conn->close();
                    
                    echo '<h2>r/' . $forum . '</h2>';
                    
                    while ($row = $resultSet->fetch_assoc()) { 
                    echo '<div class="post">';
                    echo'<div class="post-username">u/' . $row["user"] . '</div>';
                    echo '<div class="post-title">' . $row["title"] . '</div>';
                    echo '<div class="post-content">' . $row["content"] . '</div>';  
                    echo '</div>';      
                    } 
             ?>
           </div>
           </div>
    </div>
        </div>
    </div>
</body>

</html>
