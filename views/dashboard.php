<?php
session_start();
//Header
include("master/header.php");
?>

<body>

    <?php
    if (isset($_SESSION['usuario_valido'])) {
        ?>

        <!-- Content -->
        <div class="cd-hero">

            <!--Navigation-->
            <?php
                include("master/navigation.php");
                ?>

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li id="cosmos" class="selected">
                    <?php
                        //Se inserta página
                        require_once("cosmosgallery.php");
                        ?>
                </li>

                <!-- Page 2 Gallery Two -->
                <li id="top10">
                    <?php
                        //Se inserta página
                        require_once("top10.php");
                        ?>
                </li>

                <!-- Page 3 Gallery Three -->
                <li id="history">
                    <?php
                        //Se inserta página
                        require_once("history.php");
                        ?>
                </li>

                <!-- Page 4 About -->
                <li id="profile">
                    <?php
                        //Se inserta página
                        require_once("profile.php");
                        ?>
                </li>

                <!-- Page 5 Contact Us -->
                <li id="about">
                    <?php
                        //Se inserta página
                        require_once("about.php");
                        ?>
                </li>
            </ul> <!-- .cd-hero-slider -->

            <?php
                //Footer
                include("master/footer.php");
                ?>

        </div> <!-- .cd-hero -->

    <?php

        //load JS files and animation
        include("master/loadscripts.php");

        //Multimedia - Sound Controller
        include("master/soundcontroller.php");
    } else {
        //Redirect Unauthenticated User
        header('Location: rejected.php');
    }
    ?>

</body>

</html>