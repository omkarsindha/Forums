<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }

</style>

<div class="menu">
    <h1><?php echo "u/" . $_SESSION['uname']?></h1>  
    <?php 
    if(!isset($_SESSION['uname']))
    {
    ?>
    <a href="SignIn.php">Sign In</a><br>
    <a href="SignUp.php">Sign Up</a><br>
    <?php 
    } 
    else{
    ?>
    <a href="logout.php">Log Out</a><br>
    <a href="forum.php">Forums</a><br>
    <a href="post.php">Make a post</a><br>
    
    <?php
    }
    ?>
</div>
    
</body>
</html>
