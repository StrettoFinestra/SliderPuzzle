<?php
$page = $_SERVER['PHP_SELF'];
$counter = strlen($page);
$current_pag = substr($page, 34, $counter);
//print($current_pag);

//Sound Controller
switch ($current_pag) {

    case "cosmos.php":
        echo ('<!--Background Music-->
        <audio id="horizon" src="http://localhost/ProyectoFinal/SliderPuzzle/resources/music/horizon.mp3" autoplay loop></audio>
        <!--Background Music-->');
        break;
    default:
        echo ('<!--Background Music-->
        <audio id="horizon" src="http://localhost/ProyectoFinal/SliderPuzzle/resources/music/horizon.mp3" autoplay loop></audio>
        <!--Background Music-->');
        break;
}
