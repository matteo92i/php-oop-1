<?php 

class Movie {
    public $id;
    public $titolo;
    public $durata;
    public $lingua;
    public $categoria;

    function __construct($id, $titolo, $durata, $lingua,$categoria)
    {
        $this ->id = $id;
        $this ->titolo = $titolo;
        $this ->durata = $durata;
        $this ->lingua = $lingua;
        $this ->categoria = $categoria;

    };

    public function getTitolo(){
        return $this -> titolo
    }
    public function getDurata(){
        return $this -> durata
    }
    public function getCategoria(){
        return $this -> categoria
    }
};    



?>