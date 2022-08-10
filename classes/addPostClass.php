<?php

class addpost extends Dbh{


    protected function setPost($title,$content)    
    {
        $stmt = $this->connect()->prepare('INSERT INTO Posts(title,content) VALUES (?,?);');

        


        if(!$stmt->execute(array($title,$content)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }    

}