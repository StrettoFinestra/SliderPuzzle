<?php
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Laboratorio 14 -Login al sitio de Noticias</title>
    <link rel="stylesheet" type="text/css" href="../css/appinterface.css">
</head>

<body>

    <h1>Gestión de noticias</h1>
    <hr>

    <?php
        if (isset($_SESSION['usuario_valido'])){
    ?>
    <ul>
        <li><a href="profile.php">Perfil</a>
        <li><a href="puzzlegame.php">Rompecabezas</a>
        <li><a href="top10.php">Top 10</a>
        <li><a href="history.php">Mi Historial de Resultados</a>
        <li><a href="about.php">Acerca de</a>
    </ul>

    <hr>
    <p>[ <a href='logout.php'>Desconectar</a> ]</p>

    <?php
    }else{
        print ("<br><br>\n");
        print ("<p align='center'>Acceso no autorizado</p>\n");
        print ("<p align='center'> [ <a href='login.php' target='_top'>Conectar</a> ]</p>\n");
    } 
    ?>

</body>

</html>