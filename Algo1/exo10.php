<?php
$montantverse=200;
$totaldu=137;
$reste=$montantverse-$totaldu;
$dix=0;
$cinq=0;
$deux=0;
$un=0;
echo "Montant a payer: ".$totaldu. "€.  <br/>";
echo " Montant versé: ".$montantverse. "€. <br/>";

if ($montantverse<$totaldu){
    echo "il manque : ".$totaldu-$montantverse. "€ file la thune!";
}
elseif ($reste==0){
    echo "merci pour vos achat au revoir";
}
else{
    echo "je vous dois ".$reste."€<br/>";
    while($reste>=10){
        $dix=$dix+1;
        $reste=$reste-10;
    }
    while($reste>=5){
        $cinq=$cinq+1;
        $reste=$reste-5;
    }
    while($reste>=2){
        $deux=$deux+1;
        $reste=$reste-2;
    }
    while($reste>=1){
        $un=$un+1;
        $reste=$reste-1;
    }
    echo "rendu de monnaie: <br/>";
    echo "je vous donne :";
      if ($dix>0){
        echo " ".$dix. "billets de 10€,";
      }
      if ($cinq>0){
          echo " ".$cinq. "billet de 5e,";
      }
      if ($deux>0){
        echo " ".$deux. "piéces de 2€,";
      }
      if ($un>0){
        echo " ".$un. "piéce de 1€,";
      }
    
    echo " bonne journée!";
}
?>
