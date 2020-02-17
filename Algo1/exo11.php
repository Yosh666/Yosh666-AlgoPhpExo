<?php
 $voiture= array ('Peugeot','Renault','BMW','Mercedes');
 $length=count($voiture);
 echo "il y a ".$length. " marques de voiture. <br/>";
 echo "<ul> ";
 for ($i=0;$i<$length;$i++ ){
     echo "<li> ". $voiture [$i]."</li> <br/>";
 }
 echo "</ul>";
 ?>