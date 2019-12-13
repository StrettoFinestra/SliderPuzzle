<?php
session_start();
//Header
include("master/header.php");
?>

<body onload="keyGenerator()">

    <script src="../js/gamecontroller.js"></script>

    <?php
    if (isset($_SESSION['usuario_valido'])) {

        //Si el usuario gano, se registra resultado
        if (isset($_REQUEST['aceptar'])) {

            //Asignación de credenciales enviadas por el usuario en variables de trabajo
            $id_usuario = $_SESSION['id_usuario'];
            $tiempo = $_REQUEST['user_time'];
            $movimientos = $_REQUEST['user_movements'];
            $fecha = $_REQUEST['current_time'];

            require_once("../class/usuarios.php");
            $obj_usuarios = new usuarios();
            $usuario_validado = $obj_usuarios->registrar_resultado($id_usuario, $tiempo, $movimientos, $fecha);
            header("Refresh:0");
        }

        ?>

        <center>

            </br></br>
            </br></br>

            <!--Superior Keypad-->
            <button id="output">00:00:00</button>
            <button id="Hackerman" class="Hacker" onClick="hackerMan();">Hackerman <span class="tooltiptext">Play Like a
                    Boss!</span></button>
            </br></br>

            <!--PuzzleBoard-->
            <div id="table" style="display: table;" class="disabletable">
                <div id="row1" style="display: table-row;">
                    <div id="cell11" class="tile1 disabletile" onClick="clickTile(1,1);"></div>
                    <div id="cell12" class="tile2 disabletile" onClick="clickTile(1,2);"></div>
                    <div id="cell13" class="tile3 disabletile" onClick="clickTile(1,3);"></div>
                </div>
                <div id="row2" style="display: table-row;">
                    <div id="cell21" class="tile4 disabletile" onClick="clickTile(2,1);"></div>
                    <div id="cell22" class="tile5 disabletile" onClick="clickTile(2,2);"></div>
                    <div id="cell23" class="tile6 disabletile" onClick="clickTile(2,3);"></div>
                </div>
                <div id="row3" style="display: table-row;">
                    <div id="cell31" class="tile7 disabletile" onClick="clickTile(3,1);"></div>
                    <div id="cell32" class="tile8 disabletile" onClick="clickTile(3,2);"></div>
                    <div id="cell33" class="tile9 disabletile" onClick="clickTile(3,3);"></div>
                </div>
            </div>

            </br>

            <!--Bottom Keypad-->
            <a href="dashboard.php">
            <button id="regresar" class="enabledbutton">Regresar</button>
            </a>
            <button id="startgame" class="enabledbutton" onClick="startGame();">Start</button>
            <button id="newgame" class="disabledbutton" onClick="newGame();" disabled>New Game</button>

        </center>

        <!--Modales-->
        <?php
            //Modals
            include("master/modals.php");
        ?>

        <!--Modales-->

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

    <?php
    } else {
        //Redirect Unauthenticated User
        header('Location: rejected.php');
    }
    ?>

</body>

</html>