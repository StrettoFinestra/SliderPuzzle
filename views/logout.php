<?php
    session_start();
?>
<html lang="es">
<head>
    <title>Desconectar</title>
    <link rel="stylesheet" type="text/css" href="../css/appinterface.css">
</head>
<body>

<?php

    //Se valida que exista una variable de sesión, si existe se cierra la sesión
    if (isset($_SESSION['usuario_valido'])){
        session_destroy();
        print ("</br></br><p align='center'>[ <a href='login.php'>Conectar</a> ]</p>\n");
    }
    //De otro modo se muestra el mensaje de que no existía una sesión
    else{
        print ("</br></br>\n");
        print ("<p align='center'>No existe una conexión activa</p>\n");
        print ("<p algin='center'> [  <a href='login.php'>Conectar</a>  ]</p>\n");
    }
?>
</body>
</html>