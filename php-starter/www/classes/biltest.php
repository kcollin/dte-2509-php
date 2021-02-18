<?php
include "bil.class.php"; //Gjør Bil kjent for dette scriptet

//lager en ny instans av Bil og gir egenskapene verdier

$bilenMin = new Bil("Volvo", "Svart", 2000, 12345678, "XC60", 163);
$sykkelenMin = new Sykkel("Diamant", "Svart", 2000, 12345678, "BMX", 5);

echo "Bilen min  er av type " . $bilenMin->finnModell();
echo " og har " . $bilenMin->finnHester() . " hester.<br />";
//echo " Spesifikasjon: " . $bilenMin->visSpesifikasjon() . " <br /><br />";

echo "Sykkelen min  er av type " . $sykkelenMin->finnModell();
echo " og har " . $sykkelenMin->finnGir() . " gir.<br />";
//echo " Spesifikasjon: " . $sykkelenMin->visSpesifikasjon() . " <br />";

$kjoretoy_numerisk = array();
$kjoretoy_numerisk[] = $bilenMin;
$kjoretoy_numerisk[] = $sykkelenMin;

echo "Løkke numerisk array" . "<br/ >";
foreach($kjoretoy_numerisk as $item) {
    echo $item->visSpesifikasjon() . "<br/ >";

}
$kjoretoy = array(
    "Bilen min" => $bilenMin, "Sykkelen min" => $sykkelenMin
);

echo "Løkke assosiativt array" . "<br/ >";
foreach($kjoretoy as $item) {
    echo $item->visSpesifikasjon() . "<br/ >";

}
echo "Hent assosiativt" . "<br/ >";
echo $kjoretoy["Bilen min"]->visSpesifikasjon() . "<br/ >";
?>
