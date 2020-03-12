<?php
/*'mysql:host=localhost;port=3306;dbname=vehicules',
                "root",
                "",*/
$dsn='mysql:host=localhost;port=3306;dbname=informatique';
$user='root';
$password='';
try{
    $db= new PDO($dsn,$user,$password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}    
catch(PDOException $e){
    echo 'connexion échouée: '.$e->getMessage();
}    