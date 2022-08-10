<?php

class signupContr extends signup{

        private $name;
        private $email;
        private $password;

        public function __construct($name,$email,$password)
        {
            $this->$name = $name;
            $this->$email = $email;
            $this->$password = $password;
        }

        private function signupUser()
        {
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if($this->invalidName() == false)
            {
                header("location: ../index.php?error=invalidName");
                exit();
            }
            if($this->invalidEmail() == false)
            {
                header("location: ../index.php?error=invalidEmail");
                exit();
            }
            if($this->checkDuplicate() == false)
            {
                header("location: ../index.php?error=checkDuplicate");
                exit();
            }

        $this->setUser($this->name,$this->email,$this->password);
        }

        private function emptyInput()
        {
            $result = false;
            
            if(empty($this->name) || empty($this->email) || empty($this->password))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }
        private function invalidName()
        {
            $result = false;
            if(!preg_match("/^[a-zA-Z]+$/", $this->name))
            {
               $result = false; 
            }
            else
            {
                $result = true; 
            }

            return $result;
        }

        private function invalidEmail()
        {
            $result = false;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
               $result = false; 
            }
            else
            {
                $result = true; 
            }

            return $result;
        }

        private function checkDuplicate()
        {
            $result = false;
            if(!$this->checkUser($this->email))
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