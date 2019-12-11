<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html LANG="es">

<head>
    <title>Ejemplo DataTable JQuery</title>
    <link rel="stylesheet" type="text/css" href="../resources/library/css/jquery.dataTables.min.css">
    <Script type="text/javascript" language="javascript" src="../resources/library/jquery-3.1.1.js"></script>
    <Script type="text/javascript" language="javascript" src="../resources/library/jquery.dataTables.min.js"></script>
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

    <h1>Consulta de Noticias</h1>
    <?php

    require_once("class/noticias.php");
    //Se instancia un nuevo objeto de la clase noticia
    $obj_noticia = new noticia();

    //Se llama al método consultar_noticias el cuál retorna los datos de la DB estructurados en una matriz bidimensional asociativa en una variable llamada $noticias
    $noticias = $obj_noticia->consultar_noticias();
    //print_r($noticias);

    //Cuenta la cantidad de filas
    $nfilas = count($noticias);
    //echo "Nfilas: ".$nfilas;

    //Si se retornan datos se imprime la tabla
    if ($nfilas > 0) {

        print("<table id='grid' class='display' cellspacing='0'>\n");
        print("<thead>");
        print("<tr>\n");
        print("<th>Título</th>\n");
        print("<th>Texto</th>\n");
        print("<th>Categoría</th>\n");
        print("<th>Fecha</th>\n");
        print("<th>Imagen</th>\n");
        print("</tr>\n");
        print("</thead>");
        print("<tbody>");

        foreach ($noticias as $resultado) {
            print("<tr>\n");
            print("<td>" . $resultado['titulo'] . "</td>\n");
            print("<td>" . $resultado['texto'] . "</td>\n");
            print("<td>" . $resultado['categoria'] . "</td>\n");
            print("<td>" . date("j/n/y", strtotime($resultado['fecha'])) . "</td>\n");

            if ($resultado['imagen'] != "") {
                print("<td><a target='_blank' href='img/" . $resultado['imagen'] .
                    "'><img border='0' src='img/iconotexto.gif'></a></td>\n");
            } else {
                print("<td>&nbsp;</td>\n");
            }
            print("</tr>\n");
        }
        print("</tbody>");
        print("</table>\n");
    } else {
        print("No hay noticias disponibles.");
    }
    ?>
</body>

</html>