<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classes/Product.php';
include_once __DIR__.'/getCard.php'; 

    ?>



    <h1 class="mt-5">Sezione amministratore</h1>
    

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