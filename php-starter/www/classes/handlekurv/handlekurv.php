<?php
ob_start();   // slaa paa output buffering
include 'vare.class.php';
include 'handlevogn.class.php';
session_start();


if(!isset($_SESSION['handlevogn'])){
    $handlevogn = new handlevogn();
    $_SESSION['handlevogn'] = $handlevogn;
    echo "<br>laga ei ny handlevogn!!!<br>";
}

if(isset($_POST['submit_vare'])){
    $varenr = $_POST['nummer'];
    $navn = $_POST['navn']; 
    $pris = $_POST['pris'];
    $antall = $_POST['antall'];
    $ny_vare = new vare($varenr, $navn, $pris, $antall);
    
    $_SESSION['handlevogn']->legg_til_vare($ny_vare);
}

$_SESSION['handlevogn']->vis_varer();
?>

<form name="test" method="post">
  <fieldset>
    <legend>Legg til en vare </legend>
    <label>
        Varenummer: <input type="text" name="nummer">
    </label> 
    <label> 
        Varenavn: <input type="text" name="navn">
    </label>
        Pris: <input type="text" name="pris">
    <label>
        Antall: <input type="text" name="antall">
    </label> 
    <label>
        <input type="submit" name="submit_vare" value="Legg til vare">
    </label> 
 </fieldset>
</form>
<br>
<a href='destroy.php'>Destroy session</a>
<br> 