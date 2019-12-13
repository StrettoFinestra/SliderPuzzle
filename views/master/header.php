<?php
$page = $_SERVER['PHP_SELF'];
$counter = strlen($page);
$current_pag = substr($page, 34, $counter);
//print($current_pag);
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Star Traveler</title>
    <meta name="description" content="A trip to Cosmos">
    <meta name="author" content="Alexander Almengor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!--Check styles-->
    <?php

    switch ($current_pag) {

        case "login.php":
            echo ('<link rel="stylesheet" type="text/css" href="../css/login.css">');
            break;
        default:
            echo ('<link rel="stylesheet" type="text/css" href="../css/appinterface.css">');
    }

    ?>
        <link rel="shortcut icon" type="image/png" href="https://broalmen.000webhostapp.com/WEB%20SERVER/favicon.png">
</head>