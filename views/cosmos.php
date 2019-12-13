<?php
session_start();
//Header
include("master/header.php");
?>

<body onload="keyGenerator()">

    <script src="../js/gamecontroller.js"></script>

    <?php
    if (isset($_SESSION['usuario_valido'])) {

  ?>
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
