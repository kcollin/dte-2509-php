<?php
class handlevogn{
    private  $varer;
    private  $teller;
    private  $samlet_pris;
    
    function __construct(){
        $this->varer= array();
        $this->teller= 0;
        $this->samlet_pris= 0.0;
    }
    
    
    function legg_til_vare(vare $vare) {
        $this->varer[]= $vare;
        $this->teller += 1;
        $this->samlet_pris += $vare->visVerdi();
    }
    
    function vis_varer(){
        foreach($this->varer as $vare)
        {
                echo "<br />Varenavn: ".htmlentities($vare->visNavn())."<br />Pris: ".$vare->visPris()."<br />Antall: ".$vare->visAntall();
                echo "<br />---------------------<br />";
        }
        reset($this->varer);
        echo "<h3>Sum: ".$this->samlet_pris."</h3>";    
    }
    
    function skriv_vareliste(){
        while (list ($key, $val) = each ($this->varer)) {
                echo "<option value='".$val->varenavn."'> &nbsp;- ".$val->varenavn."(".$val->varestr.")</option>";
        }
        reset($this->varer);
    }
    
    /*function regn_ut(){
        $kr=0;
        foreach($this->varer as $arr) {
            $kr = $kr + $arr->varer->varepris;
            echo "<br>Kroner i foreach: ".$kr;
        }
        return $kr;
    }
    
    function hent_vare($nr){
        return $this->varer[$nr];    
    }*/
}
?>