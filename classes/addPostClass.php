<?php

class addpost extends Dbh{


    protected function setPost($title,$content,$user_id)    
    {
        $stmt = $this->connect()->prepare('INSERT INTO Posts(title,content,user_id) VALUES (?,?,?);');

        


        if(!$stmt->execute(array($title,$content,$user_id)))
        {
            $stmt = null;
            header("location: ../index.php?error=failed");
            exit();
        }

        $stmt = null;
    }    

}