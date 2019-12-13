<?php
$page = $_SERVER['PHP_SELF'];
$counter = strlen($page);
$current_pag = substr($page, 34, $counter);
//print($current_pag);

//Video Controller
switch ($current_pag){

    case "cosmos.php":
        echo ('<!--Background Video -->
        <div class="fullscreen-bg">
                <video class="fullscreen-bg__video" video autobuffer autoplay loop poster="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/space_traveling.jpg">
                    <source id="mp4" src="http://localhost/ProyectoFinal/SliderPuzzle/resources/videos/starstravel.mp4" type="video/mp4">
                </video>
            </div>
        <!--Background Video -->');
        break;
    default:
        echo ('<!--Background Video -->
        <div class="fullscreen-bg">
                <video class="fullscreen-bg__video" video autobuffer autoplay loop poster="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/space_traveling.jpg">
                    <source id="mp4" src="http://localhost/ProyectoFinal/SliderPuzzle/resources/videos/startraveling.mp4" type="video/mp4">
                </video>
            </div>
        <!--Background Video -->');
    break;

}
