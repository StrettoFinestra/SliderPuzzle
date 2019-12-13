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
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

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
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Apellido</h2>
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row tm-white-box-margin-b">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Usuario</h2>
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Clave</h2>
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="pull-xs-right tm-submit-btn">Actualizar</button>

                        </div>
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 5 Contact Us -->
                <li id="about">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                            <div class="tm-contact-page">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Say hello to us!</h2>
                                                <p class="tm-text">Pellentesque euismod, sem nec euismod interdum, odio elit venenatis est, gravida aliquet velit velit a ex. In luctus orci et orci lobortis, quis sagittis nibh laoreet.</p>

                                                <!-- contact form -->
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div>

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>

                                                </form>
                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">794 Old Street 12120, San Francisco, CA</h2>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div> <!-- .cd-full-width -->
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