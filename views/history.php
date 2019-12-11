<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html LANG="es">

<head>
    <title>Ejemplo DataTable JQuery</title>
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <Script type="text/javascript" language="javascript" src="../js/jquery-3.1.1.js"></script>
    <Script type="text/javascript" language="javascript" src="../js/jquery.dataTables.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#grid').DataTable({
                "lengthMenu:": [5, 10, 20, 50],
                "order": [
                    [0, "asc"]
                ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registrados por página",
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

            $("*").css("font-family", "arial").css('font-size', '12px');
        });
    </script>

    <h1>Historial de Resultados</h1>
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

        print("<table id='grid' class='display' cellspacing='0'>\n");
        print("<thead>");
        print("<tr>\n");
        print("<th>Usuario</th>\n");
        print("<th>Tiempo</th>\n");
        print("<th>Movimientos</th>\n");
        print("<th>Dificultad</th>\n");
        print("<th>Fecha</th>\n");
        print("</tr>\n");
        print("</thead>");
        print("<tbody>");

        foreach ($history as $resultado) {
            print("<tr>\n");
            print("<td>" . $resultado['usuario'] . "</td>\n");
            print("<td>" . $resultado['tiempo'] . "</td>\n");
            print("<td>" . $resultado['movimientos'] . "</td>\n");
            print("<td>" . $resultado['dificultad'] . "</td>\n");
            print("<td>" . $resultado['fecha'] . "</td>\n");
            print("</tr>");
        }
        print("</tbody>");
        print("</table>\n");
        print("<p align='center'> [  <a href='dashboard.php'>Regresar</a>  ]</p>\n");
    } else {
        print("<b>No hay resultados disponibles para mostrar pero ¡Puedes ser el primero!.</b>");
        print("<hr>");
        print("<p align='center'> [  <a href='dashboard.php'>Regresar</a>  ]</p>\n");
    }
    ?>
</body>

</html>