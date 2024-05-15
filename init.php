<?php

session_start();

include_once __DIR__ . '/classes/Utente.php'; 
$servername = "localhost";
$username = "root"; // Cambia questo se il tuo utente MySQL non è 'root'
$password = ""; // Cambia questo con la password del tuo utente MySQL
$dbname = "s5-l5-utenti";

try {
    // Creare connessione PDO
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connessione fallita: " . $e->getMessage());
}