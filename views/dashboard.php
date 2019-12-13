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
                                        <p class="tm-text">Hecha un vistazo a la galería de astros, y elije uno que desees conocer y ¡Comienza el Viaje!.
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
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two">
                                    <!-- Gallery Two pop up connected with JS code below -->

                                    <div class="tm-img-gallery-info-container">
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">Multi Two Gallery</span></h2>
                                        <p class="tm-text"><span class="tm-white">Etiam gravida et elit vitae maximus. Pellentesque fringilla felis id feugiat consectetur. Sed quis commodo leo. Nunc aliquet auctor nunc, sit amet pharetra metus commodo ut.</span>
                                        </p>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-12.jpg">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Page 3 Gallery Three -->
                <li id="history">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three">
                                    <!-- Gallery Two pop up connected with JS code below -->

                                    <div class="tm-img-gallery-info-container">
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">Third Multi Gallery</span></h2>
                                        <p class="tm-text"><span class="tm-white">Donec dapibus dui sed nisi fermentum, a sollicitudin lorem fringilla. Integer nec pharetra turpis, eu sagittis ipsum. Cras dignissim lacus dolor.</span>
                                        </p>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="http://localhost/ProyectoFinal/SliderPuzzle/resources/images/spacemancave.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Picture <span>One</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-01.jpg">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div> <!-- .tm-img-gallery-container -->
                        </div>
                    </div>
                </li>

                <!-- Page 4 About -->
                <li id="profile">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">
                            <div class="row tm-white-box-margin-b">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                            <h2 class="tm-text-title">About our team</h2>
                                            <p class="tm-text">Quisque efficitur dui id turpis cursus, quis faucibus nulla malesuada. Nulla consectetur eget quam id pulvinar. Nulla facilisi. Curabitur rhoncus lacinia tincidunt. Etiam velit dui, rutrum vel finibus ac, commodo at mauris. Donec vitae diam ac tellus consectetur interdum eu non odio.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row tm-white-box-margin-b">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Nulla vitae magna</h2>
                                            <p class="tm-text">Aliquam porttitor tortor at nisi fermentum, ac porta arcu vulputate. Nunc lobortis ipsum sapien, non ultrices odio tempus varius. In posuere dolor non sagittis ultrices.</p>
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Vivamus aliquam turpis</h2>
                                            <p class="tm-text">Integer quis leo pretium, cursus nisl non, placerat magna. Sed efficitur massa id magna eleifend tristique. Duis vitae turpis dapibus, facilisis magna ut, pretium metus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Curabitur at sem</h2>
                                            <p class="tm-text">Curabitur ac bibendum augue, a convallis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ultrices placerat arcu.</p>
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Aliquam laoreet velit</h2>
                                            <p class="tm-text">Proin sagittis mauris dolor, vel efficitur lectus dictum nec. Sed ultrices placerat arcu, id malesuada metus cursus suscipit. Donex quis consectetur ligula. Thank you.</p>
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title">Suspendisse facilisis</h2>
                                            <p class="tm-text">Sed ultrices placerat arcu, id malesuada metus cursus suscipit. Donex quis consectetur ligula. Proin accumsan eros id nisi porttitor, a facilisis quam cursus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                <!-- google map goes here -->
                                                <div id="google-map"></div>
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