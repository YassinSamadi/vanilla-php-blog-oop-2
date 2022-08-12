<?php

class Login extends Dbh{


    protected function getUser($email,$password)    
    {
        $stmt = $this->connect()->prepare('SELECT password FROM Users WHERE email =?');

        
        if(!$stmt->execute(array($email)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $checkPassword = password_verify($password,$passwordHashed[0]["password"]);

        if($checkPassword == false)
        {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        if($checkPassword == true)
        {
            $stmt = $this->connect()->prepare('SELECT * FROM Users WHERE email =?');
          
            if(!$stmt->execute(array($email)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["email"] =$user[0]["email"];

            $_SESSION["id"] =$user[0]["id"];
            $stmt = null;
        }

        
        


    }
   
}