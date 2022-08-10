<?php

    if(isset($_POST["register"]))
    {
        //get data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // instantiate signup
        include("../classes/DB.php");
        include("../classes/signupClass.php");
        include("../Controller/signupController.php");
        

        $signup = new signupContr($name,$email,$password);
        //running error
        $signup->signupUser();
        
        //go back to home

        header('location: ../index.php?error=none');

    }

?>