<?php

$dsn = 'mysql:host=localhost;dbname=Clinique_Dentaire';
$username = "root"; 
$password = "mysql1234"; 
$options = [];

try {
    
    $connexion = new PDO($dsn, $username, $password, $options);
     
} catch (PDOException $e) {
    
}

?>