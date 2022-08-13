<?php
    
    include("../classes/DB.php");
    include("../classes/editPostClass.php");
    include("../Controller/editPostController.php");
    

    if(isset($_GET['id']))
    {
        $title = $_POST["edittitle"];
        $content = $_POST["editcontent"];
        
        $postid = $_GET['id'];

        $editpost = new editpostContr($title,$content, $postid);
        
        $editpost->editpost();
        header('location: ../index.php?error=none');
    }
    else{
        echo "<h1>error</h1>";
    }

?>