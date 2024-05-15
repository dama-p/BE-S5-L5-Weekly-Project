<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classes/Product.php';
include_once __DIR__.'/getCard.php'; 

    ?>



    <h1 class="mt-5">Sezione amministratore</h1>
    
<?php

$nome='peonia';
$prezzo=222;
$img='https://images.unsplash.com/photo-1557968581-06d4b39ec0d6?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';

$product1 = new Product(1, $nome, $prezzo, $img); ?>

<div class="row">

<?php


foreach ($articoli as $row) {
    $product = new Product($row['id'], $row['nome'], $row['prezzo'], $row['img']);
}

?>




</div>




<?php

include __DIR__ . '/footer.php';

?>