<?php

    if(isset($_POST["register"]))
    {
        //get data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // instantiate signup
        include("../classes/DB.php");
        include("../Controller/signupController.php");
        include("../classes/signupClass.php");

        $signup = new signupContr($name,$email,$password);
        //running error

        
        //go back to home


    }

?>