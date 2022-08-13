<?php

class Dbh{
    private $servername = "database";
    private $username = "root";
    private $password = "";
    private $dbname="oopblog";

    protected function connect()
    {
     
       try
       {
            $dbh = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username,$this->password);
            return $dbh;
       }
       catch (PDOException $e)
       {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
       }
       
    } 
}



