<?php

include_once __DIR__ . "/init.php";

// SELECT DI TUTTE LE RIGHE
$stmt = $pdo->prepare('DELETE FROM articoli WHERE id = ?');
$stmt->execute([$_GET["id"]]);

header("Location: admin.php"); 