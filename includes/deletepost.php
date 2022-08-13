<?php
    
    include("../classes/DB.php");
    include("../classes/deletePostClass.php");
    include("../Controller/deletePostController.php");
    

    if(isset($_GET['id']))
    {
               
        $postid = $_GET['id'];

        $editpost = new deletepostContr($postid);
        $editpost->deletepost($postid);

        header('location: ../index.php?error=none');
    }
    else{
        echo "<h1>error</h1>";
    }

?>