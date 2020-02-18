<?php
$url="<img src=img/chihuahua.jpg>";
$n=1;

function repeterImage($url,$n){
    echo str_repeat($url,$n);
}
repeterImage($url,4);
?>