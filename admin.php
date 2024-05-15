<?php

include __DIR__ . '/header.php';
include __DIR__ . '/classes/Product.php';
include_once __DIR__.'/getCard.php'; 

if ($_SESSION['utente']) {
   //  echo "Sei loggato";

    ?> 



<h1 class="my-5" style="text-align:right; color:white;">Admin Page</h1>
    

    <div class="row gy-3">
    
    <?php
    
    $products=[];
    
    foreach ($articoli as $row) {
        $products[] = new Product($row['id'], $row['nome'], $row['prezzo'], $row['img']);
    }
    
    foreach ($products as $row) {
        $row->render();
    }
    
    ?>
    
    
    
    
    </div>




<?php } else {
    echo "Non sei loggato! Fai il log in per visualizzare la pagina!";
}


// var_dump($_SESSION);
include __DIR__ . '/footer.php';

?>