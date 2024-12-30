<?php 
require_once "database.php";
require_once "user.php";

$client=new user($_POST['nom'],$_POST['email'],$_POST['password']);
$stmt=$pdo->prepare("insert into client(nom,emaile,password) values(:nom,:emaile,:password)");
$stmt->execute([':nom'=>$client->getNom(),':emaile'=>$client->getEmail(),':password'=>$client->getPassword()])
?>