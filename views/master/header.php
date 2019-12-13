<?php
$page = $_SERVER['PHP_SELF'];
$counter = strlen($page);
$current_pag = substr($page, 34, $counter);
//print($current_pag);
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Stars Traveler</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A trip to Cosmos">
    <meta name="author" content="Alexander Almengor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!--Check styles-->
    <?php

    switch ($current_pag) {

        case "login.php":
            echo ('<link rel="stylesheet" type="text/css" href="../css/login.css">');
            echo ('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
            <!-- Google web font "Open Sans" -->
            <link rel="stylesheet" href="http://localhost/ProyectoFinal/SliderPuzzle/fonts/font-awesome-4.5.0/css/font-awesome.min.css">                
            <!-- Font Awesome -->');    
        break;

        case "dashboard.php":
            echo ('<!-- load stylesheets -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
            <!-- Google web font "Open Sans" -->
            <link rel="stylesheet" href="http://localhost/ProyectoFinal/SliderPuzzle/fonts/font-awesome-4.5.0/css/font-awesome.min.css">                
            <!-- Font Awesome -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">                                      
            <!-- Bootstrap style -->
            <link rel="stylesheet" href="../css/hero-slider-style.css">                              
            <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
            <link rel="stylesheet" href="../css/magnific-popup.css">                                 
            <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
            <link rel="stylesheet" href="../css/tooplate-style.css">');
            echo ('<link rel="stylesheet" type="text/css" href="../css/appinterface.css">');
            break;

        default:
            echo ('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
            <!-- Google web font "Open Sans" -->
            <link rel="stylesheet" href="http://localhost/ProyectoFinal/SliderPuzzle/fonts/font-awesome-4.5.0/css/font-awesome.min.css">                
            <!-- Font Awesome -->
            <link rel="stylesheet" type="text/css" href="../css/appinterface.css">
            <link rel="stylesheet" href="../css/tooplate-style.css">');
        break;
    }

    ?>
        <link rel="shortcut icon" type="image/png" href="https://broalmen.000webhostapp.com/WEB%20SERVER/favicon.png">
</head>