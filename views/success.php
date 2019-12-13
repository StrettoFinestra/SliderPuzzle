<?php
    session_start();
    //Header
    include("master/header.php");
?>

<body id="success">

<?php

    //Se valida que exista una variable de sesión, si existe se cierra la sesión
    if (isset($_SESSION['usuario_valido'])){
    ?>

    <!--Modal-->
        <div class="div-area">
        </br></br></br>
        <h3>Ya era hora de un cambio</h3>
        <p>¡Felicidades se han actualizado los cambios con éxito!</p>
        </br></br>
        <a href="dashboard.php"><button>Regresar</button></a>
        </div>
    <!--Modal-->

    <?php
    }
    //De otro modo se muestra el mensaje de que no existía una sesión
    else{
        //Redirect Unauthenticated User
        header('Location: rejected.php');
    }
?>
</body>
</html>