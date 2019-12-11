<?php
session_start();

//Validación si se hizo submit al formulario
if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])){
    
    //Asignación de credenciales enviadas por el usuario en variables de trabajo
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    //Se extraen los dos primeros carácteres del usuario
    $salt = substr ($usuario, 0, 2);
    //print ($salt);

    //Se crea una encriptación en base a los dos carácteres extraídos anteriormente
    $clave_crypt = crypt ($clave, $salt);
    //print ($clave_crypt);
    
    //Se importa clase usuarios

    require_once("class/usuarios.php");

    //Se instancia un objeto de la clase
    $obj_usuarios = new usuarios();

    //Se envían datos obtenidos previamente a la función
    $usuario_validado = $obj_usuarios->validar_usuario($usuario, $clave_crypt);

    //Usuario validado es un arreglo con el resultado de la consulta

    //Para cada índice del arreglo principal se recorrerá, como retorna una fila, se hará una sola vez
    foreach ($usuario_validado as $array_resp){
        //Se recorre el arreglo y la variable de trabajo $array_resp obtiene la posición inicial del arreglo
        //Se recorre nuevamente y la variable de trabajo captura el número de registros que devolvió count
        foreach ($array_resp as $value){
            $nfilas = $value;
        }
    }

    //Si al menos existe un registro en la db con los parámetros registrados, se asigna una variable de sesión
    //con el usuario
    if ($nfilas > 0){
        
        //Se consulta db tomando de referencia usuario ingresado
        $usuario_valido = $usuario;
        $obj_usuarios = new usuarios();
        $consulta = $obj_usuarios->consultar_usuario($usuario_valido,0);
        //print_r($consulta);
        //Se traspasa los datos a un arreglo y se inicializan variables de sesión
        $obj_usuarios2 = new usuarios();
        $datos_usr = $obj_usuarios2->fetch_usr_data($consulta);

        //print_r($_SESSION);
    }
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>Laboratorio 14 -Login al sitio de Noticias</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
<!--
<video id="vid" video autobuffer autoplay loop>
  <source id="mp4" src="resources/videos/cosmos.mp4" type="video/mp4">
</video>
-->

<?php
    //Sesión inciada
    if (isset($_SESSION['usuario_valido'])){
        header('Location: dashboard.php');
?>
    
    <?php

    //Intento de entrada fallido
    }else if (isset ($usuario))
    {
        print ("<br><br>\n");
        print ("<p align='center'>Acceso no autorizado</p>\n"); // ¿Por qué print y el carácter especial "\n"?
        print ("<p align='center'>[ <a href='login.php'>Conectar</a> ] </p>\n");
    }

     //Sesión no iniciada
     else
     {
        print("<br><br>\n");
        print("<p class= 'parrafocentrado'>Esta zona tiene el acceso restringido.<br> " .
             "Para entrar debe identificarse</p>\n");
        print("<form class='entrada' name='login' action='login.php' method='POST'>\n");
        print("<p><label class='etiqueta-entrada'>Usuario:</label>\n");
        print("   <input type='text' name='usuario' size='15'></p>\n");
        print("<p><label class='etiqueta-entrada'>Clave:</label>\n");
        print("   <input type='password' name='clave' size='15'></p>\n");
        print("<p><input type='submit' value='Entrar'</p>\n");
        print("</form>\n");

        print ("<p class='parrafocentrado'><b>Nota:</b> Si tiene problemas" .
             " para entrar <br>Pongase en contacto con el " . "<a href='mailto:webmaster@localhost'>administrador</a> del sitio.</p>\n");
        print ("<p class='parrafocentrado'>Si desea registrarse acceda a este enlace: 
              <a href='register.php'>Registrarse</a></p>\n");
    }
    ?>
    </body>
    </html>