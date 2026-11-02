
<?php

require_once "Deur.php";

$deur = new Deur("Voordeur");

echo $deur->deurOpenen() . "<br>";
echo $deur->doorDeurLopen() . "<br><br>";

echo $deur->sleutelGebruiken("links") . "<br>";

echo $deur->doorDeurLopen() . "<br><br>";

echo $deur->deurOpenen() . "<br>";
echo $deur->doorDeurLopen() . "<br>";

?>
