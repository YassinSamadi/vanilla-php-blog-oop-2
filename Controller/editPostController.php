<?php

class editpostContr extends editPost{

        private $title;
        private $content;
        private $id;
        public function __construct($title,$content,$id)
        {
            $this->title = $title;
            $this->content = $content;
            $this->id = $id;
        }

        public function editpost()
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
           
            $this->updatePost($this->title,$this->content,$this->id);
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