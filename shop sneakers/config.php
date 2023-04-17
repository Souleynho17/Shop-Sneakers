<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$bdd = 'shop_db';


echo 'connexion reussite';

try{
    // connexion à la base de données
$conn = new PDO('mysql:host='.$servername.';port=3307;dbname='.$bdd, $username, $password);

    
}
// Si le try ne fonctionne pas :
catch(Exception $e){
    echo $e->getMessage();
    die();
}





?>