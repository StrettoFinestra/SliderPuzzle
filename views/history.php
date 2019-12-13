<?php
//Header
include("master/header.php");
?>

<!--Clases necesarias del Plug-In-->
<div class="cd-full-width">
    <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="3">

        <script type="text/javascript">
            $(document).ready(function() {
                $('#grid').DataTable({
                    "pageLength": 5,
                    "lengthMenu:": [5, 10, 20, 50],
                    "order": [
                        [0, "asc"]
                    ],
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ viajes por página.",
                        "zeroRecords": "No existen resultados en su búsqueda",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(Buscado entre _MAX_ registros en total)",
                        "search": "Buscar: ",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                    }
                });

                // $("*").css("font-family", "arial").css('font-size', '12px');
            });
        </script>

        <?php

        require_once("../class/reports.php");
        //Se instancia un nuevo objeto de la clase noticia
        $obj_report = new reports();
        $nfilas = 0;

        //Se llama al método consultar_history el cuál retorna los datos de la DB estructurados en una matriz bidimensional asociativa en una variable llamada $history
        $history = $obj_report->consultar_resultados_usuario($_SESSION['id_usuario']);
        //print_r($history);

        //Cuenta la cantidad de filas
        if (is_array($history)) {
            $nfilas = count($history);
        }
        //Si se retornan datos se imprime la tabla
        if ($nfilas > 0) {
            ?>

            <div class="row tm-white-box-margin-b">

                <div class="col-xs-12">
                    <div class="tm-flex">
                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                            <h2 class="tm-text-title">Mis Viajes</h2>
                            <p class="tm-text"><span class="tm-white">Da seguimiento a tus viajes y con buenos resultados ¡puedes desbloquear premios increíbles!.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tm-white-box-margin-b">

                <div class="col-xs-12">
                    <div class="tm-flex">
                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                            <h2 class='font-weight-bold mb-5'>Historial de Viajes</h2>
                            <style>
                                .table-hover tbody tr:hover td,
                                .table-hover tbody tr:hover th {
                                    background-color: #7C1566;
                                }
                            </style>
                            <table id='grid' class='table table table-hover table-bordeless' cellspacing='0'>
                                <thead style='text-align: center; color: white; background-color: #CC483C;'>
                                    <tr text-center>
                                        <th>Usuario</th>
                                        <th>Tiempo</th>
                                        <th>Movimientos</th>
                                        <th>Dificultad</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($history as $resultado) {
                                            print("     <tr text-center>\n");
                                            print("         <td text-center>" . $resultado['usuario'] . "</td>\n");
                                            print("         <td text-center>" . $resultado['tiempo'] . "</td>\n");
                                            print("         <td text-center>" . $resultado['movimientos'] . "</td>\n");
                                            print("         <td text-center>" . $resultado['dificultad'] . "</td>\n");
                                            print("         <td text-center>" . $resultado['fecha'] . "</td>\n");
                                            print("     </tr>\n");
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        } else {
            //Se muestra información de que no hay resultados disponibles
            ?>

            <div class="tm-img-gallery-info-container">
                <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">Leyendas</span></h2>
                <p class="tm-text">
                    <span class="tm-white">No hay resultados disponibles para mostrar en este momento.</span>
                    </br>
                    <span class="tm-white">Pero ¡Anímate a realizar tu primer viaje!.</span>
                </p>
                <a href="dashboard.php">
                    <button class="pull-xs-right tm-submit-btn">¡Jugar!</button>
                </a>
            </div>

        <?php
        }
        ?>
    </div>
</div> <!-- .cd-full-width -->