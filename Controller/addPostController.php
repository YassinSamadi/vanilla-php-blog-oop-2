<?php

class addpostContr extends addpost{

        private $title;
        private $content;

        public function __construct($title,$content)
        {
            $this->title = $title;
            $this->content = $content;
            
        }

        public function addPost()
        {
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if($this->invalidTitle() == false)
            {
                header("location: ../index.php?error=invalidTitle");
                exit();
            }
           
            $this->setPost($this->title,$this->content);
        }

        private function emptyInput()
        {
            $result=false;
            
            if(empty($this->title) || empty($this->content))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }
        private function invalidTitle()
        {
            $result=false;
            if(!preg_match("/^[a-zA-Z]+$/", $this->title))
            {
               $result = false; 
            }
            else
            {
                $result = true; 
            }

            return $result;
        }


}