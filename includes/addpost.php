<?php

    if(isset($_POST["post"]))
    {
        //get data
        $title = $_POST["title"];
        $content = $_POST["content"];
        

        // instantiate signup
        include("../classes/DB.php");
        include("../classes/addPostClass.php");
        include("../Controller/addPostController.php");
        

        $addpost = new addpostContr($title,$content);
        //running error
        $addpost->addPost();
        
        //go back to home

        header('location: ../index.php?error=none');

    }

?>