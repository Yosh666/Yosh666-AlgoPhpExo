<?php//PDO veut dire Php Database Object
 $bdd= new PDO(
     //le host qu'on met en premier 
     "mysql: host=localhost;port=3306;dbname=voiture",//pour cibler la base de données
     "root",//nom admin
     "",//mot de passe
     array(
         PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES 'utf8'",
         PDO:: ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,//donne des messages d'erreur complet et pas juste le mot ERROR
         PDO:: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC, //permet de récupérer les infos en tableaux associatifs


     )
 );