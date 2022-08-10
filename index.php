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
        //$testObj = new Posts();
       // $testObj->getPosts();

       // $test = new Posts();
        //$test->setUsers("test","test@email.test","null");
    ?>

<h1>Sign up</h1>
    
    <form class="form" action="../includes/signup.php" method="POST">
        <input name="name" type="text" placeholder="Name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="Password">
        <button name="register" type="submit" class="btn">Register</button>
    </form>


    <h1>LOGIN</h1>
    <form class="form" action="" method="POST">
        <input name="emaillogin" type="text" placeholder="email">
        <input name="passwordlogin" type="password" placeholder="Password">
        <button name="login" type="submit" class="btn">Log in</button>
    </form>
</body>
</html>