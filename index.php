<?php
    session_start();
    //include('./Controller/Blogcontrollers.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    | 

    <?php 
        if(isset($_SESSION["email"]))
        {
            
            echo "Hello " . $_SESSION["email"];
    ?> 
            <a  href="./pages/home.php">Home</a> 
            <a href="./pages/addpost.php">Add post</a> 
            <a href="./includes/logout.php">logout</a> 
            
    <?php
        }
        else
        {
    ?>
            <a  href="./pages/home.php">Home</a> 
            <a href="./pages/register.php">Register</a> | 
            <a href="./pages/login.php">Login</a> 
    <?php
        }
    ?>
</head>
<body>
    
</body>
</html>