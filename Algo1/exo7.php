<?php
$age=10;
if($age<6){
    echo "tu es trop petit pour jouer";
}
    elseif ($age<=7){
        $categorie="poussin";
    }
        elseif($age <=9){
           $categorie="pupille";
        }
            elseif($age <=11){
                $categorie="minime";
            }
            else {
                $categorie="cadet";
            }
    echo"l'enfant agé de ".$age. " ans appartient a la catégorie ".$categorie."<br/>";
?>
<?php
    $age=15;
    $categorie="";
    switch(true){
        case ($age<6):
            echo "tu es trop petit pour jouer" ;
        break;
        case($age<=7):
            $categorie="poussin";
        break;
        case ($age<=9):
            $categorie='pupille';
        break;
        case($age<=11):
            $categorie="minime";
        break;
        default:
            $categorie="cadet";
        break;
    }
    echo"l'enfant agé de ".$age. " ans appartient a la catégorie ".$categorie;
?>