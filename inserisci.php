<?php

include __DIR__ . '/init.php';
include __DIR__ . '/header.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
        // Ottenere i dati dal form
        $nome = $_POST['nome'];
        $prezzo = $_POST['prezzo'];
        $img = $_POST['img'];

        $stmt = $pdo->prepare("INSERT INTO articoli (nome, prezzo, img) VALUES (:nome, :prezzo, :img)");;
        $stmt->execute([
            'nome' => $nome,
            'prezzo' => $prezzo,
            'img' => $img,
           
        ]);
        header('Location: admin.php');

   
}

?>


<h1 class="my-5">Submit a new product</h1>
<form method="post" action="">
    <div class="mb-3">
        <label for="nome" class="form-label">Name</label>
        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" required>
    </div>
    <div class="mb-3">
        <label for="prezzo" class="form-label">Price</label>
        <input type="number" class="form-control" name="prezzo" id="prezzo" aria-describedby="prezzo" required>
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Image Url</label>
        <input type="text" class="form-control" name="img" id="img" aria-describedby="img" required>
    </div>

    <button type="submit" class="btn btn-success mt-5">Submit</button>
</form>

<?php

include __DIR__ . '/footer.php';

?>