<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
// On commence avec une image et on la convertit en une image à palette
$im = imagecreatefrompng('img/slider/1.png');
imagetruecolortopalette($im, false, 255);

// Couleurs recherchées (RVB)
$colors = array(
    array(254, 145, 154),
    array(153, 145, 188),
    array(153, 90, 145),
    array(255, 137, 92)
);
</body>
</html>