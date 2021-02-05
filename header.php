<?php 

    require 'root.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Su mejor opción en un mercado global.">

    <meta http-equiv="Cache-Control" content="public, max-age=3600, must-revalidate" />
    <title>Bramex</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php print(ruta) ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php print(ruta) ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php print(ruta) ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php print(ruta) ?>/img/site.webmanifest">

    <link rel="stylesheet" href="<?php print(ruta) ?>/css/uikit.min.css">
    <link rel="stylesheet" href="<?php print(ruta) ?>/css/style.css?<?php print(rand()); ?>">

    <script src="<?php print(ruta) ?>/js/jquery.min.js"></script>
    <script src="<?php print(ruta) ?>/js/popper.min.js"></script>
    <script src="<?php print(ruta) ?>/js/uikit.min.js"></script>
    <script src="<?php print(ruta) ?>/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="<?php print(ruta) ?>/includes/leaflet/leaflet.css" />
    <script src="<?php print(ruta) ?>/includes/leaflet/leaflet.js"></script>

    <script src="<?php print(ruta) ?>/includes/amcharts4/core.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/charts.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/maps.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/geodata/worldLow.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/geodata/data/countries2.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/themes/animated.js"></script>
    <script src="<?php print(ruta) ?>/includes/amcharts4/lang/es_ES.js"></script>

    <link rel="stylesheet" href="<?php print(ruta) ?>/includes/OwlCarousel2/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php print(ruta) ?>/includes/OwlCarousel2/dist/assets/owl.theme.default.min.css" />
    <script src="<?php print(ruta) ?>/includes/OwlCarousel2/dist/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="<?php print(ruta) ?>/includes/flags/css/flag-icon.css">
</head>
<body>
