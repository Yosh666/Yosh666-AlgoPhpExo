<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $montantFranc=100;
    echo "Montant en francs: ".$montantFranc. "<br/>";
    $montantEuro= $montantFranc/6.55957;
    echo "Montant en Euros: ".round($montantEuro,2)." €";
    ?>

</body>
</html>