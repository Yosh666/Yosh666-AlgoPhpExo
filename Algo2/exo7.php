<?php
$elements=['Choix 1'=> false,'Choix 2'=>true, 'Choix 3'=>false];
function genererCheckbox($elements){
    foreach($elements as $option=>$cochage){
        if($cochage){
            $check='checked';
        }
        else{
            $check='';
        }
        echo "<div><input type='checkbox' name='choix'".$check.">".$option."</div>";
    }
}
genererCheckbox($elements);
?>