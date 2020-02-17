<?php
$elements=["Monsieur","Madame","Xgluglu"];
function alimenterListeDeroulante ($elements){
    echo "<select>";
    foreach ($elements as $option){
        echo "<option value='option1'>".$option. "</option>";
    }
    echo "</select>";
}
alimenterListeDeroulante($elements);
?>