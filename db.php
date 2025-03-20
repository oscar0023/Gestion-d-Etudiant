<?php

$host = 'localhost'; // Hôte de la de la base de données
$dbname = 'etudiants'; //le nom de la base de données
$user = 'root'; // Le nom d'utilisateur MySQL
$pass = ''; // Le mot de passe MySQL

$conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

?>