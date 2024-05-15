<?php
class Product {
    public $id;
    public $nome;
    public $prezzo;
    public $img;

    public function __construct($id, $nome, $prezzo, $img) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->img = $img;
        echo '<div class="col-3">';
        echo '<div class="card" style="width: 100%;">';
        echo '<img src="'.$this->img.'" class="card-img-top" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>'.$this->nome.'</h5>';
        echo '<p>'. 'Prezzo: ' . $this->prezzo. '$</p>';
        echo '</div></div></div>';
    }

}

