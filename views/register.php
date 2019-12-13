
<?php

//Header
include("master/header.php");
?>

<body id="register">

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
    
?>

    <div class="div-area">
        </br></br></br>
        <h3>Registro Exitoso</h3>
        <p>Bienvenido viajero, ¡tu aventura está por comenzar!.</p>
        </br></br>
        <a href="login.php"><button>Ingresar</button></a>
    </div>

<?php   
} else{
?>

    <div class="form-area" >
            <h3>Registro</h3>
            <form name='login' action='register.php' method='POST'>
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                <p>Apellido</p>
                <input type="text" name="apellido" placeholder="Ingrese su apellido" required>
                <p>Usuario/Correo</p>
                <input type="text" name="usuario" placeholder="Ingrese su usuario o correo" required>
                <p>Contraseña</p> 
                <input type="password" name="clave" placeholder="Ingrese su contraseña" required>
                <input type="submit" name="registrar" value="Registrar">
                <div align="center">
                <a href="login.php">Regresar</a>
                </div>
            </form>
    </div>

<?php
}
?>

</body>
</html>