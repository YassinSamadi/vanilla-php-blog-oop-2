<?php

class editPost extends Dbh{


    protected function updatePost($title,$content,$id)    
    {
        
        $stmt = $this->connect()->prepare("UPDATE Posts SET title = ?, content =?  WHERE id=?");

        
        if(!$stmt->execute(array($title,$content,$id)))
        {
            $stmt = null;
            header("location: ../index.php?error=failed");
            exit();
        }

        $stmt = null;
    }    

}