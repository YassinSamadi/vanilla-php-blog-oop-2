<?php
    include('./classes/DB.php');
    //include("./classes/connect.php"); 
    //$connection =mysqli_connect($servername,$username,$password,$dbname);
    /*Public class BlogController
    {
        
       public function register($name, $password, $email)
        {
            session_start(); 
            
            $password = password_hash($password,PASSWORD_BCRYPT);
            $duplicateCheck = mysqli_query($connection,"SELECT * FROM users WHERE email='$email'");
            $num_rows = mysqli_num_rows($duplicateCheck);

            if($num_rows == 1)
            {
                return false;
            }
            elseif($num_rows == 0)
            {
                $register = mysqli_query($connection, "INSERT INTO Users(name,email,password) VALUES ('$name','$email','$password')");
                return $register;
            }
        }
        


    }*/
    class Posts extends Dbh
    {
        public function getPosts()
        {
            $sql = "SELECT * from Posts";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch())
            {
                 echo '<br>'. $row['title'] . ' ' .$row['content'] . '<br>';

            }
        }

        public function getPostsStmt($title,$content)
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

        public function setUsers($name,$email,$password)
        {
            $sql = "INSERT INTO Users(name,email,password) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $email,$password]);


        }
    }

?>
