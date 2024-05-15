<?php

include_once __DIR__ . '/init.php';

$sql = "SELECT * FROM articoli";
$stmt = $pdo->query($sql);
$articoli = $stmt->fetchAll();

var_dump($articoli);