<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 4);

function repeterImage($url, $nb){
    return str_repeat("<img src='$url' alt='chien'>", $nb);
}