<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texte= "j'ai envie de manger des légumes";
    echo $texte."<br/>";
    echo "ou alors aujourd'hui, ".str_replace("légumes","humains",$texte)." exceptionnellement!";
    ?>
</body>
</html>