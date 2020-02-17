<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$texte="Engage le jeu que je le gagne";
echo "la phrase :'".$texte."'";
$textint=strtolower($texte);
$textint=str_replace(" ","",$textint);

$reverse=strrev($textint);
if ($textint==$reverse){
    echo " est un palindrome";
}
else{
    echo " n'est pas un palindrome.";
}
?>
    
</body>
</html>