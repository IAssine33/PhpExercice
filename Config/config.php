<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(3600);


// Creation des variables pour se connecter sur mySQL et se loguer 
$dsn = 'mysql:host=localhost:3306;dbname=piscine_php';  //(chemin d'accés pour le serveur sur la base de donner).
$username = 'root';
$password = 'root';

//  Essayer de se connecter via les variables créer("chemin d'accés pour le serveur sur la base de donner", username, password).
try {
    $pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>