<?php

    if(isset($_POST["register"]))
    {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        
        include("../classes/DB.php");
        include("../classes/signupClass.php");
        include("../Controller/signupController.php");
        

        $signup = new signupContr($name,$email,$password);
        
        $signup->signupUser();
        
        

        header('location: ../index.php?error=none');

    }

?>