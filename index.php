<?php
    //session_start();
    include('./Controller/Blogcontrollers.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <a  href="./pages/home.php">Home</a> | 
    <a href="./pages/register.php">Register</a> | 
    <a href="./pages/login.php">Login</a> 
</head>
<body>
    <?php
        $testObj = new Posts();
        $testObj->getPosts();

        $test = new Posts();
        $test->setUsers("test","test@email.test","null");
    ?>
</body>
</html>