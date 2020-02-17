<?php

$voitures = ["Peugeot","Mercedes","Renault","BMW"];
$nbVoitures = count($voitures);

var_dump($voitures);

echo "Il y a $nbVoitures voitures dans le tableau<br>";

// Méthode FOR
echo "<ul>";
for($i = 0; $i < $nbVoitures; $i++) {
    echo "<li>".$voitures[$i]."</li>";
}
echo "</ul>";

// Méthode foreach (à privilégier)
foreach ($voitures as $marque){ //$marque = 1 élément du tableau
    echo $marque."<br>";
}