<?php
    session_start();
    
    include("../classes/DB.php");
    
    
    class Posts extends Dbh
    {
        
        public function getPosts()
        {
            $sql = "SELECT * from Posts";
            $stmt = $this->connect()->query($sql);
            
            while($row = $stmt->fetch())
            {
                ?>
                   <h3><?php echo $row['title']?> </h3> 
                   <p><?php echo $row['content']?> <br></p> 
                   
                <?php
                if($_SESSION["id"] == $row["user_id"])
                {
                    ?>
                    <a href="edit.php?id=<?php echo $row['id'];?>" >Edit post</a> 
                    <a href="../includes/deletepost.php?id=<?php echo $row["id"];?>">Delete post</a> 
                    <?php
                }
            }
        }
    }
    

