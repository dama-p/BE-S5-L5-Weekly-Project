<?php


class Utente{
    private $utente;
    private $password;
    function __construct($utente,$password,$pdo){
        $this->utente=$utente;
        $this->password=$password;
        


        $sql = "SELECT * FROM utenti WHERE utente = :utente";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['utente' => $utente]);
        $user = $stmt->fetch();
      
        // Verificare se l'utente esiste e controllare la password
        if ($user) {
            if ($password=== $user['password']) {
                $_SESSION['utente'] = true;
                // Login riuscito
                header("Location: admin.php");
                exit(); // Importante per interrompere l'esecuzione del codice
            } else {
                echo "Nome utente o password errati.";
            }
        } else {
            echo "Nome utente o password errati2.";
            $_SESSION['utente'] = false;
        }
    }

}

