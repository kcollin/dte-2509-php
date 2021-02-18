<?php
abstract class Kjoretoy {

    protected $navn;
    protected $farge;
    protected $pris;
    protected $serienr;
    protected $modell;

    function __construct(String $navn, String $farge, String $pris, String $serienr, String $modell){
        $this->navn= $navn;
        $this->farge= $farge;
        $this->pris= $pris;
        $this->serienr= $serienr;
        $this->modell= $modell;
    }
    //metoder er funksjoner som returnerer noe
    public function finnNavn() : String {
        return $this->navn;
    }
    public function finnFarge() : String {
        return $this->farge;
    }
    public function finnPris() : String {
        return $this->pris;
    }
    public function finnSerienr() : String {
        return $this->serienr;
    }
    public function finnModell() : String {
        return $this->modell;
    }
    public function visSpesifikasjon() : String {
        $temp =  "Navn: " . $this->navn . "\n";
        $temp .= " farge: " . $this->farge . "\n";
        $temp .= " pris: " . $this->pris . "\n";
        $temp .= " serienr: " . $this->serienr . "\n";
        $temp .= " modell: " . $this->modell . "\n";
        return $temp;
    }
    public function settPris($verdi){
        $this->pris = $verdi;
    }
    public function settNavn($verdi){
        $this->navn = $verdi;
    }
}


class Bil extends Kjoretoy {

    private $hester;

    function __construct(String $navn, String $farge, String $pris, String $serienr, String $modell, String $hester){

        parent::__construct($navn, $farge, $pris, $serienr, $modell);
        $this->hester= $hester;

    }
    //metoder er funksjoner som returnerer noe
    public function finnHester() : String {
        return $this->hester;
    }

    public function visSpesifikasjon() : String {
        $temp = parent::visSpesifikasjon();
        $temp .= $this->hester . " hester\n";
        return $temp;
    }
    public function settHester($verdi){
        $this->hester = $verdi;
    }

}

class Sykkel extends Kjoretoy {

    private $gir;

    function __construct(String $navn, String $farge, String $pris, String $serienr, String $modell, String $gir){

        parent::__construct($navn, $farge, $pris, $serienr, $modell);
        $this->gir= $gir;

    }

    public function finnGir() : String {
        return $this->gir;
    }

    public function visSpesifikasjon() : String {
        $temp = parent::visSpesifikasjon();
        $temp .= $this->gir . " gir\n";
        return $temp;
    }
    public function settGir($verdi){
        $this->gir = $verdi;
    }

}
?>
