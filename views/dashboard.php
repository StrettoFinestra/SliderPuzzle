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
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">

                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                    <!-- Gallery One pop up connected with JS code below -->
                                    <div class="tm-img-gallery-info-container">
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">Hacía el Infinito y Más Allá...</span></h2>
                                        <p class="tm-text">Hecha un vistazo a la galería de astros, elije uno que te llame la atención y ¡Comienza el Viaje!.
                                        </p>
                                    </div>

                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="cosmos.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="cosmos.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="cosmos.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="cosmos.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
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