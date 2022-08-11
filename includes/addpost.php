<?php

    if(isset($_POST["post"]))
    {
        //get data
        $title = $_POST["title"];
        $content = $_POST["content"];
        $user_id =  2;

        
        include("../classes/DB.php");
        include("../classes/addPostClass.php");
        include("../Controller/addPostController.php");
        

        $addpost = new addpostContr($title,$content,$user_id );
        
        $addpost->addPost();
        
    

        header('location: ../index.php?error=none');

    }

?>