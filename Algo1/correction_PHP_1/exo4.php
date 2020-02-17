<?php

$phrase = "Engage le jeu que je le gagne";
$phraseLowRev = strtolower(strrev(str_replace(" ","",$phrase)));

if(strtolower(str_replace(" ","",$phrase)) == $phraseLowRev){
    echo "La phrase est palindrome";
}else{
    echo "La phrase est non palindrome";
}