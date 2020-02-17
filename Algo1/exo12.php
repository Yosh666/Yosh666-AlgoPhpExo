<?php
$tableau=['Micka'=>'FRA','Virgile'=>'ESP','Marie-Claire'=>'ANG'];
foreach($tableau as $nom => $nat){
    
    if($nat=="FRA"){
    echo "Salut ".$nom. "<br>";
    }
    elseif ($nat== "ESP"){
        echo "Hola".$nom. "<br>";
    }
    elseif ($nat== "ANG"){
        echo "Hello".$nom. "<br>";
    }
    else{
        echo "Xgluglu <br>";
    }
        
}

?>
<?php
     ksort($tableau);
    foreach($tableau as $nom => $nat){
   
        if($nat=="FRA"){
        echo "Salut ".$nom. "<br>";
        }
        elseif ($nat== "ESP"){
            echo "Hola".$nom. "<br>";
        }
        elseif ($nat== "ANG"){
            echo "Hello".$nom. "<br>";
        }
        else{
            echo "Xgluglu <br>";
        }
            
    }
?>