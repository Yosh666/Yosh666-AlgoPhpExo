<?php

$tableauValeurs = [true,"texte",10,25.369,array("valeur1","valeur2")];

foreach($tableauValeurs as $valeur){
	echo var_dump($valeur) . "<br/>";
}