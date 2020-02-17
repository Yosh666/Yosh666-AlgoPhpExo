<?php
/*Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22*/
$tableaunote=[10,12,8,19,3,16,11,13,9];

$nbredenote=count($tableaunote);
$totalnote=0;
echo "les notes obtenues par l'élève sont : ";
for ($i=0; $i<$nbredenote;$i++) {
    echo $tableaunote[$i]." ";
    $totalnote= $tableaunote[$i]+$totalnote;
}
$moyenne=$totalnote/$nbredenote;
echo "<br> Sa moyenne générale est donc de : ". round($moyenne,2);
?>