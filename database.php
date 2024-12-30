<?php 
$serverHost="localhost";
$serverUser="root";
$password="";
$database="user";
$dns="mysql:host=".$serverHost.";dbname=".$database;
$pdo=new PDO($dns,$serverUser,$password);


?>