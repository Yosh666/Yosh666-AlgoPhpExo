<?php

echo formaterDateFr("2019-02-23");

function formaterDateFr($date){
    setLocale(LC_ALL, 'fr_FR.utf-8');
    return strftime("%A %d %B %Y", strtotime($date));
}