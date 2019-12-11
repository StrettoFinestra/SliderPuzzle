<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<h1>Perfil</h1>
<?php

if (isset($_POST['actualizar'], $_POST)) {

    //Recuperación de datos del formulario y de la sesión e inicialización de variables
    $id = $_SESSION['id_usuario'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    //Se extraen los dos primeros carácteres del usuario
    $salt = substr($usuario, 0, 2);
    $clave_crypt = crypt($clave, $salt);
    //print ($clave_crypt);

    require_once('class/usuarios.php');

    //Se realiza actualización
    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->actualizar_usuario($id, $nombre, $apellido, $usuario, $clave_crypt);
    
    //Se actualiza datos de sesión
    $obj_usuarios2 = new usuarios();
    $consulta = $obj_usuarios2->consultar_usuario($id,1);
    $datos_usr = $obj_usuarios2->fetch_usr_data($consulta);
    print("</br></br>\n");
    print("<p align='center'>¡Felicidades se han actualizado los cambios con éxito!</p>\n");
    print("<p align='center'> [  <a href='profile.php'>Regresar</a>  ]</p>\n");

} else {

    //Inicialización de variables de sesión

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $usuario = $_SESSION['usuario_valido'];

    print("<br><br>\n");
    print("<form class='entrada' name='login' action='profile.php' method='POST'>\n");
    print("<p><b>Nota: </b>Por seguridad debes confirmar tu contraseña antes de hacer algún cambio.</p>");
    print("<p><label class='etiqueta-entrada'>Nombre:</label>\n");
    print("   <input type='text' name='nombre' size='15' required value='$nombre' ></p>\n");
    print("<p><label class='etiqueta-entrada'>Apellido:</label>\n");
    print("   <input type='text' name='apellido' size='15' required value='$apellido'></p>\n");
    print("<p><label class='etiqueta-entrada'>Usuario/Correo:</label>\n");
    print("   <input type='text' name='usuario' size='15' required value='$usuario'></p>\n");
    print("<p><label class='etiqueta-entrada'>Clave:</label>\n");
    print("   <input type='password' name='clave' size='15' required></p>\n");
    print("<p><input type='submit' name='actualizar' value='Guardar Cambios'</p>\n");
    print("</form>\n");
    print("<p align='center'> [  <a href='login.php'>Regresar</a>  ]</p>\n");
}

?>

<body>