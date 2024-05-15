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
        
    }

    function render() {
        echo '<div class="col-3">';
        echo '<div class="card" style="width: 100%;">';
        echo '<img src="'.$this->img.'" class="card-img-top" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>'.$this->nome.'</h5>';
        echo '<p>'. 'Prezzo: ' . $this->prezzo. '$</p>';
        echo '<a href="update.php?id=' .$this->id. '"><button class="btn btn-success me-2">Update</button></a>';
        echo '<a href="delete.php?id=' .$this->id. '"><button class="btn btn-danger">Delete</button></a>';
        echo '</div></div></div>';

    }

}

