<?php
include_once __DIR__.'/init.php'; 
include_once __DIR__.'/classes/Utente.php'; 




// Verificare se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['utente']) && isset($_POST['password'])) {
        // Ottenere i dati dal form
        $utente = $_POST['utente'];
        $password = $_POST['password'];

      $utente1=new Utente($utente,$password,$pdo);    

     
    } else {
        echo "Nome utente o password non specificati.";
    }
}

