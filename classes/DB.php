<?php

class Dbh{
    private $servername = "database";
    private $username = "root";
    private $password = "";
    private $dbname="oopblog";

    protected function connect()
    {
        //try catch
        $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username,$this->password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } 
}



