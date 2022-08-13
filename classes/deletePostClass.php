<?php

class deletePost extends Dbh{


    protected function removePost($id)    
    {
        
        $stmt = $this->connect()->prepare("DELETE FROM Posts  WHERE id=?");

        
        if(!$stmt->execute(array($id)))
        {
            $stmt = null;
            header("location: ../index.php?error=failed");
            exit();
        }

        $stmt = null;
    }    

}