<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texte= "vroum vroum fait la voiture";
    echo "le texte :'".$texte."' contient ".str_word_count($texte)." mots.";
    ?>

</body>
</html>