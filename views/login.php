<?php
session_start();

//Validación si se hizo submit al formulario
if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])) {

    //Asignación de credenciales enviadas por el usuario en variables de trabajo
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    //Se extraen los dos primeros carácteres del usuario
    $salt = substr($usuario, 0, 2);
    //print ($salt);

    //Se crea una encriptación en base a los dos carácteres extraídos anteriormente
    $clave_crypt = crypt($clave, $salt);
    //print ($clave_crypt);

    //Se importa clase usuarios

    require_once("../class/usuarios.php");

    //Se instancia un objeto de la clase
    $obj_usuarios = new usuarios();

    //Se envían datos obtenidos previamente a la función
    $usuario_validado = $obj_usuarios->validar_usuario($usuario, $clave_crypt);

    //Usuario validado es un arreglo con el resultado de la consulta

    //Para cada índice del arreglo principal se recorrerá, como retorna una fila, se hará una sola vez
    foreach ($usuario_validado as $array_resp) {
        //Se recorre el arreglo y la variable de trabajo $array_resp obtiene la posición inicial del arreglo
        //Se recorre nuevamente y la variable de trabajo captura el número de registros que devolvió count
        foreach ($array_resp as $value) {
            $nfilas = $value;
        }
    }

    //Si al menos existe un registro en la db con los parámetros registrados, se asigna una variable de sesión
    //con el usuario
    if ($nfilas > 0) {

        //Se consulta db tomando de referencia usuario ingresado
        $usuario_valido = $usuario;
        $obj_usuarios = new usuarios();
        $consulta = $obj_usuarios->consultar_usuario($usuario_valido, 0);
        //print_r($consulta);
        //Se traspasa los datos a un arreglo y se inicializan variables de sesión
        $obj_usuarios2 = new usuarios();
        $datos_usr = $obj_usuarios2->fetch_usr_data($consulta);

        //print_r($_SESSION);
    }
}
?>

<?php
//Header
include("master/header.php");
?>

<body>

    <?php
    //Sesión iniciada
    if (isset($_SESSION['usuario_valido'])) {
        header('Location: dashboard.php');
        ?>

    <?php

        //Intento de entrada fallido
    } else if (isset($usuario)) {
        //Redirect Unauthenticated User
        header('Location: rejected.php');
    }

    //Sesión no iniciada
    else {
        ?>

        <div class="form-area">
            <h3>Login</h3>
            <form action="login.php">
                <p>Usuario/E-mail</p>
                <input type="text" name="usuario" required placeholder="Ingrese su usuario o E-mail">
                <p>Contraseña</p>
                <input type="password" name="clave" required placeholder="Ingrese su contraseña">
                <input type="submit" value="Entrar">
                <div align="center">
                    <a href="register.php">Registrarse</a>
                    <p></p>
                    <a href="mailto:aalmengor1@cableonda.net">Olvíde mi contraseña</a>
                </div>
            </form>
        </div>

    <?php
    }
    ?>

    <?php
    //Footer
    //include("master/footer.php");
    ?>

    <!--Multimedia-->

    <?php
    //Video Controller
    include("master/videocontroller.php");
    ?>

    <?php
    //Music Controller
    include("master/soundcontroller.php");
    ?>

    <!--Multimedia-->

</body>

</html>