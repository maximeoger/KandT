<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=kandt', root, root);
} catch(PDOException $e) {
    echo "Erreur ! :" . $e -> getMessage() . "<br/>";
    die();
}