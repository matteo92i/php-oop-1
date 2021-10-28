<?php 

class Movie {
    public $autore;
    public $titolo;
    public $durata;
    public $lingua;
    public $categoria;

    function __construct($genere, $titolo, $durata, $lingua,$categoria)
    {
        $this ->autore = $autore;
        $this ->titolo = $titolo;
        $this ->durata = $durata;
        $this ->lingua = $lingua;
        $this ->categoria = $categoria;

    }
 public function categoria(){
     return ($this->categoria ='fantasi');
 }
 
}    



?>

<pre>
    <?php 
    $filmPrimo =new Movie ('il signore degli annelli la compagnia dell anello', '03:12.40', 'fantasi');
    $filmSecondo =new Movie ('il signore degli annelli le due torri', '04:12.40', 'fantasi');
    $filmTerzo =new Movie ('il signore degli annelli il ritorno del re', '05:12.40', 'fantasi');

    var_dump($filmPrimo ->titolo, $filmPrimo ->durata, $filmPrimo ->genere);
    var_dump($filmSecondo ->titolo, $filmSecondo ->durata, $filmSecondo ->genere);
    var_dump($filmTerzo ->titolo, $filmTerzo ->durata, $filmTerzo ->genere);
    ?>
</pre>