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
                    <a href="">Edit post</a> 
                    <a href="">Delete post</a> 
                    <?php
                }
            }
        }
        
      /*  public function getPosts($title,$content)
        {
            $sql = "SELECT * from Posts WHERE title = ? AND content = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $content]);
            $posts = $stmt->fetchAll();

            foreach($posts as $post)
            {
                echo '<br>'. $post['title'] . ' ' .$post['content'] . '<br>';
            }

        }
       */
    }
    

