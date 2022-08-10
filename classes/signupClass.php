<?php

class signup extends Dbh{


    protected function setUser($email,$name,$password)    
    {
        $stmt = $this->connect()->prepare('INSERT INTO Users(name,email,password) VALUES (?,?,?);');

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


        if(!$stmt->execute(array($email,$name,$hashedPassword)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
        

    }
    protected function checkUser($email)    
    {
        $stmt = $this->connect()->prepare('SELECT email FROM Users Where name = ?');

        if(!$stmt->execute(array($email)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if($stmt->rowCount()>0)
        {
            $resultCheck = false;
        }
        if($stmt->rowCount()<=0)
        {
            $resultCheck = true;
        }

        return $resultCheck;

    }
}