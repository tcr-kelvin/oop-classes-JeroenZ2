<?php

echo "datum " . date("Y-m-d" ). "<br>";
echo "Wasmachine " . $_POST["wasmachine"]. "<br>";
echo "droger " . $_POST["droger"]. "<br>";
echo "koelkast " . $_POST["koelkast"]. "<br>";

$som1 =  $_POST["wasmachine"] + $_POST["droger"] + $_POST["koelkast"];
echo "totaal prijs zonder btw " . $som1 .  "<br>";

echo "totaal prijs met btw " ;
echo $som1 * 1.21;