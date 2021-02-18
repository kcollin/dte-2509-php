<?php
class vare{
    private $varenr;
    private $varenavn;
    private $varepris;
    private $antall;
    private $verdi;
    
    function __construct($varenr="0", $varenavn="0", $varepris=0.0, $antall=0){
        $this->varenr=$varenr;
        $this->varenavn=$varenavn;
        $this->varepris=(float)$varepris;
        $this->antall=$antall;
        $this->verdi=(float)($this->varepris*$this->antall);
    }
    
    function visVerdi() {
        return $this->verdi;    
    }
    
    function visPris() {
        return $this->varepris;
    }
    
    function visNavn() {
        return $this->varenavn;    
    }
    function visAntall() {
        return $this->antall;
    }
}
?>