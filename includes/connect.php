<?php


try {
    $kandt_db = new PDO('mysql:host=localhost;dbname=kandt;host=127.0.0.1','root','root');
} catch(PDOException $e) {
    die("Erreur ! :".$e->getMessage());
}