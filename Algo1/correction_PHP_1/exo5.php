<?php

$valeurFrancs = 100000;
// $valeurEuros = round($valeurFrancs / 6.55957, 2);
$valeurEuros = number_format($valeurFrancs / 6.55957, 2, ",", " ");

echo "Montant en francs : $valeurFrancs francs<br> $valeurFrancs francs = $valeurEuros €";