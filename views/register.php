<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Laboratorio 14 -Login al sitio de Noticias</title>
    <link rel="stylesheet" type="text/css" href="../css/appinterface.css">

</head>
<h1>Registrarse</h1>
<?php

if (isset($_POST['registrar'], $_POST)) {

    //Asignación de credenciales enviadas por el usuario en variables de trabajo
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    //Se extraen los dos primeros carácteres del usuario
    $salt = substr($usuario, 0, 2);
    $clave_crypt = crypt($clave, $salt);
    //print ($clave_crypt);

    require_once("../class/usuarios.php");
    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->registrar_usuario($nombre, $apellido, $usuario, $clave_crypt);
    print("</br></br>\n");
    print("<p align='center'>¡Felicidades ha sido registrado con éxito!</p>\n");
    print("<p align='center'> [  <a href='login.php'>Conectar</a>  ]</p>\n");
    
} else {

    print("<br><br>\n");
    print("<p class= 'parrafocentrado'>Para registrarse ingrese sus datos.</p>\n");
    print("</br></br>");
    print("<form class='entrada' name='login' action='register.php' method='POST'>\n");
    print("<p><label class='etiqueta-entrada'>Nombre:</label>\n");
    print("   <input type='text' name='nombre' size='15' required></p>\n");
    print("<p><label class='etiqueta-entrada'>Apellido:</label>\n");
    print("   <input type='text' name='apellido' size='15' required></p>\n");
    print("<p><label class='etiqueta-entrada'>Usuario/Correo:</label>\n");
    print("   <input type='text' name='usuario' size='15' required></p>\n");
    print("<p><label class='etiqueta-entrada'>Clave:</label>\n");
    print("   <input type='password' name='clave' size='15' required></p>\n");
    print("</br>");
    print("<p><input type='submit' name='registrar' value='Registrarse'</p>\n");
    print("</form>\n");
    print("<p align='center'> [  <a href='dashboard.php'>Regresar</a>  ]</p>\n");
}

?>

<body>