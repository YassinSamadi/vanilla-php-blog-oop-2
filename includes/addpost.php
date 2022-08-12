<?php
    session_start();

    if(isset($_POST["post"]))
    {
        
        $title = $_POST["title"];
        $content = $_POST["content"];
        
        
        
        include("../classes/DB.php");
        include("../classes/addPostClass.php");
        include("../Controller/addPostController.php");
        
        $user_id =  $_SESSION["id"];
        
        $addpost = new addpostContr($title,$content,$user_id );
        
        $addpost->addPost();

        header('location: ../index.php?error=none');

    }

?>