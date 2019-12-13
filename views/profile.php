<?php
//Se inicia la sesión


if (isset($_POST['actualizar'], $_POST)) {
    session_start();
    //print_r($_REQUEST);
    //print_r($_SESSION);
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

    require_once("../class/usuarios.php");

    //Se realiza actualización
    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->actualizar_usuario($id, $nombre, $apellido, $usuario, $clave_crypt);

    //Se actualiza datos de sesión
    $obj_usuarios2 = new usuarios();
    $consulta = $obj_usuarios2->consultar_usuario($id, 1);
    $datos_usr = $obj_usuarios2->fetch_usr_data($consulta);

    //Si se dio al botón actualizar se muestra mensaje de confirmación de cambios~
    //Redirect Unauthenticated User
    header('Location: success.php');
    ?>

<?php
} else {

    //Inicialización de variables de sesión

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $usuario = $_SESSION['usuario_valido'];
    ?>
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">
            <form name='profile' action='profile.php' method='POST'>
                <div class="row tm-white-box-margin-b">

                    <div class="col-xs-12">
                        <div class="tm-flex">
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                <h2 class="tm-text-title">Biografía</h2>
                                <p class="tm-text">Este tu espacio del basto universo para escribir una breve bítacora de tu último viaje
                                    o contarle a los demás un poco de ti, también puedes actualizar tu "Dog Tag".
                                    </br>
                                    <span class="tm-text"><b>Nota: Recuerda ingresar tu contraseña antes de actualizar, es solo una buena práctica de seguridad.</b></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tm-white-box-margin-b">
                    <div class="col-xs-12">
                        <div class="tm-flex">
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                <h2 class="tm-text-title">Nombre</h2>
                                <?php
                                    print("<input type='text' name='nombre' class='form-control' value='$nombre' placeholder='Ingrese su nombre' required/>");
                                    ?>
                            </div>
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                <h2 class="tm-text-title">Apellido</h2>
                                <?php
                                    print("<input type='text' name='apellido' class='form-control' value='$apellido' placeholder='Ingrese su apellido' required/>");
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tm-white-box-margin-b">
                    <div class="col-xs-12">
                        <div class="tm-flex">
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                <h2 class="tm-text-title">Usuario</h2>
                                <?php
                                    print("<input type='text' name='usuario' class='form-control' value='$usuario' placeholder='Ingrese su usuario' required/>");
                                    ?>
                            </div>
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                <h2 class="tm-text-title">Clave</h2>
                                <?php
                                    print("<input type='password' name='clave' class='form-control' placeholder='Ingrese su clave' required/>");
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="actualizar" type="submit" class="pull-xs-right tm-submit-btn" value="true">Actualizar</button>
                </form>
                <a href="logout.php">
                    <button class="pull-xs-right tm-submit-btn">Cerrar Sesión</button>
                </a>
        </div>
    </div> <!-- .cd-full-width -->
<?php
}
?>

<body>