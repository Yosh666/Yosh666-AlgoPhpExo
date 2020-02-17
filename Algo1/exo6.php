<?php
$prixarticle=8.99;
$quantite=6;
$tva=0.2;
$totaltva=$prixarticle*$quantite*$tva;
$total=$prixarticle*$quantite+$totaltva;
echo "Prix produit = ".$prixarticle. " € <br/>";
echo "Quantité: ".$quantite. "<br/>";
echo "TVA: ".$tva*100 ."%<br/>";
echo"Le montant de la facture à régler est de : ".round($total,2)." €";
?>