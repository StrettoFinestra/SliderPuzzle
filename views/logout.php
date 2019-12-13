<?php
    session_start();
    //Header
    include("master/header.php");
?>

<body id="logout">

<?php

    //Se valida que exista una variable de sesión, si existe se cierra la sesión
    if (isset($_SESSION['usuario_valido'])){
        session_destroy();
    ?>

    <!--Modal-->
        <div class="div-area">
        </br></br></br>
        <h3>Arrivederci</h3>
        <p>¡Hasta un encuentro más, en la próxima partida!</p>
        </br></br>
        <a href="login.php"><button>Ingresar</button></a>
        </div>
    <!--Modal-->

    <?php
    }
    //De otro modo se muestra el mensaje de que no existía una sesión
    else{
        header('Location: rejected.php');
    }
?>
</body>
</html>