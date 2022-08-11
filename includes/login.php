<?php

    if(isset($_POST["login"]))
    {
        
        $email = $_POST["emaillogin"];
        $password = $_POST["passwordlogin"];

        
        include("../classes/DB.php");
        include("../classes/loginClass.php");
        include("../Controller/loginController.php");
        

        $login = new loginContr($email,$password);
        
        $login->loginUser();
        
        

        header('location: ../index.php?error=none');
        
    }

?>
