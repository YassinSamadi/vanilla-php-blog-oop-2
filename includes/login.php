<?php

    if(isset($_POST["login"]))
    {
        //get data
        $email = $_POST["emaillogin"];
        $password = $_POST["passwordlogin"];

        // instantiate signup
        include("../classes/DB.php");
        include("../classes/loginClass.php");
        include("../Controller/loginController.php");
        

        $login = new loginContr($email,$password);
        //running error
        $login->loginUser();
        
        //go back to home

        header('location: ../index.php?error=none');

    }

?>
