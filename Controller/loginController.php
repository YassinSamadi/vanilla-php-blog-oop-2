<?php

class signupContr extends Login{

        private $email;
        private $password;

        public function __construct($email,$password)
        {
            $this->email = $email;
            $this->password = $password;
        }

        public function signupUser()
        {
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyinput");
                exit();
            }
        }

        private function emptyInput()
        {
            $result=false;
            
            if(empty($this->name) || empty($this->email) || empty($this->password))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }
}