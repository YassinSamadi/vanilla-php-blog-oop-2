<?php
    include('../Controller/Blogcontrollers.php');
    //define("PATH_ROOT", dirname(__FILE__));
    //include_once PATH_ROOT . "/Blogcontrollers.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $allPosts = new Posts();
        $allPosts->getPosts();
    ?>
    
</body>
</html>