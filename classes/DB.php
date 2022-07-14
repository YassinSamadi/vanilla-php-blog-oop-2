<?php
$servername = "database";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=oopblog", $username,$password);
$query = $connection->query("SELECT * FROM Posts");
echo"<pre>";
var_dump($query->fetchAll());