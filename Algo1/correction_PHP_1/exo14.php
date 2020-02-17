<?php

$date1 = new DateTime('1985-01-17'); 
$date2 = new DateTime();
$interval = $date1->diff($date2); 
echo $interval->format('%y ans %m mois %d jours');