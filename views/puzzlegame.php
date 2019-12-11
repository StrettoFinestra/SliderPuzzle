<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">

<head>
    <title>PuzzleGame</title>
    <link rel="stylesheet" type="text/css" href="css/gameinterface.css">
    <link rel="stylesheet" type="text/css" href="css/sliderpuzzle.css">
</head>

<body onload="keyGenerator()">

    <script src="js/gamecontroller.js"></script>

    <?php
    if (isset($_SESSION['usuario_valido'])) {

        //Variables Declaration
        $id_usuario = $_SESSION['id_usuario'];
        $date = gmdate('d-m-y', time());

        ?>

        <center>
            </br></br>
            </br></br>

            <!--Superior Keypad-->
            <button id="Hackerman" class="Hacker" onClick="hackerMan();">Hackerman <span class="tooltiptext">Play Like a
                    Boss!</span></button>
            </br></br>

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
            <button id="output">00:00:00</button>
            <button id="startgame" class="enabledbutton" onClick="startGame();">Start</button>
            <button id="newgame" class="disabledbutton" onClick="newGame();"disabled>New Game</button>
            <p id="movements">0</p>
            <p id="date"></p>
        </center>

    <?php

    } else {
        print("<br><br>\n");
        print("<p align='center'>Acceso no autorizado</p>\n");
        print("<p align='center'> [ <a href='login.php' target='_top'>Conectar</a> ]</p>\n");
    }
    ?>

    <!--Win Modal-->
    <div id="my-modal" class="modal" align="center">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onClick="closeModal();">&times;</span>
                <br>
            </div>
            <div class="modal-body">
                <h2>¡Felicidades has Ganado!</h2>
                <br>
                <p><i>"I have failed again and again in my life, that's why I've achieved success."</i></p>
                <p><i><b>-Michael Jordan</b></i></p>
                <p id="resultado"><b></b></p>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>

    <!--Hackerman Win Modal-->
    <div id="my-modal-hackerman" class="modal" align=center>
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onClick="closeModal();">&times;</span>
                <br>
            </div>
            <div class="modal-body">
                <h2>YOU WON AS A HACKERMAN!</h2>
                <br>
                <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/176/251/4d7.png" alt="Mr Robot" height="500" width="500">
                <p id="resultadoHackerman"><b></b></p>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>

    <!--Background Music-->
    <audio id="StrangersThings" src="https://broalmen.000webhostapp.com/Stranger%20Things%20Theme%20Song%20(C418%20REMIX).mp3" loop></audio>
    <audio id="MineSweeper" src="https://broalmen.000webhostapp.com/Main%20Theme%20-%20Microsoft%20Minesweeper.mp3" autoplay loop></audio>

</body>

</html>