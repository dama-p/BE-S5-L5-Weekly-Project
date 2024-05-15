<?php

include __DIR__ . '/init.php';
include __DIR__ . '/header.php';

$myId = $_GET["id"];

$stmt = $pdo->prepare('SELECT * FROM articoli WHERE id = ?');
$stmt->execute([$myId]);
$row = $stmt->fetch();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
        // Ottenere i dati dal form
        $nome = $_POST['nome'];
        $prezzo = $_POST['prezzo'];
        $img = $_POST['img'];

        $stmt = $pdo->prepare("UPDATE articoli SET nome = :nome, prezzo = :prezzo, img = :img WHERE id = $myId");
        $stmt->execute([
            'nome' => $nome,
            'prezzo' => $prezzo,
            'img' => $img,
           
        ]);
        header('Location: admin.php');


}

?>

<div style="max-width: 70%;" class="mx-auto">

<h1 class="text-center">Edit</h1>

<form action="" method="POST" novalidate>
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Title</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $row['nome'] ?>">
    </div>
    <div class="mb-3">
        <label for="prezzo" class="form-label">Publishing Date</label>
        <input type="number" class="form-control" id="prezzo" name="prezzo" value="<?= $row['prezzo'] ?>">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Book img</label>
        <input type="text" class="form-control" id="img" name="img" value="<?= $row['img'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
</div>

